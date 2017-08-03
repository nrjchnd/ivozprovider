<?php

namespace Ivoz\Domain\Model\ProxyTrunk;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface ProxyTrunkRepository extends ObjectRepository, Selectable {}

