<?php

namespace Ivoz\Domain\Model\MusicOnHold;

use Core\Domain\Model\EntityInterface;

interface MusicOnHoldInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return MusicOnHoldInterface
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
     * @return MusicOnHoldInterface
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
     * @return MusicOnHoldInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set originalFile
     *
     * @param OriginalFile $originalFile
     *
     * @return MusicOnHoldInterface
     */
    public function setOriginalFile(OriginalFile $originalFile);


    /**
     * Get originalFile
     *
     * @return OriginalFile
     */
    public function getOriginalFile();


    /**
     * Set encodedFile
     *
     * @param EncodedFile $encodedFile
     *
     * @return MusicOnHoldInterface
     */
    public function setEncodedFile(EncodedFile $encodedFile);


    /**
     * Get encodedFile
     *
     * @return EncodedFile
     */
    public function getEncodedFile();

}

