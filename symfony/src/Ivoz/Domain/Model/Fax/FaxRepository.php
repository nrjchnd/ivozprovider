<?php

namespace Ivoz\Domain\Model\Fax;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface FaxRepository extends ObjectRepository, Selectable {}

