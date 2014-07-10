<?php

namespace GoyGoyEdu\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Term
 */
class Term
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $Type;

    /**
     * @var \DateTime
     */
    private $Year;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $grades;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personToLesson;

    /**
     * @var \GoyGoyEdu\PortalBundle\Entity\Department
     */
    private $department;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->grades = new \Doctrine\Common\Collections\ArrayCollection();
        $this->personToLesson = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set Type
     *
     * @param integer $type
     * @return Term
     */
    public function setType($type)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set Year
     *
     * @param \DateTime $year
     * @return Term
     */
    public function setYear($year)
    {
        $this->Year = $year;

        return $this;
    }

    /**
     * Get Year
     *
     * @return \DateTime 
     */
    public function getYear()
    {
        return $this->Year;
    }

    /**
     * Add grades
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Grades $grades
     * @return Term
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
     * Add personToLesson
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\PersonToLesson $personToLesson
     * @return Term
     */
    public function addPersonToLesson(\GoyGoyEdu\PortalBundle\Entity\PersonToLesson $personToLesson)
    {
        $this->personToLesson[] = $personToLesson;

        return $this;
    }

    /**
     * Remove personToLesson
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\PersonToLesson $personToLesson
     */
    public function removePersonToLesson(\GoyGoyEdu\PortalBundle\Entity\PersonToLesson $personToLesson)
    {
        $this->personToLesson->removeElement($personToLesson);
    }

    /**
     * Get personToLesson
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonToLesson()
    {
        return $this->personToLesson;
    }

    /**
     * Set department
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Department $department
     * @return Term
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
}
