<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 20/01/2018
 * Time: 17:49
 */

namespace SDGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SDGBundle\Entity\Article;

class ArticleController extends Controller
{
    function ajoutAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $article = new Article();
        if ($request->isMethod('POST')) {
            $article->setNom($request->get('nom'));
            $article->setSpecialite($request->get('specialite'));
            $article->setDescription($request->get('description'));
            $article->setIdmedecin($user = $this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();




        }
        return $this->render("SDGBundle:Default:ajoutarticle.html.twig");
    }
}