<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/vi')) {
            if (0 === strpos($pathinfo, '/visite')) {
                // visite
                if (rtrim($pathinfo, '/') === '/visite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'visite');
                    }

                    return array (  '_controller' => 'Front\\RealBundle\\Controller\\VisiteController::indexAction',  '_route' => 'visite',);
                }

                // visite_show
                if (preg_match('#^/visite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_show')), array (  '_controller' => 'Front\\RealBundle\\Controller\\VisiteController::showAction',));
                }

                // visite_new
                if ($pathinfo === '/visite/new') {
                    return array (  '_controller' => 'Front\\RealBundle\\Controller\\VisiteController::newAction',  '_route' => 'visite_new',);
                }

                // visite_create
                if ($pathinfo === '/visite/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_visite_create;
                    }

                    return array (  '_controller' => 'Front\\RealBundle\\Controller\\VisiteController::createAction',  '_route' => 'visite_create',);
                }
                not_visite_create:

                // visite_edit
                if (preg_match('#^/visite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_edit')), array (  '_controller' => 'Front\\RealBundle\\Controller\\VisiteController::editAction',));
                }

                // visite_update
                if (preg_match('#^/visite/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_visite_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_update')), array (  '_controller' => 'Front\\RealBundle\\Controller\\VisiteController::updateAction',));
                }
                not_visite_update:

                // visite_delete
                if (preg_match('#^/visite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_visite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_delete')), array (  '_controller' => 'Front\\RealBundle\\Controller\\VisiteController::deleteAction',));
                }
                not_visite_delete:

            }

            if (0 === strpos($pathinfo, '/ville')) {
                // ville
                if (rtrim($pathinfo, '/') === '/ville') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ville');
                    }

                    return array (  '_controller' => 'Front\\RealBundle\\Controller\\VilleController::indexAction',  '_route' => 'ville',);
                }

                // ville_show
                if (preg_match('#^/ville/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_show')), array (  '_controller' => 'Front\\RealBundle\\Controller\\VilleController::showAction',));
                }

                // ville_new
                if ($pathinfo === '/ville/new') {
                    return array (  '_controller' => 'Front\\RealBundle\\Controller\\VilleController::newAction',  '_route' => 'ville_new',);
                }

                // ville_create
                if ($pathinfo === '/ville/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ville_create;
                    }

                    return array (  '_controller' => 'Front\\RealBundle\\Controller\\VilleController::createAction',  '_route' => 'ville_create',);
                }
                not_ville_create:

                // ville_edit
                if (preg_match('#^/ville/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_edit')), array (  '_controller' => 'Front\\RealBundle\\Controller\\VilleController::editAction',));
                }

                // ville_update
                if (preg_match('#^/ville/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ville_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_update')), array (  '_controller' => 'Front\\RealBundle\\Controller\\VilleController::updateAction',));
                }
                not_ville_update:

                // ville_delete
                if (preg_match('#^/ville/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_ville_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_delete')), array (  '_controller' => 'Front\\RealBundle\\Controller\\VilleController::deleteAction',));
                }
                not_ville_delete:

            }

        }

        if (0 === strpos($pathinfo, '/offre')) {
            // offre
            if (rtrim($pathinfo, '/') === '/offre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'offre');
                }

                return array (  '_controller' => 'Front\\RealBundle\\Controller\\OffreController::indexAction',  '_route' => 'offre',);
            }

            // offre_show
            if (preg_match('#^/offre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_show')), array (  '_controller' => 'Front\\RealBundle\\Controller\\OffreController::showAction',));
            }

            // offre_new
            if ($pathinfo === '/offre/new') {
                return array (  '_controller' => 'Front\\RealBundle\\Controller\\OffreController::newAction',  '_route' => 'offre_new',);
            }

            // offre_create
            if ($pathinfo === '/offre/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offre_create;
                }

                return array (  '_controller' => 'Front\\RealBundle\\Controller\\OffreController::createAction',  '_route' => 'offre_create',);
            }
            not_offre_create:

            // offre_edit
            if (preg_match('#^/offre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_edit')), array (  '_controller' => 'Front\\RealBundle\\Controller\\OffreController::editAction',));
            }

            // offre_update
            if (preg_match('#^/offre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_offre_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_update')), array (  '_controller' => 'Front\\RealBundle\\Controller\\OffreController::updateAction',));
            }
            not_offre_update:

            // offre_delete
            if (preg_match('#^/offre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_offre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_delete')), array (  '_controller' => 'Front\\RealBundle\\Controller\\OffreController::deleteAction',));
            }
            not_offre_delete:

        }

        if (0 === strpos($pathinfo, '/media')) {
            // media
            if (rtrim($pathinfo, '/') === '/media') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'media');
                }

                return array (  '_controller' => 'Front\\RealBundle\\Controller\\MediaController::indexAction',  '_route' => 'media',);
            }

            // media_show
            if (preg_match('#^/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_show')), array (  '_controller' => 'Front\\RealBundle\\Controller\\MediaController::showAction',));
            }

            // media_new
            if ($pathinfo === '/media/new') {
                return array (  '_controller' => 'Front\\RealBundle\\Controller\\MediaController::newAction',  '_route' => 'media_new',);
            }

            // media_create
            if ($pathinfo === '/media/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_media_create;
                }

                return array (  '_controller' => 'Front\\RealBundle\\Controller\\MediaController::createAction',  '_route' => 'media_create',);
            }
            not_media_create:

            // media_edit
            if (preg_match('#^/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_edit')), array (  '_controller' => 'Front\\RealBundle\\Controller\\MediaController::editAction',));
            }

            // media_update
            if (preg_match('#^/media/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_media_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_update')), array (  '_controller' => 'Front\\RealBundle\\Controller\\MediaController::updateAction',));
            }
            not_media_update:

            // media_delete
            if (preg_match('#^/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_media_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_delete')), array (  '_controller' => 'Front\\RealBundle\\Controller\\MediaController::deleteAction',));
            }
            not_media_delete:

        }

        if (0 === strpos($pathinfo, '/comptes')) {
            // comptes
            if (rtrim($pathinfo, '/') === '/comptes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'comptes');
                }

                return array (  '_controller' => 'Front\\RealBundle\\Controller\\ComptesController::indexAction',  '_route' => 'comptes',);
            }

            // comptes_show
            if (preg_match('#^/comptes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptes_show')), array (  '_controller' => 'Front\\RealBundle\\Controller\\ComptesController::showAction',));
            }

            // comptes_new
            if ($pathinfo === '/comptes/new') {
                return array (  '_controller' => 'Front\\RealBundle\\Controller\\ComptesController::newAction',  '_route' => 'comptes_new',);
            }

            // comptes_create
            if ($pathinfo === '/comptes/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_comptes_create;
                }

                return array (  '_controller' => 'Front\\RealBundle\\Controller\\ComptesController::createAction',  '_route' => 'comptes_create',);
            }
            not_comptes_create:

            // comptes_edit
            if (preg_match('#^/comptes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptes_edit')), array (  '_controller' => 'Front\\RealBundle\\Controller\\ComptesController::editAction',));
            }

            // comptes_update
            if (preg_match('#^/comptes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_comptes_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptes_update')), array (  '_controller' => 'Front\\RealBundle\\Controller\\ComptesController::updateAction',));
            }
            not_comptes_update:

            // comptes_delete
            if (preg_match('#^/comptes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_comptes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptes_delete')), array (  '_controller' => 'Front\\RealBundle\\Controller\\ComptesController::deleteAction',));
            }
            not_comptes_delete:

        }

        // front_real_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_real_homepage');
            }

            return array (  '_controller' => 'Front\\RealBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_real_homepage',);
        }

        // front_real_liste
        if (0 === strpos($pathinfo, '/liste') && preg_match('#^/liste/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_real_liste')), array (  '_controller' => 'Front\\RealBundle\\Controller\\DefaultController::listeAction',));
        }

        // front_real_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Front\\RealBundle\\Controller\\DefaultController::contactAction',  '_route' => 'front_real_contact',);
        }

        // front_real_detail
        if (0 === strpos($pathinfo, '/detail') && preg_match('#^/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_real_detail')), array (  '_controller' => 'Front\\RealBundle\\Controller\\DefaultController::detailAction',));
        }

        // front_real_search
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'Front\\RealBundle\\Controller\\DefaultController::searchAction',  '_route' => 'front_real_search',);
        }

        // front_real_avance
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Front\\RealBundle\\Controller\\DefaultController::avanceAction',  '_route' => 'front_real_avance',);
        }

        // front_real_nous
        if ($pathinfo === '/nous') {
            return array (  '_controller' => 'Front\\RealBundle\\Controller\\DefaultController::nousAction',  '_route' => 'front_real_nous',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
