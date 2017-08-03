<?php

namespace Ivoz\Domain\Model\IVRCommon;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface IVRCommonRepository extends ObjectRepository, Selectable {}

