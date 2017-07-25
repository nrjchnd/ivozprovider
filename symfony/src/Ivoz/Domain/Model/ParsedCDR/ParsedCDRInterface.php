<?php

namespace Ivoz\Domain\Model\ParsedCDR;

use Core\Domain\Model\EntityInterface;

interface ParsedCDRInterface extends EntityInterface
{
    /**
     * Set statId
     *
     * @param integer $statId
     *
     * @return ParsedCDRInterface
     */
    public function setStatId($statId = null);


    /**
     * Get statId
     *
     * @return integer
     */
    public function getStatId();


    /**
     * Set xstatId
     *
     * @param integer $xstatId
     *
     * @return ParsedCDRInterface
     */
    public function setXstatId($xstatId = null);


    /**
     * Get xstatId
     *
     * @return integer
     */
    public function getXstatId();


    /**
     * Set statType
     *
     * @param string $statType
     *
     * @return ParsedCDRInterface
     */
    public function setStatType($statType = null);


    /**
     * Get statType
     *
     * @return string
     */
    public function getStatType();


    /**
     * Set initialLeg
     *
     * @param string $initialLeg
     *
     * @return ParsedCDRInterface
     */
    public function setInitialLeg($initialLeg = null);


    /**
     * Get initialLeg
     *
     * @return string
     */
    public function getInitialLeg();


    /**
     * Set initialLegHash
     *
     * @param string $initialLegHash
     *
     * @return ParsedCDRInterface
     */
    public function setInitialLegHash($initialLegHash = null);


    /**
     * Get initialLegHash
     *
     * @return string
     */
    public function getInitialLegHash();


    /**
     * Set cid
     *
     * @param string $cid
     *
     * @return ParsedCDRInterface
     */
    public function setCid($cid = null);


    /**
     * Get cid
     *
     * @return string
     */
    public function getCid();


    /**
     * Set cidHash
     *
     * @param string $cidHash
     *
     * @return ParsedCDRInterface
     */
    public function setCidHash($cidHash = null);


    /**
     * Get cidHash
     *
     * @return string
     */
    public function getCidHash();


    /**
     * Set xcid
     *
     * @param string $xcid
     *
     * @return ParsedCDRInterface
     */
    public function setXcid($xcid = null);


    /**
     * Get xcid
     *
     * @return string
     */
    public function getXcid();


    /**
     * Set xcidHash
     *
     * @param string $xcidHash
     *
     * @return ParsedCDRInterface
     */
    public function setXcidHash($xcidHash = null);


    /**
     * Get xcidHash
     *
     * @return string
     */
    public function getXcidHash();


    /**
     * Set proxies
     *
     * @param string $proxies
     *
     * @return ParsedCDRInterface
     */
    public function setProxies($proxies = null);


    /**
     * Get proxies
     *
     * @return string
     */
    public function getProxies();


    /**
     * Set type
     *
     * @param string $type
     *
     * @return ParsedCDRInterface
     */
    public function setType($type = null);


    /**
     * Get type
     *
     * @return string
     */
    public function getType();


    /**
     * Set subtype
     *
     * @param string $subtype
     *
     * @return ParsedCDRInterface
     */
    public function setSubtype($subtype = null);


    /**
     * Get subtype
     *
     * @return string
     */
    public function getSubtype();


    /**
     * Set calldate
     *
     * @param \DateTime $calldate
     *
     * @return ParsedCDRInterface
     */
    public function setCalldate($calldate);


    /**
     * Get calldate
     *
     * @return \DateTime
     */
    public function getCalldate();


    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return ParsedCDRInterface
     */
    public function setDuration($duration = null);


    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration();


    /**
     * Set aParty
     *
     * @param string $aParty
     *
     * @return ParsedCDRInterface
     */
    public function setAParty($aParty = null);


    /**
     * Get aParty
     *
     * @return string
     */
    public function getAParty();


    /**
     * Set bParty
     *
     * @param string $bParty
     *
     * @return ParsedCDRInterface
     */
    public function setBParty($bParty = null);


    /**
     * Get bParty
     *
     * @return string
     */
    public function getBParty();


    /**
     * Set caller
     *
     * @param string $caller
     *
     * @return ParsedCDRInterface
     */
    public function setCaller($caller = null);


    /**
     * Get caller
     *
     * @return string
     */
    public function getCaller();


    /**
     * Set callee
     *
     * @param string $callee
     *
     * @return ParsedCDRInterface
     */
    public function setCallee($callee = null);


    /**
     * Get callee
     *
     * @return string
     */
    public function getCallee();


    /**
     * Set xCaller
     *
     * @param string $xCaller
     *
     * @return ParsedCDRInterface
     */
    public function setXCaller($xCaller = null);


    /**
     * Get xCaller
     *
     * @return string
     */
    public function getXCaller();


    /**
     * Set xCallee
     *
     * @param string $xCallee
     *
     * @return ParsedCDRInterface
     */
    public function setXCallee($xCallee = null);


    /**
     * Get xCallee
     *
     * @return string
     */
    public function getXCallee();


    /**
     * Set initialReferrer
     *
     * @param string $initialReferrer
     *
     * @return ParsedCDRInterface
     */
    public function setInitialReferrer($initialReferrer = null);


    /**
     * Get initialReferrer
     *
     * @return string
     */
    public function getInitialReferrer();


    /**
     * Set referrer
     *
     * @param string $referrer
     *
     * @return ParsedCDRInterface
     */
    public function setReferrer($referrer = null);


    /**
     * Get referrer
     *
     * @return string
     */
    public function getReferrer();


    /**
     * Set referee
     *
     * @param string $referee
     *
     * @return ParsedCDRInterface
     */
    public function setReferee($referee = null);


    /**
     * Get referee
     *
     * @return string
     */
    public function getReferee();


    /**
     * Set lastForwarder
     *
     * @param string $lastForwarder
     *
     * @return ParsedCDRInterface
     */
    public function setLastForwarder($lastForwarder = null);


    /**
     * Get lastForwarder
     *
     * @return string
     */
    public function getLastForwarder();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return ParsedCDRInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand = null);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return ParsedCDRInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set peeringContract
     *
     * @param \Ivoz\Domain\Model\PeeringContract\PeeringContractInterface $peeringContract
     *
     * @return ParsedCDRInterface
     */
    public function setPeeringContract(\Ivoz\Domain\Model\PeeringContract\PeeringContractInterface $peeringContract = null);


    /**
     * Get peeringContract
     *
     * @return \Ivoz\Domain\Model\PeeringContract\PeeringContractInterface
     */
    public function getPeeringContract();



}

