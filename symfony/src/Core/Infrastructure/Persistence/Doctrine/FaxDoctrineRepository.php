<?php

namespace Core\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityRepository;
use Core\Domain\Model\Fax\FaxRepository;

/**
 * FaxesInOutDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FaxDoctrineRepository extends EntityRepository implements FaxRepository
{
}