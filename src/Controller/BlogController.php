<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//use  Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotations\Route;

class BlogController extends AbstractController
{
    public function index(){
        
        /**
         * @Route("/");
         */
    return $this->render('blog_view/AddBlog.html.twig');
    }
}
