<?php

/* @EasyAdmin/default/field_raw.html.twig */
class __TwigTemplate_689257df5758a20bda1d864e28313111000aae8ebcb112be22e3444dd34603de extends Twig_Template
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
        echo ($context["value"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_raw.html.twig";
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
        return new Twig_Source("", "@EasyAdmin/default/field_raw.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_raw.html.twig");
    }
}
