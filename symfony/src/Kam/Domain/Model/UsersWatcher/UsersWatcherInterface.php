<?php

namespace Kam\Domain\Model\UsersWatcher;

use Core\Domain\Model\EntityInterface;

interface UsersWatcherInterface extends EntityInterface
{
    /**
     * Set presentityUri
     *
     * @param string $presentityUri
     *
     * @return UsersWatcherInterface
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
     * @return UsersWatcherInterface
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
     * @return UsersWatcherInterface
     */
    public function setWatcherDomain($watcherDomain);


    /**
     * Get watcherDomain
     *
     * @return string
     */
    public function getWatcherDomain();


    /**
     * Set event
     *
     * @param string $event
     *
     * @return UsersWatcherInterface
     */
    public function setEvent($event);


    /**
     * Get event
     *
     * @return string
     */
    public function getEvent();


    /**
     * Set status
     *
     * @param integer $status
     *
     * @return UsersWatcherInterface
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
     * @return UsersWatcherInterface
     */
    public function setReason($reason = null);


    /**
     * Get reason
     *
     * @return string
     */
    public function getReason();


    /**
     * Set insertedTime
     *
     * @param integer $insertedTime
     *
     * @return UsersWatcherInterface
     */
    public function setInsertedTime($insertedTime);


    /**
     * Get insertedTime
     *
     * @return integer
     */
    public function getInsertedTime();



}

