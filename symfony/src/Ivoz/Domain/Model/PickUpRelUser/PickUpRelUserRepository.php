<?php

namespace Ivoz\Domain\Model\PickUpRelUser;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface PickUpRelUserRepository extends ObjectRepository, Selectable {}

