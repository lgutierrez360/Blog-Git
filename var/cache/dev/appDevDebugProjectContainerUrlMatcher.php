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

        if (0 === strpos($pathinfo, '/api')) {
            // user_login
            if ($pathinfo === '/api/user') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_login;
                }

                return array (  '_controller' => 'ApiBundle\\Controller\\ApiUserController::loginApiAction',  '_route' => 'user_login',);
            }
            not_user_login:

            // prueba
            if (0 === strpos($pathinfo, '/api/default') && preg_match('#^/api/default/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_prueba;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prueba')), array (  '_controller' => 'ApiBundle\\Controller\\DefaultController::pruebaAction',));
            }
            not_prueba:

            // api_edit
            if (0 === strpos($pathinfo, '/api/edit') && preg_match('#^/api/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_api_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_edit')), array (  '_controller' => 'ApiBundle\\Controller\\ApiPostController::savePostAction',));
            }
            not_api_edit:

            // api_new
            if ($pathinfo === '/api/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_new;
                }

                return array (  '_controller' => 'ApiBundle\\Controller\\ApiPostController::savePostAction',  '_route' => 'api_new',);
            }
            not_api_new:

            // api-delete
            if (0 === strpos($pathinfo, '/api/delete') && preg_match('#^/api/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_apidelete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api-delete')), array (  '_controller' => 'ApiBundle\\Controller\\ApiPostController::deletePostAction',));
            }
            not_apidelete:

            // api_post
            if (0 === strpos($pathinfo, '/api/post') && preg_match('#^/api/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post')), array (  '_controller' => 'ApiBundle\\Controller\\ApiPostController::showPostAction',));
            }
            not_api_post:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/post')) {
            // post_ajax
            if ($pathinfo === '/post_ajax') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ajaxPostAction',  '_route' => 'post_ajax',);
            }

            // post
            if ($pathinfo === '/post') {
                return array (  '_controller' => 'AppBundle\\Controller\\PostController::post',  '_route' => 'post',);
            }

            // post_user_ajax
            if ($pathinfo === '/post_user_ajax') {
                return array (  '_controller' => 'AppBundle\\Controller\\PostController::ajaxPostUserAction',  '_route' => 'post_user_ajax',);
            }

            // detail
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail')), array (  '_controller' => 'AppBundle\\Controller\\PostController::detail',));
            }

        }

        // create_post
        if ($pathinfo === '/create_post') {
            return array (  '_controller' => 'AppBundle\\Controller\\PostController::createPost',  '_route' => 'create_post',);
        }

        if (0 === strpos($pathinfo, '/post')) {
            // deletePost
            if (0 === strpos($pathinfo, '/post/delete') && preg_match('#^/post/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletePost')), array (  '_controller' => 'AppBundle\\Controller\\PostController::delete',));
            }

            // editPost
            if (0 === strpos($pathinfo, '/post/edit') && preg_match('#^/post/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editPost')), array (  '_controller' => 'AppBundle\\Controller\\PostController::editPost',));
            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::registerAction',  '_route' => 'register',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if ($pathinfo === '/user') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::index',  '_route' => 'user',);
            }

            // detailUser
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailUser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::detailUser',));
            }

            // estatusUser
            if (0 === strpos($pathinfo, '/user/status') && preg_match('#^/user/status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estatusUser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::estatusUser',));
            }

        }

        // profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::profile',  '_route' => 'profile',);
        }

        // list_user_ajax
        if ($pathinfo === '/list_user_ajax') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::ajaxListUserAction',  '_route' => 'list_user_ajax',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
