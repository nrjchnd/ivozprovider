<?php

namespace Ivoz\Domain\Model\QueueMember;

use Core\Domain\Model\EntityInterface;

interface QueueMemberInterface extends EntityInterface
{
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
     * Set queue
     *
     * @param \Ivoz\Domain\Model\Queue\QueueInterface $queue
     *
     * @return QueueMemberInterface
     */
    public function setQueue(\Ivoz\Domain\Model\Queue\QueueInterface $queue = null);


    /**
     * Get queue
     *
     * @return \Ivoz\Domain\Model\Queue\QueueInterface
     */
    public function getQueue();


    /**
     * Set user
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $user
     *
     * @return QueueMemberInterface
     */
    public function setUser(\Ivoz\Domain\Model\User\UserInterface $user = null);


    /**
     * Get user
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getUser();



}

