<?php

namespace Ivoz\Domain\Model\BrandOperator;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface BrandOperatorRepository extends ObjectRepository, Selectable {}

