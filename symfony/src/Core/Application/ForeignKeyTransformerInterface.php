<?php
namespace Core\Application;

use Core\Domain\Model\EntityInterface;

interface ForeignKeyTransformerInterface
{
    /**
     * @param string $entityName
     * @param DataTransferObjectInterface|mixed $key
     * @return EntityInterface
     */
    public function transform($entityName, $key);
}