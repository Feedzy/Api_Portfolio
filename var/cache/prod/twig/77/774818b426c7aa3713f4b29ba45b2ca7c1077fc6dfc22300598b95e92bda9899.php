<?php

/* @EasyAdmin/default/field_percent.html.twig */
class __TwigTemplate_b0a32e4d941a6d9919e46fdb4c94ea6efdd70d7cf9f7c03182280141dd4d8b81 extends Twig_Template
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
        $context["type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", array(), "any", false, true), "type", array()), "fractional")) : ("fractional"));
        // line 2
        $context["scale"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", array(), "any", false, true), "scale", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", array(), "any", false, true), "scale", array()), 0)) : (0));
        // line 3
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((($context["type"] ?? null) == "fractional")) ? ((($context["value"] ?? null) * 100)) : (($context["value"] ?? null))), ($context["scale"] ?? null)), "html", null, true);
        echo "%
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/field_percent.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_percent.html.twig");
    }
}
