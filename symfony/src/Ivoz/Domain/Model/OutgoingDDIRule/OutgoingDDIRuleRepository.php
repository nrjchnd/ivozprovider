<?php

namespace Ivoz\Domain\Model\OutgoingDDIRule;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface OutgoingDDIRuleRepository extends ObjectRepository, Selectable {}

