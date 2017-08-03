<?php

namespace Ivoz\Domain\Model\RetailAccount;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface RetailAccountRepository extends ObjectRepository, Selectable {}

