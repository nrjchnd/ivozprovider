<?php

namespace Kam\Domain\Model\AccCdr;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface AccCdrRepository extends ObjectRepository, Selectable {}

