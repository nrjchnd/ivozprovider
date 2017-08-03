<?php

namespace Ivoz\Domain\Model\ConferenceRoom;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

interface ConferenceRoomRepository extends ObjectRepository, Selectable {}

