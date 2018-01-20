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

    public function listAction($specialite)
    {
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('SDGBundle:Article')->findBy(["specialite" => $specialite]);

        return $this->render('SDGBundle:Default:listarticle.html.twig', array(
            'article' => $article,
        ));
    }
    public function detailAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('SDGBundle:Article')->find($id);

        return $this->render('SDGBundle:Default:detailarticle.html.twig', array(
            'article' => $article,
        ));
    }
}