<?php

namespace GoyGoyEdu\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 */
class Department
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
    private $term;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lesson;

    /**
     * @var \GoyGoyEdu\PortalBundle\Entity\Faculty
     */
    private $faculty;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->term = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lesson = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Department
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
     * Add term
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Term $term
     * @return Department
     */
    public function addTerm(\GoyGoyEdu\PortalBundle\Entity\Term $term)
    {
        $this->term[] = $term;

        return $this;
    }

    /**
     * Remove term
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Term $term
     */
    public function removeTerm(\GoyGoyEdu\PortalBundle\Entity\Term $term)
    {
        $this->term->removeElement($term);
    }

    /**
     * Get term
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Add lesson
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Lesson $lesson
     * @return Department
     */
    public function addLesson(\GoyGoyEdu\PortalBundle\Entity\Lesson $lesson)
    {
        $this->lesson[] = $lesson;

        return $this;
    }

    /**
     * Remove lesson
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Lesson $lesson
     */
    public function removeLesson(\GoyGoyEdu\PortalBundle\Entity\Lesson $lesson)
    {
        $this->lesson->removeElement($lesson);
    }

    /**
     * Get lesson
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLesson()
    {
        return $this->lesson;
    }

    /**
     * Set faculty
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Faculty $faculty
     * @return Department
     */
    public function setFaculty(\GoyGoyEdu\PortalBundle\Entity\Faculty $faculty = null)
    {
        $this->faculty = $faculty;

        return $this;
    }

    /**
     * Get faculty
     *
     * @return \GoyGoyEdu\PortalBundle\Entity\Faculty 
     */
    public function getFaculty()
    {
        return $this->faculty;
    }
}
