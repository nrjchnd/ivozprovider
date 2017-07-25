<?php
namespace Ivoz\Domain\Service\RoutingPatternGroup;

use Core\Domain\Model\EntityInterface;
use Core\Domain\Service\EntityPersisterInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Brand\Brand;
use Ivoz\Domain\Model\RoutingPatternGroup\RoutingPatternGroupDTO;
use Ivoz\Domain\Model\RoutingPatternGroup\RoutingPatternGroup;
use Ivoz\Domain\Model\Country\Country;
use Ivoz\Domain\Model\RoutingPatternGroup\RoutingPatternGroupRepository;
use Ivoz\Domain\Model\Country\CountryRepository;
use Ivoz\Domain\Model\RoutingPattern\RoutingPatternDTO;
use Ivoz\Domain\Model\RoutingPattern\RoutingPattern;
use Ivoz\Domain\Model\RoutingPatternGroupsRelPattern\RoutingPatternGroupsRelPattern;
use Ivoz\Domain\Model\RoutingPatternGroupsRelPattern\RoutingPatternGroupsRelPatternDTO;

/**
 * Class UpdateByBrand
 * @package Ivoz\Domain\Service\RoutingPatternGroup
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
     * @var RoutingPatternGroupRepository
     */
    protected $routingPatternGroupRepository;

    /**
     * @var CountryRepository
     */
    protected $countryRepository;

    public function __construct(
        EntityManagerInterface $em,
        EntityPersisterInterface $entityPersister,
        RoutingPatternGroupRepository $routingPatternGroupRepository,
        CountryRepository $countryRepository
    ) {
        $this->em = $em;
        $this->entityPersister = $entityPersister;
        $this->routingPatternGroupRepository = $routingPatternGroupRepository;
        $this->countryRepository = $countryRepository;
    }

    /**
     * @param Brand $entity
     */
    public function execute(EntityInterface $entity)
    {
        $isNew = $this->em->contains($entity);
        if (!$isNew) {
            return;
        }
        $countries = $this->countryRepository->findAll();

        /**
         * @var Country $country
         */
        foreach ($countries as $country) {

            /**
             * @var RoutingPatternDTO $routingPattern
             */
            $routingPatternDto = RoutingPattern::createDTO();
            $routingPatternDto
                ->setNameEs($country->getNameEs())
                ->setNameEn($country->getNameEn())
                ->setDescriptionEs('')
                ->setDescriptionEn('')
                ->setRegExp($country->getCallingCode())
                ->setBrandId($entity->getId());

            $this->entityPersister->persist($routingPatternDto);

            if (!$country->getZone()) {
                continue;
            }

            $routingPatternGroup = $this->routingPatternGroupRepository->findOneBy([
                'brandId' => $entity->getId(),
                'name' => $country->getZone()
            ]);

            if (empty($routingPatternGroups)) {

                /**
                 * @var RoutingPatternGroupDto $routingPatternGroupDto
                 */
                $routingPatternGroupDto = RoutingPatternGroup::createDTO();
                $routingPatternGroupDto
                    ->setName($country->getZone())
                    ->setBrandId($entity->getId());

                $routingPatternGroup = $this->entityPersister->persist($routingPatternGroupDto);
            }

            /**
             * @var RoutingPatternGroupsRelPatternDTO $routingPatternGroupsRelPatternDto
             */
            $routingPatternGroupsRelPatternDto = RoutingPatternGroupsRelPattern::createDTO();
            $routingPatternGroupsRelPatternDto
                ->setRoutingPatternId($routingPattern->getId())
                ->setRoutingPatternGroupid($routingPatternGroup->getId());

            $this->entityPersister->persist($routingPatternGroupsRelPatternDto);
        }
    }
}