<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_1ca5b57ed96a6665328e9f73dfcb5585ccf2e8513eababf9f5df115c263ce8c9 extends Twig_Template
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
        // line 1
        echo "<time datetime=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "c"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "r"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "format", array())), "html", null, true);
        echo "</time>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/field_date.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
