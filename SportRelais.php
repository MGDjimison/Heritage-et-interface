<?php

class SportRelais extends Sport
{
    private $distance;

    /**
     * @param $distance
     */
    public function __construct(string $nomSport,int $nbJoueurs, int $distance)
    {
        parent::__construct($nbJoueurs, $nomSport);
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance():int
    {
        return parent::getDescription()."<br>"."Distance : ".$this->distance;
    }
}