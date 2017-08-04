<?php
namespace Ivoz\Domain\Model\Company;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class CompanyDTO implements DataTransferObjectInterface
{
    /**
     * @var string
     */
    private $type = 'vpbx';

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $domainUsers;

    /**
     * @var string
     */
    private $nif;

    /**
     * @var integer
     */
    private $externalMaxCalls = '0';

    /**
     * @var string
     */
    private $postalAddress;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $town;

    /**
     * @var string
     */
    private $province;

    /**
     * @var string
     */
    private $outboundPrefix;

    /**
     * @var boolean
     */
    private $ipfilter = '1';

    /**
     * @var boolean
     */
    private $onDemandRecord = '0';

    /**
     * @var string
     */
    private $onDemandRecordCode;

    /**
     * @var string
     */
    private $areaCode;

    /**
     * @var string
     */
    private $externallyextraopts;

    /**
     * @var integer
     */
    private $recordingsLimitMB;

    /**
     * @var string
     */
    private $recordingsLimitEmail;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var mixed
     */
    private $languageId;

    /**
     * @var mixed
     */
    private $mediaRelaySetsId;

    /**
     * @var mixed
     */
    private $defaultTimezoneId;

    /**
     * @var mixed
     */
    private $brandId;

    /**
     * @var mixed
     */
    private $applicationServerId;

    /**
     * @var mixed
     */
    private $countryId;

    /**
     * @var mixed
     */
    private $outgoingDDIId;

    /**
     * @var mixed
     */
    private $language;

    /**
     * @var mixed
     */
    private $mediaRelaySets;

    /**
     * @var mixed
     */
    private $defaultTimezone;

    /**
     * @var mixed
     */
    private $brand;

    /**
     * @var mixed
     */
    private $applicationServer;

    /**
     * @var mixed
     */
    private $country;

    /**
     * @var mixed
     */
    private $outgoingDDI;

    /**
     * @var array|null
     */
    private $extensions = null;

    /**
     * @var array|null
     */
    private $ddis = null;

    /**
     * @var array|null
     */
    private $friends = null;

    /**
     * @var array|null
     */
    private $companyServices = null;

    /**
     * @var array|null
     */
    private $terminals = null;

    /**
     * @var array|null
     */
    private $relPricingPlans = null;

    /**
     * @var array|null
     */
    private $musicsOnHold = null;

    /**
     * @var array|null
     */
    private $recordings = null;

    /**
     * @var array|null
     */
    private $relFeatures = null;

    /**
     * @var array|null
     */
    private $callACLPatterns = null;

    /**
     * @var array|null
     */
    private $domains = null;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'type' => $this->getType(),
            'name' => $this->getName(),
            'domainUsers' => $this->getDomainUsers(),
            'nif' => $this->getNif(),
            'externalMaxCalls' => $this->getExternalMaxCalls(),
            'postalAddress' => $this->getPostalAddress(),
            'postalCode' => $this->getPostalCode(),
            'town' => $this->getTown(),
            'province' => $this->getProvince(),
            'outboundPrefix' => $this->getOutboundPrefix(),
            'ipfilter' => $this->getIpfilter(),
            'onDemandRecord' => $this->getOnDemandRecord(),
            'onDemandRecordCode' => $this->getOnDemandRecordCode(),
            'areaCode' => $this->getAreaCode(),
            'externallyextraopts' => $this->getExternallyextraopts(),
            'recordingsLimitMB' => $this->getRecordingsLimitMB(),
            'recordingsLimitEmail' => $this->getRecordingsLimitEmail(),
            'id' => $this->getId(),
            'languageId' => $this->getLanguageId(),
            'mediaRelaySetsId' => $this->getMediaRelaySetsId(),
            'defaultTimezoneId' => $this->getDefaultTimezoneId(),
            'brandId' => $this->getBrandId(),
            'applicationServerId' => $this->getApplicationServerId(),
            'countryId' => $this->getCountryId(),
            'outgoingDDIId' => $this->getOutgoingDDIId(),
            'extensionsId' => $this->getExtensionsId(),
            'ddisId' => $this->getDdisId(),
            'friendsId' => $this->getFriendsId(),
            'companyServicesId' => $this->getCompanyServicesId(),
            'terminalsId' => $this->getTerminalsId(),
            'relPricingPlansId' => $this->getRelPricingPlansId(),
            'musicsOnHoldId' => $this->getMusicsOnHoldId(),
            'recordingsId' => $this->getRecordingsId(),
            'relFeaturesId' => $this->getRelFeaturesId(),
            'callACLPatternsId' => $this->getCallACLPatternsId(),
            'domainsId' => $this->getDomainsId()
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->language = $transformer->transform('Ivoz\\Domain\\Model\\Language\\Language', $this->getLanguageId());
        $this->mediaRelaySets = $transformer->transform('Ivoz\\Domain\\Model\\MediaRelaySet\\MediaRelaySet', $this->getMediaRelaySetsId());
        $this->defaultTimezone = $transformer->transform('Ivoz\\Domain\\Model\\Timezone\\Timezone', $this->getDefaultTimezoneId());
        $this->brand = $transformer->transform('Ivoz\\Domain\\Model\\Brand\\Brand', $this->getBrandId());
        $this->applicationServer = $transformer->transform('Ivoz\\Domain\\Model\\ApplicationServer\\ApplicationServer', $this->getApplicationServerId());
        $this->country = $transformer->transform('Ivoz\\Domain\\Model\\Country\\Country', $this->getCountryId());
        $this->outgoingDDI = $transformer->transform('Ivoz\\Domain\\Model\\DDI\\DDI', $this->getOutgoingDDIId());
        $items = $this->getExtensions();
        $this->extensions = [];
        foreach ($items as $item) {
            $this->extensions[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\Extension\\Extension',
                $item
            );
        }

        $items = $this->getDdis();
        $this->ddis = [];
        foreach ($items as $item) {
            $this->ddis[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\DDI\\DDI',
                $item
            );
        }

        $items = $this->getFriends();
        $this->friends = [];
        foreach ($items as $item) {
            $this->friends[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\Friend\\Friend',
                $item
            );
        }

        $items = $this->getCompanyServices();
        $this->companyServices = [];
        foreach ($items as $item) {
            $this->companyServices[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\CompanyService\\CompanyService',
                $item
            );
        }

        $items = $this->getTerminals();
        $this->terminals = [];
        foreach ($items as $item) {
            $this->terminals[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\Terminal\\Terminal',
                $item
            );
        }

        $items = $this->getRelPricingPlans();
        $this->relPricingPlans = [];
        foreach ($items as $item) {
            $this->relPricingPlans[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\PricingPlansRelCompany\\PricingPlansRelCompany',
                $item
            );
        }

        $items = $this->getMusicsOnHold();
        $this->musicsOnHold = [];
        foreach ($items as $item) {
            $this->musicsOnHold[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\MusicOnHold\\MusicOnHold',
                $item
            );
        }

        $items = $this->getRecordings();
        $this->recordings = [];
        foreach ($items as $item) {
            $this->recordings[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\Recording\\Recording',
                $item
            );
        }

        $items = $this->getRelFeatures();
        $this->relFeatures = [];
        foreach ($items as $item) {
            $this->relFeatures[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\FeaturesRelCompany\\FeaturesRelCompany',
                $item
            );
        }

        $items = $this->getCallACLPatterns();
        $this->callACLPatterns = [];
        foreach ($items as $item) {
            $this->callACLPatterns[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\CallACLPattern\\CallACLPattern',
                $item
            );
        }

        $items = $this->getDomains();
        $this->domains = [];
        foreach ($items as $item) {
            $this->domains[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\Domain\\Domain',
                $item
            );
        }

    }

    /**
     * {@inheritDoc}
     */
    public function transformCollections(CollectionTransformerInterface $transformer)
    {
        $this->extensions = $transformer->transform(
            'Ivoz\\Domain\\Model\\Extension\\Extension',
            $this->extensions
        );
        $this->ddis = $transformer->transform(
            'Ivoz\\Domain\\Model\\DDI\\DDI',
            $this->ddis
        );
        $this->friends = $transformer->transform(
            'Ivoz\\Domain\\Model\\Friend\\Friend',
            $this->friends
        );
        $this->companyServices = $transformer->transform(
            'Ivoz\\Domain\\Model\\CompanyService\\CompanyService',
            $this->companyServices
        );
        $this->terminals = $transformer->transform(
            'Ivoz\\Domain\\Model\\Terminal\\Terminal',
            $this->terminals
        );
        $this->relPricingPlans = $transformer->transform(
            'Ivoz\\Domain\\Model\\PricingPlansRelCompany\\PricingPlansRelCompany',
            $this->relPricingPlans
        );
        $this->musicsOnHold = $transformer->transform(
            'Ivoz\\Domain\\Model\\MusicOnHold\\MusicOnHold',
            $this->musicsOnHold
        );
        $this->recordings = $transformer->transform(
            'Ivoz\\Domain\\Model\\Recording\\Recording',
            $this->recordings
        );
        $this->relFeatures = $transformer->transform(
            'Ivoz\\Domain\\Model\\FeaturesRelCompany\\FeaturesRelCompany',
            $this->relFeatures
        );
        $this->callACLPatterns = $transformer->transform(
            'Ivoz\\Domain\\Model\\CallACLPattern\\CallACLPattern',
            $this->callACLPatterns
        );
        $this->domains = $transformer->transform(
            'Ivoz\\Domain\\Model\\Domain\\Domain',
            $this->domains
        );
    }

    /**
     * @param string $type
     *
     * @return CompanyDTO
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
    public function setDomainUsers($domainUsers = null)
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
     * @param string $externallyextraopts
     *
     * @return CompanyDTO
     */
    public function setExternallyextraopts($externallyextraopts = null)
    {
        $this->externallyextraopts = $externallyextraopts;

        return $this;
    }

    /**
     * @return string
     */
    public function getExternallyextraopts()
    {
        return $this->externallyextraopts;
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
     * @return \Ivoz\Domain\Model\Language\Language
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
     * @return \Ivoz\Domain\Model\MediaRelaySet\MediaRelaySet
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
     * @return \Ivoz\Domain\Model\Timezone\Timezone
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
     * @return \Ivoz\Domain\Model\Brand\Brand
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
     * @return \Ivoz\Domain\Model\ApplicationServer\ApplicationServer
     */
    public function getApplicationServer()
    {
        return $this->applicationServer;
    }

    /**
     * @param integer $countryId
     *
     * @return CompanyDTO
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @return \Ivoz\Domain\Model\Country\Country
     */
    public function getCountry()
    {
        return $this->country;
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
     * @return \Ivoz\Domain\Model\DDI\DDI
     */
    public function getOutgoingDDI()
    {
        return $this->outgoingDDI;
    }

    /**
     * @param array $extensions
     *
     * @return CompanyDTO
     */
    public function setExtensions($extensions)
    {
        $this->extensions = $extensions;

        return $this;
    }

    /**
     * @return array
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * @param array $ddis
     *
     * @return CompanyDTO
     */
    public function setDdis($ddis)
    {
        $this->ddis = $ddis;

        return $this;
    }

    /**
     * @return array
     */
    public function getDdis()
    {
        return $this->ddis;
    }

    /**
     * @param array $friends
     *
     * @return CompanyDTO
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * @return array
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * @param array $companyServices
     *
     * @return CompanyDTO
     */
    public function setCompanyServices($companyServices)
    {
        $this->companyServices = $companyServices;

        return $this;
    }

    /**
     * @return array
     */
    public function getCompanyServices()
    {
        return $this->companyServices;
    }

    /**
     * @param array $terminals
     *
     * @return CompanyDTO
     */
    public function setTerminals($terminals)
    {
        $this->terminals = $terminals;

        return $this;
    }

    /**
     * @return array
     */
    public function getTerminals()
    {
        return $this->terminals;
    }

    /**
     * @param array $relPricingPlans
     *
     * @return CompanyDTO
     */
    public function setRelPricingPlans($relPricingPlans)
    {
        $this->relPricingPlans = $relPricingPlans;

        return $this;
    }

    /**
     * @return array
     */
    public function getRelPricingPlans()
    {
        return $this->relPricingPlans;
    }

    /**
     * @param array $musicsOnHold
     *
     * @return CompanyDTO
     */
    public function setMusicsOnHold($musicsOnHold)
    {
        $this->musicsOnHold = $musicsOnHold;

        return $this;
    }

    /**
     * @return array
     */
    public function getMusicsOnHold()
    {
        return $this->musicsOnHold;
    }

    /**
     * @param array $recordings
     *
     * @return CompanyDTO
     */
    public function setRecordings($recordings)
    {
        $this->recordings = $recordings;

        return $this;
    }

    /**
     * @return array
     */
    public function getRecordings()
    {
        return $this->recordings;
    }

    /**
     * @param array $relFeatures
     *
     * @return CompanyDTO
     */
    public function setRelFeatures($relFeatures)
    {
        $this->relFeatures = $relFeatures;

        return $this;
    }

    /**
     * @return array
     */
    public function getRelFeatures()
    {
        return $this->relFeatures;
    }

    /**
     * @param array $callACLPatterns
     *
     * @return CompanyDTO
     */
    public function setCallACLPatterns($callACLPatterns)
    {
        $this->callACLPatterns = $callACLPatterns;

        return $this;
    }

    /**
     * @return array
     */
    public function getCallACLPatterns()
    {
        return $this->callACLPatterns;
    }

    /**
     * @param array $domains
     *
     * @return CompanyDTO
     */
    public function setDomains($domains)
    {
        $this->domains = $domains;

        return $this;
    }

    /**
     * @return array
     */
    public function getDomains()
    {
        return $this->domains;
    }
}

