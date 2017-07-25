<?php

namespace Core\Infrastructure\Application;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Domain\Model\EntityInterface;
use Doctrine\ORM\EntityManager;

class DoctrineForeignKeyTransformer implements ForeignKeyTransformerInterface
{
    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @param string $entityName
     * @param DataTransferObjectInterface|mixed $key
     * @return EntityInterface
     */
    public function transform($entityName, $key)
    {
        if (is_null($key)) {
            return null;
        }

        if ($key instanceof DataTransferObjectInterface) {
            /**
             * @todo this must be tested
             */
            $entitytClass = substr(get_class($key), 0, -3);
            return $entitytClass::fromDto($key);
        }

        return $this->em->getReference($entityName, $key);
    }
}