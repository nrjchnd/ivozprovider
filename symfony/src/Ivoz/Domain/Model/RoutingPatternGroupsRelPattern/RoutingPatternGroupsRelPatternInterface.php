<?php

namespace Ivoz\Domain\Model\RoutingPatternGroupsRelPattern;

use Core\Domain\Model\EntityInterface;

interface RoutingPatternGroupsRelPatternInterface extends EntityInterface
{
    /**
     * Set routingPattern
     *
     * @param \Ivoz\Domain\Model\RoutingPattern\RoutingPatternInterface $routingPattern
     *
     * @return RoutingPatternGroupsRelPatternInterface
     */
    public function setRoutingPattern(\Ivoz\Domain\Model\RoutingPattern\RoutingPatternInterface $routingPattern);


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
     * @return RoutingPatternGroupsRelPatternInterface
     */
    public function setRoutingPatternGroup(\Ivoz\Domain\Model\RoutingPatternGroup\RoutingPatternGroupInterface $routingPatternGroup = null);


    /**
     * Get routingPatternGroup
     *
     * @return \Ivoz\Domain\Model\RoutingPatternGroup\RoutingPatternGroupInterface
     */
    public function getRoutingPatternGroup();



}

