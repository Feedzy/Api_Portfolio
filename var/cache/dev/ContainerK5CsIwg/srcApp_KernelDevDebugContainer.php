<?php

namespace ContainerK5CsIwg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcApp_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = array();
    private $getService;

    public function __construct(array $buildParameters = array(), $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable(array($this, 'getService'));
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = array();
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'cache.app' => 'getCache_AppService',
            'doctrine' => 'getDoctrineService',
            'easyadmin.config.manager' => 'getEasyadmin_Config_ManagerService',
            'easyadmin.listener.controller' => 'getEasyadmin_Listener_ControllerService',
            'easyadmin.property_accessor' => 'getEasyadmin_PropertyAccessorService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'translator' => 'getTranslatorService',
            'validator' => 'getValidatorService',
        );
        $this->fileMap = array(
            'App\\Controller\\SecurityController' => 'getSecurityControllerService.php',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController' => 'getEasyAdminControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'api_platform.action.documentation' => 'getApiPlatform_Action_DocumentationService.php',
            'api_platform.action.entrypoint' => 'getApiPlatform_Action_EntrypointService.php',
            'api_platform.action.exception' => 'getApiPlatform_Action_ExceptionService.php',
            'api_platform.action.placeholder' => 'getApiPlatform_Action_PlaceholderService.php',
            'api_platform.graphql.action.entrypoint' => 'getApiPlatform_Graphql_Action_EntrypointService.php',
            'api_platform.jsonld.action.context' => 'getApiPlatform_Jsonld_Action_ContextService.php',
            'api_platform.swagger.action.ui' => 'getApiPlatform_Swagger_Action_UiService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.api_platform.swagger.command.swagger_command' => 'getConsole_Command_PublicAlias_ApiPlatform_Swagger_Command_SwaggerCommandService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command.public_alias.doctrine_migrations.diff_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_DiffCommandService.php',
            'console.command.public_alias.doctrine_migrations.execute_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_ExecuteCommandService.php',
            'console.command.public_alias.doctrine_migrations.generate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_GenerateCommandService.php',
            'console.command.public_alias.doctrine_migrations.latest_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_LatestCommandService.php',
            'console.command.public_alias.doctrine_migrations.migrate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_MigrateCommandService.php',
            'console.command.public_alias.doctrine_migrations.status_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_StatusCommandService.php',
            'console.command.public_alias.doctrine_migrations.version_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_VersionCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php',
            'easyadmin.autocomplete' => 'getEasyadmin_AutocompleteService.php',
            'easyadmin.form.guesser.missing_doctrine_orm_type_guesser' => 'getEasyadmin_Form_Guesser_MissingDoctrineOrmTypeGuesserService.php',
            'easyadmin.listener.request_post_initialize' => 'getEasyadmin_Listener_RequestPostInitializeService.php',
            'easyadmin.paginator' => 'getEasyadmin_PaginatorService.php',
            'easyadmin.query_builder' => 'getEasyadmin_QueryBuilderService.php',
            'easyadmin.router' => 'getEasyadmin_RouterService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'twig' => 'getTwigService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'vich_uploader.directory_namer_subdir' => 'getVichUploader_DirectoryNamerSubdirService.php',
            'vich_uploader.download_handler' => 'getVichUploader_DownloadHandlerService.php',
            'vich_uploader.form.type.file' => 'getVichUploader_Form_Type_FileService.php',
            'vich_uploader.form.type.image' => 'getVichUploader_Form_Type_ImageService.php',
            'vich_uploader.namer_base64' => 'getVichUploader_NamerBase64Service.php',
            'vich_uploader.namer_directory_current_date_time' => 'getVichUploader_NamerDirectoryCurrentDateTimeService.php',
            'vich_uploader.namer_directory_property' => 'getVichUploader_NamerDirectoryPropertyService.php',
            'vich_uploader.namer_hash' => 'getVichUploader_NamerHashService.php',
            'vich_uploader.namer_origname' => 'getVichUploader_NamerOrignameService.php',
            'vich_uploader.namer_property' => 'getVichUploader_NamerPropertyService.php',
            'vich_uploader.namer_uniqid' => 'getVichUploader_NamerUniqidService.php',
            'vich_uploader.templating.helper.uploader_helper' => 'getVichUploader_Templating_Helper_UploaderHelperService.php',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService.php',
        );
        $this->aliases = array(
            'api_platform.action.delete_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_collection' => 'api_platform.action.placeholder',
            'api_platform.action.get_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_subresource' => 'api_platform.action.placeholder',
            'api_platform.action.patch_item' => 'api_platform.action.placeholder',
            'api_platform.action.post_collection' => 'api_platform.action.placeholder',
            'api_platform.action.put_item' => 'api_platform.action.placeholder',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
        );

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestStack.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Cache/CacheInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Cache/CacheTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Service/ServiceLocatorTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/FormExtensionInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/ResolvedFormTypeFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validation.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/TranslatorListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Serializer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/AbstractConstraintViolationListNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/ConstraintViolationListNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/DocumentationNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/EntrypointNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizerTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/ErrorNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/NormalizerAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/FilterLocatorTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/CollectionFiltersNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/PartialCollectionViewNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/ContextTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/JsonLd/Serializer/JsonLdContextTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/NormalizerAwareTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/CollectionNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Problem/Serializer/ConstraintViolationListNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerAwareTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Util/ClassInfoTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/AbstractItemNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/JsonLd/Serializer/ItemNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/ItemNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Serializer/ItemNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/NameConverter/NameConverterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/NameConverter/AdvancedNameConverterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/CsvEncoder.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/JsonEncoder.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Factory/ClassResolverTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Loader/LoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Loader/LoaderChain.php';
            include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyInfoExtractor.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/RegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/LoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExistsLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/SourceContextLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Loader/Filesystem.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/Loader/NativeFilesystemLoader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Role/RoleHierarchy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-http/Logout/LogoutUrlGenerator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-http/RememberMe/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/AccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-http/Firewall.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-http/FirewallMapInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/ConfigManager.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/ConfigPassInterface.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/NormalizerConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/DesignConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/MenuConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/ActionConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/MetadataConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/PropertyConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/ViewConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/TemplateConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Configuration/DefaultConfigPass.php';
            include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/EventListener/ControllerListener.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/EventListener/CorsListener.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/Resolver.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ConfigProvider.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/ResourceClassResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/ResourceClassResolver.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/OperationMethodResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/OperationMethodResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/OperationMethodResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RouterInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/IriConverterInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/OperationDataProviderTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/IriConverter.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Cache/CachedTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/CachedRouteNameResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ArrayTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolver.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/FormatsProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/OperationAwareFormatsProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/FormatsProvider.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/SerializerContextBuilderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/SerializerFilterContextBuilder.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/SerializerContextBuilder.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/PathResolver/OperationPathResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/PathResolver/CustomOperationPathResolver.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/PathResolver/OperationPathResolver.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/PathSegmentNameGeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/UnderscorePathSegmentNameGenerator.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/EventListener/AddFormatListener.php';
            include_once $this->targetDirs[3].'/vendor/willdurand/negotiation/src/Negotiation/AbstractNegotiator.php';
            include_once $this->targetDirs[3].'/vendor/willdurand/negotiation/src/Negotiation/Negotiator.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/EventListener/ReadListener.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/EventListener/DeserializeListener.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/IdentifiersExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/CachedIdentifiersExtractor.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/IdentifiersExtractor.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Identifier/IdentifierConverterInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Identifier/IdentifierConverter.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/Factory/CachedSubresourceOperationFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ItemDataProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ChainItemDataProvider.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/CollectionDataProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ContextAwareCollectionDataProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ChainCollectionDataProvider.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/SubresourceDataProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ChainSubresourceDataProvider.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Filter/QueryParameterValidateListener.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Security/ResourceAccessCheckerInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Security/ResourceAccessChecker.php';
            include_once $this->targetDirs[3].'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Security/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Security/EventListener/DenyAccessListener.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceNameCollectionFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/OperationResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Util/AnnotationFilterExtractorTrait.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceFilterMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ShortNameResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/PhpDocResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyNameCollectionFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Metadata/Property/ValidatorPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationSubresourceMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/SerializerPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Metadata/Property/DoctrineOrmPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/ExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/AbstractExtractor.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/XmlExtractor.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/YamlExtractor.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Swagger/Serializer/ApiGatewayNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Swagger/Serializer/DocumentationNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouterOperationPathResolver.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/EventListener/SwaggerUiListener.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/JsonLd/ContextBuilderInterface.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/JsonLd/ContextBuilder.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/EventListener/AddLinkHeaderListener.php';
            include_once $this->targetDirs[3].'/vendor/api-platform/core/src/HttpCache/EventListener/AddHeadersListener.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/AbstractLogger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Log/Logger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Translation/LocaleAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Translation/TranslatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Translation/TranslatorTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/IdentityTranslator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Service/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessor.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('E0YHm5oApt', 0, ($this->targetDirs[0].'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'easyadmin.config.manager' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Configuration\ConfigManager
     */
    protected function getEasyadmin_Config_ManagerService()
    {
        $this->services['easyadmin.config.manager'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Configuration\ConfigManager($this->parameters['easyadmin.config'], true, ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()), ($this->services['cache.app'] ?? $this->getCache_AppService()));

        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\NormalizerConfigPass($this));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\DesignConfigPass('fr'));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\MenuConfigPass());
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\ActionConfigPass());
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\MetadataConfigPass(($this->services['doctrine'] ?? $this->getDoctrineService())));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\PropertyConfigPass(($this->privates['form.registry'] ?? $this->getForm_RegistryService())));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\ViewConfigPass());
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\TemplateConfigPass(($this->privates['twig.loader.native_filesystem'] ?? $this->getTwig_Loader_NativeFilesystemService())));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\DefaultConfigPass());

        return $instance;
    }

    /**
     * Gets the public 'easyadmin.listener.controller' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\ControllerListener
     */
    protected function getEasyadmin_Listener_ControllerService()
    {
        return $this->services['easyadmin.listener.controller'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\ControllerListener(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), ($this->privates['controller_resolver'] ?? $this->getControllerResolverService()));
    }

    /**
     * Gets the public 'easyadmin.property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getEasyadmin_PropertyAccessorService()
    {
        return $this->services['easyadmin.property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['http_exception_listener'] ?? $this->load('getHttpExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -2048);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->services['easyadmin.listener.controller'] ?? $this->getEasyadmin_Listener_ControllerService());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('easy_admin.post_initialize', array(0 => function () {
            return ($this->services['easyadmin.listener.request_post_initialize'] ?? $this->load('getEasyadmin_Listener_RequestPostInitializeService.php'));
        }, 1 => 'initializeRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelRequest'), 250);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['api_platform.listener.request.add_format'] ?? $this->getApiPlatform_Listener_Request_AddFormatService());
        }, 1 => 'onKernelRequest'), 7);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['api_platform.listener.request.read'] ?? $this->getApiPlatform_Listener_Request_ReadService());
        }, 1 => 'onKernelRequest'), 4);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['api_platform.listener.view.write'] ?? $this->load('getApiPlatform_Listener_View_WriteService.php'));
        }, 1 => 'onKernelView'), 32);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['api_platform.listener.request.deserialize'] ?? $this->getApiPlatform_Listener_Request_DeserializeService());
        }, 1 => 'onKernelRequest'), 2);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['api_platform.listener.view.serialize'] ?? $this->load('getApiPlatform_Listener_View_SerializeService.php'));
        }, 1 => 'onKernelView'), 16);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['api_platform.listener.view.respond'] ?? ($this->privates['api_platform.listener.view.respond'] = new \ApiPlatform\Core\EventListener\RespondListener()));
        }, 1 => 'onKernelView'), 8);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['api_platform.listener.exception.validation'] ?? $this->load('getApiPlatform_Listener_Exception_ValidationService.php'));
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['api_platform.listener.exception'] ?? $this->load('getApiPlatform_Listener_ExceptionService.php'));
        }, 1 => 'onKernelException'), -96);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['api_platform.listener.view.validate'] ?? $this->load('getApiPlatform_Listener_View_ValidateService.php'));
        }, 1 => 'onKernelView'), 64);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['api_platform.listener.view.validate_query_parameters'] ?? $this->getApiPlatform_Listener_View_ValidateQueryParametersService());
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['api_platform.security.listener.request.deny_access'] ?? $this->getApiPlatform_Security_Listener_Request_DenyAccessService());
        }, 1 => 'onKernelRequest'), 1);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['api_platform.swagger.listener.ui'] ?? ($this->privates['api_platform.swagger.listener.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\EventListener\SwaggerUiListener()));
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['api_platform.hydra.listener.response.add_link_header'] ?? $this->getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['api_platform.http_cache.listener.response.configure'] ?? $this->getApiPlatform_HttpCache_Listener_Response_ConfigureService());
        }, 1 => 'onKernelResponse'), -1);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'), -64);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('debug.security.authorization.vote', array(0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->load('getDebug_Security_Voter_VoteListenerService.php'));
        }, 1 => 'onVoterVote'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'), 0);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['controller_resolver'] ?? $this->getControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->load('getSecurity_UserValueResolverService.php'));
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->load('getArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 7)));
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
            'routing.loader' => array('services', 'routing.loader', 'getRouting_LoaderService.php', true),
        )))->withContext('router.default', $this), 'kernel::loadRoutes', array('cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcApp_KernelDevDebugContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcApp_KernelDevDebugContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'service'), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());
        $b = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());
        $c = ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService());
        $d = ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService());
        $e = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());
        $f = ($this->privates['api_platform.iri_converter'] ?? $this->getApiPlatform_IriConverterService());
        $g = ($this->privates['api_platform.swagger.normalizer.api_gateway'] ?? $this->getApiPlatform_Swagger_Normalizer_ApiGatewayService());
        $h = ($this->privates['api_platform.jsonld.context_builder'] ?? $this->getApiPlatform_Jsonld_ContextBuilderService());
        $i = ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService());
        $j = ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService());
        $k = ($this->privates['api_platform.item_data_provider'] ?? $this->getApiPlatform_ItemDataProviderService());

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \ApiPlatform\Core\Hydra\Serializer\ConstraintViolationListNormalizer($a, array(), NULL), 1 => new \ApiPlatform\Core\Hydra\Serializer\DocumentationNormalizer($b, $c, $d, $e, ($this->privates['api_platform.operation_method_resolver'] ?? $this->getApiPlatform_OperationMethodResolverService()), $a, ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService()), NULL), 2 => new \ApiPlatform\Core\Hydra\Serializer\EntrypointNormalizer($b, $f, $a), 3 => new \ApiPlatform\Core\Hydra\Serializer\ErrorNormalizer($a, true), 4 => $g, 5 => $g, 6 => new \ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer(new \ApiPlatform\Core\Hydra\Serializer\PartialCollectionViewNormalizer(new \ApiPlatform\Core\Hydra\Serializer\CollectionNormalizer($h, $e, $f), 'page', 'pagination'), $b, $e, ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array())))), 7 => new \ApiPlatform\Core\Problem\Serializer\ConstraintViolationListNormalizer(array(), NULL), 8 => new \ApiPlatform\Core\JsonLd\Serializer\ItemNormalizer($b, $c, $d, $f, $e, $h, $i, NULL, $j), 9 => new \ApiPlatform\Core\Problem\Serializer\ErrorNormalizer(true), 10 => new \ApiPlatform\Core\GraphQl\Serializer\ItemNormalizer($c, $d, $f, $e, $i, NULL, $j, $k, false), 11 => new \ApiPlatform\Core\Serializer\ItemNormalizer($c, $d, $f, $e, $i, NULL, $j, $k, false), 12 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 13 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 14 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer(), 15 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 16 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 17 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 18 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($j, new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($j), $i, ($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($j))), array(0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder(), 4 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonld'), 5 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonproblem')));
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
            'translation.loader.csv' => array('privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true),
            'translation.loader.dat' => array('privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true),
            'translation.loader.ini' => array('privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true),
            'translation.loader.json' => array('privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true),
            'translation.loader.mo' => array('privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true),
            'translation.loader.php' => array('privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true),
            'translation.loader.po' => array('privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true),
            'translation.loader.qt' => array('privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true),
            'translation.loader.res' => array('privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true),
            'translation.loader.xliff' => array('privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true),
            'translation.loader.yml' => array('privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true),
        )), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'fr', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ar.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.ar.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ar.yml')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.bg.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ca.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.cs.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.cs.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.cs.yml')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.da.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.da.xlf')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.de.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.de.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.de.yml')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.el.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.en.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.en.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.en.yml')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.es.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.es.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.es.yml')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.eu.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fa.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.fa.xlf')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fi.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.fi.xlf'), 4 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.fi.yml')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fr.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.fr.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.fr.yml')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.gl.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.gl.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hr.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hu.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.hu.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.hu.yml')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.it.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.it.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.it.yml')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.lt.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.lt.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.mn.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.nb.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.nl.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.nl.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pl.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.pl.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pl.yml')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pt.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.pt.xlf'), 4 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pt.yml')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ro.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.ro.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ru.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.ru.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ru.yml')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.sk.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sl.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.sl.xlf'), 5 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.sl.yml')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sv.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.sv.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.th.xlf')), 'tl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.tr.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.tr.xlf'), 4 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.tr.yml')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.uk.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.uk.xlf'), 4 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.uk.yml')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.zh_CN.xlf'), 4 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.zh_CN.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.ua.xlf')), 'sr_RS' => array(0 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sr_RS.xlf'), 1 => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/messages.sr_RS.xlf')))));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales(array(0 => 'fr'));

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator();
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'api_platform.collection_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\DataProvider\ChainCollectionDataProvider
     */
    protected function getApiPlatform_CollectionDataProviderService()
    {
        return $this->privates['api_platform.collection_data_provider'] = new \ApiPlatform\Core\DataProvider\ChainCollectionDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.collection_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService.php'));
        }, 1));
    }

    /**
     * Gets the private 'api_platform.formats_provider' shared service.
     *
     * @return \ApiPlatform\Core\Api\FormatsProvider
     */
    protected function getApiPlatform_FormatsProviderService()
    {
        return $this->privates['api_platform.formats_provider'] = new \ApiPlatform\Core\Api\FormatsProvider(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), $this->parameters['api_platform.formats']);
    }

    /**
     * Gets the private 'api_platform.http_cache.listener.response.configure' shared service.
     *
     * @return \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener
     */
    protected function getApiPlatform_HttpCache_Listener_Response_ConfigureService()
    {
        return $this->privates['api_platform.http_cache.listener.response.configure'] = new \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener(true, NULL, NULL, $this->parameters['api_platform.http_cache.vary'], NULL);
    }

    /**
     * Gets the private 'api_platform.hydra.listener.response.add_link_header' shared service.
     *
     * @return \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener
     */
    protected function getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService()
    {
        return $this->privates['api_platform.hydra.listener.response.add_link_header'] = new \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener(($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()));
    }

    /**
     * Gets the private 'api_platform.identifier.converter' shared service.
     *
     * @return \ApiPlatform\Core\Identifier\IdentifierConverter
     */
    protected function getApiPlatform_Identifier_ConverterService()
    {
        return $this->privates['api_platform.identifier.converter'] = new \ApiPlatform\Core\Identifier\IdentifierConverter(($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.identifier.integer'] ?? ($this->privates['api_platform.identifier.integer'] = new \ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer()));
            yield 1 => ($this->privates['api_platform.identifier.date_normalizer'] ?? ($this->privates['api_platform.identifier.date_normalizer'] = new \ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer()));
        }, 2));
    }

    /**
     * Gets the private 'api_platform.identifiers_extractor.cached' shared service.
     *
     * @return \ApiPlatform\Core\Api\CachedIdentifiersExtractor
     */
    protected function getApiPlatform_IdentifiersExtractor_CachedService()
    {
        $a = ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService());
        $b = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());

        return $this->privates['api_platform.identifiers_extractor.cached'] = new \ApiPlatform\Core\Api\CachedIdentifiersExtractor(new \Symfony\Component\Cache\Adapter\ArrayAdapter(), new \ApiPlatform\Core\Api\IdentifiersExtractor(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), $a, $b), $a, $b);
    }

    /**
     * Gets the private 'api_platform.iri_converter' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter
     */
    protected function getApiPlatform_IriConverterService()
    {
        $a = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());

        return $this->privates['api_platform.iri_converter'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.item_data_provider'] ?? $this->getApiPlatform_ItemDataProviderService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver(new \Symfony\Component\Cache\Adapter\ArrayAdapter(), new \ApiPlatform\Core\Bridge\Symfony\Routing\RouteNameResolver($a)), $a, ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()), ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['api_platform.subresource_data_provider'] ?? $this->getApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()));
    }

    /**
     * Gets the private 'api_platform.item_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\DataProvider\ChainItemDataProvider
     */
    protected function getApiPlatform_ItemDataProviderService()
    {
        return $this->privates['api_platform.item_data_provider'] = new \ApiPlatform\Core\DataProvider\ChainItemDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.item_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService.php'));
        }, 1));
    }

    /**
     * Gets the private 'api_platform.jsonld.context_builder' shared service.
     *
     * @return \ApiPlatform\Core\JsonLd\ContextBuilder
     */
    protected function getApiPlatform_Jsonld_ContextBuilderService()
    {
        return $this->privates['api_platform.jsonld.context_builder'] = new \ApiPlatform\Core\JsonLd\ContextBuilder(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()));
    }

    /**
     * Gets the private 'api_platform.listener.request.add_format' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\AddFormatListener
     */
    protected function getApiPlatform_Listener_Request_AddFormatService()
    {
        return $this->privates['api_platform.listener.request.add_format'] = new \ApiPlatform\Core\EventListener\AddFormatListener(new \Negotiation\Negotiator(), ($this->privates['api_platform.formats_provider'] ?? $this->getApiPlatform_FormatsProviderService()));
    }

    /**
     * Gets the private 'api_platform.listener.request.deserialize' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\DeserializeListener
     */
    protected function getApiPlatform_Listener_Request_DeserializeService()
    {
        return $this->privates['api_platform.listener.request.deserialize'] = new \ApiPlatform\Core\EventListener\DeserializeListener(($this->services['serializer'] ?? $this->getSerializerService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.formats_provider'] ?? $this->getApiPlatform_FormatsProviderService()));
    }

    /**
     * Gets the private 'api_platform.listener.request.read' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\ReadListener
     */
    protected function getApiPlatform_Listener_Request_ReadService()
    {
        return $this->privates['api_platform.listener.request.read'] = new \ApiPlatform\Core\EventListener\ReadListener(($this->privates['api_platform.collection_data_provider'] ?? $this->getApiPlatform_CollectionDataProviderService()), ($this->privates['api_platform.item_data_provider'] ?? $this->getApiPlatform_ItemDataProviderService()), ($this->privates['api_platform.subresource_data_provider'] ?? $this->getApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()));
    }

    /**
     * Gets the private 'api_platform.listener.view.validate_query_parameters' shared service.
     *
     * @return \ApiPlatform\Core\Filter\QueryParameterValidateListener
     */
    protected function getApiPlatform_Listener_View_ValidateQueryParametersService()
    {
        return $this->privates['api_platform.listener.view.validate_query_parameters'] = new \ApiPlatform\Core\Filter\QueryParameterValidateListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array()))));
    }

    /**
     * Gets the private 'api_platform.metadata.property.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory
     */
    protected function getApiPlatform_Metadata_Property_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.property.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory(($this->privates['api_platform.cache.metadata.property'] ?? ($this->privates['api_platform.cache.metadata.property'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())), new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory(($this->services['validator'] ?? $this->getValidatorService()), new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()), new \ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory(($this->services['doctrine'] ?? $this->getDoctrineService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor(array()))), new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyMetadataFactory(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array())))))))))))));
    }

    /**
     * Gets the private 'api_platform.metadata.property.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.property.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory(($this->privates['api_platform.cache.metadata.property'] ?? ($this->privates['api_platform.cache.metadata.property'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor(array()))), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array()))), new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyNameCollectionFactory(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyNameCollectionFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService()))))));
    }

    /**
     * Gets the private 'api_platform.metadata.resource.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory
     */
    protected function getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.resource.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory(($this->privates['api_platform.cache.metadata.resource'] ?? ($this->privates['api_platform.cache.metadata.resource'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())), new \ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceFilterMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\PhpDocResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor(array()))), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array()))))))))), $this->parameters['api_platform.formats']));
    }

    /**
     * Gets the private 'api_platform.metadata.resource.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.resource.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory(($this->privates['api_platform.cache.metadata.resource'] ?? ($this->privates['api_platform.cache.metadata.resource'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())), new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor(array()))), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), $this->getParameter('api_platform.resource_class_directories'), new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array())))))));
    }

    /**
     * Gets the private 'api_platform.operation_method_resolver' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\OperationMethodResolver
     */
    protected function getApiPlatform_OperationMethodResolverService()
    {
        return $this->privates['api_platform.operation_method_resolver'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\OperationMethodResolver(($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.operation_path_resolver.custom' shared service.
     *
     * @return \ApiPlatform\Core\PathResolver\CustomOperationPathResolver
     */
    protected function getApiPlatform_OperationPathResolver_CustomService()
    {
        return $this->privates['api_platform.operation_path_resolver.custom'] = new \ApiPlatform\Core\PathResolver\CustomOperationPathResolver(new \ApiPlatform\Core\PathResolver\OperationPathResolver(($this->privates['api_platform.path_segment_name_generator.underscore'] ?? ($this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator()))));
    }

    /**
     * Gets the private 'api_platform.resource_class_resolver' shared service.
     *
     * @return \ApiPlatform\Core\Api\ResourceClassResolver
     */
    protected function getApiPlatform_ResourceClassResolverService()
    {
        return $this->privates['api_platform.resource_class_resolver'] = new \ApiPlatform\Core\Api\ResourceClassResolver(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.router' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\Router
     */
    protected function getApiPlatform_RouterService()
    {
        return $this->privates['api_platform.router'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\Router(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'api_platform.security.listener.request.deny_access' shared service.
     *
     * @return \ApiPlatform\Core\Security\EventListener\DenyAccessListener
     */
    protected function getApiPlatform_Security_Listener_Request_DenyAccessService()
    {
        return $this->privates['api_platform.security.listener.request.deny_access'] = new \ApiPlatform\Core\Security\EventListener\DenyAccessListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.security.resource_access_checker'] ?? $this->getApiPlatform_Security_ResourceAccessCheckerService()));
    }

    /**
     * Gets the private 'api_platform.security.resource_access_checker' shared service.
     *
     * @return \ApiPlatform\Core\Security\ResourceAccessChecker
     */
    protected function getApiPlatform_Security_ResourceAccessCheckerService()
    {
        return $this->privates['api_platform.security.resource_access_checker'] = new \ApiPlatform\Core\Security\ResourceAccessChecker(new \ApiPlatform\Core\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array()))), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'api_platform.serializer.context_builder.filter' shared service.
     *
     * @return \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder
     */
    protected function getApiPlatform_Serializer_ContextBuilder_FilterService()
    {
        $a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());

        return $this->privates['api_platform.serializer.context_builder.filter'] = new \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder($a, ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array()))), new \ApiPlatform\Core\Serializer\SerializerContextBuilder($a));
    }

    /**
     * Gets the private 'api_platform.subresource_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider
     */
    protected function getApiPlatform_SubresourceDataProviderService()
    {
        return $this->privates['api_platform.subresource_data_provider'] = new \ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.subresource_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService.php'));
        }, 1));
    }

    /**
     * Gets the private 'api_platform.subresource_operation_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory
     */
    protected function getApiPlatform_SubresourceOperationFactory_CachedService()
    {
        return $this->privates['api_platform.subresource_operation_factory.cached'] = new \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory(new \Symfony\Component\Cache\Adapter\ArrayAdapter(), new \ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.path_segment_name_generator.underscore'] ?? ($this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator()))));
    }

    /**
     * Gets the private 'api_platform.swagger.normalizer.api_gateway' shared service.
     *
     * @return \ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer
     */
    protected function getApiPlatform_Swagger_Normalizer_ApiGatewayService()
    {
        $a = ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService());

        return $this->privates['api_platform.swagger.normalizer.api_gateway'] = new \ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer(new \ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()), ($this->privates['api_platform.operation_method_resolver'] ?? $this->getApiPlatform_OperationMethodResolverService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver(($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()), ($this->privates['api_platform.operation_path_resolver.custom'] ?? $this->getApiPlatform_OperationPathResolver_CustomService()), $a), NULL, ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array()))), NULL, false, 'oauth2', 'application', '/oauth/v2/token', '/oauth/v2/auth', array(), array(), $a, true, 'page', false, 'itemsPerPage', ($this->privates['api_platform.formats_provider'] ?? $this->getApiPlatform_FormatsProviderService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'controller_resolver' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getControllerResolverService()
    {
        return $this->privates['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), true);
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['debug.security.voter.security.access.simple_role_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php'));
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_ExpressionVoterService.php'));
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
            'security.firewall.map.context.dev' => array('privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true),
            'security.firewall.map.context.main' => array('privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService.php', true),
        )), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
        }, 2)), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminAutocompleteType' => array('privates', 'easyadmin.form.type.autocomplete', 'getEasyadmin_Form_Type_AutocompleteService.php', true),
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminDividerType' => array('privates', 'easyadmin.form.type.divider', 'getEasyadmin_Form_Type_DividerService.php', true),
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFormType' => array('privates', 'easyadmin.form.type', 'getEasyadmin_Form_TypeService.php', true),
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminGroupType' => array('privates', 'easyadmin.form.type.group', 'getEasyadmin_Form_Type_GroupService.php', true),
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminSectionType' => array('privates', 'easyadmin.form.type.section', 'getEasyadmin_Form_Type_SectionService.php', true),
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => array('privates', 'form.type.entity', 'getForm_Type_EntityService.php', true),
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => array('privates', 'form.type.choice', 'getForm_Type_ChoiceService.php', true),
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array('privates', 'form.type.form', 'getForm_Type_FormService.php', true),
            'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => array('services', 'vich_uploader.form.type.file', 'getVichUploader_Form_Type_FileService.php', true),
            'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => array('services', 'vich_uploader.form.type.image', 'getVichUploader_Form_Type_ImageService.php', true),
        )), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->load('getForm_TypeExtension_Form_TransformationFailureHandlingService.php'));
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
            yield 5 => ($this->privates['easyadmin.form.type.extension'] ?? $this->load('getEasyadmin_Form_Type_ExtensionService.php'));
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)), new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
            yield 2 => ($this->services['easyadmin.form.guesser.missing_doctrine_orm_type_guesser'] ?? $this->load('getEasyadmin_Form_Guesser_MissingDoctrineOrmTypeGuesserService.php'));
        }, 3))), new \Symfony\Component\Form\ResolvedFormTypeFactory());
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'fr', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->privates['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Nelmio\CorsBundle\Options\Resolver(array(0 => new \Nelmio\CorsBundle\Options\ConfigProvider($this->parameters['nelmio_cors.map'], $this->getParameter('nelmio_cors.defaults')))));
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->privates['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->load('getPropertyInfo_SerializerExtractorService.php'));
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1));
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->load('getSecurity_Authentication_Provider_Dao_MainService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 2), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->privates['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }

    /**
     * Gets the private 'serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getSerializer_Mapping_ClassMetadataFactoryService()
    {
        return $this->privates['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService())))), NULL);
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
            'initialized_session' => array('services', 'session', NULL, true),
            'request_stack' => array('services', 'request_stack', 'getRequestStackService', false),
            'session' => array('services', 'session', 'getSessionService.php', true),
            'session_storage' => array('privates', 'session.storage.native', 'getSession_Storage_NativeService.php', true),
        )));
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'twig.loader.native_filesystem' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader
     */
    protected function getTwig_Loader_NativeFilesystemService()
    {
        $this->privates['twig.loader.native_filesystem'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader(array(), $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/views'), 'EasyAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Resources/views'), '!EasyAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), 'ApiPlatform');
        $instance->addPath(($this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), '!ApiPlatform');
        $instance->addPath(($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/views'), 'VichUploader');
        $instance->addPath(($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/views'), '!VichUploader');
        $instance->addPath(($this->targetDirs[3].'/templates'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => array('privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true),
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => array('privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true),
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => array('privates', 'validator.email', 'getValidator_EmailService.php', true),
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => array('privates', 'validator.expression', 'getValidator_ExpressionService.php', true),
            'doctrine.orm.validator.unique' => array('privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true),
            'security.validator.user_password' => array('privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true),
            'validator.expression' => array('privates', 'validator.expression', 'getValidator_ExpressionService.php', true),
        ))));
        $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))));

        return $instance;
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'doctrine_migrations.dir_name' => false,
        'twig.default_path' => false,
        'nelmio_cors.defaults' => false,
        'api_platform.resource_class_directories' => false,
        'vich_uploader.mappings' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/log'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'WebServerBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
                'DoctrineCacheBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ),
                'DoctrineBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'MakerBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ),
                'TwigBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'SecurityBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'EasyAdminBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src'),
                    'namespace' => 'EasyCorp\\Bundle\\EasyAdminBundle',
                ),
                'NelmioCorsBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ),
                'ApiPlatformBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle'),
                    'namespace' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
                'VichUploaderBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/vich/uploader-bundle'),
                    'namespace' => 'Vich\\UploaderBundle',
                ),
            ); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/srcApp_KernelDevDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/src/Migrations'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'nelmio_cors.defaults': $value = array(
                'allow_origin' => array(
                    0 => $this->getEnv('CORS_ALLOW_ORIGIN'),
                ),
                'allow_credentials' => false,
                'allow_headers' => array(
                    0 => 'content-type',
                    1 => 'authorization',
                ),
                'expose_headers' => array(
                    0 => 'Link',
                ),
                'allow_methods' => array(
                    0 => 'GET',
                    1 => 'OPTIONS',
                    2 => 'POST',
                    3 => 'PUT',
                    4 => 'PATCH',
                    5 => 'DELETE',
                ),
                'max_age' => 3600,
                'hosts' => array(

                ),
                'origin_regex' => true,
                'forced_allow_origin_value' => NULL,
            ); break;
            case 'api_platform.resource_class_directories': $value = array(
                0 => ($this->targetDirs[3].'/src/Entity'),
                1 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Entity'),
            ); break;
            case 'vich_uploader.mappings': $value = array(
                'image' => array(
                    'uri_prefix' => '%app.path.image',
                    'upload_destination' => ($this->targetDirs[3].'/public/uploads/images/image'),
                    'namer' => array(
                        'service' => NULL,
                        'options' => NULL,
                    ),
                    'directory_namer' => array(
                        'service' => NULL,
                        'options' => NULL,
                    ),
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'EasyAdminBundle' => 'EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'ApiPlatformBundle' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle\\ApiPlatformBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelDevDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'env(DATABASE_URL)' => '',
            'locale' => 'fr',
            'app.path.image' => '/uploads/images/image',
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'fr',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelDevDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => array(
                0 => '@VichUploader/Form/fields.html.twig',
                1 => 'form_div_layout.html.twig',
            ),
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => array(

            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => false,
            'easyadmin.config' => array(
                'entities' => array(
                    'Competence' => array(
                        'class' => 'App\\Entity\\Competence',
                        'list' => array(
                            'fields' => array(
                                0 => 'id',
                                1 => 'Nom',
                                2 => array(
                                    'property' => 'image',
                                    'type' => 'image',
                                    'base_path' => '/uploads/images/image',
                                ),
                            ),
                        ),
                        'show' => array(
                            'fields' => array(
                                0 => array(
                                    'property' => 'image',
                                    'type' => 'image',
                                    'base_path' => '/uploads/images/image',
                                ),
                            ),
                        ),
                        'form' => array(
                            'fields' => array(
                                0 => 'Nom',
                                1 => array(
                                    'property' => 'imageFile',
                                    'type' => 'vich_file',
                                ),
                            ),
                        ),
                        'name' => 'Competence',
                    ),
                    'Project' => array(
                        'class' => 'App\\Entity\\Project',
                        'list' => array(
                            'fields' => array(
                                0 => 'Nom_Project',
                                1 => 'Description',
                                2 => array(
                                    'property' => 'image',
                                    'type' => 'image',
                                    'base_path' => '/uploads/images/image',
                                ),
                            ),
                        ),
                        'show' => array(
                            'fields' => array(
                                0 => array(
                                    'property' => 'image',
                                    'type' => 'image',
                                    'base_path' => '/uploads/images/image',
                                ),
                            ),
                        ),
                        'form' => array(
                            'fields' => array(
                                0 => 'Nom_Project',
                                1 => 'Description',
                                2 => array(
                                    'property' => 'imageFile',
                                    'type' => 'vich_file',
                                ),
                            ),
                        ),
                        'name' => 'Project',
                    ),
                    'Profil' => array(
                        'class' => 'App\\Entity\\Profil',
                        'list' => array(
                            'fields' => array(
                                0 => 'Nom',
                                1 => 'Prenom',
                                2 => 'Age',
                                3 => 'Profession',
                                4 => 'Situation_matrimonial',
                                5 => array(
                                    'property' => 'image',
                                    'type' => 'image',
                                    'base_path' => '/uploads/images/image',
                                ),
                            ),
                        ),
                        'show' => array(
                            'fields' => array(
                                0 => array(
                                    'property' => 'image',
                                    'type' => 'image',
                                    'base_path' => '/uploads/images/image',
                                ),
                            ),
                        ),
                        'form' => array(
                            'fields' => array(
                                0 => 'Nom',
                                1 => 'Prenom',
                                2 => 'Age',
                                3 => 'Profession',
                                4 => 'Situation_matrimonial',
                                5 => array(
                                    'property' => 'imageFile',
                                    'type' => 'vich_file',
                                ),
                            ),
                        ),
                        'name' => 'Profil',
                    ),
                ),
                'site_name' => 'EasyAdmin',
                'formats' => array(
                    'date' => 'Y-m-d',
                    'time' => 'H:i:s',
                    'datetime' => 'F j, Y H:i',
                    'dateinterval' => '%y Year(s) %m Month(s) %d Day(s)',
                ),
                'disabled_actions' => array(

                ),
                'translation_domain' => 'messages',
                'design' => array(
                    'brand_color' => 'hsl(230, 55%, 60%)',
                    'form_theme' => array(
                        0 => '@EasyAdmin/form/bootstrap_4.html.twig',
                    ),
                    'assets' => array(
                        'css' => array(

                        ),
                        'js' => array(

                        ),
                        'favicon' => array(
                            'path' => 'favicon.ico',
                            'mime_type' => 'image/x-icon',
                        ),
                    ),
                    'menu' => array(

                    ),
                ),
                'list' => array(
                    'actions' => array(

                    ),
                    'max_results' => 15,
                ),
                'search' => array(

                ),
                'edit' => array(
                    'actions' => array(

                    ),
                ),
                'new' => array(
                    'actions' => array(

                    ),
                ),
                'show' => array(
                    'actions' => array(

                    ),
                    'max_results' => 10,
                ),
            ),
            'nelmio_cors.map' => array(
                '^/' => array(

                ),
            ),
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'api_platform.enable_entrypoint' => true,
            'api_platform.enable_docs' => true,
            'api_platform.title' => '',
            'api_platform.description' => '',
            'api_platform.version' => '0.0.0',
            'api_platform.exception_to_status' => array(
                'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface' => 400,
                'ApiPlatform\\Core\\Exception\\InvalidArgumentException' => 400,
                'ApiPlatform\\Core\\Exception\\FilterValidationException' => 400,
            ),
            'api_platform.formats' => array(
                'jsonld' => array(
                    0 => 'application/ld+json',
                ),
                'json' => array(
                    0 => 'application/json',
                ),
                'html' => array(
                    0 => 'text/html',
                ),
            ),
            'api_platform.error_formats' => array(
                'jsonproblem' => array(
                    0 => 'application/problem+json',
                ),
                'jsonld' => array(
                    0 => 'application/ld+json',
                ),
            ),
            'api_platform.allow_plain_identifiers' => false,
            'api_platform.eager_loading.enabled' => true,
            'api_platform.eager_loading.max_joins' => 30,
            'api_platform.eager_loading.fetch_partial' => false,
            'api_platform.eager_loading.force_eager' => true,
            'api_platform.collection.order' => 'ASC',
            'api_platform.collection.order_parameter_name' => 'order',
            'api_platform.collection.pagination.enabled' => true,
            'api_platform.collection.pagination.partial' => false,
            'api_platform.collection.pagination.client_enabled' => false,
            'api_platform.collection.pagination.client_items_per_page' => false,
            'api_platform.collection.pagination.client_partial' => false,
            'api_platform.collection.pagination.items_per_page' => 30,
            'api_platform.collection.pagination.maximum_items_per_page' => NULL,
            'api_platform.collection.pagination.page_parameter_name' => 'page',
            'api_platform.collection.pagination.enabled_parameter_name' => 'pagination',
            'api_platform.collection.pagination.items_per_page_parameter_name' => 'itemsPerPage',
            'api_platform.collection.pagination.partial_parameter_name' => 'partial',
            'api_platform.http_cache.etag' => true,
            'api_platform.http_cache.max_age' => NULL,
            'api_platform.http_cache.shared_max_age' => NULL,
            'api_platform.http_cache.vary' => array(
                0 => 'Accept',
            ),
            'api_platform.http_cache.public' => NULL,
            'api_platform.oauth.enabled' => false,
            'api_platform.oauth.clientId' => '',
            'api_platform.oauth.clientSecret' => '',
            'api_platform.oauth.type' => 'oauth2',
            'api_platform.oauth.flow' => 'application',
            'api_platform.oauth.tokenUrl' => '/oauth/v2/token',
            'api_platform.oauth.authorizationUrl' => '/oauth/v2/auth',
            'api_platform.oauth.scopes' => array(

            ),
            'api_platform.swagger.api_keys' => array(

            ),
            'api_platform.enable_swagger_ui' => true,
            'api_platform.enable_swagger' => true,
            'api_platform.graphql.enabled' => false,
            'api_platform.graphql.graphiql.enabled' => false,
            'api_platform.validator.serialize_payload_fields' => array(

            ),
            'vich_uploader.default_filename_attribute_suffix' => '_name',
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'console.command.ids' => array(
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
                4 => 'console.command.public_alias.doctrine_migrations.diff_command',
                5 => 'console.command.public_alias.doctrine_migrations.execute_command',
                6 => 'console.command.public_alias.doctrine_migrations.generate_command',
                7 => 'console.command.public_alias.doctrine_migrations.latest_command',
                8 => 'console.command.public_alias.doctrine_migrations.migrate_command',
                9 => 'console.command.public_alias.doctrine_migrations.status_command',
                10 => 'console.command.public_alias.doctrine_migrations.version_command',
                11 => 'console.command.public_alias.api_platform.swagger.command.swagger_command',
            ),
        );
    }
}
