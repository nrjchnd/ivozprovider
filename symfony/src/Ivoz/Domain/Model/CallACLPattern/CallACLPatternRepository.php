<?php

namespace Ivoz\Domain\Model\CallACLPattern;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface CallACLPatternRepository extends ObjectRepository, Selectable {}

