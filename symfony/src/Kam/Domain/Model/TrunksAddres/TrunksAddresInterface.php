<?php

namespace Kam\Domain\Model\TrunksAddres;

use Core\Domain\Model\EntityInterface;

interface TrunksAddresInterface extends EntityInterface
{
    /**
     * Set grp
     *
     * @param integer $grp
     *
     * @return TrunksAddresInterface
     */
    public function setGrp($grp);


    /**
     * Get grp
     *
     * @return integer
     */
    public function getGrp();


    /**
     * Set ipAddr
     *
     * @param string $ipAddr
     *
     * @return TrunksAddresInterface
     */
    public function setIpAddr($ipAddr = null);


    /**
     * Get ipAddr
     *
     * @return string
     */
    public function getIpAddr();


    /**
     * Set mask
     *
     * @param integer $mask
     *
     * @return TrunksAddresInterface
     */
    public function setMask($mask);


    /**
     * Get mask
     *
     * @return integer
     */
    public function getMask();


    /**
     * Set port
     *
     * @param integer $port
     *
     * @return TrunksAddresInterface
     */
    public function setPort($port);


    /**
     * Get port
     *
     * @return integer
     */
    public function getPort();


    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return TrunksAddresInterface
     */
    public function setTag($tag = null);


    /**
     * Get tag
     *
     * @return string
     */
    public function getTag();



}

