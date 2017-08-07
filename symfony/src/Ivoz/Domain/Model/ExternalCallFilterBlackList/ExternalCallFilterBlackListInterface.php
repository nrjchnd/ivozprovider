<?php

namespace Ivoz\Domain\Model\ExternalCallFilterBlackList;

use Core\Domain\Model\EntityInterface;

interface ExternalCallFilterBlackListInterface extends EntityInterface
{
    /**
     * Set filter
     *
     * @param \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter
     *
     * @return ExternalCallFilterBlackListInterface
     */
    public function setFilter(\Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter = null);


    /**
     * Get filter
     *
     * @return \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface
     */
    public function getFilter();


    /**
     * Set matchList
     *
     * @param \Ivoz\Domain\Model\MatchList\MatchListInterface $matchList
     *
     * @return ExternalCallFilterBlackListInterface
     */
    public function setMatchList(\Ivoz\Domain\Model\MatchList\MatchListInterface $matchList);


    /**
     * Get matchList
     *
     * @return \Ivoz\Domain\Model\MatchList\MatchListInterface
     */
    public function getMatchList();



}

