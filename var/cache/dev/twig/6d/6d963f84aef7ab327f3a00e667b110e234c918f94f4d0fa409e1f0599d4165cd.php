<?php

/* base.html.twig */
class __TwigTemplate_31142e35e4458dc71c335dd6c8769338c2115c65d27958c691154202a5d57b75 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"gr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>SaveDocs</title>
</head>
<body>

 ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 15
        echo "
<div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper auth-page\">
        <div class=\"content-wrapper d-flex align-items-center auth auth-bg-1 theme-one\">
            <div class=\"row w-100\">
                <div class=\"col-lg-4 mx-auto\">
                    <div class=\"auto-form-wrapper\">
                        <form action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\" method=\"post\">
                            <div class=\"form-group\">
                                <label class=\"label\">Nom Utilisateur</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Nom Utilisateur\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\">
                                    <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"mdi mdi-check-circle-outline\"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"label\">Mot de Passe</label>
                                <div class=\"input-group\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"*********\" name=\"_password\" class=\"form-control\">
                                    <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"mdi mdi-check-circle-outline\"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>
                             <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                            <div class=\"form-group\">
                                <button class=\"btn btn-primary submit-btn btn-block\">Se Connecter</button>
                            </div>
                            <div class=\"form-group d-flex justify-content-between\">
                                <div class=\"form-check form-check-flat mt-0\">
                                    <label class=\"form-check-label\">Garder ma session active</label>
                                        <input type=\"checkbox\" class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\" checked />
                                    
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"text-block text-center my-3\">
                                    <span class=\"text-small font-weight-semibold\">Si n'avez pas de compte contacter l'administrateur</span>
                                </div>
                        </form>
                    </div>

                 
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 45,  64 => 26,  57 => 22,  48 => 15,  42 => 12,  39 => 11,  37 => 10,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"gr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>SaveDocs</title>
</head>
<body>

 {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey }}
        </div>
    {% endif %}

<div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper auth-page\">
        <div class=\"content-wrapper d-flex align-items-center auth auth-bg-1 theme-one\">
            <div class=\"row w-100\">
                <div class=\"col-lg-4 mx-auto\">
                    <div class=\"auto-form-wrapper\">
                        <form action=\"{{ path('connexion') }}\" method=\"post\">
                            <div class=\"form-group\">
                                <label class=\"label\">Nom Utilisateur</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Nom Utilisateur\" name=\"_username\" value=\"{{ last_username }}\">
                                    <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"mdi mdi-check-circle-outline\"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"label\">Mot de Passe</label>
                                <div class=\"input-group\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"*********\" name=\"_password\" class=\"form-control\">
                                    <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"mdi mdi-check-circle-outline\"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>
                             <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                            <div class=\"form-group\">
                                <button class=\"btn btn-primary submit-btn btn-block\">Se Connecter</button>
                            </div>
                            <div class=\"form-group d-flex justify-content-between\">
                                <div class=\"form-check form-check-flat mt-0\">
                                    <label class=\"form-check-label\">Garder ma session active</label>
                                        <input type=\"checkbox\" class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\" checked />
                                    
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"text-block text-center my-3\">
                                    <span class=\"text-small font-weight-semibold\">Si n'avez pas de compte contacter l'administrateur</span>
                                </div>
                        </form>
                    </div>

                 
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
", "base.html.twig", "/srv/http/Api_Portfolio/templates/base.html.twig");
    }
}
