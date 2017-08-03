<?php

namespace Ivoz\Domain\Model\LcrRuleTarget;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface LcrRuleTargetRepository extends ObjectRepository, Selectable {}

