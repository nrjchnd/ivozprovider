<?php

namespace Ivoz\Domain\Model\ExternalCallFilterWhiteList;

use Core\Domain\Model\EntityInterface;

interface ExternalCallFilterWhiteListInterface extends EntityInterface
{
    /**
     * Set filter
     *
     * @param \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter
     *
     * @return ExternalCallFilterWhiteListInterface
     */
    public function setFilter(\Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter);


    /**
     * Get filter
     *
     * @return \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface
     */
    public function getFilter();


    /**
     * Set matchlist
     *
     * @param \Ivoz\Domain\Model\MatchList\MatchListInterface $matchlist
     *
     * @return ExternalCallFilterWhiteListInterface
     */
    public function setMatchlist(\Ivoz\Domain\Model\MatchList\MatchListInterface $matchlist);


    /**
     * Get matchlist
     *
     * @return \Ivoz\Domain\Model\MatchList\MatchListInterface
     */
    public function getMatchlist();



}

