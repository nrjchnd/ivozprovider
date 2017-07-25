<?php

namespace Ivoz\Domain\Model\Locution;

use Core\Domain\Model\EntityInterface;

interface LocutionInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return LocutionInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set status
     *
     * @param string $status
     *
     * @return LocutionInterface
     */
    public function setStatus($status = null);


    /**
     * Get status
     *
     * @return string
     */
    public function getStatus();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return LocutionInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set encodedFile
     *
     * @param EncodedFile $encodedFile
     *
     * @return LocutionInterface
     */
    public function setEncodedFile(EncodedFile $encodedFile);


    /**
     * Get encodedFile
     *
     * @return EncodedFile
     */
    public function getEncodedFile();


    /**
     * Set originalFile
     *
     * @param OriginalFile $originalFile
     *
     * @return LocutionInterface
     */
    public function setOriginalFile(OriginalFile $originalFile);


    /**
     * Get originalFile
     *
     * @return OriginalFile
     */
    public function getOriginalFile();

}

