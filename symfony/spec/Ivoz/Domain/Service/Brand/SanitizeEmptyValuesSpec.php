<?php

namespace spec\Ivoz\Domain\Service\Brand;

use Core\Domain\Service\EntityPersisterInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Brand\Brand;
use Ivoz\Domain\Model\Brand\BrandDTO;
use Ivoz\Domain\Service\Brand\SanitizeEmptyValues;
use PhpSpec\ObjectBehavior;
use PhpSpec\Exception\Example\FailureException;
use spec\SpecHelperTrait;

class SanitizeEmptyValuesSpec extends ObjectBehavior
{
    use SpecHelperTrait;

    protected $em;
    protected $entityPersister;
    protected $entity;
    protected $dto;

    function let(
        EntityManagerInterface $em,
        EntityPersisterInterface $entityPersister,
        Brand $entity
    ) {
        $this->em = $em;
        $this->entityPersister = $entityPersister;
        $this->entity = $entity;

        $this->beConstructedWith($em, $entityPersister);

        $this->dto = New BrandDTO();
        $this
            ->dto
            ->setDefaultTimezoneId(1)
            ->setLanguageId(1);

        $this
            ->entity
            ->toDTO()
            ->willReturn($this->dto);
    }

    function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf(SanitizeEmptyValues::class);
    }

    function it_checks_whether_the_entity_is_new() {
        $this->emContainsWillReturn(true);
        $this->execute($this->entity)->shouldReturn(null);
    }

    function it_persists_new_entities()
    {
        $this->emContainsWillReturn(false);

        $this
            ->entityPersister
            ->persist($this->dto, $this->entity)
            ->shouldBeCalled();

        $this->execute($this->entity);
    }

    function it_does_not_overwrite_existing_values()
    {
        $this->emContainsWillReturn(false);
        $this->execute($this->entity);
    }

    function it_sets_default_timezone_whem_empty()
    {
        $this->emContainsWillReturn(false);
        $this
            ->dto
            ->setDefaultTimezoneId(null);

        $this->execute($this->entity);


        $timezoneId = $this->dto->getDefaultTimezoneId();
        if (!$timezoneId) {
            throw new FailureException('TimezoneId is empty');
        }

    }

    function it_sets_default_language_whem_empty()
    {
        $this->emContainsWillReturn(false);

        $this->dto->setLanguageId(null);
        $this->execute($this->entity);

        $languageId = $this->dto->getLanguageId();
        if (!$languageId) {
            throw new FailureException('LanguageId is empty');
        }
    }
}
