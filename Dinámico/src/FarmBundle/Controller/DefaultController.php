<?php

namespace FarmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function farmAction($farm_id){    	
    	$em = $this->getDoctrine();
    	$template = $em->getRepository('PageBundle:Farm_T')->find(1); // depends on the language
    	$farm = $em ->getRepository('FarmBundle:Farm_I')->find($farm_id);
    	if($farm){   
    		return $this->render('PageBundle:Default:farm_information.html.twig',array('template' => $template, 'farm' => $farm));    
    	}
    	else{
    		return $this->render('PageBundle:Default:error.html.twig');  
    	}
    	
    }
}