<?php

namespace Ivoz\Domain\Model\LcrRule;

use Core\Domain\Model\EntityInterface;

interface LcrRuleInterface extends EntityInterface
{
    /**
     * Set lcrId
     *
     * @param integer $lcrId
     *
     * @return LcrRuleInterface
     */
    public function setLcrId($lcrId);


    /**
     * Get lcrId
     *
     * @return integer
     */
    public function getLcrId();


    /**
     * Set prefix
     *
     * @param string $prefix
     *
     * @return LcrRuleInterface
     */
    public function setPrefix($prefix = null);


    /**
     * Get prefix
     *
     * @return string
     */
    public function getPrefix();


    /**
     * Set fromUri
     *
     * @param string $fromUri
     *
     * @return LcrRuleInterface
     */
    public function setFromUri($fromUri = null);


    /**
     * Get fromUri
     *
     * @return string
     */
    public function getFromUri();


    /**
     * Set requestUri
     *
     * @param string $requestUri
     *
     * @return LcrRuleInterface
     */
    public function setRequestUri($requestUri = null);


    /**
     * Get requestUri
     *
     * @return string
     */
    public function getRequestUri();


    /**
     * Set stopper
     *
     * @param integer $stopper
     *
     * @return LcrRuleInterface
     */
    public function setStopper($stopper);


    /**
     * Get stopper
     *
     * @return integer
     */
    public function getStopper();


    /**
     * Set enabled
     *
     * @param integer $enabled
     *
     * @return LcrRuleInterface
     */
    public function setEnabled($enabled);


    /**
     * Get enabled
     *
     * @return integer
     */
    public function getEnabled();


    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return LcrRuleInterface
     */
    public function setTag($tag);


    /**
     * Get tag
     *
     * @return string
     */
    public function getTag();


    /**
     * Set description
     *
     * @param string $description
     *
     * @return LcrRuleInterface
     */
    public function setDescription($description);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Set routingPattern
     *
     * @param \Ivoz\Domain\Model\RoutingPattern\RoutingPatternInterface $routingPattern
     *
     * @return LcrRuleInterface
     */
    public function setRoutingPattern(\Ivoz\Domain\Model\RoutingPattern\RoutingPatternInterface $routingPattern = null);


    /**
     * Get routingPattern
     *
     * @return \Ivoz\Domain\Model\RoutingPattern\RoutingPatternInterface
     */
    public function getRoutingPattern();


    /**
     * Set outgoingRouting
     *
     * @param \Ivoz\Domain\Model\OutgoingRouting\OutgoingRoutingInterface $outgoingRouting
     *
     * @return LcrRuleInterface
     */
    public function setOutgoingRouting(\Ivoz\Domain\Model\OutgoingRouting\OutgoingRoutingInterface $outgoingRouting);


    /**
     * Get outgoingRouting
     *
     * @return \Ivoz\Domain\Model\OutgoingRouting\OutgoingRoutingInterface
     */
    public function getOutgoingRouting();



}

