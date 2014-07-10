<?php
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
    function isValid($id)
    {
        $test = new PersonController;
        $myid = $test->status();
        return in_array($id,$this->getRoles($myid));
    }
    function getPosts()
    {
        return $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Posts")->findAll();
    }
    function indexAction(Request $request) {
        if($this->isValid(1))
        {
                $posts = $this->getPosts();
                // echo "you can see posts";
                return $this->render('GoyGoyEduPortalBundle:Portal:show.html.twig', 
               ["posts" =>  $posts  ]);
            
        }
        return new \Symfony\Component\HttpFoundation\Response();
    }
    function getPost($id) {
        return $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Posts")->find($id);
    }
    function showAction($id)
    {
        $data = $this->getPost($id);
        if(is_object($data) && $this->isValid(1))
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
    function deletePost($id) {
        if($this->isValid(2))
        {
            $post = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Posts")->find($id);
            if(!is_object($post))
            {
                return ;
            }
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush();
        }
        
    }
    public function deleteAction($id) {
         $this->deletePost($id);
         
         return $this->redirect("/posts");
    }
    function insertAction(Request $request) {
        if(!$this->isValid(2))
        {
            echo "no access";
            return new \Symfony\Component\HttpFoundation\Response;
        }
        $task = new \GoyGoyEdu\PortalBundle\Entity\Posts();
        $form = $this->createFormBuilder($task,['csrf_protection' => false])
            ->add('title','text')
            ->add('text','textarea')
            ->add('startdate','date')
            ->add('enddate','date')
            ->add("endless", "checkbox", ["mapped" => false,"required"=> false])
            ->add('submit','submit')
            ->getForm();
         $form->handleRequest($request);
         if($form->isValid())
         {
             if(isset($_POST["form"]["endless"]) &&  $_POST["form"]["endless"] == 1)
             {
                 $task->setEnddate(null);
             }
             $em = $this->getDoctrine()->getManager();
             $em->persist($task);
             $em->flush();
             return $this->redirect("/posts");
            
         }
         return $this->render('GoyGoyEduPortalBundle:Portal:insert.html.twig', 
               ["form" =>  $form->createView()  ]);
    }
    public function updateAction (Request $request,$id) {
        if(!$this->isValid(2))
        {
            echo "no access";
            return new \Symfony\Component\HttpFoundation\Response;
        }
        $task = $this->getPost($id);
        if(!is_object($task))
        {
            echo "not found";
            return new \Symfony\Component\HttpFoundation\Response();
        }
        $form = $this->createFormBuilder($task,['csrf_protection' => false])
            ->add('title','text')
            ->add('text','textarea')
            ->add('startdate','date')
            ->add('enddate','date');
        if($task->getEnddate() == null)
        {
            $form  =   $form
            ->add("endless", "checkbox", ["mapped" => false,"required"=> false , 
                'attr'     => ['checked'   => 'checked']]);
        }
        else
        {
            $form= $form
            ->add("endless", "checkbox", ["mapped" => false,"required"=> false]);
        }
        $form = $form
            ->add('submit','submit')
            ->getForm();
         $form->handleRequest($request);
         if($form->isValid())
         {
             if(isset($_POST["form"]["endless"]) &&  $_POST["form"]["endless"] == 1)
             {
                 $task->setEnddate(null);
             }
             $em = $this->getDoctrine()->getManager();
             $em->persist($task);
             $em->flush();
             return $this->redirect("/posts");
            
         }
         return $this->render('GoyGoyEduPortalBundle:Portal:insert.html.twig', 
               ["form" =>  $form->createView()  ]);
    }
}