<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e3d22d1f32a45f9a85d5e40c3c886e430ef4aba5e1368631b9b480e838b157bc extends Twig_Template
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
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_enctype.html.php", "/srv/http/Api_Portfolio/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
