<?php
include 'ISport.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include "Comparable.php";
include "Club.php";

echo "Projet Heritage et Interface<br>";

$listSport[] = new Sport(11,"Football");
$listSport[] = new Sport(2,"Tennis");
$listSport[] = new SportRelais("400",1, 2000);
$listSport[] = new SportRelais("Rugby", 15,100);
$listSport[] = new SportBallon("Handball",5,15,28);
$listSport[] = new SportBallon("Basket", 7,8, 20);

foreach ($listSport as $keyListSport => $valueListSport)
{
    echo "Nom du sport : ".$valueListSport->getDescription()."<br><br>";
}

// Init les clubs
$club = array();
$club[1] = new Club(1, "Dijon", 63);
$club[2] = new Club(2, "PSG", 67);
$club[3] = new Club(3, "Nantes", 65);

// Les sports de Dijon
$sb = new SportBallon("Basketball", 5, 35, 45);
$club[1]->AjouterSport($sb);

// Les sports de PSG
$sport1 = new Sport(1, "Javelot");
$sport2 = new Sport(2, "Judo");
$sportBallon1 = new SportBallon("Football", 11, 68, 105);
$sportBallon2 = new SportBallon("Handball", 7, 35, 65);
$sportRelais1 = new SportRelais("4 * 100", 400, 4);
$club[2]->AjouterSport($sport1);
$club[2]->AjouterSport($sport2);
$club[2]->AjouterSport($sportBallon1);
$club[2]->AjouterSport($sportBallon2);
$club[2]->AjouterSport($sportRelais1);

// Les sports Nantes
$sport3 = new Sport("Cyclisme", 1);
$sportBallon3 = new SportBallon("FootBall", 11, 68, 105);
$sportBallon4 = new SportBallon("Ruby", 15, 65, 115);
$sportRelais2 = new SportRelais("100m", 100, 1);
$club[3]->AjouterSport($sport3);
$club[3]->AjouterSport($sportBallon3);
$club[3]->AjouterSport($sportBallon4);
$club[3]->AjouterSport($sportRelais2);





