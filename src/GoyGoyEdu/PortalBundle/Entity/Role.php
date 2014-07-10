<?php

namespace GoyGoyEdu\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 */
class Role
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personHasRole;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personHasRole = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Role
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add personHasRole
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\PersonHasRole $personHasRole
     * @return Role
     */
    public function addPersonHasRole(\GoyGoyEdu\PortalBundle\Entity\PersonHasRole $personHasRole)
    {
        $this->personHasRole[] = $personHasRole;

        return $this;
    }

    /**
     * Remove personHasRole
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\PersonHasRole $personHasRole
     */
    public function removePersonHasRole(\GoyGoyEdu\PortalBundle\Entity\PersonHasRole $personHasRole)
    {
        $this->personHasRole->removeElement($personHasRole);
    }

    /**
     * Get personHasRole
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonHasRole()
    {
        return $this->personHasRole;
    }
}
