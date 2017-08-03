<?php

namespace Ivoz\Domain\Model\HuntGroupsRelUser;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface HuntGroupsRelUserRepository extends ObjectRepository, Selectable {}

