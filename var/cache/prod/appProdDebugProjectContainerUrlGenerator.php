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
        'farm_information' => array (  0 =>   array (    0 => 'farm_id',  ),  1 =>   array (    '_controller' => 'FarmBundle\\Controller\\DefaultController::farmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'farm_id',    ),    1 =>     array (      0 => 'text',      1 => '/farm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_information' => array (  0 =>   array (    0 => 'farm',    1 => 'product',    2 => 'presentation',  ),  1 =>   array (    '_controller' => 'ProductBundle\\Controller\\DefaultController::productAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'presentation',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'product',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'farm',    ),    3 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_add_presentation_to_cart' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProductBundle\\Controller\\DefaultController::addToCartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/addToCart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_search_presentation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProductBundle\\Controller\\DefaultController::searchPresentationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/searchPresentation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_remove_presentation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProductBundle\\Controller\\DefaultController::removePresentationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/removePresentation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_presentation_price' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProductBundle\\Controller\\DefaultController::presentationGetPriceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/presentation/getPrice',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_check_session' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::checkSessionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/checkSession',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::userFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/signup',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::createUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_address_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::addressFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/address/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_address_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::createAddressAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/address/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_signin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\SecurityController::signinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/signin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_signout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::signOutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/signout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_address_book' => array (  0 =>   array (    0 => 'user',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::addressBookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'user',    ),    1 =>     array (      0 => 'text',      1 => '/user/addressBook',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_address_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::getAddressRouteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/address/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_address_setCurrent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::setCurrentAddressAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/address/setCurrent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_shoppingcart_courier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::courierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/shoppingCart/courier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_shoppingcart_confirm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/shoppingCart/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_shoppingcart_set_courier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::setCourierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/shoppingCart/setCourier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_shoppingcart_payment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::paymentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/shoppingCart/payment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_clear_cart' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::clearCartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/clearCart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'region_homepage' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RegionBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/region',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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