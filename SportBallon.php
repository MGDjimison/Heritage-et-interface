<?php

class SportBallon extends Sport
{
    private $largeur;
    private $longueur;

    /**
     * @param $largeur
     * @param $longueur
     */
    public function __construct($nomSport, $nbJoueurs, $largeur, $longueur)
    {
        parent::__construct($nbJoueurs, $nomSport);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }
    public function getDescription(): string
    {
        return parent::getDescription()."<br>"."Largeur : ".$this->getLargeur()."<br>"."Longueur : ".$this->longueur;
    }

}