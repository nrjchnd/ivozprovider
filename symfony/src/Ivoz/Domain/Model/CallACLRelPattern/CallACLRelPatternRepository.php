<?php

namespace Ivoz\Domain\Model\CallACLRelPattern;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface CallACLRelPatternRepository extends ObjectRepository, Selectable {}

