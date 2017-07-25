<?php

namespace Ast\Domain\Model\PsEndpoint;

use Core\Domain\Model\EntityInterface;

interface PsEndpointInterface extends EntityInterface
{
    /**
     * Set sorceryId
     *
     * @param string $sorceryId
     *
     * @return PsEndpointInterface
     */
    public function setSorceryId($sorceryId);


    /**
     * Get sorceryId
     *
     * @return string
     */
    public function getSorceryId();


    /**
     * Set fromDomain
     *
     * @param string $fromDomain
     *
     * @return PsEndpointInterface
     */
    public function setFromDomain($fromDomain = null);


    /**
     * Get fromDomain
     *
     * @return string
     */
    public function getFromDomain();


    /**
     * Set aors
     *
     * @param string $aors
     *
     * @return PsEndpointInterface
     */
    public function setAors($aors = null);


    /**
     * Get aors
     *
     * @return string
     */
    public function getAors();


    /**
     * Set callerid
     *
     * @param string $callerid
     *
     * @return PsEndpointInterface
     */
    public function setCallerid($callerid = null);


    /**
     * Get callerid
     *
     * @return string
     */
    public function getCallerid();


    /**
     * Set context
     *
     * @param string $context
     *
     * @return PsEndpointInterface
     */
    public function setContext($context);


    /**
     * Get context
     *
     * @return string
     */
    public function getContext();


    /**
     * Set disallow
     *
     * @param string $disallow
     *
     * @return PsEndpointInterface
     */
    public function setDisallow($disallow);


    /**
     * Get disallow
     *
     * @return string
     */
    public function getDisallow();


    /**
     * Set allow
     *
     * @param string $allow
     *
     * @return PsEndpointInterface
     */
    public function setAllow($allow);


    /**
     * Get allow
     *
     * @return string
     */
    public function getAllow();


    /**
     * Set directMedia
     *
     * @param string $directMedia
     *
     * @return PsEndpointInterface
     */
    public function setDirectMedia($directMedia = null);


    /**
     * Get directMedia
     *
     * @return string
     */
    public function getDirectMedia();


    /**
     * Set directMediaMethod
     *
     * @param string $directMediaMethod
     *
     * @return PsEndpointInterface
     */
    public function setDirectMediaMethod($directMediaMethod = null);


    /**
     * Get directMediaMethod
     *
     * @return string
     */
    public function getDirectMediaMethod();


    /**
     * Set mailboxes
     *
     * @param string $mailboxes
     *
     * @return PsEndpointInterface
     */
    public function setMailboxes($mailboxes = null);


    /**
     * Get mailboxes
     *
     * @return string
     */
    public function getMailboxes();


    /**
     * Set pickupGroup
     *
     * @param string $pickupGroup
     *
     * @return PsEndpointInterface
     */
    public function setPickupGroup($pickupGroup = null);


    /**
     * Get pickupGroup
     *
     * @return string
     */
    public function getPickupGroup();


    /**
     * Set sendDiversion
     *
     * @param string $sendDiversion
     *
     * @return PsEndpointInterface
     */
    public function setSendDiversion($sendDiversion = null);


    /**
     * Get sendDiversion
     *
     * @return string
     */
    public function getSendDiversion();


    /**
     * Set sendPai
     *
     * @param string $sendPai
     *
     * @return PsEndpointInterface
     */
    public function setSendPai($sendPai = null);


    /**
     * Get sendPai
     *
     * @return string
     */
    public function getSendPai();


    /**
     * Set subscribecontext
     *
     * @param string $subscribecontext
     *
     * @return PsEndpointInterface
     */
    public function setSubscribecontext($subscribecontext);


    /**
     * Get subscribecontext
     *
     * @return string
     */
    public function getSubscribecontext();


    /**
     * Set oneHundredRel
     *
     * @param string $oneHundredRel
     *
     * @return PsEndpointInterface
     */
    public function setOneHundredRel($oneHundredRel);


    /**
     * Get oneHundredRel
     *
     * @return string
     */
    public function getOneHundredRel();


    /**
     * Set outboundProxy
     *
     * @param string $outboundProxy
     *
     * @return PsEndpointInterface
     */
    public function setOutboundProxy($outboundProxy = null);


    /**
     * Get outboundProxy
     *
     * @return string
     */
    public function getOutboundProxy();


    /**
     * Set trustIdInbound
     *
     * @param string $trustIdInbound
     *
     * @return PsEndpointInterface
     */
    public function setTrustIdInbound($trustIdInbound = null);


    /**
     * Get trustIdInbound
     *
     * @return string
     */
    public function getTrustIdInbound();


    /**
     * Set terminal
     *
     * @param \Ivoz\Domain\Model\Terminal\TerminalInterface $terminal
     *
     * @return PsEndpointInterface
     */
    public function setTerminal(\Ivoz\Domain\Model\Terminal\TerminalInterface $terminal = null);


    /**
     * Get terminal
     *
     * @return \Ivoz\Domain\Model\Terminal\TerminalInterface
     */
    public function getTerminal();


    /**
     * Set friend
     *
     * @param \Ivoz\Domain\Model\Friend\FriendInterface $friend
     *
     * @return PsEndpointInterface
     */
    public function setFriend(\Ivoz\Domain\Model\Friend\FriendInterface $friend = null);


    /**
     * Get friend
     *
     * @return \Ivoz\Domain\Model\Friend\FriendInterface
     */
    public function getFriend();


    /**
     * Set retailAccount
     *
     * @param \Ivoz\Domain\Model\RetailAccount\RetailAccountInterface $retailAccount
     *
     * @return PsEndpointInterface
     */
    public function setRetailAccount(\Ivoz\Domain\Model\RetailAccount\RetailAccountInterface $retailAccount = null);


    /**
     * Get retailAccount
     *
     * @return \Ivoz\Domain\Model\RetailAccount\RetailAccountInterface
     */
    public function getRetailAccount();



}

