<?php

namespace GoyGoyEdu\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GoyGoyEdu\PortalBundle\Entity\Person;
use Symfony\Component\HttpFoundation\Request;

class PersonController extends Controller
{
    public function loginAction(Request $request)
    {
        $task = new Person();
        $form = $this->createFormBuilder($task,['csrf_protection' => false])
            ->add('email','email')
            ->add('password','password')
            ->add('submit','submit')
            ->getForm();
         $form->handleRequest($request);
         if ($form->isValid()) {
            echo "test";
            echo $task->getEmail();
            echo $task->getPassword();
            //return $this->redirect($this->generateUrl('journal_show', array('id' => $entity->getId())));
        }
         return $this->render('GoyGoyEduPortalBundle:Person:new.html.twig', 
               ["form" =>  $form->createView() ]);
    }
    public function newAction(Request $request)
    {
        $task = new Person();
        $form = $this->createFormBuilder($task,['csrf_protection' => false])
            ->add('name')
            ->add('surname')
            ->add('email','email')
            ->add('password','password')
            ->add('submit','submit')
            ->getForm();
         $form->handleRequest($request);
         if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            //return $this->redirect($this->generateUrl('journal_show', array('id' => $entity->getId())));
        }

       return $this->render('GoyGoyEduPortalBundle:Person:new.html.twig', 
               ["form" =>  $form->createView() ]);
    }
}
