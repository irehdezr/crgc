<?php

namespace FarmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function farmAction($farm_id){   
        $session = new Session();
        if(!$session->get('itemsOnCart')){
            $session->set('itemsOnCart',0);
        }
        $em = $this->getDoctrine();
    	$template = $em->getRepository('PageBundle:Farm_T')->find(1); // depends on the language
    	$farm = $em ->getRepository('FarmBundle:Farm_I')->find($farm_id);
    	if($farm){   
    		return $this->render('FarmBundle:Default:farm_information.html.twig',array('template' => $template, 'farm' => $farm));    
    	}
    	else{
    		return $this->render('PageBundle:Default:error.html.twig');  
    	}
    	
    }
}