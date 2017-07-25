<?php
namespace Core\Infrastructure\Domain\Model\Lifecycle;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

class DoctrineSubscriber implements EventSubscriber
{
    use EntityClassToServiceNameTrait;

    protected $serviceContainer;

    public function __construct(ContainerInterface $serviceContainer)
    {
        $this->serviceContainer = $serviceContainer;
    }

    public function getSubscribedEvents()
    {
        return array(
            'postLoad',

            'prePersist',
            'postPersist',
            'preUpdate',
            'postUpdate',

            'preRemove',
            'postRemove',
        );
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        $entity->initChangelog();

        $this->run('post_load', $args);
    }

    public function prePersist(PreUpdateEventArgs $args)
    {
        $this->run('pre_persist', $args);
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $this->run('post_persist', $args);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $this->run('pre_persist', $args);
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        $this->run('post_persist', $args);
    }

    public function preRemove(LifecycleEventArgs $args)
    {
        $this->run('pre_remove', $args);
    }

    public function postRemove(LifecycleEventArgs $args)
    {
        $this->run('post_remove', $args);
    }

    protected function run($eventName, LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        $entityClass = get_class($entity);
        $serviceName = $this->getServiceName($entityClass, $eventName);

        if (!$this->serviceContainer->has($serviceName)) {
            return;
        }

        $service = $this->serviceContainer->get($serviceName);
        $service->execute($entity);
    }

}