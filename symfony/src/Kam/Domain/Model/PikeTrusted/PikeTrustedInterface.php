<?php

namespace Kam\Domain\Model\PikeTrusted;

use Core\Domain\Model\EntityInterface;

interface PikeTrustedInterface extends EntityInterface
{
    /**
     * Set srcIp
     *
     * @param string $srcIp
     *
     * @return PikeTrustedInterface
     */
    public function setSrcIp($srcIp = null);


    /**
     * Get srcIp
     *
     * @return string
     */
    public function getSrcIp();


    /**
     * Set proto
     *
     * @param string $proto
     *
     * @return PikeTrustedInterface
     */
    public function setProto($proto = null);


    /**
     * Get proto
     *
     * @return string
     */
    public function getProto();


    /**
     * Set fromPattern
     *
     * @param string $fromPattern
     *
     * @return PikeTrustedInterface
     */
    public function setFromPattern($fromPattern = null);


    /**
     * Get fromPattern
     *
     * @return string
     */
    public function getFromPattern();


    /**
     * Set ruriPattern
     *
     * @param string $ruriPattern
     *
     * @return PikeTrustedInterface
     */
    public function setRuriPattern($ruriPattern = null);


    /**
     * Get ruriPattern
     *
     * @return string
     */
    public function getRuriPattern();


    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return PikeTrustedInterface
     */
    public function setTag($tag = null);


    /**
     * Get tag
     *
     * @return string
     */
    public function getTag();


    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return PikeTrustedInterface
     */
    public function setPriority($priority);


    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority();



}

