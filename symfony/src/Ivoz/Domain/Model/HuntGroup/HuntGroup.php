<?php

namespace Ivoz\Domain\Model\HuntGroup;

use Ivoz\Domain\Model\User\User;
use Doctrine\Common\Collections\Criteria;

/**
 * HuntGroup
 */
class HuntGroup extends HuntGroupAbstract implements HuntGroupInterface
{
    use HuntGroupTrait;

    /**
     * Get this Hungroup related users
     * @return User[]
     */
    public function getHuntGroupUsersArray()
    {
        $huntGroupUsersArray = array();
        $huntGroupRelUsers = $this->getHuntGroupsRelUsers(
            Criteria::create()->orderBy('priority', Criteria::ASC)
        );

        foreach($huntGroupRelUsers as $huntGroupRelUser) {
            $user = $huntGroupRelUser->getUser();
            if (empty($user)) {
                continue;
            }
            $huntGroupUsersArray[] = $user;
        }

        return $huntGroupUsersArray;
    }
}

