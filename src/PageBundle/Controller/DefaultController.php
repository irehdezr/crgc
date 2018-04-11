<?php

namespace PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

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
    			$products = array();
    			if($session->get("productsOnCart")){
    				$temp = $session->get("productsOnCart");
	             	foreach($temp as $presentation){
						array_push($products,array("presentation" => ($em->getRepository('ProductBundle:Presentation')->find($presentation["presentation"])),"quantity" => $presentation["quantity"]));	
	           	    }
    		 	}
                $template = $em->getRepository('PageBundle:Shopping_Cart_T')->find(1);
                return $this->render('PageBundle:Default:shopping_cart.html.twig',array("template" => $template, "productsOnCart" => $products));
                break;
    		case 'onDevelopment':
        		return $this->render('PageBundle:Default:onDevelopment.html.twig');
    			break;
            case 'test':
                return $this->render('PageBundle:Default:test.html.twig');
                break;
    		default:
    			return $this->render('PageBundle:Default:error.html.twig');
    			break;
    	}
    }
    public function headerAction(){
        $em = $this->getDoctrine();
        $session = new Session();
        $email = $session->get('user');
        $farms = $em->getRepository('FarmBundle:Farm_I')->findAll();
        $regions = $em->getRepository('FarmBundle:Region')->findAll();
        if($email){
            $user = $em->getRepository('UserBundle:User')->find($email);
            return $this->render('PageBundle:Default:header.html.twig',array('user'=>$user, 'farms'=>$farms, 'regions'=>$regions));
        }
        return $this->render('PageBundle:Default:header.html.twig',array('farms'=>$farms, 'regions'=>$regions));
        
    }
}
