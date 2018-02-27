<?php

namespace AppBundle\Controller\web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\DomCrawler\Crawler;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction(Request $request)
    {
//        $user = new User();
//        $plainPassword = 'ryanpass';
//        $encoder = $this->container->get('security.password_encoder');
//        $encoder = $encoder->encodePassword($user, $plainPassword);
//        dump($encoder);


        $parser = $this->container->get('https://habrahabr.ru/all/');

        $parser->load('http://www.google.com/');

// Find all links
        foreach($parser->find('a') as $element) {
            echo $element->href . '<br/>';
        }
//        print_r($articles);

//$doc = new DOMDocument();
//$doc->loadHTML ( $data );
// }

    }
}
