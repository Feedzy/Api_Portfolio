<?php

/* @EasyAdmin/default/field_email.html.twig */
class __TwigTemplate_545c210a44c49aef1254d7d10944f59158054cbb31573850043e2268d67efa5d extends Twig_Template
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
        if ((($context["view"] ?? null) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->truncateText($this->env, ($context["value"] ?? null)), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/field_email.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_email.html.twig");
    }
}
