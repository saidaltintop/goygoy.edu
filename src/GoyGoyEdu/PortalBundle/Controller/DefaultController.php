<?php

namespace GoyGoyEdu\PortalBundle\Controller;

use GoyGoyEdu\PortalBundle\Form\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GoyGoyEdu\PortalBundle\Entity\Person;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GoyGoyEduPortalBundle:Default:index.html.twig', array('name' => $name));
    }
    public function homeAction(Request $request)
    {
     $entity = new Person();
     $form = new PersonType();
     $data = $this->createFormBuilder($entity);
     $form->buildForm($data,[]);
     $form = $data->getForm();
     $form->handleRequest($request);
     if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            //return $this->redirect($this->generateUrl('journal_show', array('id' => $entity->getId())));
        }
     
       return $this->render('GoyGoyEduPortalBundle:Default:index.html.twig', 
               ["form" =>  $form->createView() ]);
        
        //eturn $this->SignUpForm();
    }
}
