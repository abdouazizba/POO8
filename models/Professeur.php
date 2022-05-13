<?php
require_once("User.php");

class Professeur extends User{
    private string $grade;

    public function __construct()
    {
        return $this->role="ROLE_PROFESSEUR";
    }

    public function cours():array
    {
        return [];
    }
    public function Module():array
    {
        return [] ;
    }
    public function Adresses():array
    {
        return [] ;
    }
    


    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}