<?php
namespace Ivoz\Domain\Service\CompanyService;

use Core\Domain\Service\EntityPersisterInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\BrandService\BrandService;
use Ivoz\Domain\Model\BrandService\BrandServiceRepository;
use Ivoz\Domain\Model\Company\Company;
use Ivoz\Domain\Model\CompanyService\CompanyService;

/**
 * Class PropagateBrandServices
 * @package Ivoz\Domain\Service\CompanyService
 * @lifecycle company.post_persist
 */
class PropagateBrandServices implements LifecycleEventHandlerInterface
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
     * @var BrandServiceRepository
     */
    protected $brandServiceRepository;

    public function __construct(
        EntityManagerInterface $em,
        EntityPersisterInterface $entityPersister,
        BrandServiceRepository $brandServiceRepository
    ) {
        $this->em = $em;
        $this->entityPersister = $entityPersister;
        $this->brandServiceRepository = $brandServiceRepository;
    }

    /**
     * @param Company $entity
     * @throws \Exception
     */
    public function execute(EntityInterface $entity)
    {
        if (!$entity->hasChanged('id')) {
            // Do nothing if this is not a new entity
            return;
        }

        $services = $this->brandServiceRepository->findBy([
            'brand' => $entity->getBrand()->getId()
        ]);

        /**
         * @var BrandService $service
         */
        foreach ($services as $service) {
            $companyServiceDto = CompanyService::createDTO();

            $serviceId = $service->getService()->getId();
            $companyServiceDto
                ->setServiceId($serviceId)
                ->setCode($service->getCode())
                ->setCompanyId($entity->getId());

            $this->entityPersister->persist($companyServiceDto);
        }
    }
}