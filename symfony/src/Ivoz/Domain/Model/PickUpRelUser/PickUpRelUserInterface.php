<?php

namespace Ivoz\Domain\Model\PickUpRelUser;

use Core\Domain\Model\EntityInterface;

interface PickUpRelUserInterface extends EntityInterface
{
    /**
     * Set pickUpGroup
     *
     * @param \Ivoz\Domain\Model\PickUpGroup\PickUpGroupInterface $pickUpGroup
     *
     * @return PickUpRelUserInterface
     */
    public function setPickUpGroup(\Ivoz\Domain\Model\PickUpGroup\PickUpGroupInterface $pickUpGroup);


    /**
     * Get pickUpGroup
     *
     * @return \Ivoz\Domain\Model\PickUpGroup\PickUpGroupInterface
     */
    public function getPickUpGroup();


    /**
     * Set user
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $user
     *
     * @return PickUpRelUserInterface
     */
    public function setUser(\Ivoz\Domain\Model\User\UserInterface $user);


    /**
     * Get user
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getUser();



}

