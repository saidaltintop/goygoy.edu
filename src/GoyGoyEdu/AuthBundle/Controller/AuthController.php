<?php

namespace GoyGoyEdu\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller
{
    public function registerStudentAction()
    {
        $name = ["form"=>"hi"];
        print_r($name);
        return $this->render('AuthBundle:Auth:RegisterStudent.html.twig', array('form' => $name));
    }
}
