<?php

namespace Core\Model\XMLRPCLog;

use Assert\Assertion;
use Core\Model\EntityInterface;
use Core\Application\DataTransferObjectInterface;

/**
 * XMLRPCLog
 */
class XMLRPCLog implements EntityInterface, XMLRPCLogInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $proxy;

    /**
     * @var string
     */
    protected $module;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $mapperName;

    /**
     * @var \DateTime
     */
    protected $startDate = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    protected $execDate;

    /**
     * @var \DateTime
     */
    protected $finishDate;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct(
        $proxy,
        $module,
        $method,
        $mapperName,
        $startDate
    ) {
        $this->setProxy($proxy);
        $this->setModule($module);
        $this->setMethod($method);
        $this->setMapperName($mapperName);
        $this->setStartDate($startDate);
    }

     public function __wakeup()
     {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
     }

    /**
     * @return XMLRPCLogDTO
     */
    public static function createDTO()
    {
        return new XMLRPCLogDTO();
    }

    /**
     * Factory method
     * @param XMLRPCLogDTO $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, XMLRPCLogDTO::class);

        $self = new self(
            $dto->getProxy(),
            $dto->getModule(),
            $dto->getMethod(),
            $dto->getMapperName(),
            $dto->getStartDate()
        );

        return $self
            ->setExecDate($dto->getExecDate())
            ->setFinishDate($dto->getFinishDate());
    }

    /**
     * @param XMLRPCLogDTO $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, XMLRPCLogDTO::class);

        $this
            ->setProxy($dto->getProxy())
            ->setModule($dto->getModule())
            ->setMethod($dto->getMethod())
            ->setMapperName($dto->getMapperName())
            ->setStartDate($dto->getStartDate())
            ->setExecDate($dto->getExecDate())
            ->setFinishDate($dto->getFinishDate());


        return $this;
    }

    /**
     * @return XMLRPCLogDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setId($this->getId())
            ->setProxy($this->getProxy())
            ->setModule($this->getModule())
            ->setMethod($this->getMethod())
            ->setMapperName($this->getMapperName())
            ->setStartDate($this->getStartDate())
            ->setExecDate($this->getExecDate())
            ->setFinishDate($this->getFinishDate());
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'id' => $this->getId(),
            'proxy' => $this->getProxy(),
            'module' => $this->getModule(),
            'method' => $this->getMethod(),
            'mapperName' => $this->getMapperName(),
            'startDate' => $this->getStartDate(),
            'execDate' => $this->getExecDate(),
            'finishDate' => $this->getFinishDate()
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set proxy
     *
     * @param string $proxy
     *
     * @return XMLRPCLog
     */
    protected function setProxy($proxy)
    {
        Assertion::notNull($proxy);
        Assertion::maxLength($proxy, 10);

        $this->proxy = $proxy;

        return $this;
    }

    /**
     * Get proxy
     *
     * @return string
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return XMLRPCLog
     */
    protected function setModule($module)
    {
        Assertion::notNull($module);
        Assertion::maxLength($module, 10);

        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set method
     *
     * @param string $method
     *
     * @return XMLRPCLog
     */
    protected function setMethod($method)
    {
        Assertion::notNull($method);
        Assertion::maxLength($method, 10);

        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set mapperName
     *
     * @param string $mapperName
     *
     * @return XMLRPCLog
     */
    protected function setMapperName($mapperName)
    {
        Assertion::notNull($mapperName);
        Assertion::maxLength($mapperName, 20);

        $this->mapperName = $mapperName;

        return $this;
    }

    /**
     * Get mapperName
     *
     * @return string
     */
    public function getMapperName()
    {
        return $this->mapperName;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return XMLRPCLog
     */
    protected function setStartDate($startDate)
    {
        Assertion::notNull($startDate);

        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set execDate
     *
     * @param \DateTime $execDate
     *
     * @return XMLRPCLog
     */
    protected function setExecDate($execDate = null)
    {
        if (!is_null($execDate)) {
        }

        $this->execDate = $execDate;

        return $this;
    }

    /**
     * Get execDate
     *
     * @return \DateTime
     */
    public function getExecDate()
    {
        return $this->execDate;
    }

    /**
     * Set finishDate
     *
     * @param \DateTime $finishDate
     *
     * @return XMLRPCLog
     */
    protected function setFinishDate($finishDate = null)
    {
        if (!is_null($finishDate)) {
        }

        $this->finishDate = $finishDate;

        return $this;
    }

    /**
     * Get finishDate
     *
     * @return \DateTime
     */
    public function getFinishDate()
    {
        return $this->finishDate;
    }



    // @codeCoverageIgnoreEnd
}

