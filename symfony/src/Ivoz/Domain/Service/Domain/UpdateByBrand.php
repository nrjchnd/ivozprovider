<?php
namespace Ivoz\Domain\Service\Domain;

use Core\Domain\Model\EntityInterface;
use Core\Domain\Service\EntityPersisterInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Brand\Brand;
use Ivoz\Domain\Model\Domain\Domain;
use Ivoz\Domain\Model\Domain\DomainDTO;
use Ivoz\Domain\Model\Domain\DomainInterface;
use Ivoz\Domain\Model\Domain\DomainRepository;

/**
 * Class UpdateByBrand
 * @package Ivoz\Domain\Service\Domain
 * @lifecycle brand.post_persist
 */
class UpdateByBrand implements LifecycleEventHandlerInterface
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
     * @param Brand $entity
     */
    public function execute(EntityInterface $entity)
    {
        $id = $entity->getId();
        $name = $entity->getDomainUsers();
        $name = trim($name);

        /**
         * @var DomainInterface $domain
         */
        $domain = $this->domainRepository->fetchOneBy([
            'brand' => $id,
            'PointsTo' => 'proxyusers'
        ]);

        // Empty domain field, delete any related domain
        if (!$name) {
            $this->em->remove($domain);
            return;
        }

        // If domain field is filled, look for brand domains or create a new one
        if (is_null($domain)) {
            $domainDto = Domain::createDTO();
        } else {
            $domainDto = $domain->toDto();
        }

        /**
         * @var DomainDTO $domainDto
         */
        $domainDto
            ->setDomain($name)
            ->setScope('brand')
            ->setPointsTo('proxyusers')
            ->setBrandId($id)
            ->setDescription($entity->getName() . " proxyusers domain");


        $this->entityPersister->persist($domainDto, $domain);
    }
}