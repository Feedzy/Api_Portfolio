<?php

/* @EasyAdmin/default/menu.html.twig */
class __TwigTemplate_e1a7edc0d6927d671fb46a5a51be13c2f04b596862848a4caac50319ceff71c8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'menu_item' => array($this, 'block_menu_item'),
            'menu_subitem' => array($this, 'block_menu_subitem'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 31
        echo "
";
        // line 32
        $context["helper"] = $this;
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $context["_translation_domain"] = _twig_default_filter(((twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", array()), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("translation_domain"))) : ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("translation_domain"))), "messages");
        // line 37
        echo "<ul class=\"sidebar-menu\" data-widget=\"tree\" data-animation-speed=\"250\">
    ";
        // line 38
        $context["_menu_items"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.menu");
        // line 39
        echo "
    ";
        // line 40
        $this->displayBlock('main_menu', $context, $blocks);
        // line 63
        echo "</ul>

";
        // line 65
        $this->displayBlock('main_menu_after', $context, $blocks);
    }

    // line 34
    public function block_main_menu_before($context, array $blocks = array())
    {
    }

    // line 40
    public function block_main_menu($context, array $blocks = array())
    {
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["_menu_items"] ?? null));
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
            // line 42
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 61
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    ";
    }

    // line 42
    public function block_menu_item($context, array $blocks = array())
    {
        // line 43
        echo "                ";
        $context["is_selected_menu"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index0", array()));
        // line 44
        echo "                ";
        $context["is_selected_submenu"] = (($context["is_selected_menu"] ?? null) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1));
        // line 45
        echo "                <li class=\"";
        echo (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", array()))) ? ("treeview") : (""));
        echo " ";
        echo ((($context["is_selected_menu"] ?? null)) ? ("active") : (""));
        echo " ";
        echo ((($context["is_selected_submenu"] ?? null)) ? ("submenu-active") : (""));
        echo "\">
                    ";
        // line 46
        echo $context["helper"]->macro_render_menu_item(($context["item"] ?? null), ($context["_translation_domain"] ?? null));
        echo "

                    ";
        // line 48
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", array()), array())) : (array())))) {
            // line 49
            echo "                        <ul class=\"treeview-menu\">
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 51
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 56
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                        </ul>
                    ";
        }
        // line 59
        echo "                </li>
            ";
    }

    // line 51
    public function block_menu_subitem($context, array $blocks = array())
    {
        // line 52
        echo "                                    <li class=\"";
        echo (((twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (((($context["is_selected_menu"] ?? null) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index0", array())))) ? ("active") : (""));
        echo "\">
                                        ";
        // line 53
        echo $context["helper"]->macro_render_menu_item(($context["subitem"] ?? null), ($context["_translation_domain"] ?? null));
        echo "
                                    </li>
                                ";
    }

    // line 65
    public function block_main_menu_after($context, array $blocks = array())
    {
    }

    // line 1
    public function macro_render_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array()), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "menu_index", array()), "submenuIndex" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = (((twig_get_attribute($this->env, $this->source,                 // line 7
($context["item"] ?? null), "type", array()) == "link")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", array())) : ((((twig_get_attribute($this->env, $this->source,                 // line 8
($context["item"] ?? null), "type", array()) == "route")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "route", array()), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "params", array()))) : ((((twig_get_attribute($this->env, $this->source,                 // line 9
($context["item"] ?? null), "type", array()) == "entity")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "entity", array()), "action" => "list"), ($context["menu_params"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "params", array())))) : ((((twig_get_attribute($this->env, $this->source,                 // line 10
($context["item"] ?? null), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", array()) == "route") && (is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["path"] ?? null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin")) && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "route", array()), twig_array_merge(($context["menu_params"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "\"
           class=\"";
                // line 22
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
                echo "\"
           ";
                // line 23
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", array()), "html", null, true);
                    echo "\"";
                }
                // line 24
                echo "           ";
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rel", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rel", array()), false)) : (false))) {
                    echo "rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rel", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 25
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 26
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array()), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                echo "</span>
            ";
                // line 27
                if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-right treeview-icon\"></i>";
                }
                // line 28
                echo "        </a>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 28,  284 => 27,  279 => 26,  273 => 25,  264 => 24,  258 => 23,  254 => 22,  250 => 21,  247 => 20,  244 => 19,  241 => 18,  238 => 17,  235 => 12,  233 => 10,  232 => 9,  231 => 8,  230 => 7,  228 => 6,  225 => 5,  219 => 3,  216 => 2,  203 => 1,  198 => 65,  191 => 53,  184 => 52,  181 => 51,  176 => 59,  172 => 57,  158 => 56,  155 => 51,  138 => 50,  135 => 49,  133 => 48,  128 => 46,  117 => 45,  114 => 44,  111 => 43,  108 => 42,  104 => 62,  90 => 61,  87 => 42,  69 => 41,  66 => 40,  61 => 34,  57 => 65,  53 => 63,  51 => 40,  48 => 39,  46 => 38,  43 => 37,  41 => 36,  38 => 35,  36 => 34,  33 => 33,  31 => 32,  28 => 31,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/menu.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/menu.html.twig");
    }
}
