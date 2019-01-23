<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_0f10aa6367511fe4ae5c697dd1d058b65769b5bd00682d04005d62ad36a9cb19 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'sidebar' => array($this, 'block_sidebar'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'user_menu' => array($this, 'block_user_menu'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content' => array($this, 'block_content'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'global_actions' => array($this, 'block_global_actions'),
            'main' => array($this, 'block_main'),
            'content_footer' => array($this, 'block_content_footer'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 21
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) {
            // line 34
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app-rtl.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 36
        echo "    </head>

    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 161
        echo "</html>
";
    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">

            <style>
                :root { --color-primary: ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.brand_color"), "html", null, true);
        echo "; }
            </style>
        ";
    }

    // line 24
    public function block_head_favicon($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        $context["favicon"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.favicon");
        // line 26
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["favicon"] ?? null), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["favicon"] ?? null), "path", array())), "html", null, true);
        echo "\" />
        ";
    }

    // line 29
    public function block_head_javascript($context, array $blocks = array())
    {
        // line 30
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 41
        $this->displayBlock('wrapper', $context, $blocks);
        // line 152
        echo "        </div>

        ";
        // line 154
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 155
        echo "
        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 157
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "    </body>
    ";
    }

    // line 39
    public function block_body_id($context, array $blocks = array())
    {
    }

    public function block_body_class($context, array $blocks = array())
    {
    }

    // line 41
    public function block_wrapper($context, array $blocks = array())
    {
        // line 42
        echo "            <aside class=\"main-sidebar\">
            ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 69
        echo "            </aside>

            <div class=\"content-wrapper\">
                ";
        // line 72
        $context["_logout_path"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getLogoutPath();
        // line 73
        echo "                ";
        $context["_user_has_logout"] =  !twig_test_empty(($context["_logout_path"] ?? null));
        // line 74
        echo "                ";
        $context["_user_is_impersonated"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN");
        // line 75
        echo "                ";
        ob_start();
        // line 76
        echo "                    <div class=\"popover-content-section user-details ";
        echo (((($context["_user_has_logout"] ?? null) || ($context["_user_is_impersonated"] ?? null))) ? ("user-has-actions") : (""));
        echo "\">
                        <p class=\"small text-muted mb-0\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                        <p class=\"user-name\">
                            ";
        // line 79
        if ((((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                            ";
        } else {
            // line 82
            echo "                                ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                            ";
        }
        // line 84
        echo "                        </p>
                    </div>

                    ";
        // line 87
        $this->displayBlock('user_menu', $context, $blocks);
        // line 99
        echo "                ";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 100
        echo "
                <div class=\"content-top navbar-custom-menu\">
                    <div class=\"user ";
        // line 102
        echo ((($context["_user_is_impersonated"] ?? null)) ? ("user-is-impersonated") : (""));
        echo "\" data-toggle=\"popover\" data-placement=\"bottom\" data-content=\"";
        echo twig_escape_filter($this->env, ($context["_user_menu_content"] ?? null), "html_attr");
        echo "\" data-html=\"true\">
                        <i class=\"fa ";
        // line 103
        echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()))) ? ("fa-user-circle") : ("fa-user-times"));
        echo " user-icon\"></i>
                        ";
        // line 104
        echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "username", array())) : ("")), "html", null, true);
        echo "
                    </div>
                </div>

                ";
        // line 108
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 111
        echo "
                ";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 150
        echo "            </div>
        ";
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        // line 44
        echo "                <header class=\"main-header\">
                    ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 56
        echo "                </header>

                <section class=\"sidebar\">
                    ";
        // line 59
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 66
        echo "                </section>

            ";
    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        // line 46
        echo "                        <nav class=\"navbar\" role=\"navigation\">
                            <div id=\"header-logo\">
                                ";
        // line 48
        $this->displayBlock('header_logo', $context, $blocks);
        // line 53
        echo "                            </div>
                        </nav>
                    ";
    }

    // line 48
    public function block_header_logo($context, array $blocks = array())
    {
        // line 49
        echo "                                    <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                                        ";
        // line 50
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name");
        echo "
                                    </a>
                                ";
    }

    // line 59
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        // line 60
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 61
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", array()), "menu", array())) : ("")), 1 => $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 64
        echo "
                    ";
    }

    // line 87
    public function block_user_menu($context, array $blocks = array())
    {
        // line 88
        echo "                        ";
        if ((($context["_user_has_logout"] ?? null) || ($context["_user_is_impersonated"] ?? null))) {
            // line 89
            echo "                            <div class=\"popover-content-section user-menu\">
                                ";
            // line 90
            if (($context["_user_has_logout"] ?? null)) {
                // line 91
                echo "                                    <a class=\"user-action user-action-logout\" href=\"";
                echo twig_escape_filter($this->env, ($context["_logout_path"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 93
            echo "                                ";
            if (($context["_user_is_impersonated"] ?? null)) {
                // line 94
                echo "                                    <a class=\"user-action user-action-exit-impersonation\" href=\"?_switch_user=_exit\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 96
            echo "                            </div>
                        ";
        }
        // line 98
        echo "                    ";
    }

    // line 108
    public function block_flash_messages($context, array $blocks = array())
    {
        // line 109
        echo "                    ";
        echo twig_include($this->env, $context, (((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        // line 113
        echo "                    <div class=\"content\">
                        ";
        // line 114
        if ( !twig_test_empty(twig_trim_filter(        $this->renderBlock("content_header", $context, $blocks)))) {
            // line 115
            echo "                        ";
            $context["_has_content_help"] = ((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["help"] ?? null) : null), false)) : (false)));
            // line 116
            echo "                        <section class=\"content-header ";
            echo ((($context["_has_content_help"] ?? null)) ? ("has-content-help") : (""));
            echo "\">
                            ";
            // line 117
            $this->displayBlock('content_header', $context, $blocks);
            // line 136
            echo "                        </section>
                        ";
        }
        // line 138
        echo "
                        <section id=\"main\" class=\"content-body\">
                            ";
        // line 140
        $this->displayBlock('main', $context, $blocks);
        // line 141
        echo "                        </section>

                        ";
        // line 143
        if ( !twig_test_empty(twig_trim_filter(        $this->renderBlock("content_footer", $context, $blocks)))) {
            // line 144
            echo "                            <section class=\"content-footer\">
                                ";
            // line 145
            $this->displayBlock('content_footer', $context, $blocks);
            // line 146
            echo "                            </section>
                        ";
        }
        // line 148
        echo "                    </div>
                ";
    }

    // line 117
    public function block_content_header($context, array $blocks = array())
    {
        // line 118
        echo "                                <div class=\"content-header-title\">
                                    <h1 class=\"title\">";
        // line 119
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>

                                    ";
        // line 121
        $this->displayBlock('content_help', $context, $blocks);
        // line 128
        echo "                                </div>

                                ";
        // line 130
        if ( !twig_test_empty(twig_trim_filter(        $this->renderBlock("global_actions", $context, $blocks)))) {
            // line 131
            echo "                                    <div class=\"global-actions\">";
            $this->displayBlock('global_actions', $context, $blocks);
            echo "</div>
                                ";
        }
        // line 133
        echo "

                            ";
    }

    // line 119
    public function block_content_title($context, array $blocks = array())
    {
    }

    // line 121
    public function block_content_help($context, array $blocks = array())
    {
        // line 122
        echo "                                        ";
        if (((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["help"] ?? null) : null), false)) : (false)))) {
            // line 123
            echo "                                            <div class=\"content-header-help\">
                                                ";
            // line 124
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["_entity_config"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "action"), "method")] ?? null) : null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["help"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", array()));
            echo "
                                            </div>
                                        ";
        }
        // line 127
        echo "                                    ";
    }

    // line 131
    public function block_global_actions($context, array $blocks = array())
    {
    }

    // line 140
    public function block_main($context, array $blocks = array())
    {
    }

    // line 145
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 154
    public function block_body_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 154,  528 => 145,  523 => 140,  518 => 131,  514 => 127,  508 => 124,  505 => 123,  502 => 122,  499 => 121,  494 => 119,  488 => 133,  482 => 131,  480 => 130,  476 => 128,  474 => 121,  469 => 119,  466 => 118,  463 => 117,  458 => 148,  454 => 146,  452 => 145,  449 => 144,  447 => 143,  443 => 141,  441 => 140,  437 => 138,  433 => 136,  431 => 117,  426 => 116,  423 => 115,  421 => 114,  418 => 113,  415 => 112,  408 => 109,  405 => 108,  401 => 98,  397 => 96,  391 => 94,  388 => 93,  380 => 91,  378 => 90,  375 => 89,  372 => 88,  369 => 87,  364 => 64,  362 => 61,  360 => 60,  357 => 59,  350 => 50,  341 => 49,  338 => 48,  332 => 53,  330 => 48,  326 => 46,  323 => 45,  317 => 66,  315 => 59,  310 => 56,  308 => 45,  305 => 44,  302 => 43,  297 => 150,  295 => 112,  292 => 111,  290 => 108,  283 => 104,  279 => 103,  273 => 102,  269 => 100,  266 => 99,  264 => 87,  259 => 84,  253 => 82,  247 => 80,  245 => 79,  240 => 77,  235 => 76,  232 => 75,  229 => 74,  226 => 73,  224 => 72,  219 => 69,  217 => 43,  214 => 42,  211 => 41,  202 => 39,  197 => 159,  188 => 157,  184 => 156,  181 => 155,  179 => 154,  175 => 152,  173 => 41,  165 => 39,  162 => 38,  155 => 30,  152 => 29,  143 => 26,  140 => 25,  137 => 24,  130 => 16,  123 => 13,  120 => 12,  114 => 10,  109 => 161,  107 => 38,  103 => 36,  97 => 34,  95 => 33,  92 => 32,  90 => 29,  87 => 28,  85 => 24,  82 => 23,  73 => 21,  69 => 20,  66 => 19,  64 => 12,  59 => 10,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/layout.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
