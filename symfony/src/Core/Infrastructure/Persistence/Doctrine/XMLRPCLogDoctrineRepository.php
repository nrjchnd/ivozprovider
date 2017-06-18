<?php

namespace Core\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityRepository;
use Core\Domain\Model\XMLRPCLog\XMLRPCLogRepository;

/**
 * XMLRPCLogDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class XMLRPCLogDoctrineRepository extends EntityRepository implements XMLRPCLogRepository
{
}
