<?php

namespace Ivoz\Domain\Model\ExternalCallFilter;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface ExternalCallFilterRepository extends ObjectRepository, Selectable {}

