<?php
namespace Ivoz\Domain\Service\Extension;

use Core\Domain\Service\LifecycleEventHandlerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\Extension\Extension;

/**
 * Class SanitizeValues
 * @package Ivoz\Domain\Service\Extension
 * @lifecycle extension.pre_persist
 */
class SanitizeValues implements LifecycleEventHandlerInterface
{
    /**
     * @var EntityPersisterInterface
     */
    protected $entityPersister;

    public function __construct(
        EntityPersisterInterface $entityPersister
    ) {
        $this->entityPersister = $entityPersister;
    }

    /**
     * @param Extension $entity
     * @throws \Exception
     */
    public function execute(EntityInterface $entity)
    {
        $nullableFields = array(
            "IVRCommon"     => "IVRCommon",
            "IVRCustom"     => "IVRCustom",
            "huntGroup"     => "huntGroup",
            "user"          => "user",
            "conferenceRoom" => "conferenceRoom",
            "number"        => "numberValue",
            "friend"        => "friendValue",
            "queue"         => "queue",
        );

        $routeType = $entity->getRouteType();
        foreach ($nullableFields as $type => $fieldName) {
            if ($routeType == $type) {
                continue;
            }

            $setter = "set" . ucfirst($fieldName);
            $entity->{$setter}(null);
        }
    }
}
