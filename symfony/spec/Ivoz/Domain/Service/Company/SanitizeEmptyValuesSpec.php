<?php

namespace spec\Ivoz\Domain\Service\Company;

use Core\Domain\Service\EntityPersisterInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\Brand\BrandInterface;
use Ivoz\Domain\Model\Company\Company;
use Ivoz\Domain\Model\Company\CompanyDTO;
use Ivoz\Domain\Model\Language\LanguageInterface;
use Ivoz\Domain\Model\Timezone\TimezoneInterface;
use Ivoz\Domain\Service\Company\SanitizeEmptyValues;
use PhpSpec\Exception\Example\FailureException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use spec\SpecHelperTrait;

class SanitizeEmptyValuesSpec extends ObjectBehavior
{
    use SpecHelperTrait;

    protected $em;
    protected $entityPersister;
    /**
     * @var CompanyDTO
     */
    protected $dto;
    protected $entity;

    function let(
        EntityManagerInterface $em,
        EntityPersisterInterface $entityPersister,
        Company $entity
    ) {
        $this->em = $em;
        $this->entityPersister = $entityPersister;
        $this->beConstructedWith($em, $entityPersister);

        $this->dto = new CompanyDTO();
        $this->entity = $entity;
    }

    protected function prepareDto()
    {
        $this
            ->dto
            ->setNif('12345678-Z')
            ->setPostalAddress('Postal address')
            ->setPostalCode('PC')
            ->setTown('Town')
            ->setCountryName('Country')
            ->setProvince('Province')
            ->setDefaultTimezoneId(1)
            ->setCountryId(70)
            ->setLanguageId(1)
            ->setOutboundPrefix('')
            ->setMediaRelaySetsId(0)
            ->setIpFilter(0)
            ->setOnDemandRecord(0)
            ->setOnDemandRecordCode(1)
            ->setAreaCode(1);

        $this
            ->entity
            ->toDTO()
            ->shouldBeCalled()
            ->willReturn($this->dto);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SanitizeEmptyValues::class);
    }

    function it_checks_whether_the_entity_is_new()
    {
        $this->emContainsWillReturn(true);
        $this->execute($this->entity)->shouldReturn(null);
    }

    function it_persist_new_entities()
    {
        $this->emContainsWillReturn(false);

        $this->prepareDto();

        $this
            ->entityPersister
            ->persist($this->dto, $this->entity)
            ->shouldBeCalled();

        $this->execute($this->entity);
    }

    function it_sets_nif_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setNif(null);

        $this->execute($this->entity);

        if (!$this->dto->getNif()) {
            throw new FailureException(
                'Empty nif found'
            );
        }
    }

    function it_sets_postal_address_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setPostalAddress(null);

        $this->execute($this->entity);

        if (!$this->dto->getPostalAddress()) {
            throw new FailureException(
                'Empty postal address found'
            );
        }
    }

    function it_sets_postal_code_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setPostalCode(null);

        $this->execute($this->entity);

        if (!$this->dto->getPostalCode()) {
            throw new FailureException(
                'Empty postal code found'
            );
        }
    }

    function it_sets_town_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setTown(null);

        $this->execute($this->entity);

        if (!$this->dto->getTown()) {
            throw new FailureException(
                'Empty town found'
            );
        }
    }

    function it_sets_country_name_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setCountryName(null);

        $this->execute($this->entity);

        if (!$this->dto->getCountryName()) {
            throw new FailureException(
                'Empty country name found'
            );
        }
    }

    function it_sets_province_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setProvince(null);

        $this->execute($this->entity);

        if (!$this->dto->getProvince()) {
            throw new FailureException(
                'Empty province name found'
            );
        }
    }

    function it_sets_timezone_when_empty(
        BrandInterface $brand,
        TimezoneInterface $timezone
    )
    {
        $this->emContainsWillReturn(false);
        $this
            ->entity
            ->getBrand()
            ->shouldBeCalled()
            ->willReturn($brand);

        $brand
            ->getDefaultTimezone()
            ->shouldBeCalled()
            ->willReturn($timezone);

        $timezone
            ->getId()
            ->shouldBeCalled()
            ->willReturn(1);

        $this->prepareDto();
        $this
            ->dto
            ->setDefaultTimezoneId(null);

        $this->execute($this->entity);

        if (!$this->dto->getDefaultTimezoneId()) {
            throw new FailureException(
                'Empty timezone found'
            );
        }
    }

    function it_sets_country_id_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setCountryId(null);

        $this->execute($this->entity);

        if (!$this->dto->getCountryId()) {
            throw new FailureException(
                'Empty country id found'
            );
        }
    }

    function it_sets_language_when_empty(
        BrandInterface $brand,
        LanguageInterface $language
    )
    {
        $this->emContainsWillReturn(false);
        $this
            ->entity
            ->getBrand()
            ->shouldBeCalled()
            ->willReturn($brand);

        $brand
            ->getLanguage()
            ->shouldBeCalled()
            ->willReturn($language);

        $language
            ->getId()
            ->shouldBeCalled()
            ->willReturn(1);

        $this->prepareDto();
        $this
            ->dto
            ->setLanguageId(null);

        $this->execute($this->entity);

        if (!$this->dto->getLanguageId()) {
            throw new FailureException(
                'Empty language found'
            );
        }
    }

    function it_sets_outbound_prefix_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setOutboundPrefix(null);

        $this->execute($this->entity);

        if ($this->dto->getOutboundPrefix() !== '') {
            throw new FailureException(
                'Empty outbound prefix id found'
            );
        }
    }

    function it_sets_media_relay_sets_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setMediaRelaySetsId(null);

        $this->execute($this->entity);

        if ($this->dto->getMediaRelaySetsId() !== 0) {
            throw new FailureException(
                'Unexpected media relay sets id value found'
            );
        }
    }

    function it_sets_ip_filter_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setIpFilter(null);

        $this->execute($this->entity);

        if ($this->dto->getIpFilter() !== 0) {
            throw new FailureException(
                'Unexpected ip filter value found'
            );
        }
    }

    function it_sets_on_demand_record_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setOnDemandRecord(null);

        $this->execute($this->entity);

        if ($this->dto->getOnDemandRecord() !== 0) {
            throw new FailureException(
                'Unexpected on demand record value found'
            );
        }
    }

    function it_sets_on_demand_record_code_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setOnDemandRecordCode(null);

        $this->execute($this->entity);

        if ($this->dto->getOnDemandRecordCode() !== '') {
            throw new FailureException(
                'Unexpected on demand record code value found'
            );
        }
    }

    function it_sets_area_code_when_empty()
    {
        $this->emContainsWillReturn(false);
        $this->prepareDto();
        $this
            ->dto
            ->setAreaCode(null);

        $this->execute($this->entity);

        if ($this->dto->getAreaCode() !== '') {
            throw new FailureException(
                'Unexpected area code value found'
            );
        }
    }
}
