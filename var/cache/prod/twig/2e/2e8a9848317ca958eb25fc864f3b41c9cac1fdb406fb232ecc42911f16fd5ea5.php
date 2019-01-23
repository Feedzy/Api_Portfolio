<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_3c2125738d0fe9a353262c3eefbe8caba262959802e67a792a1b80339f9172e7 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "primary_key_field_name", array()));
        // line 5
        $context["__internal_4e02b9cdab3ad925fda203e254c806de74e2c23ded06f7a6392db3cb6eb1940f"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()), array(),         // line 5
($context["__internal_4e02b9cdab3ad925fda203e254c806de74e2c23ded06f7a6392db3cb6eb1940f"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 6
($context["_entity_config"] ?? null), "label", array()), array(),         // line 5
($context["__internal_4e02b9cdab3ad925fda203e254c806de74e2c23ded06f7a6392db3cb6eb1940f"] ?? null)), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? null));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array())) . "-") . ($context["_entity_id"] ?? null)), "html", null, true);
    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()))), "html", null, true);
    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? null),         // line 5
($context["__internal_4e02b9cdab3ad925fda203e254c806de74e2c23ded06f7a6392db3cb6eb1940f"] ?? null))) : (        // line 16
($context["_default_title"] ?? null))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
    ";
    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
($context["delete_form"] ?? null), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 30
($context["_entity_config"] ?? null), "translation_domain", array()), "_trans_parameters" =>         // line 31
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 32
($context["_entity_config"] ?? null)), false);
        // line 33
        echo "
    ";
    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 56
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 56,  132 => 42,  124 => 38,  121 => 37,  116 => 33,  114 => 32,  113 => 31,  112 => 30,  111 => 29,  110 => 28,  108 => 26,  105 => 25,  98 => 22,  95 => 21,  91 => 25,  88 => 24,  85 => 21,  82 => 20,  75 => 16,  74 => 5,  72 => 16,  69 => 15,  67 => 14,  64 => 13,  58 => 11,  52 => 10,  48 => 8,  46 => 6,  45 => 5,  44 => 6,  43 => 5,  42 => 6,  40 => 5,  38 => 4,  36 => 3,  34 => 1,  28 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/edit.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
