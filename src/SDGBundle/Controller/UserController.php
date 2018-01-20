<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 20/01/2018
 * Time: 02:59
 */

namespace SDGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('SDGBundle:User')->findAll();

        return $this->render('SDGBundle:users:index.html.twig', array(
            'users' => $users,
        ));
    }
}