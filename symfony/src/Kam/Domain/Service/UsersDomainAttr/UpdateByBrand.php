<?php
namespace Kam\Domain\Service\UsersDomainAttr;

use Core\Domain\Model\EntityInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Brand\Brand;
use Kam\Domain\Model\UsersDomainAttr\UsersDomainAttrRepository;
use Kam\Domain\Model\UsersDomainAttr\UsersDomainAttr;
use Kam\Domain\Model\UsersDomainAttr\UsersDomainAttrDTO;

/**
 * Class UpdateByBrand
 * @package Kam\Domain\Service\UsersDomainAttr
 * @lifecycle brand.post_persist
 */
class UpdateByBrand implements LifecycleEventHandlerInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var DomainRepository
     */
    protected $usersDomainAttrRepository;

    public function __construct(
        EntityManagerInterface $em,
        EntityPersisterInterface $entityPersister,
        UsersDomainAttrRepository $usersDomainAttrRepository
    ) {
        $this->em = $em;
        $this->usersDomainAttrRepository = $usersDomainAttrRepository;
    }

    /**
     * @param Brand $entity
     */
    public function execute(EntityInterface $entity)
    {
        $domainName = $entity->getDomainUsers();

        if (!empty($domainName)) {

            $domainsAttr = $this->usersDomainAttrRepository->findBy([
                'did' => $domainName,
                'name' => 'brandId'
            ]);

            if (empty($domainsAttr)) {
                /**
                 * @var UsersDomainAttrDTO $domainAttrDto
                 */
                $domainAttrDto = UsersDomainAttr::createDTO();

                /**
                 * @todo setDid expects CompanyInterface and that's wrong
                 */
                $domainAttrDto
                    ->setDidId($domainName)
                    ->setName('brandId')
                    ->setType('0')
                    ->setValue($entity->getId());

                $this->entityPersister->persist($domainAttrDto);
            }
        }
    }
}