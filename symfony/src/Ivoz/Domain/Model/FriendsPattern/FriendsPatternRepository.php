<?php

namespace Ivoz\Domain\Model\FriendsPattern;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;


interface FriendsPatternRepository extends ObjectRepository, Selectable {}

