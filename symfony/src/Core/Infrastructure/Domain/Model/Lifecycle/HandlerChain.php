<?php

namespace Core\Infrastructure\Domain\Model\Lifecycle;

use Core\Domain\Model\EntityInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;

class HandlerChain
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var array
     */
    protected $services;

    public function __construct
    (
        EntityManagerInterface $em
    ) {
        $this->em = $em;
        $this->services = array();
    }

    public function addService(LifecycleEventHandlerInterface $service)
    {
        $this->services[] = $service;
    }

    public function execute(EntityInterface $entity)
    {
        foreach ($this->services as $service) {
            $service->execute($entity);
            $this->em->flush();
        }
    }
}