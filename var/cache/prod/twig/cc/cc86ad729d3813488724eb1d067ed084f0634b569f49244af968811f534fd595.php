<?php

/* @EasyAdmin/default/field_association.html.twig */
class __TwigTemplate_703763363fb9f85846d9c0046dabd614f86c917b9aef7845889ee236c677889f extends Twig_Template
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
        if (twig_test_iterable(($context["value"] ?? null))) {
            // line 3
            echo "    ";
            if (("show" == ($context["view"] ?? null))) {
                // line 4
                echo "        ";
                if ((twig_length_filter($this->env, ($context["value"] ?? null)) > 0)) {
                    // line 5
                    echo "            <ul class=\"";
                    echo (((twig_length_filter($this->env, ($context["value"] ?? null)) < 2)) ? ("inline") : (""));
                    echo "\">
                ";
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["value"] ?? null), 0, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "show", array()), "max_results", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 7
                        echo "                    <li>
                        ";
                        // line 8
                        if ((isset($context["link_parameters"]) || array_key_exists("link_parameters", $context))) {
                            // line 9
                            echo "                            ";
                            // line 10
                            echo "                            ";
                            $context["primary_key_value"] = ("" . twig_get_attribute($this->env, $this->source, $context["item"], twig_get_attribute($this->env, $this->source, ($context["link_parameters"] ?? null), "primary_key_name", array())));
                            // line 11
                            echo "                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["link_parameters"] ?? null), array("id" => ($context["primary_key_value"] ?? null), "referer" => ""))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "</a>
                        ";
                        } else {
                            // line 13
                            echo "                            ";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "
                        ";
                        }
                        // line 15
                        echo "                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "
                ";
                    // line 18
                    $context["_remaining_items"] = (twig_length_filter($this->env, ($context["value"] ?? null)) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "show", array()), "max_results", array()));
                    // line 19
                    echo "                ";
                    if ((($context["_remaining_items"] ?? null) > 0)) {
                        // line 20
                        echo "                    <li class=\"remaining-items\">(";
                        echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("show.remaining_items", ($context["_remaining_items"] ?? null), array(), "EasyAdminBundle"), "html", null, true);
                        echo ")</li>
                ";
                    }
                    // line 22
                    echo "            </ul>
        ";
                } else {
                    // line 24
                    echo "            <div class=\"empty collection-empty\">
                ";
                    // line 25
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "templates", array()), "label_empty", array()));
                    echo "
            </div>
        ";
                }
                // line 28
                echo "    ";
            } elseif (("list" == ($context["view"] ?? null))) {
                // line 29
                echo "        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["value"] ?? null)), "html", null, true);
                echo "</span>
    ";
            }
        } elseif (        // line 32
(isset($context["link_parameters"]) || array_key_exists("link_parameters", $context))) {
            // line 33
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["link_parameters"] ?? null), array("referer" => ""))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->truncateText($this->env, ($context["value"] ?? null)), "html", null, true);
            echo "</a>
";
        } else {
            // line 35
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->truncateText($this->env, ($context["value"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  109 => 33,  107 => 32,  101 => 29,  98 => 28,  92 => 25,  89 => 24,  85 => 22,  79 => 20,  76 => 19,  74 => 18,  71 => 17,  64 => 15,  58 => 13,  50 => 11,  47 => 10,  45 => 9,  43 => 8,  40 => 7,  36 => 6,  31 => 5,  28 => 4,  25 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/field_association.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_association.html.twig");
    }
}
