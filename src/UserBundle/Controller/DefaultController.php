<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;
use UserBundle\Entity\Address;
use UserBundle\Form\UserType;
use UserBundle\Form\AddressType;
use Symfony\Component\Routing\RouteCollection;

class DefaultController extends Controller{

    public function checkSessionAction(Request $request){
        if($request->isXMLHttpRequest()){
            if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
                $user = $this->get('security.token_storage')->getToken()->getUser();
                if($user){
                    $user_addresses = array();
                    $addresses = $user->getAddresses();
                    foreach ($addresses as $temp){
                        array_push($user_addresses,$temp);
                    }
                    if(count($user_addresses)>0){
                       $response = $this->generateUrl('user_address_book',array('user'=> $user->getEmail()));
                    }else{
                        $response = $this->generateUrl('user_address_add');
                    }
                }
            }else{
                $response = $this->generateUrl('user_signin');
            }
        }
        return new Response($response);
    }

    public function createUserAction(Request $request){
        $user = new User();
        $form = $this->createUserForm($user);
        $form->handleRequest($request);
        if($form->isValid()){
            $password = $form->get('password')->getData();
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user,$password);
            $user->setPassword($encoded);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('user_signin');
        }
        return $this->render('UserBundle:Default:signUp.html.twig', array('form' => $form->createView() ));
    }

    public function createAddressAction(Request $request){
        $address = new Address();
        $form = $this->createAddressForm($address);
        $form->handleRequest($request);
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $address->setUser($user);
            $user->addAddress($address);
            $em->persist($address);
            $em->flush();
            return $this->redirectToRoute('page_homepage', array('name' => "home"));
        }
        return $this->render('UserBundle:Default:add_address.html.twig', array('form' => $form->createView() ));
    }

    public function userFormAction(){
        $user = new User();
        $userForm = $this->createUserForm($user);
        $view = $userForm->createView();
        return new Response($this->render('UserBundle:Default:signUp.html.twig', array('form' => $view )));
    }
    public function signUpAction(){
        return new Response($this->generateUrl('user_form'));
    }

    public function addressFormAction(){
        $address = new Address();
        $form = $this->createAddressForm($address);
        return $this->render('UserBundle:Default:add_address.html.twig', array('form' => $form->createView() ));
    }

    private function createUserForm(User $user){
        $form = $this->createForm(UserType::class, $user, array(
            'action' => $this->generateUrl('user_create'),
            'method' => 'POST'
            )) ;
        return $form;
    }

    private function createAddressForm(Address $address){
        $form = $this->createForm(AddressType::class, $address, array(
            'action' => $this->generateUrl('user_address_create'),
            'method' => 'POST'
            )) ;
        return $form;
    }

    public function homeAction(){
        //render profile if prefers
        return $this->redirectToRoute('page_homepage', array('name' => "home"));
    }
    public function addressBookAction(Request $request,$user){
        $em = $this->getDoctrine()->getManager();
        $user = $em ->getRepository('UserBundle:User')->find($user);                
        $currentUser = $this->get('security.token_storage')->getToken()->getUser();

        $email = $user->getEmail();
        $addresses = $user->getAddresses();
        if($email == $currentUser->getEmail()){
        	$response = $this->renderView('UserBundle:Default:address_book.html.twig', array('user'=>$user, 'addresses' => $addresses ));
        }else{
        	$response = $this->renderView('PageBundle:Default:error.html.twig');
        }
        return new Response($response);

    }
    public function getAddressRouteAction(){
        return new Response($this->generateUrl('user_address_add'));
    }
    public function setCurrentAddressAction(Request $request){
        $addressName = $request->request->get('addressName');
        $session = new Session();
        $session->set('currentAddress',$addressName);
        return new Response($this->generateUrl('user_shoppingcart_courier'));
    }

    public function courierAction(){
        $session = new Session();
        $address = $session->get('currentAddress');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $addresses = $user->getAddresses();
        foreach ($addresses as $temp){
            if($temp->getFullname() == $address){
                $user_address = $temp;
            }
        }
        if($user_address){
            return $this->render('UserBundle:Security:courier.html.twig',array('address' =>$user_address));    
        }else{
            return $this->renderView('PageBundle:Default:error.html.twig');            
        }
    }

    public function confirmAction(Request $request){
        $products = array();
        $session = new Session();
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $addressName = $session->get('currentAddress');
        $courierOption = $session->get('currentCourier');
        if($session->get("productsOnCart")){
            if($addressName){
                if($courierOption){
                    $temp = $session->get("productsOnCart");
                    foreach($temp as $presentation){
                        array_push($products,array("presentation" => ($em->getRepository('ProductBundle:Presentation')->find($presentation["presentation"])),"quantity" => $presentation["quantity"])); 
                    }
                    $address = $em->getRepository('UserBundle:Address')->find($addressName); 
                }
            }
        }
        $template = $em->getRepository('PageBundle:Shopping_Cart_T')->find(1);
        return $this->render('UserBundle:Security:confirm.html.twig',array("template" => $template, "productsOnCart" => $products,"address"=> $address,"courier"=>$courierOption));
    }

    public function setCourierAction(Request $request){
        if($request->isXMLHttpRequest()){
            $courier = $request->request->get('option');
            $session = new Session();
            $session->set('currentCourier',$courier);        
            $response = $this->generateUrl('user_shoppingcart_confirm');
        }else{
            $response = $this->generateUrl('page_homepage', array('name' => "error"));

        }
        return new Response($response);
    }

    public function paymentAction(){
        return $this->render('UserBundle:Security:payment.html.twig');
    }

    public function clearCartAction(Request $request){
        $session = new Session();
        $session->remove('productsOnCart');
        $session->remove('itemsOnCart');
        return $this->redirectToRoute('page_homepage', array('name' => "home"));
    }
}