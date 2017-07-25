<?php

namespace Ivoz\Domain\Model\ProxyTrunk;

use Core\Domain\Model\EntityInterface;

interface ProxyTrunkInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return ProxyTrunkInterface
     */
    public function setName($name = null);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return ProxyTrunkInterface
     */
    public function setIp($ip);


    /**
     * Get ip
     *
     * @return string
     */
    public function getIp();



}

