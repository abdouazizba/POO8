<?php

class Cours{
    private int $id;
    private string $heuredebut;
    private string $heurefin;
    private DateTime $datecours;


    public function Classe():Classes
    {
        return new Classes() ;
    }
    public function Module():Module
    {
        return new Module() ;
    }
    public function Professeur():Professeur
    {
        return new Professeur() ;
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of heuredebut
     */ 
    public function getHeuredebut()
    {
        return $this->heuredebut;
    }

    /**
     * Set the value of heuredebut
     *
     * @return  self
     */ 
    public function setHeuredebut($heuredebut)
    {
        $this->heuredebut = $heuredebut;

        return $this;
    }

    /**
     * Get the value of heurefin
     */ 
    public function getHeurefin()
    {
        return $this->heurefin;
    }

    /**
     * Set the value of heurefin
     *
     * @return  self
     */ 
    public function setHeurefin($heurefin)
    {
        $this->heurefin = $heurefin;

        return $this;
    }

    /**
     * Get the value of datecours
     */ 
    public function getDatecours()
    {
        return $this->datecours;
    }

    /**
     * Set the value of datecours
     *
     * @return  self
     */ 
    public function setDatecours($datecours)
    {
        $this->datecours = $datecours;

        return $this;
    }
}