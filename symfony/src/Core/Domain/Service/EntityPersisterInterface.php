<?php

namespace Core\Domain\Service;

use Core\Application\DataTransferObjectInterface;
use Core\Domain\Model\EntityInterface;

interface EntityPersisterInterface
{
    public function persist(DataTransferObjectInterface $dto, EntityInterface $entity = null);
}