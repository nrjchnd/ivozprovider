<?php

namespace Ivoz\Domain\Model\GenericMusicOnHold;

use Core\Domain\Model\EntityInterface;

interface GenericMusicOnHoldInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return GenericMusicOnHoldInterface
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
     * @return GenericMusicOnHoldInterface
     */
    public function setStatus($status = null);


    /**
     * Get status
     *
     * @return string
     */
    public function getStatus();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return GenericMusicOnHoldInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand = null);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set originalFile
     *
     * @param OriginalFile $originalFile
     *
     * @return GenericMusicOnHoldInterface
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
     * @return GenericMusicOnHoldInterface
     */
    public function setEncodedFile(EncodedFile $encodedFile);


    /**
     * Get encodedFile
     *
     * @return EncodedFile
     */
    public function getEncodedFile();

}

