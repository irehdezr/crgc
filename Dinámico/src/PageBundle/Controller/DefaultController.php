<?php

namespace PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function pageAction($name)
    {
        return $this->render('PageBundle:Default:'.$name.'.html.twig');
    }

}
