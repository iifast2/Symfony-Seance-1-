<?php

namespace ClubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

//change the name of this class from DefaultController to → class ClubController extends Controller

class ClubController extends Controller
{
    public function indexAction()
    {
        return new Response("Bonjour");


        //definir new route qui veut m'amener a ce passsage → routing specifique :
        // C:\wamp64\www\EspritClub\src\ClubBundle\Resources\config\routing.yml

/*
        $classe="3A9";
        return new Response("Bonjour".$classe);

        //(after homepage . png )  → passer une variable  Bonjour3A9
*/
}
    public function homeAction()
    {
        return $this->render('@Club/Club/homepage.html.twig');
        //picture ( ScreenShot ) : homepage.png
        //afficher depuis la vue ( thats why we use render ) + add the view path .
        //then go to : C:\wamp64\www\EspritClub\src\ClubBundle\Resources\views\Club    and create new directory
        // copy EspritClub\src\ClubBundle\Resources\views\Default\index.html.twig and
        // paste in  → EspritClub\src\ClubBundle\Resources\views\Club
        // we added new .html.twig to our \views\Club\homePage.html.twig
    }




}

