<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_04928eb2195cdb3684c0b3042b30f530ee2fcbf182fbcf2e59f01d4d505d4176 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/repeated_row.html.php", "/srv/http/Api_Portfolio/vendor/symfony/framework-bundle/Resources/views/Form/repeated_row.html.php");
    }
}
