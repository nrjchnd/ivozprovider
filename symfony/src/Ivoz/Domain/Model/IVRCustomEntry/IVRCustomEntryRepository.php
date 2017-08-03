<?php

namespace Ivoz\Domain\Model\IVRCustomEntry;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface IVRCustomEntryRepository extends ObjectRepository, Selectable {}

