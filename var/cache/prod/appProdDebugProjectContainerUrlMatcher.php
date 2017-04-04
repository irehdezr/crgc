<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // page_homepage
        if (preg_match('#^/(?P<name>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_homepage')), array (  '_controller' => 'PageBundle\\Controller\\DefaultController::pageAction',  'name' => 'home',));
        }

        // farm_information
        if (0 === strpos($pathinfo, '/farm') && preg_match('#^/farm(?:/(?P<farm_id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'farm_information')), array (  '_controller' => 'FarmBundle\\Controller\\DefaultController::farmAction',  'farm_id' => 0,));
        }

        if (0 === strpos($pathinfo, '/product')) {
            // product_information
            if (preg_match('#^/product/(?P<farm>[^/]++)/(?P<product>[^/]++)/(?P<presentation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_information')), array (  '_controller' => 'ProductBundle\\Controller\\DefaultController::productAction',));
            }

            // product_add_presentation_to_cart
            if (0 === strpos($pathinfo, '/product/addToCart') && preg_match('#^/product/addToCart(?:/(?P<presentation>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_add_presentation_to_cart')), array (  '_controller' => 'ProductBundle\\Controller\\DefaultController::addToCartAction',  'presentation' => 1,));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
