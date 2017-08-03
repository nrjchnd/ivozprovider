<?php

namespace Ivoz\Domain\Model\GenericMusicOnHold;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface GenericMusicOnHoldRepository extends ObjectRepository, Selectable {}

