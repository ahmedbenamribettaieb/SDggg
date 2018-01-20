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
}
