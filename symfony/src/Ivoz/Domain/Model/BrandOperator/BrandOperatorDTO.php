<?php
namespace Ivoz\Domain\Model\BrandOperator;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class BrandOperatorDTO implements DataTransferObjectInterface
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $pass;

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var boolean
     */
    private $active = '1';

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var mixed
     */
    private $brandId;

    /**
     * @var mixed
     */
    private $timezoneId;

    /**
     * @var mixed
     */
    private $brand;

    /**
     * @var mixed
     */
    private $timezone;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'username' => $this->getUsername(),
            'pass' => $this->getPass(),
            'email' => $this->getEmail(),
            'active' => $this->getActive(),
            'name' => $this->getName(),
            'lastname' => $this->getLastname(),
            'id' => $this->getId(),
            'brandId' => $this->getBrandId(),
            'timezoneId' => $this->getTimezoneId()
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->brand = $transformer->transform('Ivoz\\Domain\\Model\\Brand\\Brand', $this->getBrandId());
        $this->timezone = $transformer->transform('Ivoz\\Domain\\Model\\Timezone\\Timezone', $this->getTimezoneId());
    }

    /**
     * {@inheritDoc}
     */
    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param string $username
     *
     * @return BrandOperatorDTO
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $pass
     *
     * @return BrandOperatorDTO
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param string $email
     *
     * @return BrandOperatorDTO
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param boolean $active
     *
     * @return BrandOperatorDTO
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $name
     *
     * @return BrandOperatorDTO
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $lastname
     *
     * @return BrandOperatorDTO
     */
    public function setLastname($lastname = null)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param integer $id
     *
     * @return BrandOperatorDTO
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $brandId
     *
     * @return BrandOperatorDTO
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @return \Ivoz\Domain\Model\Brand\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param integer $timezoneId
     *
     * @return BrandOperatorDTO
     */
    public function setTimezoneId($timezoneId)
    {
        $this->timezoneId = $timezoneId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getTimezoneId()
    {
        return $this->timezoneId;
    }

    /**
     * @return \Ivoz\Domain\Model\Timezone\Timezone
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
}
