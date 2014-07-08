<?php

namespace GoyGoyEdu\PortalBundle\Controller;

use GoyGoyEdu\PortalBundle\Form\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GoyGoyEdu\PortalBundle\Entity\Person;
use Symfony\Component\HttpFoundation\Request;

class PersonController extends Controller
{
    public function newAction(Request $request)
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
     
       return $this->render('GoyGoyEduPortalBundle:Person:new.html.twig', 
               ["form" =>  $form->createView() ]);
        
        //eturn $this->SignUpForm();
    }
}
