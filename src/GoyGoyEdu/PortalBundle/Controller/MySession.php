<?php
namespace GoyGoyEdu\PortalBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * specified session class
 * @version 1.0b
 * @author kkanok
 */
class MySession extends Controller {
    //put your code here
    private $session;
    public function __construct() {
        $this->session = new Session();
        $this->register(2);
        if($this->session->get("id"))
        {
            //lets move on
        }
        else
        {
          // $this->redirect("login");
        }
    }
    function register($id) {
        $this->session->set("id", $id);
    }
    function status()
    {
        if($this->session->get("id"))
        {
            return $this->session->get("id");
        }
        else
        {
            return false;
        }
    }
    function forceRedirect()
    {
         if($this->session->get("id"))
        {
            return $this->redirect("login");
        }
        else
        {
            return false;
        }
    }
    function destroy()
    {
        $this->session->remove("id");
    }
}
