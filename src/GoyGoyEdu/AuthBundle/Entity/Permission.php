<?php

namespace GoyGoyEdu\AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permission
 */
class Permission
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Permission
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
