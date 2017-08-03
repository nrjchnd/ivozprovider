<?php

namespace Kam\Domain\Model\UsersHtable;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface UsersHtableRepository extends ObjectRepository, Selectable {}

