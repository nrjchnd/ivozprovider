<?php

namespace Kam\Domain\Model\AccCdr;

use Core\Domain\Model\EntityInterface;

interface AccCdrInterface extends EntityInterface
{
    /**
     * Set proxy
     *
     * @param string $proxy
     *
     * @return AccCdrInterface
     */
    public function setProxy($proxy = null);


    /**
     * Get proxy
     *
     * @return string
     */
    public function getProxy();


    /**
     * Set startTimeUtc
     *
     * @param \DateTime $startTimeUtc
     *
     * @return AccCdrInterface
     */
    public function setStartTimeUtc($startTimeUtc);


    /**
     * Get startTimeUtc
     *
     * @return \DateTime
     */
    public function getStartTimeUtc();


    /**
     * Set endTimeUtc
     *
     * @param \DateTime $endTimeUtc
     *
     * @return AccCdrInterface
     */
    public function setEndTimeUtc($endTimeUtc);


    /**
     * Get endTimeUtc
     *
     * @return \DateTime
     */
    public function getEndTimeUtc();


    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return AccCdrInterface
     */
    public function setStartTime($startTime);


    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime();


    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return AccCdrInterface
     */
    public function setEndTime($endTime);


    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime();


    /**
     * Set duration
     *
     * @param float $duration
     *
     * @return AccCdrInterface
     */
    public function setDuration($duration);


    /**
     * Get duration
     *
     * @return float
     */
    public function getDuration();


    /**
     * Set caller
     *
     * @param string $caller
     *
     * @return AccCdrInterface
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
     * @return AccCdrInterface
     */
    public function setCallee($callee = null);


    /**
     * Get callee
     *
     * @return string
     */
    public function getCallee();


    /**
     * Set referee
     *
     * @param string $referee
     *
     * @return AccCdrInterface
     */
    public function setReferee($referee = null);


    /**
     * Get referee
     *
     * @return string
     */
    public function getReferee();


    /**
     * Set referrer
     *
     * @param string $referrer
     *
     * @return AccCdrInterface
     */
    public function setReferrer($referrer = null);


    /**
     * Get referrer
     *
     * @return string
     */
    public function getReferrer();


    /**
     * Set asiden
     *
     * @param string $asiden
     *
     * @return AccCdrInterface
     */
    public function setAsiden($asiden = null);


    /**
     * Get asiden
     *
     * @return string
     */
    public function getAsiden();


    /**
     * Set asaddress
     *
     * @param string $asaddress
     *
     * @return AccCdrInterface
     */
    public function setAsaddress($asaddress = null);


    /**
     * Get asaddress
     *
     * @return string
     */
    public function getAsaddress();


    /**
     * Set callid
     *
     * @param string $callid
     *
     * @return AccCdrInterface
     */
    public function setCallid($callid = null);


    /**
     * Get callid
     *
     * @return string
     */
    public function getCallid();


    /**
     * Set callidhash
     *
     * @param string $callidhash
     *
     * @return AccCdrInterface
     */
    public function setCallidhash($callidhash = null);


    /**
     * Get callidhash
     *
     * @return string
     */
    public function getCallidhash();


    /**
     * Set xcallid
     *
     * @param string $xcallid
     *
     * @return AccCdrInterface
     */
    public function setXcallid($xcallid = null);


    /**
     * Get xcallid
     *
     * @return string
     */
    public function getXcallid();


    /**
     * Set parsed
     *
     * @param string $parsed
     *
     * @return AccCdrInterface
     */
    public function setParsed($parsed = null);


    /**
     * Get parsed
     *
     * @return string
     */
    public function getParsed();


    /**
     * Set diversion
     *
     * @param string $diversion
     *
     * @return AccCdrInterface
     */
    public function setDiversion($diversion = null);


    /**
     * Get diversion
     *
     * @return string
     */
    public function getDiversion();


    /**
     * Set peeringcontractid
     *
     * @param string $peeringcontractid
     *
     * @return AccCdrInterface
     */
    public function setPeeringcontractid($peeringcontractid = null);


    /**
     * Get peeringcontractid
     *
     * @return string
     */
    public function getPeeringcontractid();


    /**
     * Set bounced
     *
     * @param string $bounced
     *
     * @return AccCdrInterface
     */
    public function setBounced($bounced);


    /**
     * Get bounced
     *
     * @return string
     */
    public function getBounced();


    /**
     * Set externallyrated
     *
     * @param boolean $externallyrated
     *
     * @return AccCdrInterface
     */
    public function setExternallyrated($externallyrated = null);


    /**
     * Get externallyrated
     *
     * @return boolean
     */
    public function getExternallyrated();


    /**
     * Set metered
     *
     * @param boolean $metered
     *
     * @return AccCdrInterface
     */
    public function setMetered($metered = null);


    /**
     * Get metered
     *
     * @return boolean
     */
    public function getMetered();


    /**
     * Set meteringdate
     *
     * @param \DateTime $meteringdate
     *
     * @return AccCdrInterface
     */
    public function setMeteringdate($meteringdate = null);


    /**
     * Get meteringdate
     *
     * @return \DateTime
     */
    public function getMeteringdate();


    /**
     * Set pricingplanname
     *
     * @param string $pricingplanname
     *
     * @return AccCdrInterface
     */
    public function setPricingplanname($pricingplanname = null);


    /**
     * Get pricingplanname
     *
     * @return string
     */
    public function getPricingplanname();


    /**
     * Set targetpatternname
     *
     * @param string $targetpatternname
     *
     * @return AccCdrInterface
     */
    public function setTargetpatternname($targetpatternname = null);


    /**
     * Get targetpatternname
     *
     * @return string
     */
    public function getTargetpatternname();


    /**
     * Set price
     *
     * @param string $price
     *
     * @return AccCdrInterface
     */
    public function setPrice($price = null);


    /**
     * Get price
     *
     * @return string
     */
    public function getPrice();


    /**
     * Set pricingplandetails
     *
     * @param string $pricingplandetails
     *
     * @return AccCdrInterface
     */
    public function setPricingplandetails($pricingplandetails = null);


    /**
     * Get pricingplandetails
     *
     * @return string
     */
    public function getPricingplandetails();


    /**
     * Set direction
     *
     * @param string $direction
     *
     * @return AccCdrInterface
     */
    public function setDirection($direction = null);


    /**
     * Get direction
     *
     * @return string
     */
    public function getDirection();


    /**
     * Set remeteringdate
     *
     * @param \DateTime $remeteringdate
     *
     * @return AccCdrInterface
     */
    public function setRemeteringdate($remeteringdate = null);


    /**
     * Get remeteringdate
     *
     * @return \DateTime
     */
    public function getRemeteringdate();


    /**
     * Set pricingPlan
     *
     * @param \Ivoz\Domain\Model\PricingPlan\PricingPlanInterface $pricingPlan
     *
     * @return AccCdrInterface
     */
    public function setPricingPlan(\Ivoz\Domain\Model\PricingPlan\PricingPlanInterface $pricingPlan = null);


    /**
     * Get pricingPlan
     *
     * @return \Ivoz\Domain\Model\PricingPlan\PricingPlanInterface
     */
    public function getPricingPlan();


    /**
     * Set targetPattern
     *
     * @param \Ivoz\Domain\Model\TargetPattern\TargetPatternInterface $targetPattern
     *
     * @return AccCdrInterface
     */
    public function setTargetPattern(\Ivoz\Domain\Model\TargetPattern\TargetPatternInterface $targetPattern = null);


    /**
     * Get targetPattern
     *
     * @return \Ivoz\Domain\Model\TargetPattern\TargetPatternInterface
     */
    public function getTargetPattern();


    /**
     * Set invoice
     *
     * @param \Ivoz\Domain\Model\Invoice\InvoiceInterface $invoice
     *
     * @return AccCdrInterface
     */
    public function setInvoice(\Ivoz\Domain\Model\Invoice\InvoiceInterface $invoice = null);


    /**
     * Get invoice
     *
     * @return \Ivoz\Domain\Model\Invoice\InvoiceInterface
     */
    public function getInvoice();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return AccCdrInterface
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
     * @return AccCdrInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();



}

