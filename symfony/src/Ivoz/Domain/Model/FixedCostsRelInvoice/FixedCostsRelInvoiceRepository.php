<?php

namespace Ivoz\Domain\Model\FixedCostsRelInvoice;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface FixedCostsRelInvoiceRepository extends ObjectRepository, Selectable {}

