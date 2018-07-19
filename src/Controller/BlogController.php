<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog_liste")
     */
    public function liste()
    {
        return new Response('<h1>test routes liste</h1>');
    }
    
    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug){
        return new Response( '<h1>test routes show where slug = '.$slug.'</h1>');
    }
    
    /**
     * @Route({
     *     "fr": "/a-propos",
     *     "en": "/about-us"
     * }, name="about_us")
     */
    public function about()
    {
        return new Response( '<h1>test about many routes</h1>');
    }
}
