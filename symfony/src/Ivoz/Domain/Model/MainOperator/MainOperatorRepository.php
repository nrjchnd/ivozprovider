<?php

namespace Ivoz\Domain\Model\MainOperator;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface MainOperatorRepository extends ObjectRepository, Selectable {}

