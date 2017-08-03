<?php

namespace Ivoz\Domain\Model\TerminalManufacturer;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface TerminalManufacturerRepository extends ObjectRepository, Selectable {}

