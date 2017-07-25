<?php

namespace Ivoz\Domain\Model\Language;

use Core\Domain\Model\EntityInterface;

interface LanguageInterface extends EntityInterface
{
    /**
     * Set iden
     *
     * @param string $iden
     *
     * @return LanguageInterface
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
     * @param Name $name
     *
     * @return LanguageInterface
     */
    public function setName(Name $name);


    /**
     * Get name
     *
     * @return Name
     */
    public function getName();

}

