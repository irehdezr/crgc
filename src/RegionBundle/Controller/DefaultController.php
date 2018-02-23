<?php

namespace RegionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
     public function indexAction( $id ){
		$em = $this->getDoctrine()->getManager();
    	$region = $em->getRepository('RegionBundle:Region')->find($id);
    	$farms = $em->getRepository('FarmBundle:Farm_I')->findAll();
    	$regionFarms = array();
    	foreach ($farms as $farm) {
    		if($farm->getRegion()->getId() == $id){
    			array_push($regionFarms, $farm);
    		}
    	}
    	if(!empty($regionFarms)){
        	return $this->render('RegionBundle:Default:region_information.html.twig',array('region' => $region, 'farms' =>$regionFarms));
    	}
        return $this->render('RegionBundle:Default:region_information.html.twig',array('region' => $region));
    }
}
