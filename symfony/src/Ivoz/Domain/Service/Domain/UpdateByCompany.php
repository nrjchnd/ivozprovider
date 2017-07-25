<?php
namespace Ivoz\Domain\Service\Domain;

use Ast\Domain\Model\PsAor\PsAor;
use Ast\Domain\Model\PsAor\PsAorDTO;
use Ast\Domain\Model\PsEndpoint\PsEndpoint;
use Core\Domain\Model\EntityInterface;
use Core\Domain\Service\EntityPersisterInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Company\Company;
use Ivoz\Domain\Model\Domain\Domain;
use Ivoz\Domain\Model\Domain\DomainDTO;
use Ivoz\Domain\Model\Domain\DomainInterface;
use Ivoz\Domain\Model\Domain\DomainRepository;
use Ivoz\Domain\Model\Friend\Friend;
use Ivoz\Domain\Model\Friend\FriendDTO;
use Ivoz\Domain\Model\Terminal\Terminal;

/**
 * Class UpdateByCompany
 * @package Ivoz\Domain\Service\Domain
 * @lifecycle company.post_persist
 * @todo this could be partially merged with UpdateByBrand
 */
class UpdateByCompany implements LifecycleEventHandlerInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var EntityPersisterInterface
     */
    protected $entityPersister;

    /**
     * @var DomainRepository
     */
    protected $domainRepository;

    public function __construct(
        EntityManagerInterface $em,
        EntityPersisterInterface $entityPersister,
        DomainRepository $domainRepository
    ) {
        $this->em = $em;
        $this->entityPersister = $entityPersister;
        $this->domainRepository = $domainRepository;
    }

    /**
     * @param Company $entity
     */
    public function execute(EntityInterface $entity)
    {
        $id = $entity->getId();

        /**
         * @var DomainInterface $domain
         */
        $domain = $this->domainRepository->findOneBy([
            'company' => $id,
            'PointsTo' => 'proxyusers'
        ]);

        // If domain field is filled, look for brand domains or create a new one
        if ($domain) {
            $this->updateTerminalsDomain($entity, $domain);
            $this->updateFriendsDomain($entity, $domain);
        }

        // If domain field is filled, look for brand domains or create a new one
        $domainDto = is_null($domain)
            ? Domain::createDTO()
            : $domain->toDto();

        $name = $entity->getDomainUsers();

        /**
         * @var DomainDTO $domainDto
         */
        $domainDto
            ->setDomain($name)
            ->setScope('brand')
            ->setPointsTo('proxyusers')
            ->setCompanyId($id)
            ->setDescription($entity->getName() . " proxyusers domain");

        $this->entityPersister->persist($domainDto, $domain);
    }

    private function updateTerminalsDomain(Company $company, Domain $domain)
    {
        $terminals = $company->getTerminals();

        /**
         * @var Terminal $terminal
         */
        foreach ($terminals as $terminal) {

            $terminal->setDomain($domain->getDomain());

            /**
             * @todo review that this is definned in getAstPsEndpoint
             */
            $endpoints = $terminal->getAstPsEndpoint();

            /**
             * @var PsAor $aor
             */
            $endpoint = current($endpoints);
            $aor = $endpoint->getAstPsAor();

            $aor->setContact(
                /**
                 * @todo ensure this method exists
                 */
                $terminal->getContact()
            );
        }
    }

    private function updateFriendsDomain(Company $company, Domain $domain)
    {
        $friends = $company->getFriends();

        /**
         * @var Friend $friend
         */
        foreach ($friends as $friend) {

            $friend->setDomain($domain->getDomain());

            /**
             * @todo ensure this method exists
             * @var PsEndpoint $endpoint
             */
            $endpoint = $friend->getAstPsEndpoint();

            /**
             * @var PsAor $aor
             */
            $aor = $endpoint->getAstPsAor();
            $aor->setContact(
                /**
                 * @todo ensure this method exists
                 */
                $friend->getContact()
            );
        }
    }
}