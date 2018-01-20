<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 20/01/2018
 * Time: 18:10
 */

namespace SDGBundle\Controller;
use SDGBundle\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EvenementController extends Controller
{
    public function newAction(Request $request)
    {
        $event = new Evenement();
        $em = $this->getDoctrine()->getManager();
        $id = $this->getUser()->getId() ;
        $events=$em->getRepository("SDGBundle:Evenement")->findBy(['idassociation'=>$id]);

        $event->setIdassociation($user = $this->getUser());

        if ($request->isMethod('POST')) {
            $event->setNom($request->get('nom'));
            $event->setAdresse($request->get('adresse'));
            $event->setDateevenement(new \DateTime($request->get('date')));
            $event->setDescription($request->get('description'));

            $em->persist($event);
            $em->flush($event);

            return $this->redirectToRoute('sdg_association');
        }

        return $this->render('SDGBundle:Default:evenement.html.twig',array ("events"=>$events));
    }

    public function allAction()
    {
        $em = $this->getDoctrine()->getManager();
        $id = $this->getUser()->getId() ;
        $events=$em->getRepository("SDGBundle:Evenement")->findBy(['idassociation'=>$id]);
        return $this->render('SDGBundle:Default:mesEvenements.html.twig',array ("events"=>$events));
    }

}