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
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush();
        }
        
    }
    public function deleteAction($id) {
         $this->deletePost($id);
         return $this->redirect("/posts");
         
        
    }
}