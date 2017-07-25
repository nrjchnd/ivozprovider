<?php

namespace Kam\Domain\Model\TrunksUacreg;

use Core\Domain\Model\EntityInterface;

interface TrunksUacregInterface extends EntityInterface
{
    /**
     * Set lUuid
     *
     * @param string $lUuid
     *
     * @return TrunksUacregInterface
     */
    public function setLUuid($lUuid);


    /**
     * Get lUuid
     *
     * @return string
     */
    public function getLUuid();


    /**
     * Set lUsername
     *
     * @param string $lUsername
     *
     * @return TrunksUacregInterface
     */
    public function setLUsername($lUsername);


    /**
     * Get lUsername
     *
     * @return string
     */
    public function getLUsername();


    /**
     * Set lDomain
     *
     * @param string $lDomain
     *
     * @return TrunksUacregInterface
     */
    public function setLDomain($lDomain);


    /**
     * Get lDomain
     *
     * @return string
     */
    public function getLDomain();


    /**
     * Set rUsername
     *
     * @param string $rUsername
     *
     * @return TrunksUacregInterface
     */
    public function setRUsername($rUsername);


    /**
     * Get rUsername
     *
     * @return string
     */
    public function getRUsername();


    /**
     * Set rDomain
     *
     * @param string $rDomain
     *
     * @return TrunksUacregInterface
     */
    public function setRDomain($rDomain);


    /**
     * Get rDomain
     *
     * @return string
     */
    public function getRDomain();


    /**
     * Set realm
     *
     * @param string $realm
     *
     * @return TrunksUacregInterface
     */
    public function setRealm($realm);


    /**
     * Get realm
     *
     * @return string
     */
    public function getRealm();


    /**
     * Set authUsername
     *
     * @param string $authUsername
     *
     * @return TrunksUacregInterface
     */
    public function setAuthUsername($authUsername);


    /**
     * Get authUsername
     *
     * @return string
     */
    public function getAuthUsername();


    /**
     * Set authPassword
     *
     * @param string $authPassword
     *
     * @return TrunksUacregInterface
     */
    public function setAuthPassword($authPassword);


    /**
     * Get authPassword
     *
     * @return string
     */
    public function getAuthPassword();


    /**
     * Set authProxy
     *
     * @param string $authProxy
     *
     * @return TrunksUacregInterface
     */
    public function setAuthProxy($authProxy);


    /**
     * Get authProxy
     *
     * @return string
     */
    public function getAuthProxy();


    /**
     * Set expires
     *
     * @param integer $expires
     *
     * @return TrunksUacregInterface
     */
    public function setExpires($expires);


    /**
     * Get expires
     *
     * @return integer
     */
    public function getExpires();


    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return TrunksUacregInterface
     */
    public function setFlags($flags);


    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags();


    /**
     * Set regDelay
     *
     * @param integer $regDelay
     *
     * @return TrunksUacregInterface
     */
    public function setRegDelay($regDelay);


    /**
     * Get regDelay
     *
     * @return integer
     */
    public function getRegDelay();


    /**
     * Set multiddi
     *
     * @param boolean $multiddi
     *
     * @return TrunksUacregInterface
     */
    public function setMultiddi($multiddi);


    /**
     * Get multiddi
     *
     * @return boolean
     */
    public function getMultiddi();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return TrunksUacregInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set peeringContract
     *
     * @param \Ivoz\Domain\Model\PeeringContract\PeeringContractInterface $peeringContract
     *
     * @return TrunksUacregInterface
     */
    public function setPeeringContract(\Ivoz\Domain\Model\PeeringContract\PeeringContractInterface $peeringContract);


    /**
     * Get peeringContract
     *
     * @return \Ivoz\Domain\Model\PeeringContract\PeeringContractInterface
     */
    public function getPeeringContract();



}

