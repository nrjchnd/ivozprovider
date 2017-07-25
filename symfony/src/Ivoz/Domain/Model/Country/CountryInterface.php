<?php

namespace Ivoz\Domain\Model\Country;

use Core\Domain\Model\EntityInterface;

interface CountryInterface extends EntityInterface
{
    /**
     * Set code
     *
     * @param string $code
     *
     * @return CountryInterface
     */
    public function setCode($code);


    /**
     * Get code
     *
     * @return string
     */
    public function getCode();


    /**
     * Set callingCode
     *
     * @param integer $callingCode
     *
     * @return CountryInterface
     */
    public function setCallingCode($callingCode = null);


    /**
     * Get callingCode
     *
     * @return integer
     */
    public function getCallingCode();


    /**
     * Set intCode
     *
     * @param string $intCode
     *
     * @return CountryInterface
     */
    public function setIntCode($intCode = null);


    /**
     * Get intCode
     *
     * @return string
     */
    public function getIntCode();


    /**
     * Set e164Pattern
     *
     * @param string $e164Pattern
     *
     * @return CountryInterface
     */
    public function setE164Pattern($e164Pattern = null);


    /**
     * Get e164Pattern
     *
     * @return string
     */
    public function getE164Pattern();


    /**
     * Set nationalCC
     *
     * @param boolean $nationalCC
     *
     * @return CountryInterface
     */
    public function setNationalCC($nationalCC);


    /**
     * Get nationalCC
     *
     * @return boolean
     */
    public function getNationalCC();


    /**
     * Set name
     *
     * @param Name $name
     *
     * @return CountryInterface
     */
    public function setName(Name $name);


    /**
     * Get name
     *
     * @return Name
     */
    public function getName();


    /**
     * Set zone
     *
     * @param Zone $zone
     *
     * @return CountryInterface
     */
    public function setZone(Zone $zone);


    /**
     * Get zone
     *
     * @return Zone
     */
    public function getZone();

}

