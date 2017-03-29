<?php

namespace PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function pageAction($name){
        $session = new Session();
        if(!$session->get('itemsOnCart')){
            $session->set('itemsOnCart',0);
        }
		$em = $this->getDoctrine();
    	switch ($name) {
    		case 'home':
    			$template = $em->getRepository('PageBundle:Home_T')->find(1);
    			$products = array($template->getProduct1(),$template->getProduct2(),$template->getProduct3(),$template->getProduct4(),$template->getProduct5(),$template->getProduct6());
        		return $this->render('PageBundle:Default:home.html.twig', array('template' => $template, 'products' => $products));
    			break;
            case 'shoppingCart':
                return $this->render('PageBundle:Default:shopping_cart.html.twig');
                break;
    		case 'onDevelopment':
        		return $this->render('PageBundle:Default:onDevelopment.html.twig');
    			break;
            case 'login':
                return $this->render('PageBundle:Default:login.html.twig');
                break;
    		default:
    			return $this->render('PageBundle:Default:error.html.twig');
    			break;
    	}
    	
    }
}
