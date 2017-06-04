<?php

namespace Core\Model\LcrRuleTarget;



interface LcrRuleTargetInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();


    /**
     * Get lcrId
     *
     * @return integer
     */
    public function getLcrId();


    /**
     * Get priority
     *
     * @return boolean
     */
    public function getPriority();


    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight();


    /**
     * Get rule
     *
     * @return \Core\Model\LcrRule\LcrRule
     */
    public function getRule();


    /**
     * Get gw
     *
     * @return \Core\Model\LcrGateway\LcrGateway
     */
    public function getGw();


    /**
     * Get outgoingRouting
     *
     * @return \Core\Model\OutgoingRouting\OutgoingRouting
     */
    public function getOutgoingRouting();



}

