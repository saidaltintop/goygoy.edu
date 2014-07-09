<?php

namespace GoyGoyEdu\PortalBundle\Controller;

use GoyGoyEdu\PortalBundle\Entity\Person;
use Symfony\Component\HttpFoundation\Request;

class PersonController extends MySession
{
    
    public function loginAction(Request $request)
    {
        $task = new Person();
        $form = $this->createFormBuilder($task,['csrf_protection' => false])
            ->add('email','email')
            ->add('password','password')
            ->add('submit','submit')
            ->getForm();
         $repo = $this->getDoctrine()->getRepository('GoyGoyEduPortalBundle:Person');
         $form->handleRequest($request);
         if ($form->isValid()) {
            $email = $task->getEmail();
            $pass = $task->getPassword();
            // echo $pass;
            $product = $repo->findOneBy(
                array('email' => $email, 'password' => $pass)
            );
           $this->destroy();
            if(!is_object($product))
            {
                echo "login failed please recheck your inputs";
               
            }
            else
            {
                $this->register($product->getId());
                echo "login success redirect";
            }
            // var_dump($product);
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
            $this->register($task->getId());
            //return $this->redirect($this->generateUrl('journal_show', array('id' => $entity->getId())));
        }
        else
        {
            echo "please check fields";
        }

       return $this->render('GoyGoyEduPortalBundle:Person:new.html.twig', 
               ["form" =>  $form->createView() ]);
    }
}
