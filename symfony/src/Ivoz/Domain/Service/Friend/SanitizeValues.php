<?php
namespace Ivoz\Domain\Service\Friend;

use Core\Domain\Service\LifecycleEventHandlerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\Friend\Friend;

/**
 * Class SanitizeValues
 * @package Ivoz\Domain\Service\Friend
 * @lifecycle friend.pre_persist
 */
class SanitizeValues implements LifecycleEventHandlerInterface
{
    public function __construct() {}

    /**
     * @param Friend $entity
     */
    public function execute(EntityInterface $entity)
    {
        $entity->setDomain(
            $entity
                ->getCompany()
                ->getDomainUsers()
        );
    }
}
