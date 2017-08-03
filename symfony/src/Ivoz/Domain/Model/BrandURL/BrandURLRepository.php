<?php

namespace Ivoz\Domain\Model\BrandURL;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface BrandURLRepository extends ObjectRepository, Selectable {}

