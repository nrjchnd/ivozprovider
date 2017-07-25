<?php
namespace Core\Infrastructure\Service;

use Core\Domain\Model\EntityInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use IvozProvider\Gearmand\Jobs\Xmlrpc;

/**
 * Class RequestProxyUsersPermissionsAddressReload
 * @package Core\Infrastructure\Service
 */
class RequestProxyUserPermissionsAddressReload implements LifecycleEventHandlerInterface
{
    /**
     * @var KamDispatcherRepository
     */
    protected $dispatcherRepository;

    /**
     * @var Xmlrpc
     */
    protected $xmlrpc;

    public function __construct(
        Xmlrpc $xmlrpc
    ) {
        $this->xmlrpc = $xmlrpc;
    }

    public function execute(EntityInterface $entity)
    {
        try {
            $proxyServers = array(
                'proxyusers' => "domain.reload",
            );
            $this->xmlrpc->setProxyServers($proxyServers);
            $this->xmlrpc->send();
        } catch (\Exception $e) {
            $message = $e->getMessage() . '<p>Company may have been deleted.</p>';
            throw new \Exception($message);
        }

    }
}