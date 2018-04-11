<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // page_homepage
        if (preg_match('#^/(?P<name>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_homepage')), array (  '_controller' => 'PageBundle\\Controller\\DefaultController::pageAction',  'name' => 'home',));
        }

        // farm_information
        if (0 === strpos($pathinfo, '/farm') && preg_match('#^/farm/(?P<farm_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'farm_information')), array (  '_controller' => 'FarmBundle\\Controller\\DefaultController::farmAction',));
        }

        if (0 === strpos($pathinfo, '/product')) {
            // product_information
            if (preg_match('#^/product/(?P<farm>[^/]++)/(?P<product>[^/]++)/(?P<presentation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_information')), array (  '_controller' => 'ProductBundle\\Controller\\DefaultController::productAction',));
            }

            // product_add_presentation_to_cart
            if ($pathinfo === '/product/addToCart') {
                return array (  '_controller' => 'ProductBundle\\Controller\\DefaultController::addToCartAction',  '_route' => 'product_add_presentation_to_cart',);
            }

            // product_search_presentation
            if ($pathinfo === '/product/searchPresentation') {
                return array (  '_controller' => 'ProductBundle\\Controller\\DefaultController::searchPresentationAction',  '_route' => 'product_search_presentation',);
            }

            // product_remove_presentation
            if ($pathinfo === '/product/removePresentation') {
                return array (  '_controller' => 'ProductBundle\\Controller\\DefaultController::removePresentationAction',  '_route' => 'product_remove_presentation',);
            }

            // product_presentation_price
            if ($pathinfo === '/product/presentation/getPrice') {
                return array (  '_controller' => 'ProductBundle\\Controller\\DefaultController::presentationGetPriceAction',  '_route' => 'product_presentation_price',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_check_session
            if ($pathinfo === '/user/checkSession') {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::checkSessionAction',  '_route' => 'user_check_session',);
            }

            // user_form
            if ($pathinfo === '/user/form') {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::userFormAction',  '_route' => 'user_form',);
            }

            // user_signup
            if ($pathinfo === '/user/signup') {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::signUpAction',  '_route' => 'user_signup',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::createUserAction',  '_route' => 'user_create',);
            }

            // user_address_add
            if ($pathinfo === '/user/address/add') {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::addressFormAction',  '_route' => 'user_address_add',);
            }

            if (0 === strpos($pathinfo, '/user/sign')) {
                // user_signin
                if ($pathinfo === '/user/signin') {
                    return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::signinAction',  '_route' => 'user_signin',);
                }

                // user_signout
                if ($pathinfo === '/user/signout') {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::signOutAction',  '_route' => 'user_signout',);
                }

            }

            if (0 === strpos($pathinfo, '/user/address')) {
                // user_address_create
                if ($pathinfo === '/user/address/create') {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::createAddressAction',  '_route' => 'user_address_create',);
                }

                // user_address_book
                if (0 === strpos($pathinfo, '/user/addressBook') && preg_match('#^/user/addressBook/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_address_book')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::addressBookAction',));
                }

                // user_address_new
                if ($pathinfo === '/user/address/new') {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::getAddressRouteAction',  '_route' => 'user_address_new',);
                }

                // user_address_setCurrent
                if ($pathinfo === '/user/address/setCurrent') {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::setCurrentAddressAction',  '_route' => 'user_address_setCurrent',);
                }

            }

            if (0 === strpos($pathinfo, '/user/shoppingCart')) {
                if (0 === strpos($pathinfo, '/user/shoppingCart/co')) {
                    // user_shoppingcart_courier
                    if ($pathinfo === '/user/shoppingCart/courier') {
                        return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::courierAction',  '_route' => 'user_shoppingcart_courier',);
                    }

                    // user_shoppingcart_confirm
                    if ($pathinfo === '/user/shoppingCart/confirm') {
                        return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::confirmAction',  '_route' => 'user_shoppingcart_confirm',);
                    }

                }

                // user_shoppingcart_set_courier
                if ($pathinfo === '/user/shoppingCart/setCourier') {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::setCourierAction',  '_route' => 'user_shoppingcart_set_courier',);
                }

                // user_shoppingcart_payment
                if ($pathinfo === '/user/shoppingCart/payment') {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::paymentAction',  '_route' => 'user_shoppingcart_payment',);
                }

            }

            // user_clear_cart
            if ($pathinfo === '/user/clearCart') {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::clearCartAction',  '_route' => 'user_clear_cart',);
            }

        }

        // region_homepage
        if (0 === strpos($pathinfo, '/region') && preg_match('#^/region/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_homepage')), array (  '_controller' => 'RegionBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
