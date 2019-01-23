<?php

/* @EasyAdmin/default/exception.html.twig */
class __TwigTemplate_da1065390f8ccc1b98cdaa03c72ba80748879fd384f83903c606eaf205bd90ff extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content_header' => array($this, 'block_content_header'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($context["layout_template_path"] ?? null), "@EasyAdmin/default/exception.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_class($context, array $blocks = array())
    {
        echo "error";
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
    }

    // line 6
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"error-message\">
        <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 9
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "publicMessage", array()), twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  58 => 9,  55 => 8,  52 => 7,  46 => 6,  40 => 4,  34 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/exception.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
