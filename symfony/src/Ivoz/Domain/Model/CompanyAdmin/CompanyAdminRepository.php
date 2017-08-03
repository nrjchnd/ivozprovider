<?php

namespace Ivoz\Domain\Model\CompanyAdmin;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface CompanyAdminRepository extends ObjectRepository, Selectable {}

