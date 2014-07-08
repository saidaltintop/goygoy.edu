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
    private $role;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lesson;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->token = new \Doctrine\Common\Collections\ArrayCollection();
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->grades = new \Doctrine\Common\Collections\ArrayCollection();
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lesson = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add role
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Role $role
     * @return Person
     */
    public function addRole(\GoyGoyEdu\PortalBundle\Entity\Role $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Role $role
     */
    public function removeRole(\GoyGoyEdu\PortalBundle\Entity\Role $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add lesson
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Lesson $lesson
     * @return Person
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
}
