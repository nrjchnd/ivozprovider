<?php
namespace Ast\Domain\Model\PsEndpoint;

use Core\Application\DataTransferObjectInterface;

/**
 * PsEndpoint
 */
class PsEndpoint extends PsEndpointAbstract implements PsEndpointInterface
{
    use PsEndpointTrait;

    /**
     * @deprecated
     * @todo
     * @throws \Exception
     */
    public function getAstPsAor()
    {
        Throw new \Exception('To be re-thinked');
    }
}

