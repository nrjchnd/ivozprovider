<?php
namespace Ivoz\Domain\Model\Terminal;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * TerminalAbstract
 */
abstract class TerminalAbstract
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $domain;

    /**
     * @var string
     */
    protected $disallow = 'all';

    /**
     * @var string
     */
    protected $allow_audio = 'alaw';

    /**
     * @var string
     */
    protected $allow_video;

    /**
     * @column direct_media_method
     * @comment enum:update|invite|reinvite
     * @var string
     */
    protected $directMediaMethod = 'update';

    /**
     * @comment password
     * @var string
     */
    protected $password = '';

    /**
     * @var string
     */
    protected $mac;

    /**
     * @var \DateTime
     */
    protected $lastProvisionDate;

    /**
     * @var \Ivoz\Domain\Model\Company\CompanyInterface
     */
    protected $company;

    /**
     * @var \Ivoz\Domain\Model\TerminalModel\TerminalModelInterface
     */
    protected $TerminalModel;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct(
        $disallow,
        $allowAudio,
        $directMediaMethod,
        $password
    ) {
        $this->setDisallow($disallow);
        $this->setAllowAudio($allowAudio);
        $this->setDirectMediaMethod($directMediaMethod);
        $this->setPassword($password);
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
     * @return TerminalDTO
     */
    public static function createDTO()
    {
        return new TerminalDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto TerminalDTO
         */
        Assertion::isInstanceOf($dto, TerminalDTO::class);

        $self = new static(
            $dto->getDisallow(),
            $dto->getAllowAudio(),
            $dto->getDirectMediaMethod(),
            $dto->getPassword());

        return $self
            ->setName($dto->getName())
            ->setDomain($dto->getDomain())
            ->setAllowVideo($dto->getAllowVideo())
            ->setMac($dto->getMac())
            ->setLastProvisionDate($dto->getLastProvisionDate())
            ->setCompany($dto->getCompany())
            ->setTerminalModel($dto->getTerminalModel())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto TerminalDTO
         */
        Assertion::isInstanceOf($dto, TerminalDTO::class);

        $this
            ->setName($dto->getName())
            ->setDomain($dto->getDomain())
            ->setDisallow($dto->getDisallow())
            ->setAllowAudio($dto->getAllowAudio())
            ->setAllowVideo($dto->getAllowVideo())
            ->setDirectMediaMethod($dto->getDirectMediaMethod())
            ->setPassword($dto->getPassword())
            ->setMac($dto->getMac())
            ->setLastProvisionDate($dto->getLastProvisionDate())
            ->setCompany($dto->getCompany())
            ->setTerminalModel($dto->getTerminalModel());


        return $this;
    }

    /**
     * @return TerminalDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setName($this->getName())
            ->setDomain($this->getDomain())
            ->setDisallow($this->getDisallow())
            ->setAllowAudio($this->getAllowAudio())
            ->setAllowVideo($this->getAllowVideo())
            ->setDirectMediaMethod($this->getDirectMediaMethod())
            ->setPassword($this->getPassword())
            ->setMac($this->getMac())
            ->setLastProvisionDate($this->getLastProvisionDate())
            ->setCompanyId($this->getCompany() ? $this->getCompany()->getId() : null)
            ->setTerminalModelId($this->getTerminalModel() ? $this->getTerminalModel()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'name' => $this->getName(),
            'domain' => $this->getDomain(),
            'disallow' => $this->getDisallow(),
            'allowAudio' => $this->getAllowAudio(),
            'allowVideo' => $this->getAllowVideo(),
            'directMediaMethod' => $this->getDirectMediaMethod(),
            'password' => $this->getPassword(),
            'mac' => $this->getMac(),
            'lastProvisionDate' => $this->getLastProvisionDate(),
            'companyId' => $this->getCompany() ? $this->getCompany()->getId() : null,
            'terminalModelId' => $this->getTerminalModel() ? $this->getTerminalModel()->getId() : null
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Set name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        if (!is_null($name)) {
            Assertion::maxLength($name, 100);
        }

        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set domain
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain($domain = null)
    {
        if (!is_null($domain)) {
            Assertion::maxLength($domain, 255);
        }

        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set disallow
     *
     * @param string $disallow
     *
     * @return self
     */
    public function setDisallow($disallow)
    {
        Assertion::notNull($disallow);
        Assertion::maxLength($disallow, 200);

        $this->disallow = $disallow;

        return $this;
    }

    /**
     * Get disallow
     *
     * @return string
     */
    public function getDisallow()
    {
        return $this->disallow;
    }

    /**
     * Set allowAudio
     *
     * @param string $allowAudio
     *
     * @return self
     */
    public function setAllowAudio($allowAudio)
    {
        Assertion::notNull($allow_audio);
        Assertion::maxLength($allow_audio, 200);

        $this->allow_audio = $allowAudio;

        return $this;
    }

    /**
     * Get allowAudio
     *
     * @return string
     */
    public function getAllowAudio()
    {
        return $this->allow_audio;
    }

    /**
     * Set allowVideo
     *
     * @param string $allowVideo
     *
     * @return self
     */
    public function setAllowVideo($allowVideo = null)
    {
        if (!is_null($allow_video)) {
            Assertion::maxLength($allow_video, 200);
        }

        $this->allow_video = $allowVideo;

        return $this;
    }

    /**
     * Get allowVideo
     *
     * @return string
     */
    public function getAllowVideo()
    {
        return $this->allow_video;
    }

    /**
     * Set directMediaMethod
     *
     * @param string $directMediaMethod
     *
     * @return self
     */
    public function setDirectMediaMethod($directMediaMethod)
    {
        Assertion::notNull($directMediaMethod);
        Assertion::choice($directMediaMethod, array (
          0 => 'update',
          1 => 'invite',
          2 => 'reinvite',
        ));

        $this->directMediaMethod = $directMediaMethod;

        return $this;
    }

    /**
     * Get directMediaMethod
     *
     * @return string
     */
    public function getDirectMediaMethod()
    {
        return $this->directMediaMethod;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        Assertion::notNull($password);
        Assertion::maxLength($password, 25);

        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mac
     *
     * @param string $mac
     *
     * @return self
     */
    public function setMac($mac = null)
    {
        if (!is_null($mac)) {
            Assertion::maxLength($mac, 12);
        }

        $this->mac = $mac;

        return $this;
    }

    /**
     * Get mac
     *
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Set lastProvisionDate
     *
     * @param \DateTime $lastProvisionDate
     *
     * @return self
     */
    public function setLastProvisionDate($lastProvisionDate = null)
    {
        if (!is_null($lastProvisionDate)) {
        }

        $this->lastProvisionDate = $lastProvisionDate;

        return $this;
    }

    /**
     * Get lastProvisionDate
     *
     * @return \DateTime
     */
    public function getLastProvisionDate()
    {
        return $this->lastProvisionDate;
    }

    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return self
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set terminalModel
     *
     * @param \Ivoz\Domain\Model\TerminalModel\TerminalModelInterface $terminalModel
     *
     * @return self
     */
    public function setTerminalModel(\Ivoz\Domain\Model\TerminalModel\TerminalModelInterface $terminalModel = null)
    {
        $this->TerminalModel = $terminalModel;

        return $this;
    }

    /**
     * Get terminalModel
     *
     * @return \Ivoz\Domain\Model\TerminalModel\TerminalModelInterface
     */
    public function getTerminalModel()
    {
        return $this->TerminalModel;
    }



    // @codeCoverageIgnoreEnd
}

