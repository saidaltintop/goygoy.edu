<?php

namespace GoyGoyEdu\AuthBundle\Entity;

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
    private $mothername;

    /**
     * @var string
     */
    private $fathername;

    /**
     * @var integer
     */
    private $mothersecurityid;

    /**
     * @var integer
     */
    private $fathersecurityid;

    /**
     * @var \GoyGoyEdu\AuthBundle\Entity\Role
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
     * Set mothername
     *
     * @param string $mothername
     * @return Person
     */
    public function setMothername($mothername)
    {
        $this->mothername = $mothername;

        return $this;
    }

    /**
     * Get mothername
     *
     * @return string 
     */
    public function getMothername()
    {
        return $this->mothername;
    }

    /**
     * Set fathername
     *
     * @param string $fathername
     * @return Person
     */
    public function setFathername($fathername)
    {
        $this->fathername = $fathername;

        return $this;
    }

    /**
     * Get fathername
     *
     * @return string 
     */
    public function getFathername()
    {
        return $this->fathername;
    }
    /**
     * Set mothersecurityid
     *
     * @param integer $mothersecurityid
     * @return Person
     */
    public function setMothersecurityid($mothersecurityid)
    {
        $this->mothersecurityid = $mothersecurityid;

        return $this;
    }

    /**
     * Get mothersecurityid
     *
     * @return integer 
     */
    public function getMothersecurityid()
    {
        return $this->mothersecurityid;
    }

    /**
     * Set fathersecurityid
     *
     * @param integer $fathersecurityid
     * @return Person
     */
    public function setFathersecurityid($fathersecurityid)
    {
        $this->fathersecurityid = $fathersecurityid;

        return $this;
    }

    /**
     * Get fathersecurityid
     *
     * @return integer 
     */
    public function getFathersecurityid()
    {
        return $this->fathersecurityid;
    }

    /**
     * Set role
     *
     * @param \GoyGoyEdu\AuthBundle\Entity\Role $role
     * @return Person
     */
    public function setRole(\GoyGoyEdu\AuthBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \GoyGoyEdu\AuthBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * @var integer
     */
    private $securityid;


    /**
     * Set securityid
     *
     * @param integer $securityid
     * @return Person
     */
    public function setSecurityid($securityid)
    {
        $this->securityid = $securityid;

        return $this;
    }

    /**
     * Get securityid
     *
     * @return integer 
     */
    public function getSecurityid()
    {
        return $this->securityid;
    }
}
