<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GoyGoyEdu\PortalBundle\Controller;
/**
 * Description of LessonController
 *
 * @author kkanok
 */
class LessonController extends Roles {
    //put your code here
    function getFaculties()
    {
        $data = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Faculty")->findAll();
        $result =[];
        foreach ($data as $value) {
            $result[] =    [$value->getId() => $value->getName()] ;
        }
        return $result;
    }
    function  getDepartments($key)
    {
        $faculty = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Faculty")->find($key);
        if(is_object($faculty))
        {
            $data = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Department")->findBy(["faculty"=>$faculty]);
            $result =[];
            foreach ($data as $value) {
                $result[count($result)] =    [$value->getId() => $value->getName()] ;
            }
            return $result;
        }
        
        return [];
    }
    function  getDepartment($key)
    {
        $data = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Department")->find($key);
        if(is_object($data))
        {
            return $data;
        }
        return null;
    }
    function newtermAction(\Symfony\Component\HttpFoundation\Request $request , $key = 2) {
        if(!$this->isValid(4))
        {
            echo "no access";
            return new \Symfony\Component\HttpFoundation\Response;
        }
        
    }
    function newAction(\Symfony\Component\HttpFoundation\Request $request,$key = 1) {
        if(!$this->isValid(3))
        {
            echo "no access";
            return new \Symfony\Component\HttpFoundation\Response;
        }
        $task = new \GoyGoyEdu\PortalBundle\Entity\Lesson();
        $form = $this->createFormBuilder($task,['csrf_protection' => false])
        ->add('faculty', 'choice', [
                'choices'   => $this->getFaculties(),
                'preferred_choices' => array($key),
                'mapped'=>false
            ])
        ->add('department', 'choice', [
                'choices'   => $this->getDepartments($key),
                'mapped'=>false
            ])
         ->add('name')
         ->add('save','submit')

            ->getForm();
        $form->handleRequest($request);
        if($form->isValid())
        {
            $department = $this->getDepartment($_POST["form"]["department"]);
            $task->setDepartment($department);
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            echo "added";
        }
        return $this->render('GoyGoyEduPortalBundle:Portal:insert.html.twig', 
               ["form" =>  $form->createView()  ]);
    }
}
