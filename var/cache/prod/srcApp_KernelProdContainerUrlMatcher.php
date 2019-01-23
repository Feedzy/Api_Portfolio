<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/admin' => array(array(array('_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'), null, null, null, true, null)),
            '/' => array(array(array('_route' => 'connexion', '_controller' => 'App\\Controller\\SecurityController::connexion'), null, null, null, false, null)),
            '/logout' => array(array(array('_route' => 'deconnexion', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/api(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:72)'
                            .'|co(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:110)'
                                .'|mpetences(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:148)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:186)'
                                    .')'
                                .')'
                            .')'
                            .'|formations(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:228)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:266)'
                                .')'
                            .')'
                            .'|techonologies(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:310)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:348)'
                                .')'
                            .')'
                            .'|pro(?'
                                .'|jects(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:390)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:428)'
                                    .')'
                                .')'
                                .'|fils(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:463)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:501)'
                                    .')'
                                .')'
                            .')'
                            .'|users(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:538)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:576)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            42 => array(array(array('_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => '1', 'index' => 'index'), array('index', '_format'), null, null, false, null)),
            72 => array(array(array('_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_api_respond' => '1', '_format' => ''), array('_format'), null, null, false, null)),
            110 => array(array(array('_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_api_respond' => '1', '_format' => 'jsonld'), array('shortName', '_format'), null, null, false, null)),
            148 => array(
                array(array('_route' => 'api_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_competences_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            186 => array(
                array(array('_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            228 => array(
                array(array('_route' => 'api_formations_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formation', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_formations_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formation', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            266 => array(
                array(array('_route' => 'api_formations_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formation', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_formations_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formation', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_formations_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formation', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            310 => array(
                array(array('_route' => 'api_techonologies_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Techonologie', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_techonologies_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Techonologie', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            348 => array(
                array(array('_route' => 'api_techonologies_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Techonologie', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_techonologies_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Techonologie', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_techonologies_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Techonologie', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            390 => array(
                array(array('_route' => 'api_projects_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_projects_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            428 => array(
                array(array('_route' => 'api_projects_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_projects_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_projects_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            463 => array(
                array(array('_route' => 'api_profils_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_profils_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            501 => array(
                array(array('_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_profils_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            538 => array(
                array(array('_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            576 => array(
                array(array('_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
        );
    }
}
