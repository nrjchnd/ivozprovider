<?php

namespace Ivoz\Domain\Model\Invoice;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface InvoiceRepository extends ObjectRepository, Selectable {}

