<?php
namespace GoyGoyEdu\CommonBundle\Exception;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RoleNotFoundException
 *
 * @author kkanok
 */
class RoleNotFoundException extends \Exception {
    //put your code here
    function __construct() {
        parent::__construct("Role Not Found");
    }
}
