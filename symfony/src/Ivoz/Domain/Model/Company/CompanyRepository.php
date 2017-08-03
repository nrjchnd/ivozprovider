<?php

namespace Ivoz\Domain\Model\Company;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface CompanyRepository extends ObjectRepository, Selectable {}

