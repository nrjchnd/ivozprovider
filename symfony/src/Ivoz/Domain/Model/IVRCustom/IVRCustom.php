<?php

namespace Ivoz\Domain\Model\IVRCustom;

use Assert\Assertion;
use Core\Domain\Model\EntityInterface;
use Core\Application\DataTransferObjectInterface;

/**
 * IVRCustom
 */
class IVRCustom extends IVRCustomAbstract implements IVRCustomInterface, EntityInterface
{
    /**
     * @var integer
     */
    protected $id;


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
        parent::__construct(...func_get_args());

    }

    public function __wakeup()
    {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
    }

    /**
     * @return IVRCustomDTO
     */
    public static function createDTO()
    {
        return new IVRCustomDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto IVRCustomDTO
         */
        $self = parent::fromDTO($dto);

        return $self;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto IVRCustomDTO
         */
        parent::updateFromDTO($dto);

        
        return $this;
    }

    /**
     * @return IVRCustomDTO
     */
    public function toDTO()
    {
        $dto = parent::toDTO();
        return $dto
            ->setId($this->getId());
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return parent::__toArray() + [
            'id' => $this->getId(),
            'companyId' => $this->getCompany() ? $this->getCompany()->getId() : null,
            'welcomeLocutionId' => $this->getWelcomeLocution() ? $this->getWelcomeLocution()->getId() : null,
            'noAnswerLocutionId' => $this->getNoAnswerLocution() ? $this->getNoAnswerLocution()->getId() : null,
            'errorLocutionId' => $this->getErrorLocution() ? $this->getErrorLocution()->getId() : null,
            'successLocutionId' => $this->getSuccessLocution() ? $this->getSuccessLocution()->getId() : null,
            'timeoutExtensionId' => $this->getTimeoutExtension() ? $this->getTimeoutExtension()->getId() : null,
            'errorExtensionId' => $this->getErrorExtension() ? $this->getErrorExtension()->getId() : null,
            'timeoutVoiceMailUserId' => $this->getTimeoutVoiceMailUser() ? $this->getTimeoutVoiceMailUser()->getId() : null,
            'errorVoiceMailUserId' => $this->getErrorVoiceMailUser() ? $this->getErrorVoiceMailUser()->getId() : null
        ];
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


}

