<?php

namespace Ivoz\Domain\Model\TerminalManufacturer;

use Core\Domain\Model\EntityInterface;

interface TerminalManufacturerInterface extends EntityInterface
{
    /**
     * Set iden
     *
     * @param string $iden
     *
     * @return TerminalManufacturerInterface
     */
    public function setIden($iden);


    /**
     * Get iden
     *
     * @return string
     */
    public function getIden();


    /**
     * Set name
     *
     * @param string $name
     *
     * @return TerminalManufacturerInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set description
     *
     * @param string $description
     *
     * @return TerminalManufacturerInterface
     */
    public function setDescription($description);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();



}

