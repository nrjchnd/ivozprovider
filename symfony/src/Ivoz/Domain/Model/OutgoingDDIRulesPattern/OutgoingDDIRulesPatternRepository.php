<?php

namespace Ivoz\Domain\Model\OutgoingDDIRulesPattern;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface OutgoingDDIRulesPatternRepository extends ObjectRepository, Selectable {}

