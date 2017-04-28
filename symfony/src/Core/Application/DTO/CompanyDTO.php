<?php

namespace Core\Application\DTO;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class CompanyDTO implements DataTransferObjectInterface
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @column domain_users
     * @var string
     */
    public $domainUsers;

    /**
     * @var string
     */
    public $nif;

    /**
     * @var integer
     */
    public $externalMaxCalls = '0';

    /**
     * @var string
     */
    public $postalAddress;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $town;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $country;

    /**
     * @column outbound_prefix
     * @var string
     */
    public $outboundPrefix;

    /**
     * @var boolean
     */
    public $ipfilter = '1';

    /**
     * @var boolean
     */
    public $onDemandRecord = '0';

    /**
     * @var string
     */
    public $onDemandRecordCode;

    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $externallyExtraOpts;

    /**
     * @var integer
     */
    public $recordingsLimitMB;

    /**
     * @var string
     */
    public $recordingsLimitEmail;

    /**
     * @var mixed
     */
    public $languageId;

    /**
     * @var mixed
     */
    public $mediaRelaySetsId;

    /**
     * @var mixed
     */
    public $defaultTimezoneId;

    /**
     * @var mixed
     */
    public $brandId;

    /**
     * @var mixed
     */
    public $applicationServerId;

    /**
     * @var mixed
     */
    public $countryCodeId;

    /**
     * @var mixed
     */
    public $outgoingDDIId;

    /**
     * @var mixed
     */
    public $language;

    /**
     * @var mixed
     */
    public $mediaRelaySets;

    /**
     * @var mixed
     */
    public $defaultTimezone;

    /**
     * @var mixed
     */
    public $brand;

    /**
     * @var mixed
     */
    public $applicationServer;

    /**
     * @var mixed
     */
    public $countryCode;

    /**
     * @var mixed
     */
    public $outgoingDDI;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'domainUsers' => $this->getDomainUsers(),
            'nif' => $this->getNif(),
            'externalMaxCalls' => $this->getExternalMaxCalls(),
            'postalAddress' => $this->getPostalAddress(),
            'postalCode' => $this->getPostalCode(),
            'town' => $this->getTown(),
            'province' => $this->getProvince(),
            'country' => $this->getCountry(),
            'outboundPrefix' => $this->getOutboundPrefix(),
            'ipfilter' => $this->getIpfilter(),
            'onDemandRecord' => $this->getOnDemandRecord(),
            'onDemandRecordCode' => $this->getOnDemandRecordCode(),
            'areaCode' => $this->getAreaCode(),
            'externallyExtraOpts' => $this->getExternallyExtraOpts(),
            'recordingsLimitMB' => $this->getRecordingsLimitMB(),
            'recordingsLimitEmail' => $this->getRecordingsLimitEmail(),
            'languageId' => $this->getLanguageId(),
            'mediaRelaySetsId' => $this->getMediaRelaySetsId(),
            'defaultTimezoneId' => $this->getDefaultTimezoneId(),
            'brandId' => $this->getBrandId(),
            'applicationServerId' => $this->getApplicationServerId(),
            'countryCodeId' => $this->getCountryCodeId(),
            'outgoingDDIId' => $this->getOutgoingDDIId()
        ];
    }

    /**
     * @param array $data
     * @return self
     */
    public static function fromArray(array $data)
    {
        $dto = new self();
        return $dto
            ->setId(isset($data['id']) ? $data['id'] : null)
            ->setName(isset($data['name']) ? $data['name'] : null)
            ->setDomainUsers(isset($data['domainUsers']) ? $data['domainUsers'] : null)
            ->setNif(isset($data['nif']) ? $data['nif'] : null)
            ->setExternalMaxCalls(isset($data['externalMaxCalls']) ? $data['externalMaxCalls'] : null)
            ->setPostalAddress(isset($data['postalAddress']) ? $data['postalAddress'] : null)
            ->setPostalCode(isset($data['postalCode']) ? $data['postalCode'] : null)
            ->setTown(isset($data['town']) ? $data['town'] : null)
            ->setProvince(isset($data['province']) ? $data['province'] : null)
            ->setCountry(isset($data['country']) ? $data['country'] : null)
            ->setOutboundPrefix(isset($data['outboundPrefix']) ? $data['outboundPrefix'] : null)
            ->setIpfilter(isset($data['ipfilter']) ? $data['ipfilter'] : null)
            ->setOnDemandRecord(isset($data['onDemandRecord']) ? $data['onDemandRecord'] : null)
            ->setOnDemandRecordCode(isset($data['onDemandRecordCode']) ? $data['onDemandRecordCode'] : null)
            ->setAreaCode(isset($data['areaCode']) ? $data['areaCode'] : null)
            ->setExternallyExtraOpts(isset($data['externallyExtraOpts']) ? $data['externallyExtraOpts'] : null)
            ->setRecordingsLimitMB(isset($data['recordingsLimitMB']) ? $data['recordingsLimitMB'] : null)
            ->setRecordingsLimitEmail(isset($data['recordingsLimitEmail']) ? $data['recordingsLimitEmail'] : null)
            ->setLanguageId(isset($data['languageId']) ? $data['languageId'] : null)
            ->setMediaRelaySetsId(isset($data['mediaRelaySetsId']) ? $data['mediaRelaySetsId'] : null)
            ->setDefaultTimezoneId(isset($data['defaultTimezoneId']) ? $data['defaultTimezoneId'] : null)
            ->setBrandId(isset($data['brandId']) ? $data['brandId'] : null)
            ->setApplicationServerId(isset($data['applicationServerId']) ? $data['applicationServerId'] : null)
            ->setCountryCodeId(isset($data['countryCodeId']) ? $data['countryCodeId'] : null)
            ->setOutgoingDDIId(isset($data['outgoingDDIId']) ? $data['outgoingDDIId'] : null);
    }

    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->language = $transformer->transform('Core\\Model\\Language\\Language', $this->getLanguageId());
        $this->mediaRelaySets = $transformer->transform('Core\\Model\\MediaRelaySet\\MediaRelaySet', $this->getMediaRelaySetsId());
        $this->defaultTimezone = $transformer->transform('Core\\Model\\Timezone\\Timezone', $this->getDefaultTimezoneId());
        $this->brand = $transformer->transform('Core\\Model\\Brand\\Brand', $this->getBrandId());
        $this->applicationServer = $transformer->transform('Core\\Model\\ApplicationServer\\ApplicationServer', $this->getApplicationServerId());
        $this->countryCode = $transformer->transform('Core\\Model\\Country\\Country', $this->getCountryCodeId());
        $this->outgoingDDI = $transformer->transform('Core\\Model\\DDI\\DDI', $this->getOutgoingDDIId());
    }

    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param integer $id
     *
     * @return CompanyDTO
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     *
     * @return CompanyDTO
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $domainUsers
     *
     * @return CompanyDTO
     */
    public function setDomainUsers($domainUsers)
    {
        $this->domainUsers = $domainUsers;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomainUsers()
    {
        return $this->domainUsers;
    }

    /**
     * @param string $nif
     *
     * @return CompanyDTO
     */
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * @param integer $externalMaxCalls
     *
     * @return CompanyDTO
     */
    public function setExternalMaxCalls($externalMaxCalls)
    {
        $this->externalMaxCalls = $externalMaxCalls;

        return $this;
    }

    /**
     * @return integer
     */
    public function getExternalMaxCalls()
    {
        return $this->externalMaxCalls;
    }

    /**
     * @param string $postalAddress
     *
     * @return CompanyDTO
     */
    public function setPostalAddress($postalAddress)
    {
        $this->postalAddress = $postalAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * @param string $postalCode
     *
     * @return CompanyDTO
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $town
     *
     * @return CompanyDTO
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param string $province
     *
     * @return CompanyDTO
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $country
     *
     * @return CompanyDTO
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $outboundPrefix
     *
     * @return CompanyDTO
     */
    public function setOutboundPrefix($outboundPrefix = null)
    {
        $this->outboundPrefix = $outboundPrefix;

        return $this;
    }

    /**
     * @return string
     */
    public function getOutboundPrefix()
    {
        return $this->outboundPrefix;
    }

    /**
     * @param boolean $ipfilter
     *
     * @return CompanyDTO
     */
    public function setIpfilter($ipfilter = null)
    {
        $this->ipfilter = $ipfilter;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIpfilter()
    {
        return $this->ipfilter;
    }

    /**
     * @param boolean $onDemandRecord
     *
     * @return CompanyDTO
     */
    public function setOnDemandRecord($onDemandRecord = null)
    {
        $this->onDemandRecord = $onDemandRecord;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getOnDemandRecord()
    {
        return $this->onDemandRecord;
    }

    /**
     * @param string $onDemandRecordCode
     *
     * @return CompanyDTO
     */
    public function setOnDemandRecordCode($onDemandRecordCode = null)
    {
        $this->onDemandRecordCode = $onDemandRecordCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getOnDemandRecordCode()
    {
        return $this->onDemandRecordCode;
    }

    /**
     * @param string $areaCode
     *
     * @return CompanyDTO
     */
    public function setAreaCode($areaCode = null)
    {
        $this->areaCode = $areaCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAreaCode()
    {
        return $this->areaCode;
    }

    /**
     * @param string $externallyExtraOpts
     *
     * @return CompanyDTO
     */
    public function setExternallyExtraOpts($externallyExtraOpts = null)
    {
        $this->externallyExtraOpts = $externallyExtraOpts;

        return $this;
    }

    /**
     * @return string
     */
    public function getExternallyExtraOpts()
    {
        return $this->externallyExtraOpts;
    }

    /**
     * @param integer $recordingsLimitMB
     *
     * @return CompanyDTO
     */
    public function setRecordingsLimitMB($recordingsLimitMB = null)
    {
        $this->recordingsLimitMB = $recordingsLimitMB;

        return $this;
    }

    /**
     * @return integer
     */
    public function getRecordingsLimitMB()
    {
        return $this->recordingsLimitMB;
    }

    /**
     * @param string $recordingsLimitEmail
     *
     * @return CompanyDTO
     */
    public function setRecordingsLimitEmail($recordingsLimitEmail = null)
    {
        $this->recordingsLimitEmail = $recordingsLimitEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecordingsLimitEmail()
    {
        return $this->recordingsLimitEmail;
    }

    /**
     * @param integer $languageId
     *
     * @return CompanyDTO
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * @return \Core\Model\Language\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param integer $mediaRelaySetsId
     *
     * @return CompanyDTO
     */
    public function setMediaRelaySetsId($mediaRelaySetsId)
    {
        $this->mediaRelaySetsId = $mediaRelaySetsId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMediaRelaySetsId()
    {
        return $this->mediaRelaySetsId;
    }

    /**
     * @return \Core\Model\MediaRelaySet\MediaRelaySet
     */
    public function getMediaRelaySets()
    {
        return $this->mediaRelaySets;
    }

    /**
     * @param integer $defaultTimezoneId
     *
     * @return CompanyDTO
     */
    public function setDefaultTimezoneId($defaultTimezoneId)
    {
        $this->defaultTimezoneId = $defaultTimezoneId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getDefaultTimezoneId()
    {
        return $this->defaultTimezoneId;
    }

    /**
     * @return \Core\Model\Timezone\Timezone
     */
    public function getDefaultTimezone()
    {
        return $this->defaultTimezone;
    }

    /**
     * @param integer $brandId
     *
     * @return CompanyDTO
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @return \Core\Model\Brand\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param integer $applicationServerId
     *
     * @return CompanyDTO
     */
    public function setApplicationServerId($applicationServerId)
    {
        $this->applicationServerId = $applicationServerId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getApplicationServerId()
    {
        return $this->applicationServerId;
    }

    /**
     * @return \Core\Model\ApplicationServer\ApplicationServer
     */
    public function getApplicationServer()
    {
        return $this->applicationServer;
    }

    /**
     * @param integer $countryCodeId
     *
     * @return CompanyDTO
     */
    public function setCountryCodeId($countryCodeId)
    {
        $this->countryCodeId = $countryCodeId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCountryCodeId()
    {
        return $this->countryCodeId;
    }

    /**
     * @return \Core\Model\Country\Country
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param integer $outgoingDDIId
     *
     * @return CompanyDTO
     */
    public function setOutgoingDDIId($outgoingDDIId)
    {
        $this->outgoingDDIId = $outgoingDDIId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getOutgoingDDIId()
    {
        return $this->outgoingDDIId;
    }

    /**
     * @return \Core\Model\DDI\DDI
     */
    public function getOutgoingDDI()
    {
        return $this->outgoingDDI;
    }
}

