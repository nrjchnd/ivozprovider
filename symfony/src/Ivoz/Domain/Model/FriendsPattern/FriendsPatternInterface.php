<?php

namespace Ivoz\Domain\Model\FriendsPattern;

use Core\Domain\Model\EntityInterface;

interface FriendsPatternInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return FriendsPatternInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set regExp
     *
     * @param string $regExp
     *
     * @return FriendsPatternInterface
     */
    public function setRegExp($regExp);


    /**
     * Get regExp
     *
     * @return string
     */
    public function getRegExp();


    /**
     * Set friend
     *
     * @param \Ivoz\Domain\Model\Friend\FriendInterface $friend
     *
     * @return FriendsPatternInterface
     */
    public function setFriend(\Ivoz\Domain\Model\Friend\FriendInterface $friend = null);


    /**
     * Get friend
     *
     * @return \Ivoz\Domain\Model\Friend\FriendInterface
     */
    public function getFriend();



}

