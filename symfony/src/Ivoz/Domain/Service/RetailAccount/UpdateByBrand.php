<?php
namespace Ivoz\Domain\Service\RetailAccount;

use Core\Domain\Model\EntityInterface;
use Core\Domain\Service\EntityPersisterInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Brand\Brand;
use Ivoz\Domain\Model\RetailAccount\RetailAccountDTO;

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
     * @var UpdateEntityFromDTO
     */
    protected $entityUpdater;

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
        $retails = $entity->getRetailAccounts();
        foreach ($retails as $retail) {

            /**
             * @var RetailAccountDTO
             */
            $retailDto = $retail->toDto();

            $retailDto->setDomain(
                $entity->getDomainUsers()
            );

            $$this->entityPersister->persist($retailDto, $retail);
        }
    }
}