<?php

namespace Core\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityRepository;
use Core\Domain\Model\CallACLPattern\CallACLPatternRepository;

/**
 * CallACLPatternDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CallACLPatternDoctrineRepository extends EntityRepository implements CallACLPatternRepository
{
}