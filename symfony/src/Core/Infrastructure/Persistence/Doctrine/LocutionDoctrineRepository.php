<?php

namespace Core\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityRepository;
use Core\Domain\Model\Locution\LocutionRepository;

/**
 * LocutionDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LocutionDoctrineRepository extends EntityRepository implements LocutionRepository
{
}