<?php

namespace Ivoz\Domain\Model\GenericCallACLPattern;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface GenericCallACLPatternRepository extends ObjectRepository, Selectable {}

