<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GoyGoyEdu\PortalBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * Description of PortalController
 *
 * @author kkanok
 */
class PortalController extends MySession {
    //put your code here
    function getRoles($id) {
        $person = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Person"
                )->find($id);
        $roles = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:PersonHasRole"
                )->findBy(["person"=>$person]);
        $result = array();
        foreach ($roles as $value) {
            $result[] = $value->getRole()->getId();
        }
        return $result;
    }
    function getPosts()
    {
        return $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Posts")->findAll();
    }
    function indexAction(Request $request) {
        $test = new PersonController();
        $id = $test->status();
        if($id)
        {
            $data = $this->getRoles($id);
            //menas see page
            if(in_array(1, $data))
            {
                $posts = $this->getPosts();
                // echo "you can see posts";
                return $this->render('GoyGoyEduPortalBundle:Portal:show.html.twig', 
               ["posts" =>  $posts  ]);
            }
        }
        return new \Symfony\Component\HttpFoundation\Response();
    }
    function getPost($id) {
        return $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Posts")->find($id);
    }
    function showAction($id)
    {
        $data = $this->getPost($id);
        if(is_object($data))
        {
            return $this->render('GoyGoyEduPortalBundle:Portal:showone.html.twig', 
               ["post" =>  $data  ]);
        }
        else
        {
            echo "not found";
        }
        
        return new \Symfony\Component\HttpFoundation\Response();

    }
}
