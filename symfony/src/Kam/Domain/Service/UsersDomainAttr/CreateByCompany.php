<?php
namespace Kam\Domain\Service\UsersDomainAttr;

use Core\Domain\Model\EntityInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Brand\Brand;
use Ivoz\Domain\Model\Company\Company;
use Kam\Domain\Model\UsersDomainAttr\UsersDomainAttrRepository;
use Kam\Domain\Model\UsersDomainAttr\UsersDomainAttr;
use Kam\Domain\Model\UsersDomainAttr\UsersDomainAttrDTO;

/**
 * Class UpdateByBrand
 * @package Kam\Domain\Service\UsersDomainAttr
 * @lifecycle company.post_persist
 */
class CreateByCompany implements LifecycleEventHandlerInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var EntityPersisterInterface
     */
    protected $entityPersister;

    public function __construct(
        EntityManagerInterface $em,
        EntityPersisterInterface $entityPersister
    ) {
        $this->em = $em;
        $this->entityPersister = $entityPersister;
    }

    /**
     * @param Company $entity
     */
    public function execute(EntityInterface $entity)
    {
        if (!$entity->hasChanged('id')) {
            // Do nothing if this is not a new entity
            return;
        }

        // Only Create Domain Attributes if company has domain
        if ($entity->getType() !== $entity::$VPBX) {
            return;
        }

        $domainAttrDto = UsersDomainAttr::createDTO();
        $brandId = $entity->getBrand()->getId();
        /**
         * @todo setDid expects CompanyInterface and that's wrong
         */
        $domainAttrDto
            ->setDidId($entity->getDomainUsers())
            ->setName('brandId')
            ->setType('0')
            ->setValue($brandId);

        $this->entityPersister->persist($domainAttrDto);
    }
}