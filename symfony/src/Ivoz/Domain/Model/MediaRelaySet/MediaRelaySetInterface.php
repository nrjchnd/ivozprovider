<?php

namespace Ivoz\Domain\Model\MediaRelaySet;

use Core\Domain\Model\EntityInterface;

interface MediaRelaySetInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return MediaRelaySetInterface
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
     * @return MediaRelaySetInterface
     */
    public function setDescription($description = null);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();



}

