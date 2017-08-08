<?php

namespace Ivoz\Domain\Service\FaxesInOut;

use Core\Domain\Service\LifecycleEventHandlerInterface;
use Core\Domain\Model\EntityInterface;
use \Ivoz\Domain\Model\FaxesInOut\FaxesInOut;
use Core\Infrastructure\Service\Asterisk\ARI\ARIConnector;

/**
 * Class SendFaxFile
 * @package Ivoz\Domain\Service\Fax
 * @lifecycle faxes_in_out.post_persist
 */
class SendFaxFile implements LifecycleEventHandlerInterface
{
    protected $ariConnector;

    public function __construct(
        ARIConnector $ariConnector
    ) {
        $this->ariConnector = $ariConnector;
    }

    /**
     * @param FaxesInOut $entity
     * @throws \Exception
     */
    public function execute(EntityInterface $entity)
    {
        $isOutgoingFax = $entity->getType() == "Out";
        $isPending = $entity->getStatus() == "pending";
        $statusHaschanged = $entity->hasChanged("status");

        $mustSendFaxFile = $isOutgoingFax && $statusHaschanged && $isPending;
        if (!$mustSendFaxFile) {
            return;
        }

        try {
            $this->ariConnector->sendFaxfileRequest($entity);
        } catch (\Exception $e) {
            $entity->setStatus('error');

            throw $e;
        }
    }
}