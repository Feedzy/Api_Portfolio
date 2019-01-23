<?php

/* @EasyAdmin/default/paginator.html.twig */
class __TwigTemplate_1b2092dee5d706254e78a01f41386b25951d154ce424aa492991f078bcb8d685 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $context["_paginator_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), array("referer" => null));
        // line 4
        echo "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("paginator.results", twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbResults", array()), array(), "EasyAdminBundle");
        echo "
    </div>

    <div class=\"pager pagination list-pagination-paginator ";
        // line 10
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", array())) ? ("first-page") : (""));
        echo " ";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", array())) ? ("last-page") : (""));
        echo "\">
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", array())) {
            // line 12
            echo "            <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? null), array("page" => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "previousPage", array())))), "html", null, true);
            echo "\">
                <i class=\"fa fa-angle-left\"></i> ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 16
            echo "            <span class=\"btn btn-disabled\">
                <i class=\"fa fa-angle-left\"></i> ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 20
        echo "
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", array())) {
            // line 22
            echo "            <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? null), array("page" => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nextPage", array())))), "html", null, true);
            echo "\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
            echo " <i class=\"fa fa-angle-right\"></i>
            </a>
        ";
        } else {
            // line 26
            echo "            <span class=\"btn btn-disabled\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
            echo " <i class=\"fa fa-angle-right\"></i>
            </span>
        ";
        }
        // line 30
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  86 => 27,  83 => 26,  77 => 23,  72 => 22,  70 => 21,  67 => 20,  61 => 17,  58 => 16,  52 => 13,  47 => 12,  45 => 11,  39 => 10,  33 => 7,  28 => 4,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/paginator.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/paginator.html.twig");
    }
}
