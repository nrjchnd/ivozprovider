<?php

namespace Ivoz\Domain\Model\ParsedCDR;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface ParsedCDRRepository extends ObjectRepository, Selectable {}

