<?php

namespace GoyGoyEdu\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grades
 */
class Grades
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $Grade;

    /**
     * @var \GoyGoyEdu\PortalBundle\Entity\Lesson
     */
    private $lesson;

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
     * Set Grade
     *
     * @param integer $grade
     * @return Grades
     */
    public function setGrade($grade)
    {
        $this->Grade = $grade;

        return $this;
    }

    /**
     * Get Grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->Grade;
    }

    /**
     * Set lesson
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Lesson $lesson
     * @return Grades
     */
    public function setLesson(\GoyGoyEdu\PortalBundle\Entity\Lesson $lesson = null)
    {
        $this->lesson = $lesson;

        return $this;
    }

    /**
     * Get lesson
     *
     * @return \GoyGoyEdu\PortalBundle\Entity\Lesson 
     */
    public function getLesson()
    {
        return $this->lesson;
    }

    /**
     * Set term
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Term $term
     * @return Grades
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
     * @return Grades
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
