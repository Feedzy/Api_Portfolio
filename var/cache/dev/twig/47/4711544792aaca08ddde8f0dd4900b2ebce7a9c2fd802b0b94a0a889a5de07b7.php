<?php

/* @EasyAdmin/default/includes/_select2_widget.html.twig */
class __TwigTemplate_700d535dc6afe784ebad90f504fef0f2942e99023a5de572dd5049c22ee62984 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_select2_widget.html.twig"));

        // line 1
        $context["_select2_locales"] = array(0 => "ar", 1 => "az", 2 => "bg", 3 => "ca", 4 => "cs", 5 => "da", 6 => "de", 7 => "el", 8 => "en", 9 => "es", 10 => "et", 11 => "eu", 12 => "fa", 13 => "fi", 14 => "fr", 15 => "gl", 16 => "he", 17 => "hi", 18 => "hr", 19 => "hu", 20 => "id", 21 => "is", 22 => "it", 23 => "ja", 24 => "km", 25 => "ko", 26 => "lt", 27 => "lv", 28 => "mk", 29 => "ms", 30 => "nb", 31 => "nl", 32 => "pl", 33 => "pt-BR", 34 => "pt", 35 => "ro", 36 => "ru", 37 => "sk", 38 => "sr-Cyrl", 39 => "sr", 40 => "sv", 41 => "th", 42 => "tr", 43 => "uk", 44 => "vi", 45 => "zh-CN", 46 => "zh-TW");
        // line 2
        $context["_app_language"] = twig_first($this->env, twig_split_filter($this->env, twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "locale", array()), "-")), "_"));
        // line 3
        $context["_select2_locale"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "locale", array()), (isset($context["_select2_locales"]) || array_key_exists("_select2_locales", $context) ? $context["_select2_locales"] : (function () { throw new Twig_Error_Runtime('Variable "_select2_locales" does not exist.', 3, $this->source); })()))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "request", array()), "locale", array())) : (((twig_in_filter(        // line 5
(isset($context["_app_language"]) || array_key_exists("_app_language", $context) ? $context["_app_language"] : (function () { throw new Twig_Error_Runtime('Variable "_app_language" does not exist.', 5, $this->source); })()), (isset($context["_select2_locales"]) || array_key_exists("_select2_locales", $context) ? $context["_select2_locales"] : (function () { throw new Twig_Error_Runtime('Variable "_select2_locales" does not exist.', 5, $this->source); })()))) ? ((isset($context["_app_language"]) || array_key_exists("_app_language", $context) ? $context["_app_language"] : (function () { throw new Twig_Error_Runtime('Variable "_app_language" does not exist.', 5, $this->source); })())) : ("en"))));
        // line 7
        echo "
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/easyadmin/select2/i18n/" . (isset($context["_select2_locale"]) || array_key_exists("_select2_locale", $context) ? $context["_select2_locale"] : (function () { throw new Twig_Error_Runtime('Variable "_select2_locale" does not exist.', 8, $this->source); })())) . ".js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
  \$(function() {
    // Select2 widget is only enabled for the <select> elements which
    // explicitly ask for it

    function init() {
      \$('form select[data-widget=\"select2\"]').select2({
        theme: 'bootstrap',
        language: '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["_select2_locale"]) || array_key_exists("_select2_locale", $context) ? $context["_select2_locale"] : (function () { throw new Twig_Error_Runtime('Variable "_select2_locale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "'
      });
    }

    \$(document).on('easyadmin.collection.item-added', init);
    init();
  });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_select2_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  37 => 8,  34 => 7,  32 => 5,  31 => 4,  30 => 3,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _select2_locales = ['ar', 'az', 'bg', 'ca', 'cs', 'da', 'de', 'el', 'en', 'es', 'et', 'eu', 'fa', 'fi', 'fr', 'gl', 'he', 'hi', 'hr', 'hu', 'id', 'is', 'it', 'ja', 'km', 'ko', 'lt', 'lv', 'mk', 'ms', 'nb', 'nl', 'pl', 'pt-BR', 'pt', 'ro', 'ru', 'sk', 'sr-Cyrl', 'sr', 'sv', 'th', 'tr', 'uk', 'vi', 'zh-CN', 'zh-TW'] %}
{% set _app_language = app.request.locale|split('-')|first|split('_')|first %}
{% set _select2_locale = app.request.locale in _select2_locales
    ? app.request.locale
    : _app_language in _select2_locales ? _app_language : 'en'
%}

<script src=\"{{ asset('bundles/easyadmin/select2/i18n/' ~ _select2_locale ~ '.js') }}\"></script>
<script type=\"text/javascript\">
  \$(function() {
    // Select2 widget is only enabled for the <select> elements which
    // explicitly ask for it

    function init() {
      \$('form select[data-widget=\"select2\"]').select2({
        theme: 'bootstrap',
        language: '{{ _select2_locale }}'
      });
    }

    \$(document).on('easyadmin.collection.item-added', init);
    init();
  });
</script>
", "@EasyAdmin/default/includes/_select2_widget.html.twig", "/srv/http/Api_Portfolio/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/includes/_select2_widget.html.twig");
    }
}
