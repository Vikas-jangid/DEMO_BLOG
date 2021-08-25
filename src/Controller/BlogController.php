<?php

namespace App\Controller;

use App\Entity\Blog;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BlogController extends AbstractController {

    /**
     * @Route("/" , name="home")
     * @Method({"POST"})
     */
    public function home() {

        return $this->render('blog_view/AddBlog.html.twig');
        }

        /**
         * @Route("/blog/new" ,  name="new_blog")
         * @Method({"GET" , "POST"})
         */
        public function new(Request $request){
        $blog = new blog();

        $form = $this->createFormBuilder($blog)
                ->add('BlogTitle', TextType::class, array('attr' =>
                    array('class' => 'form-control')))
                ->add('Author', TextType::class, array('attr' =>
                    array('class' => 'form-control')))
                ->add('BlogDescription', TextareaType::class, array(
                    'required' => false,
                    'attr' => array('class' => 'form-control')
                ))
                ->add('save', SubmitType::class, array(
                    'label' => 'Add',
                    'attr' => array('class' => 'btn btn-dark float-right px-5 text-white mt-3')
                ))
                ->getForm();

        return $this->render('blog_view/AddBlog.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/blog", name="blogs")
     * 
     * @Method({"GET"})
     */

    public function blog() {

        $blogs = $this->getDoctrine()->getRepository(Blog::class)->findAll();

        return $this->render('blog_view/showBlog.html.twig', array('blogs' => $blogs));
    }

    /**
     * @Route("/singleBlog/{id}" , name="singleBlog")
     */
    public function show($id) {
        $blog = $this->getDoctrine()->getRepository(Blog::class)->find($id);
        return $this->render('blog_view/singleBlog.html.twig', array('blog' => $blog));
    }

}
