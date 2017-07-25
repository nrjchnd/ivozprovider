<?php

namespace Ivoz\Domain\Model\ProxyUser;

use Core\Domain\Model\EntityInterface;

interface ProxyUserInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return ProxyUserInterface
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
     * @return ProxyUserInterface
     */
    public function setIp($ip = null);


    /**
     * Get ip
     *
     * @return string
     */
    public function getIp();



}

