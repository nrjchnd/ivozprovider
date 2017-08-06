<?php

namespace Ivoz\Domain\Model\ExternalCallFilterBlackList;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * ExternalCallFilterBlackListAbstract
 */
abstract class ExternalCallFilterBlackListAbstract
{
    /**
     * @var \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface
     */
    protected $filter;

    /**
     * @var \Ivoz\Domain\Model\MatchList\MatchListInterface
     */
    protected $matchList;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct()
    {

        $this->initChangelog();
    }

    public function initChangelog()
    {
        $this->_initialValues = $this->__toArray();
    }

    public function hasChanged($fieldName)
    {
        if (array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }
        $getter = 'get' . ucfisrt($fieldName);

        return $this->$getter() != $this->_initialValues[$fieldName];
    }

    /**
     * @return ExternalCallFilterBlackListDTO
     */
    public static function createDTO()
    {
        return new ExternalCallFilterBlackListDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto ExternalCallFilterBlackListDTO
         */
        Assertion::isInstanceOf($dto, ExternalCallFilterBlackListDTO::class);

        $self = new static();

        return $self
            ->setFilter($dto->getFilter())
            ->setMatchList($dto->getMatchList())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto ExternalCallFilterBlackListDTO
         */
        Assertion::isInstanceOf($dto, ExternalCallFilterBlackListDTO::class);

        $this
            ->setFilter($dto->getFilter())
            ->setMatchList($dto->getMatchList());


        return $this;
    }

    /**
     * @return ExternalCallFilterBlackListDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setFilterId($this->getFilter() ? $this->getFilter()->getId() : null)
            ->setMatchListId($this->getMatchList() ? $this->getMatchList()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'filterId' => $this->getFilter() ? $this->getFilter()->getId() : null,
            'matchListId' => $this->getMatchList() ? $this->getMatchList()->getId() : null
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Set filter
     *
     * @param \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter
     *
     * @return self
     */
    public function setFilter(\Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get filter
     *
     * @return \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Set matchList
     *
     * @param \Ivoz\Domain\Model\MatchList\MatchListInterface $matchList
     *
     * @return self
     */
    public function setMatchList(\Ivoz\Domain\Model\MatchList\MatchListInterface $matchList)
    {
        $this->matchList = $matchList;

        return $this;
    }

    /**
     * Get matchList
     *
     * @return \Ivoz\Domain\Model\MatchList\MatchListInterface
     */
    public function getMatchList()
    {
        return $this->matchList;
    }



    // @codeCoverageIgnoreEnd
}

