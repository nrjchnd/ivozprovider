<?php

namespace Ivoz\Domain\Model\ChangeHistory;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface ChangeHistoryRepository extends ObjectRepository, Selectable {}

