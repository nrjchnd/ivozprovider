<?php

namespace Kam\Domain\Model\Rtpproxy;

use Core\Domain\Model\EntityInterface;

interface RtpproxyInterface extends EntityInterface
{
    /**
     * Set setid
     *
     * @param string $setid
     *
     * @return RtpproxyInterface
     */
    public function setSetid($setid);


    /**
     * Get setid
     *
     * @return string
     */
    public function getSetid();


    /**
     * Set url
     *
     * @param string $url
     *
     * @return RtpproxyInterface
     */
    public function setUrl($url);


    /**
     * Get url
     *
     * @return string
     */
    public function getUrl();


    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return RtpproxyInterface
     */
    public function setFlags($flags);


    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags();


    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return RtpproxyInterface
     */
    public function setWeight($weight);


    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight();


    /**
     * Set description
     *
     * @param string $description
     *
     * @return RtpproxyInterface
     */
    public function setDescription($description = null);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Set mediaRelaySet
     *
     * @param \Ivoz\Domain\Model\MediaRelaySet\MediaRelaySetInterface $mediaRelaySet
     *
     * @return RtpproxyInterface
     */
    public function setMediaRelaySet(\Ivoz\Domain\Model\MediaRelaySet\MediaRelaySetInterface $mediaRelaySet = null);


    /**
     * Get mediaRelaySet
     *
     * @return \Ivoz\Domain\Model\MediaRelaySet\MediaRelaySetInterface
     */
    public function getMediaRelaySet();



}

