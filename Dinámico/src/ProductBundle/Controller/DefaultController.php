<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function productAction($product, $presentation)
    {
    	$em = $this->getDoctrine();
    	$template = $em->getRepository('ProductBundle:Product_T')->find(1); // depends on the language
    	$product = $em->getRepository('ProductBundle:Product_I')->find($product); 
    	$presentation = $em ->getRepository('ProductBundle:Presentation')->find($presentation);
    	if($product){   
	    		if($presentation){
	    			return $this->render('PageBundle:Default:product_information.html.twig', array("template" => $template,
	    																						   "product" => $product,
	    																						   "presentation" => $presentation));  
		    	}
		    	else{
		    	    return $this->render('PageBundle:Default:error.html.twig');// Presentation doesnt exist
		    	}
		}
	    else{
	        return $this->render('PageBundle:Default:error.html.twig');//Product doesnt exist
	    }
    }
}
