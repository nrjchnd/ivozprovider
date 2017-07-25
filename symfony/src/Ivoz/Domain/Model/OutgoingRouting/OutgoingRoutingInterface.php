<?php

namespace Ivoz\Domain\Model\OutgoingRouting;

use Core\Domain\Model\EntityInterface;

interface OutgoingRoutingInterface extends EntityInterface
{
    /**
     * Set type
     *
     * @param string $type
     *
     * @return OutgoingRoutingInterface
     */
    public function setType($type = null);


    /**
     * Get type
     *
     * @return string
     */
    public function getType();


    /**
     * Set priority
     *
     * @param boolean $priority
     *
     * @return OutgoingRoutingInterface
     */
    public function setPriority($priority);


    /**
     * Get priority
     *
     * @return boolean
     */
    public function getPriority();


    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return OutgoingRoutingInterface
     */
    public function setWeight($weight);


    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return OutgoingRoutingInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


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
     * @return OutgoingRoutingInterface
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
     * @return OutgoingRoutingInterface
     */
    public function setPeeringContract(\Ivoz\Domain\Model\PeeringContract\PeeringContractInterface $peeringContract);


    /**
     * Get peeringContract
     *
     * @return \Ivoz\Domain\Model\PeeringContract\PeeringContractInterface
     */
    public function getPeeringContract();


    /**
     * Set routingPattern
     *
     * @param \Ivoz\Domain\Model\RoutingPattern\RoutingPatternInterface $routingPattern
     *
     * @return OutgoingRoutingInterface
     */
    public function setRoutingPattern(\Ivoz\Domain\Model\RoutingPattern\RoutingPatternInterface $routingPattern = null);


    /**
     * Get routingPattern
     *
     * @return \Ivoz\Domain\Model\RoutingPattern\RoutingPatternInterface
     */
    public function getRoutingPattern();


    /**
     * Set routingPatternGroup
     *
     * @param \Ivoz\Domain\Model\RoutingPatternGroup\RoutingPatternGroupInterface $routingPatternGroup
     *
     * @return OutgoingRoutingInterface
     */
    public function setRoutingPatternGroup(\Ivoz\Domain\Model\RoutingPatternGroup\RoutingPatternGroupInterface $routingPatternGroup = null);


    /**
     * Get routingPatternGroup
     *
     * @return \Ivoz\Domain\Model\RoutingPatternGroup\RoutingPatternGroupInterface
     */
    public function getRoutingPatternGroup();



}

