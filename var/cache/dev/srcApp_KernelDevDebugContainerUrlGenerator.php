<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'api_entrypoint' => array(array('index', '_format'), array('_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => '1', 'index' => 'index'), array('index' => 'index'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', 'index', 'index', true), array('text', '/api')), array(), array()),
        'api_doc' => array(array('_format'), array('_controller' => 'api_platform.action.documentation', '_api_respond' => '1', '_format' => ''), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/docs')), array(), array()),
        'api_jsonld_context' => array(array('shortName', '_format'), array('_controller' => 'api_platform.jsonld.action.context', '_api_respond' => '1', '_format' => 'jsonld'), array('shortName' => '.+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '.+', 'shortName', true), array('text', '/api/contexts')), array(), array()),
        'api_competences_get_collection' => array(array('_format'), array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/competences')), array(), array()),
        'api_competences_post_collection' => array(array('_format'), array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'post'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/competences')), array(), array()),
        'api_competences_get_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/competences')), array(), array()),
        'api_competences_delete_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/competences')), array(), array()),
        'api_competences_put_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/competences')), array(), array()),
        'api_formations_get_collection' => array(array('_format'), array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formation', '_api_collection_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/formations')), array(), array()),
        'api_formations_post_collection' => array(array('_format'), array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formation', '_api_collection_operation_name' => 'post'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/formations')), array(), array()),
        'api_formations_get_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formation', '_api_item_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/formations')), array(), array()),
        'api_formations_delete_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formation', '_api_item_operation_name' => 'delete'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/formations')), array(), array()),
        'api_formations_put_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formation', '_api_item_operation_name' => 'put'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/formations')), array(), array()),
        'api_projects_get_collection' => array(array('_format'), array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_collection_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/projects')), array(), array()),
        'api_projects_post_collection' => array(array('_format'), array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_collection_operation_name' => 'post'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/projects')), array(), array()),
        'api_projects_get_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_item_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/projects')), array(), array()),
        'api_projects_delete_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_item_operation_name' => 'delete'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/projects')), array(), array()),
        'api_projects_put_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_item_operation_name' => 'put'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/projects')), array(), array()),
        'api_users_get_collection' => array(array('_format'), array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/users')), array(), array()),
        'api_users_post_collection' => array(array('_format'), array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/users')), array(), array()),
        'api_users_get_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/users')), array(), array()),
        'api_users_delete_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/users')), array(), array()),
        'api_users_put_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/users')), array(), array()),
        'api_profils_get_collection' => array(array('_format'), array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/profils')), array(), array()),
        'api_profils_post_collection' => array(array('_format'), array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/profils')), array(), array()),
        'api_profils_get_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/profils')), array(), array()),
        'api_profils_delete_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/profils')), array(), array()),
        'api_profils_put_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/profils')), array(), array()),
        'easyadmin' => array(array(), array('_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'), array(), array(array('text', '/admin/')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        'connexion' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::connexion'), array(), array(array('text', '/')), array(), array()),
        'deconnexion' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/logout')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
