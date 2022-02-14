<?php

class Club implements Comparable
{
    private $idClub;
    private $nomClub;
    private $nbPoints;
    private $lesSport=array();

    /**
     * @return mixed
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * @param mixed $idClub
     */
    public function setIdClub($idClub): void
    {
        $this->idClub = $idClub;
    }

    /**
     * @return mixed
     */
    public function getNomClub()
    {
        return $this->nomClub;
    }

    /**
     * @param mixed $nomClub
     */
    public function setNomClub($nomClub): void
    {
        $this->nomClub = $nomClub;
    }

    /**
     * @return mixed
     */
    public function getNbPoints()
    {
        return $this->nbPoints;
    }

    /**
     * @param mixed $nbPoints
     */
    public function setNbPoints($nbPoints): void
    {
        $this->nbPoints = $nbPoints;
    }

    /**
     * @return array
     */
    public function getLesSport(): array
    {
        return $this->lesSport;
    }

    /**
     * @param array $lesSport
     */
    public function setLesSport(array $lesSport): void
    {
        $this->lesSport = $lesSport;
    }

    public function AjouterSport(Sport $unSport)
    {
        $this->lesSport[]=$unSport;
    }

    public function compareTo(club $Club)
    {
        // TODO: Implement compareTo() method.
    }
}