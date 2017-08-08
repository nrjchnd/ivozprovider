<?php
namespace Ivoz\Domain\Service\Fax;

use Core\Domain\Service\LifecycleEventHandlerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\Fax\Fax;

/**
 * Class SanitizeValues
 * @package Ivoz\Domain\Service\Fax
 * @lifecycle fax.pre_persist
 */
class SanitizeValues implements LifecycleEventHandlerInterface
{
    public function __construct() {}

    /**
     * @param Fax $entity
     */
    public function execute(EntityInterface $entity)
    {
        // @todo move this to the entity
        if ($entity->getSendByEmail() == 0) {
            $entity->setEmail(null);
        }
    }
}
