<?php

namespace Ivoz\Domain\Model\CallACL;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface CallACLRepository extends ObjectRepository, Selectable {}

