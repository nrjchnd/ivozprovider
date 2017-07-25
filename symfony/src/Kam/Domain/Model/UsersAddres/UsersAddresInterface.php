<?php

namespace Kam\Domain\Model\UsersAddres;

use Core\Domain\Model\EntityInterface;

interface UsersAddresInterface extends EntityInterface
{
    /**
     * Set sourceAddress
     *
     * @param string $sourceAddress
     *
     * @return UsersAddresInterface
     */
    public function setSourceAddress($sourceAddress);


    /**
     * Get sourceAddress
     *
     * @return string
     */
    public function getSourceAddress();


    /**
     * Set ipAddr
     *
     * @param string $ipAddr
     *
     * @return UsersAddresInterface
     */
    public function setIpAddr($ipAddr = null);


    /**
     * Get ipAddr
     *
     * @return string
     */
    public function getIpAddr();


    /**
     * Set mask
     *
     * @param integer $mask
     *
     * @return UsersAddresInterface
     */
    public function setMask($mask);


    /**
     * Get mask
     *
     * @return integer
     */
    public function getMask();


    /**
     * Set port
     *
     * @param integer $port
     *
     * @return UsersAddresInterface
     */
    public function setPort($port);


    /**
     * Get port
     *
     * @return integer
     */
    public function getPort();


    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return UsersAddresInterface
     */
    public function setTag($tag = null);


    /**
     * Get tag
     *
     * @return string
     */
    public function getTag();


    /**
     * Set description
     *
     * @param string $description
     *
     * @return UsersAddresInterface
     */
    public function setDescription($description = null);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return UsersAddresInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();



}

