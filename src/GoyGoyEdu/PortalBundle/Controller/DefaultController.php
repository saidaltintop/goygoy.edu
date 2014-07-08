<?php

namespace GoyGoyEdu\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GoyGoyEduPortalBundle:Default:index.html.twig', array('name' => $name));
    }
}
