<?php

namespace Ivoz\Domain\Model\PricingPlan;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface PricingPlanRepository extends ObjectRepository, Selectable {}

