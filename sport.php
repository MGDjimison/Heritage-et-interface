<?php

class sport implements ISport
{
    protected $nomSport;
    protected $nbJoueurs;

    /**
     * @param $nbJoueurs
     */
    public function __construct(int $nbJoueurs,string $nomSport)
    {
        $this->nbJoueurs = $nbJoueurs;
        $this->nomSport = $nomSport;
    }

    /**
     * @return string
     */
    public function getNomSport()
    {
        return $this->nomSport;
    }

    /**
     * @param string $nomSport
     */
    public function setNomSport($nomSport)
    {
        $this->nomSport = $nomSport;
    }

    /**
     * @return int $NbJoueurs
     */
    public function getNbJoueurs()
    {
        return $this->nbJoueurs;
    }

    /**
     * @param int $nbJoueurs
     */
    public function setNbJoueurs($nbJoueurs)
    {
        $this->nbJoueurs = $nbJoueurs;
    }

    public function getDescription(): string
    {
        return "Nom Sport : ".$this->nomSport."Nb de joueurs : ".$this->nbJoueurs;
    }

}