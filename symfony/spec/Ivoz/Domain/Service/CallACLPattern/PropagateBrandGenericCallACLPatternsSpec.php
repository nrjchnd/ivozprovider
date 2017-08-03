<?php

namespace spec\Ivoz\Domain\Service\CallACLPattern;

use Ivoz\Domain\Model\Brand\Brand;
use Ivoz\Domain\Model\CallACLPattern\CallACLPattern;
use Ivoz\Domain\Service\CallACLPattern\PropagateBrandGenericCallACLPatterns;
use PhpSpec\ObjectBehavior;
use Core\Domain\Service\EntityPersisterInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Company\Company;
use Ivoz\Domain\Model\Company\CompanyDTO;
use spec\SpecHelperTrait;

class PropagateBrandGenericCallACLPatternsSpec extends ObjectBehavior
{
    use SpecHelperTrait;

    protected $em;
    protected $entityPersister;
    protected $entity;
    protected $dto;

    function let(
        EntityManagerInterface $em,
        EntityPersisterInterface $entityPersister,
        Company $entity
    ) {
        $this->em = $em;
        $this->entityPersister = $entityPersister;
        $this->beConstructedWith($em, $entityPersister);

        $this->dto = New CompanyDTO();
        $this->entity = $entity;
        $this
            ->entity
            ->toDTO()
            ->willReturn($this->dto);

        $this
            ->entity
            ->getBrand()
            ->willReturn(null);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(PropagateBrandGenericCallACLPatterns::class);
    }

    function it_checks_whether_the_entity_is_new() {
        $this->emContainsWillReturn(true);
        $this->execute($this->entity)->shouldReturn(null);
    }

    function it_throws_exception_with_empty_brand()
    {
        $this->emContainsWillReturn(false);
        $this
            ->shouldThrow('\Exception')
            ->during('execute', [$this->entity]);
    }

    function it_search_for_generic_acl_patterns(
        Brand $brand
    ) {
        $this->emContainsWillReturn(false);
        $this
            ->entity
            ->getBrand()
            ->shouldBeCalled()
            ->willReturn($brand);

        $brand
            ->getGenericCallACLPatterns()
            ->willReturn([]);

        $this->execute($this->entity);
    }


    function it_sets_call_acl_patterns(
        Brand $brand,
        CallACLPattern $callACLPattern
    ) {
        $this->emContainsWillReturn(false);
        $this
            ->entity
            ->getBrand()
            ->shouldBeCalled()
            ->willReturn($brand);

        $brand
            ->getGenericCallACLPatterns()
            ->willReturn([$callACLPattern]);

        $callACLPattern
            ->getName()
            ->shouldBeCalled()
            ->willReturn('Name');

        $callACLPattern
            ->getRegExp()
            ->shouldBeCalled()
            ->willReturn('RegExp');

        $this
            ->entityPersister
            ->persist($this->dto, $this->entity)
            ->shouldBeCalled();

        $this->execute($this->entity);

        $aclPattern = $this->dto->getCallACLPatterns();
        if ($aclPattern[0]->getName() !== 'Name') {
            throw new FailureException(
                'Unexpected call acl pattern name '
                . $aclPattern[0]->getName()
                . 'found, Name expected.'
            );
        }

        if ($aclPattern[0]->getRegExp() !== 'RegExp') {
            throw new FailureException(
                'Unexpected call acl pattern regExp '
                . $aclPattern[0]->getRegExp()
                . 'found, RegExp expected.'
            );
        }
    }
}
