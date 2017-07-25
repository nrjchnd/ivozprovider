<?php

namespace Core\Infrastructure\Domain\Service;

use Core\Application\Command\CreateEntityFromDTO;
use Core\Application\Command\UpdateEntityFromDTO;
use Core\Application\DataTransferObjectInterface;
use Core\Domain\Model\EntityInterface;
use Core\Domain\Service\EntityPersisterInterface;
use Doctrine\ORM\EntityManagerInterface;

class DoctrineEntityPersister implements EntityPersisterInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var CreateEntityFromDTO
     */
    protected $createEntityFromDTO;

    /**
     * @var UpdateEntityFromDTO
     */
    protected $entityUpdater;

    public function __construct
    (
        EntityManagerInterface $em,
        CreateEntityFromDTO $createEntityFromDTO,
        UpdateEntityFromDTO $entityUpdater
    ) {
        $this->em = $em;
        $this->createEntityFromDTO = $createEntityFromDTO;
        $this->entityUpdater = $entityUpdater;
    }

    public function persist(DataTransferObjectInterface $dto, EntityInterface $entity = null)
    {
        if (!$dto->getId()) {
            $entityClass = substr(get_class($dto), 0, -3);
            $entity = $this
                ->createEntityFromDTO
                ->execute($entityClass, $dto);
        } else {
            $this->entityUpdater->execute($entity, $dto);
        }
        $this->em->persist($entity);
//      $this->em->flush();

        return $entity;
    }
}