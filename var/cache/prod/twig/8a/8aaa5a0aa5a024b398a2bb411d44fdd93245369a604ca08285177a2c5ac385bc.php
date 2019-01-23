<?php

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_45d2cc501ea7d9d12616ba65fd60696f4ab4f8ba4d00df9c8d2e37d4cc8b6710 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'content_footer' => array($this, 'block_content_footer'),
            'paginator' => array($this, 'block_paginator'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", array()), "layout", array()), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_c21978c00638cd8b97d4809098a99f71ee290e02decc5748ab380f85d0112258"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()), array(),         // line 2
($context["__internal_c21978c00638cd8b97d4809098a99f71ee290e02decc5748ab380f85d0112258"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 3
($context["_entity_config"] ?? null), "label", array()), array(),         // line 2
($context["__internal_c21978c00638cd8b97d4809098a99f71ee290e02decc5748ab380f85d0112258"] ?? null)));
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "all", array()), (((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context))) ? (_twig_default_filter(($context["_request_parameters"] ?? null), array())) : (array()))), array("action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"), "entity" => twig_get_attribute($this->env, $this->source,         // line 9
($context["_entity_config"] ?? null), "name", array()), "menuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["app"] ?? null), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["app"] ?? null), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["app"] ?? null), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["app"] ?? null), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["app"] ?? null), "request", array()), "get", array(0 => "page", 1 => 1), "method"), "referer" => null));
        // line 18
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 19
            $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), array("query" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "sortField" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))), "sortDirection" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method")))));
        }
        // line 26
        $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), array("referer" => twig_urlencode_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ($context["_request_parameters"] ?? null)))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_body_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("easyadmin-list-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array())), "html", null, true);
    }

    // line 29
    public function block_body_class($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()))), "html", null, true);
    }

    // line 31
    public function block_content_title($context, array $blocks = array())
    {
        // line 32
        ob_start();
        // line 33
        echo "    ";
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 34
            echo "        ";
            $context["_default_title"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("search.page_title", twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbResults", array()), array(), "EasyAdminBundle");
            // line 35
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array()), "title", array()), twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbResults", array()), array(),             // line 2
($context["__internal_c21978c00638cd8b97d4809098a99f71ee290e02decc5748ab380f85d0112258"] ?? null))) : (            // line 35
($context["_default_title"] ?? null)));
            echo "
    ";
        } else {
            // line 37
            echo "        ";
            $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
            // line 38
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", array()), "title", array()), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_c21978c00638cd8b97d4809098a99f71ee290e02decc5748ab380f85d0112258"] ?? null))) : (            // line 38
($context["_default_title"] ?? null)));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 43
    public function block_global_actions($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "search", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()))) {
            // line 45
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "search", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()));
            // line 46
            echo "
        ";
            // line 47
            $this->displayBlock('search_action', $context, $blocks);
            // line 66
            echo "    ";
        }
        // line 67
        echo "
    ";
        // line 68
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "new", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()))) {
            // line 69
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "new", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()));
            // line 70
            echo "        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 78
            echo "    ";
        }
    }

    // line 47
    public function block_search_action($context, array $blocks = array())
    {
        // line 48
        echo "            <div class=\"form-action form-action-search ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                <form method=\"get\" action=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                    ";
        // line 50
        $this->displayBlock('search_form', $context, $blocks);
        // line 63
        echo "                </form>
            </div>
        ";
    }

    // line 50
    public function block_search_form($context, array $blocks = array())
    {
        // line 51
        echo "                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "entity", array()), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortField", array()))) : (twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortField", array()))), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortDirection", array()))) : (twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortDirection", array()))), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "menuIndex", array()), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "submenuIndex", array()), "html", null, true);
        echo "\">
                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", array()), "action.search")) : ("action.search")), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_c21978c00638cd8b97d4809098a99f71ee290e02decc5748ab380f85d0112258"] ?? null)), "html", null, true);
        // line 59
        echo "\">
                            </div>
                        </div>
                    ";
    }

    // line 70
    public function block_new_action($context, array $blocks = array())
    {
        // line 71
        echo "            <div class=\"button-action\">
                <a class=\"";
        // line 72
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), array("action" => twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "target", array()), "html", null, true);
        echo "\">
                    ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 74
        echo "                    ";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", array())))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", array()), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_c21978c00638cd8b97d4809098a99f71ee290e02decc5748ab380f85d0112258"] ?? null))) : ("")), "html", null, true);
        // line 74
        echo "
                </a>
            </div>
        ";
    }

    // line 81
    public function block_main($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        $context["_list_item_actions"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("list", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()));
        // line 83
        echo "
    <table class=\"table datagrid\">
        <thead>
        ";
        // line 86
        $this->displayBlock('table_head', $context, $blocks);
        // line 112
        echo "        </thead>

        <tbody>
        ";
        // line 115
        $this->displayBlock('table_body', $context, $blocks);
        // line 152
        echo "        </tbody>
    </table>

    ";
        // line 155
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 86
    public function block_table_head($context, array $blocks = array())
    {
        // line 87
        echo "            <tr>
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 89
            echo "                    ";
            $context["isSortingField"] = ((twig_get_attribute($this->env, $this->source, $context["metadata"], "property", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "sortField"), "method")) || (("association" == twig_get_attribute($this->env, $this->source, $context["metadata"], "type", array())) && (is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "sortField"), "method")) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", array()) . ".")) && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))));
            // line 90
            echo "                    ";
            $context["nextSortDirection"] = ((($context["isSortingField"] ?? null)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 91
            echo "                    ";
            $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["metadata"], "label", array()), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_c21978c00638cd8b97d4809098a99f71ee290e02decc5748ab380f85d0112258"] ?? null));
            // line 92
            echo "                    ";
            $context["_column_icon"] = ((($context["isSortingField"] ?? null)) ? ((((($context["nextSortDirection"] ?? null) == "DESC")) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 93
            echo "
                    <th class=\"";
            // line 94
            echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", array()), "html", null, true);
            echo "\" ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, $context["metadata"], "sortable", array())) {
                // line 96
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), array("page" => 1, "sortField" => twig_get_attribute($this->env, $this->source, $context["metadata"], "property", array()), "sortDirection" => ($context["nextSortDirection"] ?? null)))), "html", null, true);
                echo "\">
                                ";
                // line 97
                echo ($context["_column_label"] ?? null);
                echo " <i class=\"fa ";
                echo twig_escape_filter($this->env, ($context["_column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                            </a>
                        ";
            } else {
                // line 100
                echo "                            <span>";
                echo ($context["_column_label"] ?? null);
                echo "</span>
                        ";
            }
            // line 102
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
                ";
        // line 105
        if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
            // line 106
            echo "                    <th  ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        <span class=\"sr-only\">";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 110
        echo "            </tr>
        ";
    }

    // line 115
    public function block_table_body($context, array $blocks = array())
    {
        // line 116
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 117
            echo "                ";
            // line 118
            echo "                ";
            $context["_item_id"] = ("" . twig_get_attribute($this->env, $this->source, $context["item"], twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "primary_key_field_name", array())));
            // line 119
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, ($context["_item_id"] ?? null), "html", null, true);
            echo "\">
                    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 121
                echo "                        ";
                $context["isSortingField"] = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 122
                echo "                        ";
                $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, $context["metadata"], "label", array())) ? (twig_get_attribute($this->env, $this->source, $context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? null),                 // line 2
($context["__internal_c21978c00638cd8b97d4809098a99f71ee290e02decc5748ab380f85d0112258"] ?? null));
                // line 123
                echo "
                        <td class=\"";
                // line 124
                echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", array()), "html", null, true);
                echo "\" ";
                echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
                echo ">
                            ";
                // line 125
                echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderEntityField($this->env, "list", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "
                    ";
            // line 129
            if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
                // line 130
                echo "                        ";
                $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
                // line 131
                echo "                        <td class=\"actions\">
                        ";
                // line 132
                $this->displayBlock('item_actions', $context, $blocks);
                // line 141
                echo "                        </td>
                    ";
            }
            // line 143
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 145
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 146
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) ? ((twig_length_filter($this->env, ($context["fields"] ?? null)) + 1)) : (twig_length_filter($this->env, ($context["fields"] ?? null)))), "html", null, true);
            echo "\">
                        ";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.no_results", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "        ";
    }

    // line 132
    public function block_item_actions($context, array $blocks = array())
    {
        // line 133
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 134
($context["_list_item_actions"] ?? null), "request_parameters" =>         // line 135
($context["_request_parameters"] ?? null), "translation_domain" => twig_get_attribute($this->env, $this->source,         // line 136
($context["_entity_config"] ?? null), "translation_domain", array()), "trans_parameters" =>         // line 137
($context["_trans_parameters"] ?? null), "item_id" =>         // line 138
($context["_item_id"] ?? null)), false);
        // line 139
        echo "
                        ";
    }

    // line 155
    public function block_delete_form($context, array $blocks = array())
    {
        // line 156
        echo "        ";
        $context["referer"] = (((((twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", array()) == twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbPages", array())) && (1 != twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", array()))) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPageResults", array()))))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 157
($context["app"] ?? null), "request", array()), "query", array()), array("page" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 158
($context["app"] ?? null), "request", array()), "requestUri", array())));
        // line 160
        echo "
        ";
        // line 161
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 163
($context["referer"] ?? null)), "delete_form" =>         // line 164
($context["delete_form_template"] ?? null), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 165
($context["_entity_config"] ?? null), "translation_domain", array()), "_trans_parameters" =>         // line 166
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 167
($context["_entity_config"] ?? null)), false);
        // line 168
        echo "
    ";
    }

    // line 172
    public function block_content_footer($context, array $blocks = array())
    {
        // line 173
        echo "    ";
        $this->displayBlock('paginator', $context, $blocks);
    }

    public function block_paginator($context, array $blocks = array())
    {
        // line 174
        echo "        ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", array()), "paginator", array()));
        echo "
    ";
    }

    // line 178
    public function block_body_javascript($context, array $blocks = array())
    {
        // line 179
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", array("action" => "edit", "entity" => twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()), "view" => "list"));
        echo "\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 224
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 225
            echo "        <script type=\"text/javascript\">
            const _search_query = \"";
            // line 226
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 226,  589 => 225,  587 => 224,  551 => 191,  535 => 179,  532 => 178,  525 => 174,  518 => 173,  515 => 172,  510 => 168,  508 => 167,  507 => 166,  506 => 165,  505 => 164,  504 => 163,  503 => 161,  500 => 160,  498 => 158,  497 => 157,  495 => 156,  492 => 155,  487 => 139,  485 => 138,  484 => 137,  483 => 136,  482 => 135,  481 => 134,  479 => 133,  476 => 132,  472 => 151,  462 => 147,  458 => 146,  455 => 145,  441 => 143,  437 => 141,  435 => 132,  432 => 131,  429 => 130,  427 => 129,  424 => 128,  415 => 125,  405 => 124,  402 => 123,  400 => 2,  398 => 122,  395 => 121,  391 => 120,  386 => 119,  383 => 118,  381 => 117,  362 => 116,  359 => 115,  354 => 110,  348 => 107,  343 => 106,  341 => 105,  338 => 104,  331 => 102,  325 => 100,  317 => 97,  312 => 96,  310 => 95,  298 => 94,  295 => 93,  292 => 92,  290 => 2,  288 => 91,  285 => 90,  282 => 89,  278 => 88,  275 => 87,  272 => 86,  268 => 155,  263 => 152,  261 => 115,  256 => 112,  254 => 86,  249 => 83,  246 => 82,  243 => 81,  236 => 74,  234 => 2,  232 => 74,  226 => 73,  218 => 72,  215 => 71,  212 => 70,  205 => 59,  203 => 2,  200 => 59,  194 => 56,  190 => 55,  186 => 54,  182 => 53,  178 => 52,  175 => 51,  172 => 50,  166 => 63,  164 => 50,  160 => 49,  155 => 48,  152 => 47,  147 => 78,  144 => 70,  141 => 69,  139 => 68,  136 => 67,  133 => 66,  131 => 47,  128 => 46,  125 => 45,  122 => 44,  119 => 43,  111 => 38,  110 => 2,  108 => 38,  105 => 37,  100 => 35,  99 => 2,  97 => 35,  94 => 34,  91 => 33,  89 => 32,  86 => 31,  80 => 29,  74 => 28,  70 => 5,  68 => 26,  65 => 22,  64 => 21,  63 => 20,  62 => 19,  60 => 18,  58 => 14,  57 => 13,  56 => 12,  55 => 11,  54 => 10,  53 => 9,  52 => 8,  51 => 7,  49 => 2,  48 => 3,  47 => 2,  46 => 3,  44 => 2,  42 => 1,  36 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/list.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/list.html.twig");
    }
}
