<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConsoleNameController extends Controller
{
    /**
     * @Route("/console", name="console_name")
     */
    public function index()
    {
        return $this->render('console_name/index.html.twig', [
            'controller_name' => 'ConsoleNameController',
        ]);
    }
}
