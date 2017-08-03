<?php

namespace Ivoz\Domain\Model\IVRCustom;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface IVRCustomRepository extends ObjectRepository, Selectable {}

