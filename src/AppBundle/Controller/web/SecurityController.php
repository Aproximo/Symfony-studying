<?php
/**
 * Created by PhpStorm.
 * User: or_os
 * Date: 21.11.2017
 * Time: 17:26
 */

namespace AppBundle\Controller\web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;


class SecurityController extends Controller
{

    /**
     * @Route("/login", name="user_login")
     * @Template()
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return ['last_username' => $lastUsername, 'error' => $error];
    }


    /**
     * @Route("/logout", name="security_logout")
     * @Template()
     */
    public function logoutAction()
    {
        return [];
    }


}