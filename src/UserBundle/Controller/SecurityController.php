<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class SecurityController extends Controller{

	public function signinAction(Request $request){
		$authenticationUtils = $this->get('security.authentication_utils');
		// get the login error if there is one
   		$error = $authenticationUtils->getLastAuthenticationError();
    	// last username entered by the user
    	$lastUsername = $authenticationUtils->getLastUsername();
    	$session = new Session();
    	$session->set('url',$request->headers->get('referer'));
    	$user = $request->request->get('username');
		return $this->render('UserBundle:Security:login.html.twig', array(
			'last_username' => $lastUsername,
			'error' => $error
			));
	}

}