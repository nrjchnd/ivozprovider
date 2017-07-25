<?php

namespace Ivoz\Domain\Model\TargetPattern;

use Core\Domain\Model\EntityInterface;

interface TargetPatternInterface extends EntityInterface
{
    /**
     * Set regExp
     *
     * @param string $regExp
     *
     * @return TargetPatternInterface
     */
    public function setRegExp($regExp);


    /**
     * Get regExp
     *
     * @return string
     */
    public function getRegExp();


    /**
     * Set name
     *
     * @param Name $name
     *
     * @return TargetPatternInterface
     */
    public function setName(Name $name);


    /**
     * Get name
     *
     * @return Name
     */
    public function getName();


    /**
     * Set description
     *
     * @param Description $description
     *
     * @return TargetPatternInterface
     */
    public function setDescription(Description $description);


    /**
     * Get description
     *
     * @return Description
     */
    public function getDescription();

}

