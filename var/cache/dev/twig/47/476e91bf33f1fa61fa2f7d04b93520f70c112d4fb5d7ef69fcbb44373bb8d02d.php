<?php

/* @EasyAdmin/default/field_time.html.twig */
class __TwigTemplate_105b1c1f4c711ab0eb53ca4f774dfb4cc00f18a3fe4cce1d73eeab6f2b325b55 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_time.html.twig"));

        // line 1
        echo "<time>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->source); })()), "format", array())), "html", null, true);
        echo "</time>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<time>{{ value|date(field_options.format) }}</time>
", "@EasyAdmin/default/field_time.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_time.html.twig");
    }
}
