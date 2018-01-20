<?php

namespace SDGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SDGBundle:Default:index.html.twig');
    }







    public function medecinAction()
    {
        return $this->render('SDGBundle:Default:espaceMedecin.html.twig');
    }

    public function associationAction()
    {
        return $this->render('SDGBundle:Default:epaceAssociation.html.twig');
    }


}
