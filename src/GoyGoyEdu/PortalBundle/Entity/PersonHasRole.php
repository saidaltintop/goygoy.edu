<?php

namespace GoyGoyEdu\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonHasRole
 */
class PersonHasRole
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \GoyGoyEdu\PortalBundle\Entity\Person
     */
    private $person;

    /**
     * @var \GoyGoyEdu\PortalBundle\Entity\Role
     */
    private $role;


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
     * Set person
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Person $person
     * @return PersonHasRole
     */
    public function setPerson(\GoyGoyEdu\PortalBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \GoyGoyEdu\PortalBundle\Entity\Person 
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set role
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Role $role
     * @return PersonHasRole
     */
    public function setRole(\GoyGoyEdu\PortalBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \GoyGoyEdu\PortalBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
}
