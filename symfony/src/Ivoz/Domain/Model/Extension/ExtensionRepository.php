<?php

namespace Ivoz\Domain\Model\Extension;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface ExtensionRepository extends ObjectRepository, Selectable {}

