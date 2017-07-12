<?php

namespace Kam\Domain\Model\TrunksUacreg;



interface TrunksUacregInterface
{
    /**
     * Get lUuid
     *
     * @return string
     */
    public function getLUuid();


    /**
     * Get lUsername
     *
     * @return string
     */
    public function getLUsername();


    /**
     * Get lDomain
     *
     * @return string
     */
    public function getLDomain();


    /**
     * Get rUsername
     *
     * @return string
     */
    public function getRUsername();


    /**
     * Get rDomain
     *
     * @return string
     */
    public function getRDomain();


    /**
     * Get realm
     *
     * @return string
     */
    public function getRealm();


    /**
     * Get authUsername
     *
     * @return string
     */
    public function getAuthUsername();


    /**
     * Get authPassword
     *
     * @return string
     */
    public function getAuthPassword();


    /**
     * Get authProxy
     *
     * @return string
     */
    public function getAuthProxy();


    /**
     * Get expires
     *
     * @return integer
     */
    public function getExpires();


    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags();


    /**
     * Get regDelay
     *
     * @return integer
     */
    public function getRegDelay();


    /**
     * Get multiddi
     *
     * @return boolean
     */
    public function getMultiddi();


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Get peeringContract
     *
     * @return \Ivoz\Domain\Model\PeeringContract\PeeringContractInterface
     */
    public function getPeeringContract();



}

