<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller{

    
    public function productAction($farm,$product, $presentation){
    	$em = $this->getDoctrine();
    	$template = $em->getRepository('PageBundle:Product_T')->find(1); 
        $farm = $em->getRepository('FarmBundle:Farm_I')->find($farm);
    	$product = $em->getRepository('ProductBundle:Product_I')->find($product);
        $presentation = $em->getRepository('ProductBundle:Presentation')->find($presentation);
        if($product->getFarm() == $farm && $presentation->getProduct() == $product){
        	return $this->render('ProductBundle:Default:product_information.html.twig', array("template" => $template,"product" => $product,"presentation" => $presentation,"farm"=>$farm)); 
        }else{
            return $this->render('PageBundle:Default:error.html.twig');
        }

  //       $farm = $product->getFarm();
  //   	$flag = false;
  //   	foreach ($presentations as $temp){
  //   		if($temp->getId() == $presentation){
  //   		 	$flag = true;
  //   		 	$defaultPresentation = $temp;
  //   		}
  //   	}
  //   	if($product){   
		// 	if($flag){
		// 		return $this->render('ProductBundle:Default:product_information.html.twig', array("template" => $template,"product" => $product,"presentation" => $defaultPresentation,"farm"=>$farm));  
		// 	    }
		// 	else{
		// 		echo "Presentation doesnt exist";
		// 	    return $this->render('PageBundle:Default:error.html.twig');// Presentation doesnt exist
		// 	}
		// }
		// else{
		// 		echo "Product doesnt exist";
		//     return $this->render('PageBundle:Default:error.html.twig');//Product doesnt exist
		// }
    }

    // public function productAction($product, $presentation){
    //     $em = $this->getDoctrine();
    //     $template = $em->getRepository('PageBundle:Product_T')->find(1); // depends on the language
    //     $product = $em->getRepository('ProductBundle:Product_I')->find($product);
    //     $presentations = $product->getPresentations();  
    //     $farm = $product->getFarm();
    //     $flag = false;
    //     foreach ($presentations as $temp){
    //         if($temp->getId() == $presentation){
    //             $flag = true;
    //             $defaultPresentation = $temp;
    //         }
    //     }
    //     if($product){   
    //         if($flag){
    //             return $this->render('ProductBundle:Default:product_information.html.twig', array("template" => $template,"product" => $product,"presentation" => $defaultPresentation,"farm"=>$farm));  
    //             }
    //         else{
    //             echo "Presentation doesnt exist";
    //             return $this->render('PageBundle:Default:error.html.twig');// Presentation doesnt exist
    //         }
    //     }
    //     else{
    //             echo "Product doesnt exist";
    //         return $this->render('PageBundle:Default:error.html.twig');//Product doesnt exist
    //     }
    // }

    public function addToCartAction(Request $request){
        $reponse = $this->generateUrl('page_homepage', array('name' => 'error'));
        if($request->isXMLHttpRequest()){
            $presentation = $request->request->get("id");
            $em = $this->getDoctrine();
            $presentation = $em->getRepository('ProductBundle:Presentation')->find($presentation); 
            if($presentation){
                $session = new Session();
                if(!$session->get('productsOnCart')){
                    $session->set('productsOnCart',array(array("presentation"=>$presentation->getId(),"quantity"=>1)));
                }else{
                    $pos = array_search($presentation->getId(), array_column($session->get('productsOnCart'), 'presentation'));
                    if($pos !== false ){
                        $temp = $session->get('productsOnCart');
                        $quantity = $temp[$pos]["quantity"] += 1;  
                        $session->set('productsOnCart',$temp);                       
                    }else{ 
                        $session->set('productsOnCart',array_merge($session->get('productsOnCart'),array(array("presentation"=>$presentation->getId(),"quantity"=>1))));
                    }
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
            $response = $grind;
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

    public function removePresentationAction(Request $request){
        $response = 'false';
        $em = $this->getDoctrine();       
        if($request->isXMLHttpRequest()){
            $id = $request->request->get('id');
            $presentation = $em->getRepository('ProductBundle:Presentation')->find($id);
            $session = new Session();
            $cart = $session->get('productsOnCart');
            $pos = array_search($id, array_column($session->get('productsOnCart'), 'presentation'));
            if($pos !== false){
                if(count($cart) > 1){
                    unset($cart[$pos]);
                    $session->set('productsOnCart',$cart);
                }else{
                    $session->remove('productsOnCart');
                }
                $this->removeItemFromCart($id);
            $response =$this->generateUrl('page_homepage', array('name' => 'shoppingCart'));
            }
        }
        return new Response($response);  
    }   

    public function presentationGetPriceAction(Request $request){
        $response = '';
        $em = $this->getDoctrine();       
        if($request->isXMLHttpRequest()){
            $id = $request->request->get('id');
            $presentation = $em->getRepository('ProductBundle:Presentation')->find($id);
            $response = $presentation->getPrice();
        }
        return new Response($response);   
    }

    public function removeItemFromCart($id){
        $session = new Session();
        $session->set('itemsOnCart',$session->get('itemsOnCart')-1);

    }
    public function getProductAction(Request $request){
        $response = "Request error";
        if($request->isXMLHttpRequest()){
            $id = $request->request("id");
            $product = $this->getDoctrine()->getRepository('ProductBundle:Product_I')->find($id);
            $response = $product;
        }
        return new Response ($response);
    }
}