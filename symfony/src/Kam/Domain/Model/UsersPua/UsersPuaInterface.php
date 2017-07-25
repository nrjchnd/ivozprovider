<?php

namespace Kam\Domain\Model\UsersPua;

use Core\Domain\Model\EntityInterface;

interface UsersPuaInterface extends EntityInterface
{
    /**
     * Set presUri
     *
     * @param string $presUri
     *
     * @return UsersPuaInterface
     */
    public function setPresUri($presUri);


    /**
     * Get presUri
     *
     * @return string
     */
    public function getPresUri();


    /**
     * Set presId
     *
     * @param string $presId
     *
     * @return UsersPuaInterface
     */
    public function setPresId($presId);


    /**
     * Get presId
     *
     * @return string
     */
    public function getPresId();


    /**
     * Set event
     *
     * @param integer $event
     *
     * @return UsersPuaInterface
     */
    public function setEvent($event);


    /**
     * Get event
     *
     * @return integer
     */
    public function getEvent();


    /**
     * Set expires
     *
     * @param integer $expires
     *
     * @return UsersPuaInterface
     */
    public function setExpires($expires);


    /**
     * Get expires
     *
     * @return integer
     */
    public function getExpires();


    /**
     * Set desiredExpires
     *
     * @param integer $desiredExpires
     *
     * @return UsersPuaInterface
     */
    public function setDesiredExpires($desiredExpires);


    /**
     * Get desiredExpires
     *
     * @return integer
     */
    public function getDesiredExpires();


    /**
     * Set flag
     *
     * @param integer $flag
     *
     * @return UsersPuaInterface
     */
    public function setFlag($flag);


    /**
     * Get flag
     *
     * @return integer
     */
    public function getFlag();


    /**
     * Set etag
     *
     * @param string $etag
     *
     * @return UsersPuaInterface
     */
    public function setEtag($etag);


    /**
     * Get etag
     *
     * @return string
     */
    public function getEtag();


    /**
     * Set tupleId
     *
     * @param string $tupleId
     *
     * @return UsersPuaInterface
     */
    public function setTupleId($tupleId = null);


    /**
     * Get tupleId
     *
     * @return string
     */
    public function getTupleId();


    /**
     * Set watcherUri
     *
     * @param string $watcherUri
     *
     * @return UsersPuaInterface
     */
    public function setWatcherUri($watcherUri);


    /**
     * Get watcherUri
     *
     * @return string
     */
    public function getWatcherUri();


    /**
     * Set callId
     *
     * @param string $callId
     *
     * @return UsersPuaInterface
     */
    public function setCallId($callId);


    /**
     * Get callId
     *
     * @return string
     */
    public function getCallId();


    /**
     * Set toTag
     *
     * @param string $toTag
     *
     * @return UsersPuaInterface
     */
    public function setToTag($toTag);


    /**
     * Get toTag
     *
     * @return string
     */
    public function getToTag();


    /**
     * Set fromTag
     *
     * @param string $fromTag
     *
     * @return UsersPuaInterface
     */
    public function setFromTag($fromTag);


    /**
     * Get fromTag
     *
     * @return string
     */
    public function getFromTag();


    /**
     * Set cseq
     *
     * @param integer $cseq
     *
     * @return UsersPuaInterface
     */
    public function setCseq($cseq);


    /**
     * Get cseq
     *
     * @return integer
     */
    public function getCseq();


    /**
     * Set recordRoute
     *
     * @param string $recordRoute
     *
     * @return UsersPuaInterface
     */
    public function setRecordRoute($recordRoute = null);


    /**
     * Get recordRoute
     *
     * @return string
     */
    public function getRecordRoute();


    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return UsersPuaInterface
     */
    public function setContact($contact);


    /**
     * Get contact
     *
     * @return string
     */
    public function getContact();


    /**
     * Set remoteContact
     *
     * @param string $remoteContact
     *
     * @return UsersPuaInterface
     */
    public function setRemoteContact($remoteContact);


    /**
     * Get remoteContact
     *
     * @return string
     */
    public function getRemoteContact();


    /**
     * Set version
     *
     * @param integer $version
     *
     * @return UsersPuaInterface
     */
    public function setVersion($version);


    /**
     * Get version
     *
     * @return integer
     */
    public function getVersion();


    /**
     * Set extraHeaders
     *
     * @param string $extraHeaders
     *
     * @return UsersPuaInterface
     */
    public function setExtraHeaders($extraHeaders);


    /**
     * Get extraHeaders
     *
     * @return string
     */
    public function getExtraHeaders();



}

