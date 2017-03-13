<?php

namespace PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function pageAction($name)
    {
		$em = $this->getDoctrine();
    	switch ($name) {
    		case 'home':
    			$template = $em->getRepository('PageBundle:Home_T')->find(1);
    			$products = array($template->getProduct1(),$template->getProduct2(),$template->getProduct3(),$template->getProduct4(),$template->getProduct5(),$template->getProduct6());
        		return $this->render('PageBundle:Default:home.html.twig', array('template' => $template, 'products' => $products));
    			break;
    		case 'onDevelopment':
        		return $this->render('PageBundle:Default:onDevelopment.html.twig');
    			break;
    		default:
    			return $this->render('PageBundle:Default:error.html.twig');
    			break;
    	}
    	
    }

}
