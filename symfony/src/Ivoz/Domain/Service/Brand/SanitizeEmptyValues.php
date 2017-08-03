<?php
namespace Ivoz\Domain\Service\Brand;

use Core\Domain\Service\EntityPersisterInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Brand\Brand;
use Ivoz\Domain\Model\Brand\BrandDTO;
use Core\Domain\Model\EntityInterface;

/**
 * Class SanitizeEmptyValues
 * @package Ivoz\Domain\Service\Brand
 * @lifecycle brand.pre_persist
 */
class SanitizeEmptyValues implements LifecycleEventHandlerInterface
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
     * @param Brand $entity
     */
    public function execute(EntityInterface $entity)
    {
        $alreadyPersisted = $this->em->contains($entity);
        if ($alreadyPersisted) {
            return;
        }

        /**
         * @var $dto BrandDTO
         */
        $dto = $entity->toDTO();
        // Create sane defaults for hidden fields

//        if (!$model->hasChange('nif')) $model->setNif('12345678-Z');
//        if (!$model->hasChange('postalAddress')) $model->setPostalAddress('Postal address');
//        if (!$model->hasChange('postalCode')) $model->setPostalCode('ZIP');
//        if (!$model->hasChange('town')) $model->setTown('Town');
//        if (!$model->hasChange('country')) $model->setCountry('Country');
//        if (!$model->hasChange('province')) $model->setProvince('Province');

        if (!$dto->getDefaultTimezoneId()) {
            $dto->setDefaultTimezoneId(145);
        }

        if (!$dto->getLanguageId()) {
            $dto->setLanguageId(1);
        }

        $this->entityPersister->persist($dto, $entity);

    }
}