<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_ea8ef8836b1d07cc49eabaaf6478ef2f06424089bddeccc24b9cfc8fbacb5d1e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_0b6e998884bc2fe24abb960ae4196e8c69d55aa5382d3125f04bfcf97a971082"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()), array(),         // line 4
($context["__internal_0b6e998884bc2fe24abb960ae4196e8c69d55aa5382d3125f04bfcf97a971082"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 5
($context["_entity_config"] ?? null), "label", array()), array(),         // line 4
($context["__internal_0b6e998884bc2fe24abb960ae4196e8c69d55aa5382d3125f04bfcf97a971082"] ?? null)));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array())), "html", null, true);
    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()))), "html", null, true);
    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("new.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "new", array()), "title", array()), ($context["_trans_parameters"] ?? null),         // line 4
($context["__internal_0b6e998884bc2fe24abb960ae4196e8c69d55aa5382d3125f04bfcf97a971082"] ?? null))) : (        // line 15
($context["_default_title"] ?? null))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
    }

    public function block_entity_form($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
    ";
    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            // prevent multiple form submissions to avoid creating duplicated entities
            const form = document.querySelector('form.new-form');
            form.addEventListener('submit', function() {
                // this timeout is needed to include the disabled button into the submitted form
                setTimeout(function() {
                    const submitButtons = form.querySelectorAll('[type=\"submit\"]');
                    submitButtons.forEach(function(button) {
                        button.setAttribute('disabled', 'disabled');
                    });
                }, 1);
            }, false);
        });
    </script>

    ";
        // line 46
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  106 => 30,  98 => 26,  95 => 25,  88 => 21,  81 => 20,  78 => 19,  71 => 15,  70 => 4,  68 => 15,  65 => 14,  63 => 13,  60 => 12,  54 => 10,  48 => 9,  44 => 7,  42 => 4,  41 => 5,  40 => 4,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  27 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/new.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
