<?php

namespace Ivoz\Domain\Model\HolidayDate;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface HolidayDateRepository extends ObjectRepository, Selectable {}

