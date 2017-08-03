<?php

namespace Ast\Domain\Model\Musiconhold;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface MusiconholdRepository extends ObjectRepository, Selectable {}

