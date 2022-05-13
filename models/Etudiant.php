<?php
require_once("User.php");

 class Etudiant extends User {
    private string $matricule;

    public function __construct()
    {
        return $this->role="ROLE_ETUDIANT";
    }
    
    public function classe():Classes
    {
        return new Classes();
    }


    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
 }