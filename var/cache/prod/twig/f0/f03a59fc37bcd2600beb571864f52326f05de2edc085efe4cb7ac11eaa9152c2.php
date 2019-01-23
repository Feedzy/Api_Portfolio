<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_60aa8bd4a15b458e381d52e3a040bf99b98d867b189c033998bb07b750df9c68 extends Twig_Template
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
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "css", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.css.twig", "/srv/http/Api_Portfolio/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
