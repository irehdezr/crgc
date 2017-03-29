<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'page_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'PageBundle\\Controller\\DefaultController::pageAction',    'name' => 'home',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'farm_information' => array (  0 =>   array (    0 => 'farm_id',  ),  1 =>   array (    '_controller' => 'FarmBundle\\Controller\\DefaultController::farmAction',    'farm_id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'farm_id',    ),    1 =>     array (      0 => 'text',      1 => '/farm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_information' => array (  0 =>   array (    0 => 'farm',    1 => 'product',    2 => 'presentation',  ),  1 =>   array (    '_controller' => 'ProductBundle\\Controller\\DefaultController::productAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'presentation',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'product',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'farm',    ),    3 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_add_presentation_to_cart' => array (  0 =>   array (    0 => 'presentation',  ),  1 =>   array (    '_controller' => 'ProductBundle\\Controller\\DefaultController::addToCartAction',    'presentation' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'presentation',    ),    1 =>     array (      0 => 'text',      1 => '/product/addToCart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
