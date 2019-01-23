<?php

/* @EasyAdmin/form/bootstrap_4.html.twig */
class __TwigTemplate_14f5391afd727f6d4b02353f00bb4dcc42e630ebec8f5fe9715bdc4171deb13c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@EasyAdmin/form/bootstrap_4.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'form_label' => array($this, 'block_form_label'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_widget_groups' => array($this, 'block_easyadmin_widget_groups'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 21
        echo "
";
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('form_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 114
        echo "
";
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('form_row', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('collection_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('button_row', $context, $blocks);
        // line 185
        echo "
";
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('form_label', $context, $blocks);
        // line 212
        echo "
";
        // line 215
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 230
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 235
        echo "
";
        // line 236
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 280
        echo "
";
        // line 281
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 285
        echo "
";
        // line 286
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 327
        echo "
";
        // line 328
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 337
        echo "
";
        // line 338
        $this->displayBlock('item_actions', $context, $blocks);
        // line 365
        echo "
";
        // line 367
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 412
        echo "
";
        // line 413
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 449
        echo "
";
        // line 451
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 461
        echo "
";
        // line 462
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 466
        echo "
";
        // line 468
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_join_filter(array(0 => ((twig_get_attribute($this->env, $this->source,             // line 6
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")), 1 => (twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", array()) . "-form")), " "), "data-view" => twig_get_attribute($this->env, $this->source,             // line 7
($context["easyadmin"] ?? null), "view", array()), "data-entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
($context["easyadmin"] ?? null), "entity", array()), "name", array()), "data-entity-id" => twig_get_attribute($this->env, $this->source,             // line 9
($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "primary_key_field_name", array()))));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 14
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 19
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
    }

    // line 24
    public function block_form_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "        \$(function() {
            event.preventDefault();

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            var hasCountAttr = parentDiv.data('count');

            if (hasCountAttr === undefined) {
                var numItems = parentDiv.children('div.form-group').length;
                parentDiv.data('count', ++numItems)
            }

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
        });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 47
            echo "
        <div class=\"field-collection-item-row\">
            <div class=\"field-collection-item-action\">
                <a href=\"#\" onclick=\"";
            // line 50
            echo ($context["remove_item_javascript"] ?? null);
            echo "; return false;\" class=\"text-danger\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
                    <i class=\"fa fa-window-close\"></i>
                </a>
            </div>
            <div class=\"field-collection-item-widget\">
                ";
            // line 55
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "
            </div>
        </div>
    ";
        } else {
            // line 59
            echo "        ";
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 63
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 64
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter(($context["type"] ?? null), array(0 => "file", 1 => "hidden")))) {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 67
        if (((isset($context["type"]) || array_key_exists("type", $context)) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 68
            echo "        ";
            // line 69
            $context["required"] = false;
        }
        // line 71
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 74
    public function block_date_widget($context, array $blocks = array())
    {
        // line 75
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 76
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 77
        echo "</div>";
    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        // line 81
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 82
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 83
        echo "</div>";
    }

    // line 86
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 87
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 88
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 90
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 91
            echo "        ";
            ob_start();
            // line 92
            echo "            \$(function() {
                event.preventDefault();

                var containerDiv = \$('#";
            // line 95
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
                var parentDiv = containerDiv.parents('[data-prototype]:first');
                containerDiv.remove();
                parentDiv.trigger('easyadmin.collection.item-deleted');

                if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                    \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
                }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 105
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 107
            echo ($context["remove_item_javascript"] ?? null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 117
    public function block_form_row($context, array $blocks = array())
    {
        // line 118
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 119
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 121
        echo "<div class=\"form-widget\">";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 124
        if ((twig_in_filter(($context["_field_type"] ?? null), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "dateinterval", 5 => "time", 6 => "time_immutable", 7 => "birthday")) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 125
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 127
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 132
        echo "
            ";
        // line 133
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "help", array()))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "help", array()))) != "")) {
            // line 134
            echo "                <span class=\"help-block\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "help", array()))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "help", array()))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 138
        echo "</div>
    </div>";
    }

    // line 142
    public function block_collection_row($context, array $blocks = array())
    {
        // line 143
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 145
        if ((((isset($context["allow_add"]) || array_key_exists("allow_add", $context))) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 146
            echo "        ";
            ob_start();
            // line 147
            echo "            \$(function() {
                event.preventDefault();

                var collection = \$('#";
            // line 150
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 158
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 159
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\\]\\[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 168
            echo "
        <div class=\"form-group field-collection-action\">
            <div class=\"form-widget\">
                <a href=\"#\" onclick=\"";
            // line 171
            echo ($context["js_add_item"] ?? null);
            echo "; return false;\" class=\"btn btn-sm\">
                    <i class=\"fa fa-plus\"></i>
                    ";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </a>
            </div>
        </div>
    ";
        }
    }

    // line 180
    public function block_button_row($context, array $blocks = array())
    {
        // line 181
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 183
        echo "</div>";
    }

    // line 188
    public function block_form_label($context, array $blocks = array())
    {
        // line 189
        if ( !(($context["label"] ?? null) === false)) {
            // line 190
            if (((isset($context["compound"]) || array_key_exists("compound", $context)) && ($context["compound"] ?? null))) {
                // line 191
                $context["element"] = "legend";
                // line 192
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            } else {
                // line 194
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
            }
            // line 196
            if (($context["required"] ?? null)) {
                // line 197
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 199
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 200
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 201
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 202
($context["name"] ?? null), "%id%" =>                     // line 203
($context["id"] ?? null)));
                } else {
                    // line 206
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 209
            echo "<";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = array("attr" => ($context["label_attr"] ?? null));
                if (!is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.', 209, $this->source);
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 215
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 216
        echo "<div class=\"form-widget-compound\">
        ";
        // line 219
        echo "        ";
        if (((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))))) {
            // line 220
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        }
        // line 222
        echo "        ";
        if (((twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 223
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 224
            echo "        ";
        }
        // line 225
        echo "
        ";
        // line 226
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>";
    }

    // line 230
    public function block_empty_collection($context, array $blocks = array())
    {
        // line 231
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 232
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
    }

    // line 236
    public function block_vich_file_row($context, array $blocks = array())
    {
        // line 237
        echo "    ";
        $context["force_error"] = true;
        // line 238
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 241
    public function block_vich_file_widget($context, array $blocks = array())
    {
        // line 242
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 243
        if ( !twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 244
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", array(), "VichUploaderBundle")));
            // line 245
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 246
            echo "            ";
            $context["extension_icons"] = array("gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o");
            // line 253
            echo "            <a class=\"easyadmin-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
                <i class=\"fa ";
            // line 254
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), array(), "array", true, true) &&  !(null === (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["extension_icons"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[($context["file_extension"] ?? null)] ?? null) : null)))) ? ((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["extension_icons"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[($context["file_extension"] ?? null)] ?? null) : null)) : ("fa-file-o")), "html", null, true);
            echo "\"></i>
                ";
            // line 255
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 258
        echo "
        ";
        // line 259
        ob_start();
        // line 260
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 263
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 265
        echo "
        <div class=\"easyadmin-vich-file-actions\">
            ";
        // line 268
        echo "            <div class=\"btn input-file-container\">
                <i class=\"fa fa-upload\"></i> ";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), 'widget', array("attr" => array("onchange" => ($context["file_upload_js"] ?? null))));
        echo "
            </div>

            ";
        // line 273
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 274
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", array()), 'row', array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", array(), "VichUploaderBundle")));
            echo "
            ";
        }
        // line 276
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 281
    public function block_vich_image_row($context, array $blocks = array())
    {
        // line 282
        echo "    ";
        $context["force_error"] = true;
        // line 283
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 286
    public function block_vich_image_widget($context, array $blocks = array())
    {
        // line 287
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 288
        if ( !twig_test_empty((((isset($context["image_uri"]) || array_key_exists("image_uri", $context))) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 289
            echo "            ";
            if (twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 290
                echo "                <div class=\"easyadmin-thumbnail\">
                    <img style=\"cursor: initial\" src=\"";
                // line 291
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true);
                echo "\">
                </div>
            ";
            } else {
                // line 294
                echo "                ";
                $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? null));
                // line 295
                echo "
                <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
                // line 296
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    <img src=\"";
                // line 297
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
                echo "\">
                </a>

                <div id=\"";
                // line 300
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"easyadmin-lightbox\">
                    <img src=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
                echo "\">
                </div>
            ";
            }
            // line 304
            echo "        ";
        }
        // line 305
        echo "
        ";
        // line 306
        ob_start();
        // line 307
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 312
        echo "
        <div class=\"easyadmin-vich-image-actions\">
            ";
        // line 315
        echo "            <div class=\"btn input-file-container\">
                <i class=\"fa fa-upload\"></i> ";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 317
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), 'widget', array("attr" => array("onchange" => ($context["file_upload_js"] ?? null))));
        echo "
            </div>

            ";
        // line 320
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 321
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", array()), 'row', array("label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", array(), "VichUploaderBundle")));
            echo "
            ";
        }
        // line 323
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 328
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 331
        echo "<section class=\"content-footer\">
        <div class=\"form-actions\">";
        // line 333
        $this->displayBlock("item_actions", $context, $blocks);
        // line 334
        echo "</div>
    </section>
";
    }

    // line 338
    public function block_item_actions($context, array $blocks = array())
    {
        // line 339
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array());
        // line 340
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "name", array())), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "label", array())));
        // line 341
        echo "
    ";
        // line 343
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        ";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "
    </button>

    ";
        // line 347
        $context["_entity_actions"] = (((twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", array()) == "new")) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("new", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 348
($context["easyadmin"] ?? null), "entity", array()), "name", array()))) : ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("edit", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 349
($context["easyadmin"] ?? null), "entity", array()), "name", array()))));
        // line 350
        echo "
    ";
        // line 351
        $context["_entity_id"] = (((twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", array()) == "new")) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 353
($context["easyadmin"] ?? null), "item", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "primary_key_field_name", array()))));
        // line 354
        echo "
    ";
        // line 355
        $context["_request_parameters"] = array("entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "name", array()), "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 356
        echo "
    ";
        // line 357
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 358
($context["_entity_actions"] ?? null), "request_parameters" =>         // line 359
($context["_request_parameters"] ?? null), "translation_domain" =>         // line 360
($context["_translation_domain"] ?? null), "trans_parameters" =>         // line 361
($context["_trans_parameters"] ?? null), "item_id" =>         // line 362
($context["_entity_id"] ?? null)), false);
        // line 363
        echo "
";
    }

    // line 367
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        // line 368
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array());
        // line 369
        echo "    <div class=\"row\">
        ";
        // line 370
        if ((twig_length_filter($this->env, ($context["easyadmin_form_tabs"] ?? null)) > 0)) {
            // line 371
            echo "            <div class=\"col-12\">
                <div class=\"nav-tabs-custom form-tabs\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 374
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 375
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
                // line 376
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["tab_config"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["tab_config"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 377
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", array()), false)) : (false))) {
                    // line 378
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 380
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["tab_config"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["label"] ?? null) : null), array(), ($context["_translation_domain"] ?? null)), "html", null, true);
                echo "
                                    ";
                // line 381
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", array()) > 0)) {
                    // line 382
                    echo "                                        <span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("form.tab.error_badge_title", twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", array()), array(), "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 383
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", array()), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 386
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 389
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 391
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 392
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["tab_config"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                ";
                // line 393
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", array(), "array", true, true)) ? (_twig_default_filter((($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["tab_config"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["help"] ?? null) : null), false)) : (false))) {
                    // line 394
                    echo "                                    <div class=\"content-header-help tab-help\">
                                        ";
                    // line 395
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = $context["tab_config"]) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["help"] ?? null) : null), array(), ($context["_translation_domain"] ?? null));
                    echo "
                                    </div>
                                ";
                }
                // line 398
                echo "
                                <div class=\"row\">
                                    ";
                // line 400
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 408
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 410
        echo "    </div>
";
    }

    // line 413
    public function block_easyadmin_widget_groups($context, array $blocks = array())
    {
        // line 414
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_groups"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", array()) || (twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", array()) == ($context["tab_name"] ?? null)))) {
                // line 415
                echo "        <div class=\"field-group col-";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", array()), "12")) : ("12")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
                echo "\">
            <fieldset>
                ";
                // line 417
                if (((((twig_get_attribute($this->env, $this->source, $context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", array()), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array()), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", array()), false)) : (false)))) {
                    // line 418
                    echo "                    <legend class=\"";
                    echo ((((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array()), false)) : (false))) ? ("with-icon") : (""));
                    echo "\">
                        ";
                    // line 419
                    if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array()), false)) : (false))) {
                        // line 420
                        echo "                            <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array()), "html", null, true);
                        echo "\"></i>
                        ";
                    }
                    // line 422
                    echo "                        ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", array()), array(), ($context["_translation_domain"] ?? null));
                    echo "
                    </legend>

                    ";
                    // line 425
                    if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", array()), false)) : (false))) {
                        // line 426
                        echo "                        <div class=\"legend-help\">";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", array()), array(), ($context["_translation_domain"] ?? null));
                        echo "</div>
                    ";
                    }
                    // line 428
                    echo "                ";
                }
                // line 429
                echo "
                <div class=\"row\">
                    ";
                // line 431
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "block_prefixes", array())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                        // line 432
                        echo "                        ";
                        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == ($context["tab_name"] ?? null)))) {
                            // line 433
                            echo "                            <div class=\"col-";
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "columns", array()), "12")) : ("12")), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                            echo "\">
                                ";
                            // line 434
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                            echo "
                            </div>
                        ";
                        }
                        // line 437
                        echo "                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 438
                echo "                </div>
            </fieldset>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 442
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "block_prefixes", array())) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == ($context["tab_name"] ?? null))))) {
                    // line 443
                    echo "            <div class=\"col-";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "columns", array()), "12")) : ("12")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 444
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 451
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        // line 452
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 453
($context["attr"] ?? null), array("data-easyadmin-autocomplete-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 456
($context["autocomplete_entity_name"] ?? null)))))));
        // line 459
        echo "
";
    }

    // line 462
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        // line 463
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array()), "vars", array()), "name", array());
        // line 464
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 468
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        // line 469
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array());
        // line 470
        echo "    <div class=\"form-section ";
        echo ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)) == false) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) == false))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 472
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array()), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 473
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), ($context["_translation_domain"] ?? null));
        }
        echo "</span>
        </h2>

        ";
        // line 476
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 477
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array()), "help", array()), array(), ($context["_translation_domain"] ?? null));
            echo "</p>
        ";
        }
        // line 479
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_4.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1224 => 479,  1218 => 477,  1216 => 476,  1207 => 473,  1201 => 472,  1193 => 470,  1190 => 469,  1187 => 468,  1183 => 464,  1180 => 463,  1177 => 462,  1172 => 459,  1170 => 456,  1169 => 453,  1167 => 452,  1164 => 451,  1156 => 447,  1146 => 444,  1139 => 443,  1133 => 442,  1124 => 438,  1117 => 437,  1111 => 434,  1104 => 433,  1101 => 432,  1096 => 431,  1092 => 429,  1089 => 428,  1083 => 426,  1081 => 425,  1074 => 422,  1068 => 420,  1066 => 419,  1061 => 418,  1059 => 417,  1051 => 415,  1044 => 414,  1041 => 413,  1036 => 410,  1030 => 408,  1024 => 404,  1006 => 400,  1002 => 398,  996 => 395,  993 => 394,  991 => 393,  982 => 392,  965 => 391,  961 => 389,  953 => 386,  947 => 383,  942 => 382,  940 => 381,  935 => 380,  929 => 378,  927 => 377,  917 => 376,  914 => 375,  910 => 374,  905 => 371,  903 => 370,  900 => 369,  897 => 368,  894 => 367,  889 => 363,  887 => 362,  886 => 361,  885 => 360,  884 => 359,  883 => 358,  882 => 357,  879 => 356,  877 => 355,  874 => 354,  872 => 353,  871 => 351,  868 => 350,  866 => 349,  865 => 348,  864 => 347,  858 => 344,  855 => 343,  852 => 341,  849 => 340,  846 => 339,  843 => 338,  837 => 334,  835 => 333,  832 => 331,  830 => 329,  827 => 328,  820 => 324,  817 => 323,  811 => 321,  809 => 320,  803 => 317,  799 => 316,  796 => 315,  792 => 312,  787 => 310,  780 => 307,  778 => 306,  775 => 305,  772 => 304,  766 => 301,  762 => 300,  756 => 297,  752 => 296,  749 => 295,  746 => 294,  740 => 291,  737 => 290,  734 => 289,  732 => 288,  729 => 287,  726 => 286,  719 => 283,  716 => 282,  713 => 281,  706 => 277,  703 => 276,  697 => 274,  695 => 273,  689 => 270,  685 => 269,  682 => 268,  678 => 265,  673 => 263,  666 => 260,  664 => 259,  661 => 258,  655 => 255,  651 => 254,  646 => 253,  643 => 246,  640 => 245,  637 => 244,  635 => 243,  632 => 242,  629 => 241,  622 => 238,  619 => 237,  616 => 236,  609 => 232,  606 => 231,  603 => 230,  597 => 226,  594 => 225,  591 => 224,  588 => 223,  585 => 222,  579 => 220,  576 => 219,  573 => 216,  570 => 215,  549 => 209,  545 => 206,  542 => 203,  541 => 202,  540 => 201,  538 => 200,  536 => 199,  533 => 197,  531 => 196,  528 => 194,  525 => 192,  523 => 191,  521 => 190,  519 => 189,  516 => 188,  512 => 183,  510 => 182,  504 => 181,  501 => 180,  491 => 173,  486 => 171,  481 => 168,  465 => 159,  457 => 158,  453 => 157,  443 => 150,  438 => 147,  435 => 146,  433 => 145,  427 => 143,  424 => 142,  419 => 138,  417 => 137,  411 => 134,  409 => 133,  406 => 132,  399 => 128,  393 => 127,  389 => 125,  387 => 124,  385 => 122,  383 => 121,  381 => 120,  373 => 119,  371 => 118,  368 => 117,  359 => 109,  354 => 107,  350 => 105,  337 => 95,  332 => 92,  329 => 91,  327 => 90,  325 => 88,  323 => 87,  320 => 86,  316 => 83,  314 => 82,  312 => 81,  309 => 80,  305 => 77,  303 => 76,  301 => 75,  298 => 74,  294 => 71,  291 => 69,  289 => 68,  287 => 67,  284 => 65,  282 => 64,  279 => 63,  271 => 59,  264 => 55,  254 => 50,  249 => 47,  229 => 30,  224 => 27,  221 => 26,  218 => 25,  215 => 24,  209 => 19,  207 => 17,  201 => 14,  199 => 13,  196 => 12,  193 => 11,  191 => 9,  190 => 8,  189 => 7,  188 => 6,  186 => 5,  184 => 4,  181 => 3,  177 => 468,  174 => 466,  172 => 462,  169 => 461,  167 => 451,  164 => 449,  162 => 413,  159 => 412,  157 => 367,  154 => 365,  152 => 338,  149 => 337,  147 => 328,  144 => 327,  142 => 286,  139 => 285,  137 => 281,  134 => 280,  132 => 241,  129 => 240,  127 => 236,  124 => 235,  122 => 230,  120 => 215,  117 => 212,  115 => 188,  112 => 187,  109 => 185,  107 => 180,  104 => 179,  102 => 142,  99 => 141,  97 => 117,  94 => 116,  91 => 114,  89 => 86,  86 => 85,  84 => 80,  81 => 79,  79 => 74,  76 => 73,  74 => 63,  71 => 62,  69 => 24,  66 => 23,  63 => 21,  61 => 3,  58 => 2,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/form/bootstrap_4.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_4.html.twig");
    }
}
