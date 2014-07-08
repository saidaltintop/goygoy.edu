<?php

namespace GoyGoyEdu\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lesson
 */
class Lesson
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
    private $grades;

    /**
     * @var \GoyGoyEdu\PortalBundle\Entity\Department
     */
    private $department;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $person;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->grades = new \Doctrine\Common\Collections\ArrayCollection();
        $this->person = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Lesson
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
     * Add grades
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Grades $grades
     * @return Lesson
     */
    public function addGrade(\GoyGoyEdu\PortalBundle\Entity\Grades $grades)
    {
        $this->grades[] = $grades;

        return $this;
    }

    /**
     * Remove grades
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Grades $grades
     */
    public function removeGrade(\GoyGoyEdu\PortalBundle\Entity\Grades $grades)
    {
        $this->grades->removeElement($grades);
    }

    /**
     * Get grades
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrades()
    {
        return $this->grades;
    }

    /**
     * Set department
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Department $department
     * @return Lesson
     */
    public function setDepartment(\GoyGoyEdu\PortalBundle\Entity\Department $department = null)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return \GoyGoyEdu\PortalBundle\Entity\Department 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Add person
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Person $person
     * @return Lesson
     */
    public function addPerson(\GoyGoyEdu\PortalBundle\Entity\Person $person)
    {
        $this->person[] = $person;

        return $this;
    }

    /**
     * Remove person
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Person $person
     */
    public function removePerson(\GoyGoyEdu\PortalBundle\Entity\Person $person)
    {
        $this->person->removeElement($person);
    }

    /**
     * Get person
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerson()
    {
        return $this->person;
    }
}
