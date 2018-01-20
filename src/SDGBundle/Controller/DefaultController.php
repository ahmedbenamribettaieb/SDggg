<?php

namespace SDGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SDGBundle:Default:index.html.twig');
    }

    public function loginAction()
    {
        return $this->render('SDGBundle:Default:signin.html.twig');
    }

    public function signinAction()
    {
        return $this->render('SDGBundle:Security:login.html.twig');
    }

    public function registerAction()
    {
        return $this->render('SDGBundle:Default:register.html.twig');
    }

    public function medecinAction()
    {
        return $this->render('SDGBundle:Default:espaceMedecin.html.twig');
    }
}
