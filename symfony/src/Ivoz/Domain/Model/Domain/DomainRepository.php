<?php

namespace Ivoz\Domain\Model\Domain;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface DomainRepository extends ObjectRepository, Selectable {}

