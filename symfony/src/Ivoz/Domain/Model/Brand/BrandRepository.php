<?php

namespace Ivoz\Domain\Model\Brand;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface BrandRepository extends ObjectRepository, Selectable {}

