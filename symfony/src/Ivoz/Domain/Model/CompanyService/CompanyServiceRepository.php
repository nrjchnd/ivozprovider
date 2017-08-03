<?php

namespace Ivoz\Domain\Model\CompanyService;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;


interface CompanyServiceRepository extends ObjectRepository, Selectable {}

