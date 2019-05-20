<?php

namespace App\Controller;


use App\Entity\Potion;
use App\Repository\PotionRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/bag", name="bag")
 */
class BagController extends AbstractController
{
    /**
     * @Route("/", name="bag_index", methods={"GET"})
     */
    public function index(PotionRepository $potionRepository): Response
    {
        return $this->render('bag/index.html.twig', [
            'potion' => $potionRepository->findAll(),
        ]);
        
    }


    /**
     * @Route("/{potion}", name="bag_show", methods={"GET"})
     */
    public function show(Potion $potion): Response
    {
        return $this->render('bag/show.html.twig', [
            'potion' => $potion,
        ]);
    }

}