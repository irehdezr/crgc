<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        $manager = $this->getDoctrine()->getManager();
        $users = $manager->getRepository('UserBundle:User')->findAll();
        // $result= "Lista de usuarios: <br/>";
        // foreach($users as $user){
        //     $result .= "Name: ".$user->getName() . " -- Role: " .$user->getRole() ."<br/>" ;
        // }
        // return new Response($result);
        return $this->render("UserBundle:User:index.html.twig",array("users"=>$users));
    }
    public function articulesAction($page)
    {
        return new Response('Este es mi artículo '.$page);
    }
    public function createAction($page)
    {
    }
    public function readAction($id)
    {
        $repository = $this->getDoctrine()->getRepository("UserBundle:User");
        $user = $repository->find($id);
        return new Response("User name: ".$user->getName());
    }
    public function updateAction($page)
    {
    }
    public function deleteAction($page)
    {
    }
}
