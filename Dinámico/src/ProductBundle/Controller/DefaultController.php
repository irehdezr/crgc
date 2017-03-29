<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function productAction($product, $presentation)
    {
    	$em = $this->getDoctrine();
    	$template = $em->getRepository('PageBundle:Product_T')->find(1); // depends on the language
    	$product = $em->getRepository('ProductBundle:Product_I')->find($product);
    	$presentations = $product->getPresentations();	
    	$flag = false;
    	foreach ($presentations as $temp){
    		if($temp->getId() == $presentation){
    		 	$flag = true;
    		 	$defaultPresentation = $temp;
    		}
    	}
    	if($product){   
			if($flag){
				return $this->render('PageBundle:Default:product_information.html.twig', array("template" => $template,"product" => $product,"presentation" => $defaultPresentation));  
			    }
			else{
				echo "Presentation doesnt exist";
			    return $this->render('PageBundle:Default:error.html.twig');// Presentation doesnt exist
			}
		}
		else{
				echo "Product doesnt exist";
		    return $this->render('PageBundle:Default:error.html.twig');//Product doesnt exist
		}
    }
    public function addToCartAction(Request $request, $presentation){
        if($request->isXMLHttpRequest()){
            $em = $this->getDoctrine();
            $presentation = $em->getRepository('ProductBundle:Presentation')->find($presentation); // search the presentation requested
            if(! $presentation){
                return $this->render('PageBundle:Default:error.html.twig');// Presentation requested not found          
            }else{
                $session = new Session();
                $session->set('itemsOnCart',$session->get('itemsOnCart')+1);
                return new Response($this->generateUrl('page_homepage', array('name' => 'shoppingCart')));
            }
        }else{              
            return $this->render('PageBundle:Default:error.html.twig');// it was not requested
        }
    }
}
