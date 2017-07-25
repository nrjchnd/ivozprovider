<?php
namespace Ivoz\Domain\Service\Company;

use Core\Domain\Service\EntityPersisterInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\Company\Company;
use Ivoz\Domain\Model\Company\CompanyDTO;

/**
 * Class SanitizeEmptyValues
 * @package Ivoz\Domain\Service\Company
 * @lifecycle company.pre_persist
 */
class SanitizeEmptyValues implements LifecycleEventHandlerInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

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
        $isNew = $this->em->contains($entity);
        if (!$isNew) {
            return;
        }

        /**
         * @var $dto CompanyDTO
         */
        $dto = $entity->toDTO();

        if (!$dto->getNif()) {
            $dto->setNif('12345678-Z');
        }
        if (!$dto->getPostalAddress()) {
            $dto->setPostalAddress('Postal address');
        }
        if (!$dto->getPostalCode()) {
            $dto->setPostalCode('PC');
        }
        if ($dto->getTown()) {
            $dto->setTown('Town');
        }
        if (!$dto->getCountry()) {
            $dto->setCountry('Country');
        }
        if (!$dto->getProvince()) {
            $dto->setProvince('Province');
        }
        if (!$dto->getDefaultTimezoneId()) {
            $dto->setDefaultTimezoneId(
                // @todo create a shortcut
                $entity->getBrand()->getDefaultTimezone()->getId()
            );
        }
        if (!$dto->getCountryId()) {
            $dto->setCountryId(70);
        }
        if (!$dto->getLanguageId()) {
            $dto->setLanguageId(
                // @todo create a shortcut
                $entity->getBrand()->getLanguage()->getId()
            );
        }
        if (!$dto->getOutboundPrefix()) {
            $dto->setOutboundPrefix('');
        }
        if (!$dto->getMediaRelaySetsId()) {
            $dto->setMediaRelaySetsId(0);
        }
        if (!$dto->getIpFilter()) {
            $dto->setIpFilter(0);
        }
        if (!$dto->getOnDemandRecord()) {
            $dto->setOnDemandRecord(0);
        }
        if (!$dto->getOnDemandRecordCode()) {
            $dto->setOnDemandRecordCode('');
        }
        if (!$dto->getAreaCode()) {
            $dto->setAreaCode('');
        }

        $this->entityPersister->persist($dto, $entity);
    }
}