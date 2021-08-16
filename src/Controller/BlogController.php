<?php

namespace App\Controller;

use App\Entity\Blog;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController {

/**
 * @Route("/" , name="home")
 * @Method({"POST"})
 */
public function home() {

return $this->render('blog_view/AddBlog.html.twig');
}



/**
 * @Route("/blog", name="blogs")
 * 
 * @Method({"GET"})
 */
public function blog() {


$blogs = $this->getDoctrine()->getRepository(Blog::class)->findAll();

//        dump($blogs);
//        
//        exit;

return $this->render('blog_view/showBlog.html.twig', array('blogs' => $blogs));


}




/**
 * @Route("/blog/save")
 */
public function BlogSave() {

//        $entityManager = $this->getDoctrine()->getManager();
//        
//        $Blog = new Blog();
//        
//        $Blog->setBlog_Title('BLOG TITLE ONE');
//        $Blog->setAuthor('Author One');
//        $Blog->setBlog_description('BLOG description is here');
//        
//        $entityManager->persist($Blog);
//        
//        $entityManager->flush();
//
//        return new Response('saves an blog with the end of ' . $Blog->getId());
}

}
