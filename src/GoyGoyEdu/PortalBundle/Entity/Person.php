<?php

namespace GoyGoyEdu\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 */
class Person
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
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $token;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $posts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $grades;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personToLesson;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personHasRole;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->token = new \Doctrine\Common\Collections\ArrayCollection();
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->grades = new \Doctrine\Common\Collections\ArrayCollection();
        $this->personToLesson = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Person
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
     * Set surname
     *
     * @param string $surname
     * @return Person
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Person
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add token
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Token $token
     * @return Person
     */
    public function addToken(\GoyGoyEdu\PortalBundle\Entity\Token $token)
    {
        $this->token[] = $token;

        return $this;
    }

    /**
     * Remove token
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Token $token
     */
    public function removeToken(\GoyGoyEdu\PortalBundle\Entity\Token $token)
    {
        $this->token->removeElement($token);
    }

    /**
     * Get token
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Add posts
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Posts $posts
     * @return Person
     */
    public function addPost(\GoyGoyEdu\PortalBundle\Entity\Posts $posts)
    {
        $this->posts[] = $posts;

        return $this;
    }

    /**
     * Remove posts
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Posts $posts
     */
    public function removePost(\GoyGoyEdu\PortalBundle\Entity\Posts $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Add grades
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Grades $grades
     * @return Person
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
     * @return Person
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
     * Add personHasRole
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\PersonHasRole $personHasRole
     * @return Person
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
    /**
     * @var string
     */
    private $password;


    /**
     * Set password
     *
     * @param string $password
     * @return Person
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
}
