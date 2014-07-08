<?php

namespace GoyGoyEdu\PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Token
 */
class Token
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $token;

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
     * Set token
     *
     * @param string $token
     * @return Token
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set person
     *
     * @param \GoyGoyEdu\PortalBundle\Entity\Person $person
     * @return Token
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
