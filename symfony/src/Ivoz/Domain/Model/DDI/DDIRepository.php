<?php

namespace Ivoz\Domain\Model\DDI;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface DDIRepository extends ObjectRepository, Selectable {}

