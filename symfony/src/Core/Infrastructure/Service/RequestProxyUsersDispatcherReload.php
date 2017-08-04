<?php
namespace Core\Infrastructure\Service;

use Core\Domain\Model\EntityInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use IvozProvider\Gearmand\Jobs\Xmlrpc;

/**
 * Class RequestProxyUsersDispatcherReload
 * @package Core\Infrastructure\Service
 */
class RequestProxyUsersDispatcherReload implements LifecycleEventHandlerInterface
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
                'proxyusers' => 'dispatcher.reload',
            );
            $this->xmlrpc->setProxyServers($proxyServers);
            $this->xmlrpc->send();

        } catch (\Exception $e) {
            $message = $e->getMessage() . '<p>Application Server may have been deleted.</p>';
            throw new \Exception($message);
        }

    }
}