<?php

namespace Ivoz\Domain\Model\PeeringContract;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface PeeringContractRepository extends ObjectRepository, Selectable {}

