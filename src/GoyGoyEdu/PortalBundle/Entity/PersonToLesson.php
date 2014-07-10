<?php

namespace GoyGoyEdu\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonToLesson
 */
class PersonToLesson
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var \GoyGoyEdu\PortalBundle\Entity\Term
     */
    private $term;

    /**
     * @var \GoyGoyEdu\PortalBundle\Entity\Person
     */
    private $person;

    /**
     * @var \GoyGoyEdu\PortalBundle\Entity\Lesson
     */
    private $lesson;


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
     * Set type
     *
     * @param integer $type
     * @return PersonToLesson
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set term
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Term $term
     * @return PersonToLesson
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
     * @return PersonToLesson
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
     * Set lesson
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Lesson $lesson
     * @return PersonToLesson
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
     * @var integer
     */
    private $credit;


    /**
     * Set credit
     *
     * @param integer $credit
     * @return PersonToLesson
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer 
     */
    public function getCredit()
    {
        return $this->credit;
    }
}
