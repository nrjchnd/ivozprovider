<?php

namespace Ivoz\Domain\Model\Company;

use Core\Domain\Model\EntityInterface;

interface CompanyInterface extends EntityInterface
{
    /**
     * Set type
     *
     * @param string $type
     *
     * @return CompanyInterface
     */
    public function setType($type);


    /**
     * Get type
     *
     * @return string
     */
    public function getType();


    /**
     * Set name
     *
     * @param string $name
     *
     * @return CompanyInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set domainUsers
     *
     * @param string $domainUsers
     *
     * @return CompanyInterface
     */
    public function setDomainUsers($domainUsers = null);


    /**
     * Get domainUsers
     *
     * @return string
     */
    public function getDomainUsers();


    /**
     * Set nif
     *
     * @param string $nif
     *
     * @return CompanyInterface
     */
    public function setNif($nif);


    /**
     * Get nif
     *
     * @return string
     */
    public function getNif();


    /**
     * Set externalMaxCalls
     *
     * @param integer $externalMaxCalls
     *
     * @return CompanyInterface
     */
    public function setExternalMaxCalls($externalMaxCalls);


    /**
     * Get externalMaxCalls
     *
     * @return integer
     */
    public function getExternalMaxCalls();


    /**
     * Set postalAddress
     *
     * @param string $postalAddress
     *
     * @return CompanyInterface
     */
    public function setPostalAddress($postalAddress);


    /**
     * Get postalAddress
     *
     * @return string
     */
    public function getPostalAddress();


    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return CompanyInterface
     */
    public function setPostalCode($postalCode);


    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode();


    /**
     * Set town
     *
     * @param string $town
     *
     * @return CompanyInterface
     */
    public function setTown($town);


    /**
     * Get town
     *
     * @return string
     */
    public function getTown();


    /**
     * Set province
     *
     * @param string $province
     *
     * @return CompanyInterface
     */
    public function setProvince($province);


    /**
     * Get province
     *
     * @return string
     */
    public function getProvince();


    /**
     * Set countryName
     *
     * @param string $countryName
     *
     * @return CompanyInterface
     */
    public function setCountryName($countryName);


    /**
     * Get countryName
     *
     * @return string
     */
    public function getCountryName();


    /**
     * Set outboundPrefix
     *
     * @param string $outboundPrefix
     *
     * @return CompanyInterface
     */
    public function setOutboundPrefix($outboundPrefix = null);


    /**
     * Get outboundPrefix
     *
     * @return string
     */
    public function getOutboundPrefix();


    /**
     * Set ipfilter
     *
     * @param boolean $ipfilter
     *
     * @return CompanyInterface
     */
    public function setIpfilter($ipfilter = null);


    /**
     * Get ipfilter
     *
     * @return boolean
     */
    public function getIpfilter();


    /**
     * Set onDemandRecord
     *
     * @param boolean $onDemandRecord
     *
     * @return CompanyInterface
     */
    public function setOnDemandRecord($onDemandRecord = null);


    /**
     * Get onDemandRecord
     *
     * @return boolean
     */
    public function getOnDemandRecord();


    /**
     * Set onDemandRecordCode
     *
     * @param string $onDemandRecordCode
     *
     * @return CompanyInterface
     */
    public function setOnDemandRecordCode($onDemandRecordCode = null);


    /**
     * Get onDemandRecordCode
     *
     * @return string
     */
    public function getOnDemandRecordCode();


    /**
     * Set areaCode
     *
     * @param string $areaCode
     *
     * @return CompanyInterface
     */
    public function setAreaCode($areaCode = null);


    /**
     * Get areaCode
     *
     * @return string
     */
    public function getAreaCode();


    /**
     * Set externallyextraopts
     *
     * @param string $externallyextraopts
     *
     * @return CompanyInterface
     */
    public function setExternallyextraopts($externallyextraopts = null);


    /**
     * Get externallyextraopts
     *
     * @return string
     */
    public function getExternallyextraopts();


    /**
     * Set recordingsLimitMB
     *
     * @param integer $recordingsLimitMB
     *
     * @return CompanyInterface
     */
    public function setRecordingsLimitMB($recordingsLimitMB = null);


    /**
     * Get recordingsLimitMB
     *
     * @return integer
     */
    public function getRecordingsLimitMB();


    /**
     * Set recordingsLimitEmail
     *
     * @param string $recordingsLimitEmail
     *
     * @return CompanyInterface
     */
    public function setRecordingsLimitEmail($recordingsLimitEmail = null);


    /**
     * Get recordingsLimitEmail
     *
     * @return string
     */
    public function getRecordingsLimitEmail();


    /**
     * Set language
     *
     * @param \Ivoz\Domain\Model\Language\LanguageInterface $language
     *
     * @return CompanyInterface
     */
    public function setLanguage(\Ivoz\Domain\Model\Language\LanguageInterface $language = null);


    /**
     * Get language
     *
     * @return \Ivoz\Domain\Model\Language\LanguageInterface
     */
    public function getLanguage();


    /**
     * Set mediaRelaySets
     *
     * @param \Ivoz\Domain\Model\MediaRelaySet\MediaRelaySetInterface $mediaRelaySets
     *
     * @return CompanyInterface
     */
    public function setMediaRelaySets(\Ivoz\Domain\Model\MediaRelaySet\MediaRelaySetInterface $mediaRelaySets = null);


    /**
     * Get mediaRelaySets
     *
     * @return \Ivoz\Domain\Model\MediaRelaySet\MediaRelaySetInterface
     */
    public function getMediaRelaySets();


    /**
     * Set defaultTimezone
     *
     * @param \Ivoz\Domain\Model\Timezone\TimezoneInterface $defaultTimezone
     *
     * @return CompanyInterface
     */
    public function setDefaultTimezone(\Ivoz\Domain\Model\Timezone\TimezoneInterface $defaultTimezone = null);


    /**
     * Get defaultTimezone
     *
     * @return \Ivoz\Domain\Model\Timezone\TimezoneInterface
     */
    public function getDefaultTimezone();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return CompanyInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand = null);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set applicationServer
     *
     * @param \Ivoz\Domain\Model\ApplicationServer\ApplicationServerInterface $applicationServer
     *
     * @return CompanyInterface
     */
    public function setApplicationServer(\Ivoz\Domain\Model\ApplicationServer\ApplicationServerInterface $applicationServer = null);


    /**
     * Get applicationServer
     *
     * @return \Ivoz\Domain\Model\ApplicationServer\ApplicationServerInterface
     */
    public function getApplicationServer();


    /**
     * Set country
     *
     * @param \Ivoz\Domain\Model\Country\CountryInterface $country
     *
     * @return CompanyInterface
     */
    public function setCountry(\Ivoz\Domain\Model\Country\CountryInterface $country = null);


    /**
     * Get country
     *
     * @return \Ivoz\Domain\Model\Country\CountryInterface
     */
    public function getCountry();


    /**
     * Set outgoingDDI
     *
     * @param \Ivoz\Domain\Model\DDI\DDIInterface $outgoingDDI
     *
     * @return CompanyInterface
     */
    public function setOutgoingDDI(\Ivoz\Domain\Model\DDI\DDIInterface $outgoingDDI = null);


    /**
     * Get outgoingDDI
     *
     * @return \Ivoz\Domain\Model\DDI\DDIInterface
     */
    public function getOutgoingDDI();



}

