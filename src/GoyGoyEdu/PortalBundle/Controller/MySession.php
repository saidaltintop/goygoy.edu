<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GoyGoyEdu\PortalBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of Session
 *
 * @author kkanok
 */
class MySession extends Controller {
    //put your code here
    public function __construct() {
        $this->session = new Session();
        if($this->session->get("id"))
        {
            //lets move on
        }
        else
        {
            // redirect to login
        }
    }
}
