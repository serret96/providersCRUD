<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProveController extends AbstractController
{
    /**
     * @Route("/", name="prove")
     */
    public function index(): Response
    {
        $num1 = 100;
        $num2 = 1000;
        $nombre = "nombre1, nombre2, nombre3, NoMbre4, nombrE5";
        return $this->render('prove/index.html.twig',
        array(
            'num1' => $num1,
            'num2' => $num2,
            'controller_name' => 'weon',
            'nombre' => $nombre
        ));
    }

    /**
     * @Route("/prove2/{name}", name="prove2")
     * @return Response
     */
    public function prove2($name): Response
    {
        return $this->render('prove/prove2.html.twig');
    }
}
