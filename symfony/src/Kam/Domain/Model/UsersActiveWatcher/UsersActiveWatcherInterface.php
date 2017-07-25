<?php

namespace Kam\Domain\Model\UsersActiveWatcher;

use Core\Domain\Model\EntityInterface;

interface UsersActiveWatcherInterface extends EntityInterface
{
    /**
     * Set presentityUri
     *
     * @param string $presentityUri
     *
     * @return UsersActiveWatcherInterface
     */
    public function setPresentityUri($presentityUri);


    /**
     * Get presentityUri
     *
     * @return string
     */
    public function getPresentityUri();


    /**
     * Set watcherUsername
     *
     * @param string $watcherUsername
     *
     * @return UsersActiveWatcherInterface
     */
    public function setWatcherUsername($watcherUsername);


    /**
     * Get watcherUsername
     *
     * @return string
     */
    public function getWatcherUsername();


    /**
     * Set watcherDomain
     *
     * @param string $watcherDomain
     *
     * @return UsersActiveWatcherInterface
     */
    public function setWatcherDomain($watcherDomain);


    /**
     * Get watcherDomain
     *
     * @return string
     */
    public function getWatcherDomain();


    /**
     * Set toUser
     *
     * @param string $toUser
     *
     * @return UsersActiveWatcherInterface
     */
    public function setToUser($toUser);


    /**
     * Get toUser
     *
     * @return string
     */
    public function getToUser();


    /**
     * Set toDomain
     *
     * @param string $toDomain
     *
     * @return UsersActiveWatcherInterface
     */
    public function setToDomain($toDomain);


    /**
     * Get toDomain
     *
     * @return string
     */
    public function getToDomain();


    /**
     * Set event
     *
     * @param string $event
     *
     * @return UsersActiveWatcherInterface
     */
    public function setEvent($event);


    /**
     * Get event
     *
     * @return string
     */
    public function getEvent();


    /**
     * Set eventId
     *
     * @param string $eventId
     *
     * @return UsersActiveWatcherInterface
     */
    public function setEventId($eventId = null);


    /**
     * Get eventId
     *
     * @return string
     */
    public function getEventId();


    /**
     * Set toTag
     *
     * @param string $toTag
     *
     * @return UsersActiveWatcherInterface
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
     * @return UsersActiveWatcherInterface
     */
    public function setFromTag($fromTag);


    /**
     * Get fromTag
     *
     * @return string
     */
    public function getFromTag();


    /**
     * Set callid
     *
     * @param string $callid
     *
     * @return UsersActiveWatcherInterface
     */
    public function setCallid($callid);


    /**
     * Get callid
     *
     * @return string
     */
    public function getCallid();


    /**
     * Set localCseq
     *
     * @param integer $localCseq
     *
     * @return UsersActiveWatcherInterface
     */
    public function setLocalCseq($localCseq);


    /**
     * Get localCseq
     *
     * @return integer
     */
    public function getLocalCseq();


    /**
     * Set remoteCseq
     *
     * @param integer $remoteCseq
     *
     * @return UsersActiveWatcherInterface
     */
    public function setRemoteCseq($remoteCseq);


    /**
     * Get remoteCseq
     *
     * @return integer
     */
    public function getRemoteCseq();


    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return UsersActiveWatcherInterface
     */
    public function setContact($contact);


    /**
     * Get contact
     *
     * @return string
     */
    public function getContact();


    /**
     * Set recordRoute
     *
     * @param string $recordRoute
     *
     * @return UsersActiveWatcherInterface
     */
    public function setRecordRoute($recordRoute = null);


    /**
     * Get recordRoute
     *
     * @return string
     */
    public function getRecordRoute();


    /**
     * Set expires
     *
     * @param integer $expires
     *
     * @return UsersActiveWatcherInterface
     */
    public function setExpires($expires);


    /**
     * Get expires
     *
     * @return integer
     */
    public function getExpires();


    /**
     * Set status
     *
     * @param integer $status
     *
     * @return UsersActiveWatcherInterface
     */
    public function setStatus($status);


    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus();


    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return UsersActiveWatcherInterface
     */
    public function setReason($reason);


    /**
     * Get reason
     *
     * @return string
     */
    public function getReason();


    /**
     * Set version
     *
     * @param integer $version
     *
     * @return UsersActiveWatcherInterface
     */
    public function setVersion($version);


    /**
     * Get version
     *
     * @return integer
     */
    public function getVersion();


    /**
     * Set socketInfo
     *
     * @param string $socketInfo
     *
     * @return UsersActiveWatcherInterface
     */
    public function setSocketInfo($socketInfo);


    /**
     * Get socketInfo
     *
     * @return string
     */
    public function getSocketInfo();


    /**
     * Set localContact
     *
     * @param string $localContact
     *
     * @return UsersActiveWatcherInterface
     */
    public function setLocalContact($localContact);


    /**
     * Get localContact
     *
     * @return string
     */
    public function getLocalContact();


    /**
     * Set fromUser
     *
     * @param string $fromUser
     *
     * @return UsersActiveWatcherInterface
     */
    public function setFromUser($fromUser);


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
     * @return UsersActiveWatcherInterface
     */
    public function setFromDomain($fromDomain);


    /**
     * Get fromDomain
     *
     * @return string
     */
    public function getFromDomain();


    /**
     * Set updated
     *
     * @param integer $updated
     *
     * @return UsersActiveWatcherInterface
     */
    public function setUpdated($updated);


    /**
     * Get updated
     *
     * @return integer
     */
    public function getUpdated();


    /**
     * Set updatedWinfo
     *
     * @param integer $updatedWinfo
     *
     * @return UsersActiveWatcherInterface
     */
    public function setUpdatedWinfo($updatedWinfo);


    /**
     * Get updatedWinfo
     *
     * @return integer
     */
    public function getUpdatedWinfo();


    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return UsersActiveWatcherInterface
     */
    public function setFlags($flags);


    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags();


    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return UsersActiveWatcherInterface
     */
    public function setUserAgent($userAgent);


    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent();



}

