<?php

namespace Ivoz\Domain\Model\Brand;

use Core\Domain\Model\EntityInterface;

interface BrandInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return BrandInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set nif
     *
     * @param string $nif
     *
     * @return BrandInterface
     */
    public function setNif($nif);


    /**
     * Get nif
     *
     * @return string
     */
    public function getNif();


    /**
     * Set domainUsers
     *
     * @param string $domainUsers
     *
     * @return BrandInterface
     */
    public function setDomainUsers($domainUsers = null);


    /**
     * Get domainUsers
     *
     * @return string
     */
    public function getDomainUsers();


    /**
     * Set postalAddress
     *
     * @param string $postalAddress
     *
     * @return BrandInterface
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
     * @return BrandInterface
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
     * @return BrandInterface
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
     * @return BrandInterface
     */
    public function setProvince($province);


    /**
     * Get province
     *
     * @return string
     */
    public function getProvince();


    /**
     * Set country
     *
     * @param string $country
     *
     * @return BrandInterface
     */
    public function setCountry($country);


    /**
     * Get country
     *
     * @return string
     */
    public function getCountry();


    /**
     * Set registryData
     *
     * @param string $registryData
     *
     * @return BrandInterface
     */
    public function setRegistryData($registryData = null);


    /**
     * Get registryData
     *
     * @return string
     */
    public function getRegistryData();


    /**
     * Set fromName
     *
     * @param string $fromName
     *
     * @return BrandInterface
     */
    public function setFromName($fromName = null);


    /**
     * Get fromName
     *
     * @return string
     */
    public function getFromName();


    /**
     * Set fromAddress
     *
     * @param string $fromAddress
     *
     * @return BrandInterface
     */
    public function setFromAddress($fromAddress = null);


    /**
     * Get fromAddress
     *
     * @return string
     */
    public function getFromAddress();


    /**
     * Set recordingsLimitMB
     *
     * @param integer $recordingsLimitMB
     *
     * @return BrandInterface
     */
    public function setRecordingsLimitMB($recordingsLimitMB = null);


    /**
     * Get recordingsLimitMB
     *
     * @return integer
     */
    public function getRecordingsLimitMB();


    /**
     * Set recordingslimitemail
     *
     * @param string $recordingslimitemail
     *
     * @return BrandInterface
     */
    public function setRecordingslimitemail($recordingslimitemail = null);


    /**
     * Get recordingslimitemail
     *
     * @return string
     */
    public function getRecordingslimitemail();


    /**
     * Set language
     *
     * @param \Ivoz\Domain\Model\Language\LanguageInterface $language
     *
     * @return BrandInterface
     */
    public function setLanguage(\Ivoz\Domain\Model\Language\LanguageInterface $language = null);


    /**
     * Get language
     *
     * @return \Ivoz\Domain\Model\Language\LanguageInterface
     */
    public function getLanguage();


    /**
     * Set defaultTimezone
     *
     * @param \Ivoz\Domain\Model\Timezone\TimezoneInterface $defaultTimezone
     *
     * @return BrandInterface
     */
    public function setDefaultTimezone(\Ivoz\Domain\Model\Timezone\TimezoneInterface $defaultTimezone = null);


    /**
     * Get defaultTimezone
     *
     * @return \Ivoz\Domain\Model\Timezone\TimezoneInterface
     */
    public function getDefaultTimezone();


    /**
     * Set logo
     *
     * @param Logo $logo
     *
     * @return BrandInterface
     */
    public function setLogo(Logo $logo);


    /**
     * Get logo
     *
     * @return Logo
     */
    public function getLogo();

}

