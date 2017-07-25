<?php
namespace Ivoz\Domain\Service\Service;

use Core\Domain\Model\EntityInterface;
use Core\Domain\Service\EntityPersisterInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Brand\Brand;
use Ivoz\Domain\Model\Service\Service;
use Ivoz\Domain\Model\BrandService\BrandService;
use Ivoz\Domain\Model\Service\ServiceRepository;

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
     * @var ServiceRepository
     */
    protected $serviceRepository;

    public function __construct(
        EntityManagerInterface $em,
        EntityPersisterInterface $entityPersister,
        ServiceRepository $serviceRepository
    ) {
        $this->em = $em;
        $this->entityPersister = $entityPersister;
        $this->serviceRepository = $serviceRepository;
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

        $services = $this->$this->serviceRepository->findAll();

        /**
         * @var Service $service
         */
        foreach ($services as $service) {

            $brandServiceDto = BrandService::createDTO();
            $brandServiceDto
                ->setServiceId($service->getId())
                ->setCode($service->getDefaultCode())
                ->setBrandId($entity->getId());

            $this->entityPersister->persist($brandServiceDto);
        }
    }
}