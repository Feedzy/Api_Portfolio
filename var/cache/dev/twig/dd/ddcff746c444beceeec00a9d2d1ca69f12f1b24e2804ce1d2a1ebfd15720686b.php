<?php

/* @EasyAdmin/default/field_boolean.html.twig */
class __TwigTemplate_5b113bb18819c8f0c6cc5753f01d321a33146e28c3579ff5966130d71af30be0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->source); })()) == true)) {
            // line 4
            echo "    <span class=\"badge badge-success\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  31 => 4,  29 => 3,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"badge badge-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"badge badge-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "@EasyAdmin/default/field_boolean.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_boolean.html.twig");
    }
}
