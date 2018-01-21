<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 20/01/2018
 * Time: 18:10
 */

namespace SDGBundle\Controller;
use SDGBundle\Entity\Evenement;
use SDGBundle\Entity\Sos;
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
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $events=$em->getRepository("SDGBundle:Evenement")->findAll();
        return $this->render('SDGBundle:Default:listevenement.html.twig',array ("events"=>$events));
    }

    public function newsosAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $sos= new Sos() ;
        $sos ->setIdAssociation($user = $this->getUser());
        $id = $user = $this->getUser()->getId() ;
        $soss=$em->getRepository("SDGBundle:Sos")->findBy(['idAssociation'=>$id]);
        $sosss=$em->getRepository("SDGBundle:Sos")->findAll();

        $form = $this->createForm('SDGBundle\Form\SosType', $sos);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($sos);
            $em->flush();

            return $this->redirectToRoute('sdg_postsos');
        }

        return $this->render('SDGBundle:Default:posterSOS.html.twig', array(
            'soss' => $soss,'sos' => $sosss,
            'form' => $form->createView(),
        ));
    }

    public function listSOSAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sos=$em->getRepository("SDGBundle:Sos")->findAll();
        return $this->render('SDGBundle:Default:listSos.html.twig',array ("sos"=>$sos));
    }

}