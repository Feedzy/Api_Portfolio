<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'twig' shared service.

include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Environment.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Profiler.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Profiler/Profile.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/asset/Packages.php';
include_once $this->targetDirs[3].'/vendor/symfony/asset/PackageInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/asset/Package.php';
include_once $this->targetDirs[3].'/vendor/symfony/asset/PathPackage.php';
include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';
include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/ContextInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/RequestStackContext.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Debug.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Twig/EasyAdminTwigExtension.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Twig/Extension/UploaderExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/AppVariable.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/RuntimeLoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ContainerRuntimeLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';

$this->services['twig'] = $instance = new \Twig\Environment(($this->privates['twig.loader.native_filesystem'] ?? $this->getTwig_Loader_NativeFilesystemService()), array('default_path' => ($this->targetDirs[3].'/templates'), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception::showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

$a = ($this->services['translator'] ?? $this->getTranslatorService());
$b = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
$c = ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService());
$d = new \Symfony\Bridge\Twig\AppVariable();
$d->setEnvironment('dev');
$d->setDebug(true);
if ($this->has('security.token_storage')) {
    $d->setTokenStorage(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
}
if ($this->has('request_stack')) {
    $d->setRequestStack($b);
}

$instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(new \Twig\Profiler\Profile(), NULL));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($a));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($b, '', false)), array())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), $this->targetDirs[3], 'UTF-8'));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($c));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
$instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
$instance->addExtension(new \Twig\Extension\DebugExtension());
$instance->addExtension(new \EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()), ($this->services['easyadmin.router'] ?? $this->load('getEasyadmin_RouterService.php')), true, $c, $a));
$instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension(($this->services['vich_uploader.templating.helper.uploader_helper'] ?? $this->load('getVichUploader_Templating_Helper_UploaderHelperService.php'))));
$instance->addGlobal('app', $d);
$instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => array('privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true),
    'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => array('privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true),
    'Symfony\\Component\\Form\\FormRenderer' => array('privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true),
))));
(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

return $instance;
