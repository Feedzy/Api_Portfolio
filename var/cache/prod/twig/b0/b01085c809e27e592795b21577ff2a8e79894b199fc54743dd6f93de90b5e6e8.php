<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_1a59fc4c015c8b861de3dc2422add68c5de2fc5536d7a54e422ac1cbea605d8b extends Twig_Template
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
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/hidden_row.html.php", "/srv/http/Api_Portfolio/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
