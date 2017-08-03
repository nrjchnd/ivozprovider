<?php

namespace Ivoz\Domain\Model\XMLRPCLog;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface XMLRPCLogRepository extends ObjectRepository, Selectable {}

