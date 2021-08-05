<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//use  Symfony\Component\HttpFoundation\Response;


class BlogController extends AbstractController
{
        /**
         * @Route("/" , name="home")
         */
    public function home(){
        
    return $this->render('blog_view/AddBlog.html.twig');
    }
    
    /**
     * @Route("/blog", name="blogs")
     */
    
    public function blog(){
        
    return $this->render('blog_view/showBlog.html.twig');
    }
}
