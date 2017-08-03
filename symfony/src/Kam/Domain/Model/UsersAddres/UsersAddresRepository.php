<?php

namespace Kam\Domain\Model\UsersAddres;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface UsersAddresRepository extends ObjectRepository, Selectable {}

