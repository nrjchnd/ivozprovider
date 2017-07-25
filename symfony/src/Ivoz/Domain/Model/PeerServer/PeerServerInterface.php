<?php

namespace Ivoz\Domain\Model\PeerServer;

use Core\Domain\Model\EntityInterface;

interface PeerServerInterface extends EntityInterface
{
    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return PeerServerInterface
     */
    public function setIp($ip = null);


    /**
     * Get ip
     *
     * @return string
     */
    public function getIp();


    /**
     * Set hostname
     *
     * @param string $hostname
     *
     * @return PeerServerInterface
     */
    public function setHostname($hostname = null);


    /**
     * Get hostname
     *
     * @return string
     */
    public function getHostname();


    /**
     * Set port
     *
     * @param integer $port
     *
     * @return PeerServerInterface
     */
    public function setPort($port = null);


    /**
     * Get port
     *
     * @return integer
     */
    public function getPort();


    /**
     * Set params
     *
     * @param string $params
     *
     * @return PeerServerInterface
     */
    public function setParams($params = null);


    /**
     * Get params
     *
     * @return string
     */
    public function getParams();


    /**
     * Set uriScheme
     *
     * @param boolean $uriScheme
     *
     * @return PeerServerInterface
     */
    public function setUriScheme($uriScheme = null);


    /**
     * Get uriScheme
     *
     * @return boolean
     */
    public function getUriScheme();


    /**
     * Set transport
     *
     * @param boolean $transport
     *
     * @return PeerServerInterface
     */
    public function setTransport($transport = null);


    /**
     * Get transport
     *
     * @return boolean
     */
    public function getTransport();


    /**
     * Set strip
     *
     * @param boolean $strip
     *
     * @return PeerServerInterface
     */
    public function setStrip($strip = null);


    /**
     * Get strip
     *
     * @return boolean
     */
    public function getStrip();


    /**
     * Set prefix
     *
     * @param string $prefix
     *
     * @return PeerServerInterface
     */
    public function setPrefix($prefix = null);


    /**
     * Get prefix
     *
     * @return string
     */
    public function getPrefix();


    /**
     * Set sendPAI
     *
     * @param boolean $sendPAI
     *
     * @return PeerServerInterface
     */
    public function setSendPAI($sendPAI = null);


    /**
     * Get sendPAI
     *
     * @return boolean
     */
    public function getSendPAI();


    /**
     * Set sendRPID
     *
     * @param boolean $sendRPID
     *
     * @return PeerServerInterface
     */
    public function setSendRPID($sendRPID = null);


    /**
     * Get sendRPID
     *
     * @return boolean
     */
    public function getSendRPID();


    /**
     * Set authNeeded
     *
     * @param string $authNeeded
     *
     * @return PeerServerInterface
     */
    public function setAuthNeeded($authNeeded);


    /**
     * Get authNeeded
     *
     * @return string
     */
    public function getAuthNeeded();


    /**
     * Set authUser
     *
     * @param string $authUser
     *
     * @return PeerServerInterface
     */
    public function setAuthUser($authUser = null);


    /**
     * Get authUser
     *
     * @return string
     */
    public function getAuthUser();


    /**
     * Set authPassword
     *
     * @param string $authPassword
     *
     * @return PeerServerInterface
     */
    public function setAuthPassword($authPassword = null);


    /**
     * Get authPassword
     *
     * @return string
     */
    public function getAuthPassword();


    /**
     * Set sipProxy
     *
     * @param string $sipProxy
     *
     * @return PeerServerInterface
     */
    public function setSipProxy($sipProxy = null);


    /**
     * Get sipProxy
     *
     * @return string
     */
    public function getSipProxy();


    /**
     * Set outboundProxy
     *
     * @param string $outboundProxy
     *
     * @return PeerServerInterface
     */
    public function setOutboundProxy($outboundProxy = null);


    /**
     * Get outboundProxy
     *
     * @return string
     */
    public function getOutboundProxy();


    /**
     * Set fromUser
     *
     * @param string $fromUser
     *
     * @return PeerServerInterface
     */
    public function setFromUser($fromUser = null);


    /**
     * Get fromUser
     *
     * @return string
     */
    public function getFromUser();


    /**
     * Set fromDomain
     *
     * @param string $fromDomain
     *
     * @return PeerServerInterface
     */
    public function setFromDomain($fromDomain = null);


    /**
     * Get fromDomain
     *
     * @return string
     */
    public function getFromDomain();


    /**
     * Set peeringContract
     *
     * @param \Ivoz\Domain\Model\PeeringContract\PeeringContractInterface $peeringContract
     *
     * @return PeerServerInterface
     */
    public function setPeeringContract(\Ivoz\Domain\Model\PeeringContract\PeeringContractInterface $peeringContract);


    /**
     * Get peeringContract
     *
     * @return \Ivoz\Domain\Model\PeeringContract\PeeringContractInterface
     */
    public function getPeeringContract();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return PeerServerInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();



}

