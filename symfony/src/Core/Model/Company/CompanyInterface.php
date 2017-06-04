<?php

namespace Core\Model\Company;



interface CompanyInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Get domainUsers
     *
     * @return string
     */
    public function getDomainUsers();


    /**
     * Get nif
     *
     * @return string
     */
    public function getNif();


    /**
     * Get externalMaxCalls
     *
     * @return integer
     */
    public function getExternalMaxCalls();


    /**
     * Get postalAddress
     *
     * @return string
     */
    public function getPostalAddress();


    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode();


    /**
     * Get town
     *
     * @return string
     */
    public function getTown();


    /**
     * Get province
     *
     * @return string
     */
    public function getProvince();


    /**
     * Get country
     *
     * @return string
     */
    public function getCountry();


    /**
     * Get outboundPrefix
     *
     * @return string
     */
    public function getOutboundPrefix();


    /**
     * Get ipfilter
     *
     * @return boolean
     */
    public function getIpfilter();


    /**
     * Get onDemandRecord
     *
     * @return boolean
     */
    public function getOnDemandRecord();


    /**
     * Get onDemandRecordCode
     *
     * @return string
     */
    public function getOnDemandRecordCode();


    /**
     * Get areaCode
     *
     * @return string
     */
    public function getAreaCode();


    /**
     * Get externallyExtraOpts
     *
     * @return string
     */
    public function getExternallyExtraOpts();


    /**
     * Get recordingsLimitMB
     *
     * @return integer
     */
    public function getRecordingsLimitMB();


    /**
     * Get recordingsLimitEmail
     *
     * @return string
     */
    public function getRecordingsLimitEmail();


    /**
     * Get brand
     *
     * @return \Core\Model\Brand\BrandInterfaceInterface
     */
    public function getBrand();


    /**
     * Get language
     *
     * @return \Core\Model\Language\Language
     */
    public function getLanguage();


    /**
     * Get mediaRelaySets
     *
     * @return \Core\Model\MediaRelaySet\MediaRelaySet
     */
    public function getMediaRelaySets();


    /**
     * Get defaultTimezone
     *
     * @return \Core\Model\Timezone\Timezone
     */
    public function getDefaultTimezone();


    /**
     * Get applicationServer
     *
     * @return \Core\Model\ApplicationServer\ApplicationServer
     */
    public function getApplicationServer();


    /**
     * Get countryCode
     *
     * @return \Core\Model\Country\Country
     */
    public function getCountryCode();


    /**
     * Get outgoingDDI
     *
     * @return \Core\Model\DDI\DDI
     */
    public function getOutgoingDDI();



}

