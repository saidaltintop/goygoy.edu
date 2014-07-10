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
    function getTerms($key)
    {
        $dep = $this->getDepartment($key);
        $data = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Term")
                ->findBy(["department"=>$dep]);
        if(is_array($data))
        {
            $result = [];
            foreach ($data as $value) {
                if($value -> getType() == 1)
                {
                    $result[]  = [$value->getId() => $value->getYear()->format("Y") . " Bahar" ];

                }
                else
                {
                    $result[]  = [$value->getId() => $value->getYear()->format("Y") . "Güz" ];

                }
            }
            return $result;
        }
        return [];
       // var_dump($data);
    }
    function getFaculty($key)
    {
          return  $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Faculty")
                ->find($key);
    }
    function getTeachers()
    {
        $role = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Role")
                ->find(5);
        if(is_object($role))
        {
            $peopleids = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:PersonHasRole")
                ->findBy(["role"=>  $role]);
            $result = [];
            foreach ($peopleids as $value) {
                $result[] = [ $value->getPerson()->getId() => $value->getPerson()->getName() . " " .$value->getPerson()->getSurname() ];
            }
            return $result;
        }
        //var_dump($role);
    }
    function getLessons()
    {
        $lessons = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Lesson")
                ->findAll();
        $result = [];
        foreach ($lessons as $value) {
        $result[] = [$value->getId() => $value->getName()];
        }
        return $result;
    }
    function getLesson($key)
    {
        return  $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Lesson")
                ->find($key);
    }
    function getTerm($key)
    {
        return  $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Term")
                ->find($key);
    }
    function getTeacher($key)
    {
          return  $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Person")
                ->find($key);
    }
    function newtermAction(\Symfony\Component\HttpFoundation\Request $request , $key = 2) {
        if(!$this->isValid(4))
        {
            echo "no access";
            return new \Symfony\Component\HttpFoundation\Response;
        }
        $task = new \GoyGoyEdu\PortalBundle\Entity\PersonToLesson();
        $first = $this->getFaculties();
        $count = 0;
        foreach ($first[0] as $k => $value) {
            if($count == 0)
            {
                $first = $k;
                break;
            }
            $count++;
        }
        $form = $this->createFormBuilder($task,['csrf_protection' => false])
        
        ->add('faculties', 'choice', [
                'choices'   => $this->getFaculties(),
                'mapped'=>false
            ])
         ->add('department', 'choice', [
                'choices'   => $this->getDepartments($first),
                'mapped'=>false
            ])
         ->add('terms', 'choice', [
                'choices'   => $this->getTerms($key),
                'mapped'=>false
            ])
         ->add('teachers', 'choice', [
                'choices'   => $this->getTeachers(),
                'mapped'=>false
            ])
          ->add('lessons', 'choice', [
                'choices'   => $this->getLessons(),
                'mapped'=>false
            ])
         ->add('credit')
         ->add('save','submit')

            ->getForm();
        $form->handleRequest($request);
        if($form->isValid())
        {
            $faculty = $this->getFaculty($_POST["form"]["faculties"]);
            $department = $this->getDepartment($_POST["form"]["department"]);
            $term = $this->getTerm($_POST["form"]["terms"]);
            $teacher = $this->getTeacher($_POST["form"]["teachers"]);
            $lesson = $this->getLesson($_POST["form"]["lessons"]);
            $task->setDepartment($department);
            $task->setLesson($lesson);
            $task->setPerson($teacher);
            $task->setTerm($term);
            $task->setType(1);
//            $department = $this->getDepartment($_POST["form"]["department"]);
//            $task->setDepartment($department);
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            echo "added";
        }
        return $this->render('GoyGoyEduPortalBundle:Portal:insert.html.twig', 
               ["form" =>  $form->createView()  ]);
    
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
