<?php

namespace spec\Ivoz\Domain\Service\Company;

use Core\Domain\Service\EntityPersisterInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Company\Company;
use Ivoz\Domain\Service\Company\SanitizeEmptyValues;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SanitizeEmptyValuesSpec extends ObjectBehavior
{
    protected $em;
    protected $entityPersister;
    protected $entity;

    function let(
        EntityManagerInterface $em,
        EntityPersisterInterface $entityPersister,
        Company $entity
    ) {
        $this->em = $em;
        $this->entityPersister = $entityPersister;
        $this->beConstructedWith($em, $entityPersister);

        $this->entity = $entity;
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SanitizeEmptyValues::class);
    }
}
