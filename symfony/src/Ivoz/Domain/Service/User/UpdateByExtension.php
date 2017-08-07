<?php
namespace Ivoz\Domain\Service\User;

use Core\Domain\Service\EntityPersisterInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\Extension\Extension;
use Ivoz\Domain\Model\User\User;
use Ivoz\Domain\Model\User\UserRepository;

/**
 * Class SanitizeExtension
 * @package Ivoz\Domain\Service\User
 * @lifecycle extension.pre_persist
 */
class UpdateByExtension implements LifecycleEventHandlerInterface
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * @var EntityPersisterInterface
     */
    protected $entityPersister;

    public function __construct(
        UserRepository $userRepository,
        EntityPersisterInterface $entityPersister
    ) {
        $this->userRepository = $userRepository;
        $this->entityPersister = $entityPersister;
    }

    /**
     * @param Extension $entity
     * @throws \Exception
     */
    public function execute(EntityInterface $entity)
    {
        $changedUserId = $entity->hasChanged('userId');

        if (!$changedUserId) {
            return;
        }

        $currentValue = $entity
            ->getUser()
            ->getId();

        $originalValue = $entity
            ->getInitialValue('userId');

        // If this extension was pointing to a user and number has changed
        if ($originalValue && ($originalValue != $currentValue)) {
            /**
             * @var User $prevUser
             */
            $prevUser = $this->userRepository->findOneBy([
                'id' => $originalValue
            ]);

            $prevUser->setExtension(null);
        }

        $routeType = $entity->getRouteType();

        // If there is a new user and new user has no extension
        if ($routeType === 'user') {
            /**
             * @var User $user
             */
            $user = $entity->getUser();
            $userExtension = $user->getExtension();

            if ($user && $userExtension && is_null($userExtension->getId())) {
                // Set this as its screen extension
                $user->setExtension($entity);
            }
        }

        /**
         * @todo thmove this to it's own service
         */
        // If this extension was pointing to a user and number has changed
        $changedNumber = $entity->hasChanged('number');
        if ($routeType == 'user' && $changedNumber) {
            // Check if this extension belongs to a user
            /**
             * @var User $user
             */
            $user = $entity->getUser();
            if ($user) {
                // Update endpoint data
                // @todo ensure this exists
                $user->updateEndpoint();
            }
        }
    }
}