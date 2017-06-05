<?php

namespace Core\Model\QueueMember;



interface QueueMemberInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();


    /**
     * Get penalty
     *
     * @return integer
     */
    public function getPenalty();


    /**
     * Get queue
     *
     * @return \Core\Model\Queue\QueueInterface
     */
    public function getQueue();


    /**
     * Get user
     *
     * @return \Core\Model\User\UserInterface
     */
    public function getUser();



}

