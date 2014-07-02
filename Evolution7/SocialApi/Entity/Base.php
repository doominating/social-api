<?php

namespace Evolution7\SocialApi\Entity;

use Evolution7\SocialApi\Config\Config;

/**
 * Base class for all entities
 */
abstract class Base
{
    private $platform;
    private $id;

    /**
     * Set platform
     *
     * @param $platform
     *
     * @throws \InvalidArgumentException
     */
    final public function setPlatform($platform)
    {
        if (config::validatePlatform($platform)) {
            $this->platform = $platform;
        } else {
            throw new \InvalidArgumentException(
                sprintf("Platform '%s' not supported", $platform)
            );
        }
    }

    /**
     * Get platform
     *
     * @return string
     */
    final public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set entity ID
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get entity ID
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}