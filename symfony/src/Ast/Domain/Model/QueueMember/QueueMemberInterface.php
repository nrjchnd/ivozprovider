<?php

namespace Ast\Domain\Model\QueueMember;

use Core\Domain\Model\EntityInterface;

interface QueueMemberInterface extends EntityInterface
{
    /**
     * Set queueName
     *
     * @param string $queueName
     *
     * @return QueueMemberInterface
     */
    public function setQueueName($queueName);


    /**
     * Get queueName
     *
     * @return string
     */
    public function getQueueName();


    /**
     * Set interface
     *
     * @param string $interface
     *
     * @return QueueMemberInterface
     */
    public function setInterface($interface);


    /**
     * Get interface
     *
     * @return string
     */
    public function getInterface();


    /**
     * Set membername
     *
     * @param string $membername
     *
     * @return QueueMemberInterface
     */
    public function setMembername($membername = null);


    /**
     * Get membername
     *
     * @return string
     */
    public function getMembername();


    /**
     * Set stateInterface
     *
     * @param string $stateInterface
     *
     * @return QueueMemberInterface
     */
    public function setStateInterface($stateInterface = null);


    /**
     * Get stateInterface
     *
     * @return string
     */
    public function getStateInterface();


    /**
     * Set penalty
     *
     * @param integer $penalty
     *
     * @return QueueMemberInterface
     */
    public function setPenalty($penalty = null);


    /**
     * Get penalty
     *
     * @return integer
     */
    public function getPenalty();


    /**
     * Set paused
     *
     * @param integer $paused
     *
     * @return QueueMemberInterface
     */
    public function setPaused($paused = null);


    /**
     * Get paused
     *
     * @return integer
     */
    public function getPaused();


    /**
     * Set queueMember
     *
     * @param \Ivoz\Domain\Model\QueueMember\QueueMemberInterface $queueMember
     *
     * @return QueueMemberInterface
     */
    public function setQueueMember(\Ivoz\Domain\Model\QueueMember\QueueMemberInterface $queueMember = null);


    /**
     * Get queueMember
     *
     * @return \Ivoz\Domain\Model\QueueMember\QueueMemberInterface
     */
    public function getQueueMember();



}

