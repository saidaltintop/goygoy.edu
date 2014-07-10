<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GoyGoyEdu\PortalBundle\Controller;

/**
 * Description of Roles
 *
 * @author kkanok
 */
class Roles extends MySession {
    //put your code here
    function getRoles($id) {
        $person = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:Person"
                )->find($id);
        $roles = $this->getDoctrine()->getRepository("GoyGoyEduPortalBundle:PersonHasRole"
                )->findBy(["person"=>$person]);
        $result = array();
        foreach ($roles as $value) {
            if ($value->getRole() != null) {
                $result[] = $value->getRole()->getId();
            }
        }
        return $result;
    }
    public function isValid($id)
    {
        $myid = $this->status();
        return in_array($id,$this->getRoles($myid));
    }
}
