<?php
/**
 * Created by PhpStorm.
 * User: or_os
 * Date: 20.11.2017
 * Time: 14:56
 */

namespace AppBundle\Controller\web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Accounts;
use AppBundle\Form\ArticleType;


class ArticleController extends Controller
{

    /**
     * article list page
     *
     * @Route("/article", name="article")
     * @Template()
     */
    public function indexAction(){

        $repo = $this->get('doctrine')->getRepository('AppBundle:Article');
        $articles = $repo->findAll();

        return compact('articles');
    }

    /**
     *
     * article by id
     * sl - for tralling slash if its needed
     *
     * @Route("/article/{id}{sl}", name="article_page", defaults={"sl" : ""}, requirements={"id" : "[1-9][0-9]*","sl":"/?"})
     * @Template()
     */
    public function showAction($id){
        $repo = $this->get('doctrine')->getRepository('AppBundle:Article');
        $article = $repo->find($id);

        if(!$article){
            throw $this -> createNotFoundException('Article not found');
        }

        return compact('article');
    }



//        $article->setTitle('Symfony start')->setContent('Some text bla bla');
//
//        $em = $this->get('doctrine')->getManager();
//
//        $em->persist($article);
//        $em->flush();

}