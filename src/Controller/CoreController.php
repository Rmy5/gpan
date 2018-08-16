<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CoreController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('core/index.html.twig', [
            'controller_name' => 'CoreController',
        ]);
    }

    /**
     * @Route("/get/studies/{id}", name="get_studies")
     */
    public function getStudiesByDept($id)
    {
        $em = $this->getDoctrine()->getManager();

        $studies = $em->getRepository('App:Etude')
                      ->getStudiesByDept($id);

        return $this->render('core/studies.html.twig', ['studies' => $studies, 'id' => $id]);
    }

    /**
     * @Route("/get/case/{dept}/{id}", name="get_case")
     */
    public function getCase($id, $dept)
    {
        $em = $this->getDoctrine()->getManager();

        $case= $em->getRepository('App:Temoignage')->find($id);

        return $this->render('core/case.html.twig', ['case' => $case, 'id' => $dept]);
    }

    /**
     * @Route("/test/{id}", name="test")
     */
    public function test($id)
    {
        return $this->render('core/test.html.twig', ['id' => $id]);
    }
}
