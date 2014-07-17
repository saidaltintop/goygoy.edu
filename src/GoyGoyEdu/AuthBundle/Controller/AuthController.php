<?php

namespace GoyGoyEdu\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GoyGoyEdu\AuthBundle\Form\PersonType;
use GoyGoyEdu\AuthBundle\Entity\Person;
use Symfony\Component\HttpFoundation\Request;
use GoyGoyEdu\CommonBundle\Exception\RoleNotFoundException as role;

class AuthController extends Controller
{
    private function getRole($id)
    {
        $data = $this->getDoctrine()->getRepository("AuthBundle:Role")->find($id);
        //var_dump($data);
        if(is_object($data))
        {
            return $data;
        }
        throw new role;
    }

    public function registerStudentAction(Request $request)
    {
        $entity = new Person();
        $form  = $this->createFormBuilder($entity);
        $type = new PersonType();
        $type->buildForm($form,[]);
        $form = $form->getForm();
        $form->handleRequest($request);
        if($form->isValid())
        {
            $role = $this->getRole(1);
            $entity->setRole($role);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect("/student/home");
        }
        return $this->render('AuthBundle:Auth:RegisterStudent.html.twig', ['form' => $form->createView()]);
        
    }
}
