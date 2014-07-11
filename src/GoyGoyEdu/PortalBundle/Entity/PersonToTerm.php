<?php

namespace GoyGoyEdu\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonToTerm
 */
class PersonToTerm
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \GoyGoyEdu\PortalBundle\Entity\Term
     */
    private $term;

    /**
     * @var \GoyGoyEdu\PortalBundle\Entity\Person
     */
    private $person;


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
     * Set term
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Term $term
     * @return PersonToTerm
     */
    public function setTerm(\GoyGoyEdu\PortalBundle\Entity\Term $term = null)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return \GoyGoyEdu\PortalBundle\Entity\Term 
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set person
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Person $person
     * @return PersonToTerm
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
}
