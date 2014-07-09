<?php
namespace GoyGoyEdu\PortalBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * specified session class
 * @version 1.0b
 * @author kkanok
 * @access general all controllers
 */
class MySession extends Controller {
    //put your code here
    private $session;
    public function __construct() {
        $this->session = new Session();
        if($this->session->get("id"))
        {
            echo "move along";
            //lets move on
        }
        else
        {
            echo "login";
            // redirect to login
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
    function destroy()
    {
        $this->session->remove("id");
    }
}
