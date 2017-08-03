<?php

namespace Ivoz\Domain\Model\FeaturesRelBrand;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface FeaturesRelBrandRepository extends ObjectRepository, Selectable {}

