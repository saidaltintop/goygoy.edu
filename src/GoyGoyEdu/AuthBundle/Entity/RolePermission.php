<?php

namespace GoyGoyEdu\AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolePermission
 */
class RolePermission
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \GoyGoyEdu\AuthBundle\Entity\Role
     */
    private $role;

    /**
     * @var \GoyGoyEdu\AuthBundle\Entity\Permission
     */
    private $permission;


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
     * Set role
     *
     * @param \GoyGoyEdu\AuthBundle\Entity\Role $role
     * @return RolePermission
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
     * Set permission
     *
     * @param \GoyGoyEdu\AuthBundle\Entity\Permission $permission
     * @return RolePermission
     */
    public function setPermission(\GoyGoyEdu\AuthBundle\Entity\Permission $permission = null)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return \GoyGoyEdu\AuthBundle\Entity\Permission 
     */
    public function getPermission()
    {
        return $this->permission;
    }
}
