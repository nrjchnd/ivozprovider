<?php

namespace Ivoz\Domain\Model\TerminalModel;

use Core\Domain\Model\EntityInterface;

interface TerminalModelInterface extends EntityInterface
{
    /**
     * Set iden
     *
     * @param string $iden
     *
     * @return TerminalModelInterface
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
     * @return TerminalModelInterface
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
     * @return TerminalModelInterface
     */
    public function setDescription($description);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Set genericTemplate
     *
     * @param string $genericTemplate
     *
     * @return TerminalModelInterface
     */
    public function setGenericTemplate($genericTemplate = null);


    /**
     * Get genericTemplate
     *
     * @return string
     */
    public function getGenericTemplate();


    /**
     * Set specificTemplate
     *
     * @param string $specificTemplate
     *
     * @return TerminalModelInterface
     */
    public function setSpecificTemplate($specificTemplate = null);


    /**
     * Get specificTemplate
     *
     * @return string
     */
    public function getSpecificTemplate();


    /**
     * Set genericUrlPattern
     *
     * @param string $genericUrlPattern
     *
     * @return TerminalModelInterface
     */
    public function setGenericUrlPattern($genericUrlPattern = null);


    /**
     * Get genericUrlPattern
     *
     * @return string
     */
    public function getGenericUrlPattern();


    /**
     * Set specificUrlPattern
     *
     * @param string $specificUrlPattern
     *
     * @return TerminalModelInterface
     */
    public function setSpecificUrlPattern($specificUrlPattern = null);


    /**
     * Get specificUrlPattern
     *
     * @return string
     */
    public function getSpecificUrlPattern();


    /**
     * Set terminalManufacturer
     *
     * @param \Ivoz\Domain\Model\TerminalManufacturer\TerminalManufacturerInterface $terminalManufacturer
     *
     * @return TerminalModelInterface
     */
    public function setTerminalManufacturer(\Ivoz\Domain\Model\TerminalManufacturer\TerminalManufacturerInterface $terminalManufacturer);


    /**
     * Get terminalManufacturer
     *
     * @return \Ivoz\Domain\Model\TerminalManufacturer\TerminalManufacturerInterface
     */
    public function getTerminalManufacturer();



}

