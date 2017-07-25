<?php

namespace Ivoz\Domain\Model\ApplicationServer;

use Core\Domain\Model\EntityInterface;

interface ApplicationServerInterface extends EntityInterface
{
    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return ApplicationServerInterface
     */
    public function setIp($ip);


    /**
     * Get ip
     *
     * @return string
     */
    public function getIp();


    /**
     * Set name
     *
     * @param string $name
     *
     * @return ApplicationServerInterface
     */
    public function setName($name = null);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();



}

