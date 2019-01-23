<?php

/* @EasyAdmin/default/field_toggle.html.twig */
class __TwigTemplate_1af6de7af40734b52a5165f7096644ece469243b3fc23c0bc571c69e6aa68805 extends Twig_Template
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
        if (((($context["view"] ?? null) == "show") || twig_in_filter("edit", twig_get_attribute($this->env, $this->source, ($context["backend_config"] ?? null), "disabled_actions", array())))) {
            // line 4
            echo "    ";
            if ((($context["value"] ?? null) == true)) {
                // line 5
                echo "        <span class=\"badge badge-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <div class=\"checkbox-switch\" data-propertyname=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "property", array()), "html", null, true);
            echo "\">
        <label>
            <input type=\"checkbox\" ";
            // line 12
            echo (((($context["value"] ?? null) == true)) ? ("checked") : (""));
            echo ">
            ";
            // line 13
            echo "<span></span>
        </label>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  50 => 12,  44 => 10,  37 => 7,  31 => 5,  28 => 4,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/field_toggle.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_toggle.html.twig");
    }
}
