<?php

namespace Ivoz\Domain\Model\TransformationRulesetGroupsTrunk;

use Core\Domain\Model\EntityInterface;

interface TransformationRulesetGroupsTrunkInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return TransformationRulesetGroupsTrunkInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set callerIn
     *
     * @param integer $callerIn
     *
     * @return TransformationRulesetGroupsTrunkInterface
     */
    public function setCallerIn($callerIn = null);


    /**
     * Get callerIn
     *
     * @return integer
     */
    public function getCallerIn();


    /**
     * Set calleeIn
     *
     * @param integer $calleeIn
     *
     * @return TransformationRulesetGroupsTrunkInterface
     */
    public function setCalleeIn($calleeIn = null);


    /**
     * Get calleeIn
     *
     * @return integer
     */
    public function getCalleeIn();


    /**
     * Set callerOut
     *
     * @param integer $callerOut
     *
     * @return TransformationRulesetGroupsTrunkInterface
     */
    public function setCallerOut($callerOut = null);


    /**
     * Get callerOut
     *
     * @return integer
     */
    public function getCallerOut();


    /**
     * Set calleeOut
     *
     * @param integer $calleeOut
     *
     * @return TransformationRulesetGroupsTrunkInterface
     */
    public function setCalleeOut($calleeOut = null);


    /**
     * Get calleeOut
     *
     * @return integer
     */
    public function getCalleeOut();


    /**
     * Set description
     *
     * @param string $description
     *
     * @return TransformationRulesetGroupsTrunkInterface
     */
    public function setDescription($description);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Set automatic
     *
     * @param boolean $automatic
     *
     * @return TransformationRulesetGroupsTrunkInterface
     */
    public function setAutomatic($automatic);


    /**
     * Get automatic
     *
     * @return boolean
     */
    public function getAutomatic();


    /**
     * Set internationalCode
     *
     * @param string $internationalCode
     *
     * @return TransformationRulesetGroupsTrunkInterface
     */
    public function setInternationalCode($internationalCode = null);


    /**
     * Get internationalCode
     *
     * @return string
     */
    public function getInternationalCode();


    /**
     * Set nationalNumLength
     *
     * @param integer $nationalNumLength
     *
     * @return TransformationRulesetGroupsTrunkInterface
     */
    public function setNationalNumLength($nationalNumLength = null);


    /**
     * Get nationalNumLength
     *
     * @return integer
     */
    public function getNationalNumLength();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return TransformationRulesetGroupsTrunkInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set country
     *
     * @param \Ivoz\Domain\Model\Country\CountryInterface $country
     *
     * @return TransformationRulesetGroupsTrunkInterface
     */
    public function setCountry(\Ivoz\Domain\Model\Country\CountryInterface $country = null);


    /**
     * Get country
     *
     * @return \Ivoz\Domain\Model\Country\CountryInterface
     */
    public function getCountry();



}

