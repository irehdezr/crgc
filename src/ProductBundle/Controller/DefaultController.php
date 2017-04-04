<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller{

    
    public function productAction($product, $presentation){
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


    public function addToCartAction(Request $request){
        $reponse = $this->generateUrl('page_homepage', array('name' => 'error'));
        if($request->isXMLHttpRequest()){
            $presentation = $request->request->get("id");
            $em = $this->getDoctrine();
            $presentation = $em->getRepository('ProductBundle:Presentation')->find($presentation); 
            if($presentation){
                $session = new Session();
                if(!$session->get('productsOnCart')){
                    $session->set('productsOnCart',array($presentation));
                }else{
                     $session->set('productsOnCart',array_merge($session->get('productsOnCart'),array($presentation)));
                }
                $this->addItemToCart();
                $response =$this->generateUrl('page_homepage', array('name' => 'shoppingCart'));
            }
        }
        return new Response($response);
        
    }


    public function searchPresentationAction(Request $request){
        $response = 'false';
        if($request->isXMLHttpRequest()){
            $product = $request->request->get('product');
            $roastDescription = $request->request->get('roast');
            $weight = $request->request->get('weight');
            $grindDescription = $request->request->get('grind');
            $em = $this->getDoctrine();            
            $roast = ($em->getRepository('ProductBundle:Roast')->findOneBy(array('description' => $roastDescription )))->getId();
            $grind = ($em->getRepository('ProductBundle:Grind')->findOneBy(array('description' => $grindDescription )))->getId();
            $presentation = $em->getRepository('ProductBundle:Presentation')->findOneBy(array('product' => $product, 'roast' => $roast,'weight' => $weight, 'grind' => $grind));
            if($presentation){
                $response = $presentation->getId();    
            }        
        }
        return new Response($response);  
    }


    public function addItemToCart(){
        $session = new Session();
        $session->set('itemsOnCart',$session->get('itemsOnCart')+1);
    }
}