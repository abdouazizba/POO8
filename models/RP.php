<?php
require_once("User.php");

class RP extends User{

    public function __construct()
    {
        $this->role="Role_RP";
    }
    //redefinition=> evolution
    //1_heritage et change
    //2_redefinir change son comportement
    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        return $this;
    }
}