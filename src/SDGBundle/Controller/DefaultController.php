<?php

namespace SDGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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


    public function calculAction(Request $request)
    {
        $x =0 ;
        if ($request->isMethod('POST')) {
           if( $request->get('Consultation')  ){
               return $this->render("SDGBundle:Default:epaceAssociation.html.twig");
           }





        }
        return $this->render("SDGBundle:Default:calcul.html.twig");
    }


}
