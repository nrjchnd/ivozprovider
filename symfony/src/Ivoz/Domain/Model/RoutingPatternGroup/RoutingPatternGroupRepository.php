<?php

namespace Ivoz\Domain\Model\RoutingPatternGroup;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;


interface RoutingPatternGroupRepository extends ObjectRepository, Selectable {}

