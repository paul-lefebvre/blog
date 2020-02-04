<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_8ce38418174f1e9729a3fb20efeb49abb7dcdfb8fa5dc019b6cff34a0c09b7db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "
<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/\">Blog du CESI</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
        <!--<div class=\"row\">-->

        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Rubriques
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    ";
        // line 29
        $context["articlenbre"] = [0 => "Exemple 1", 1 => "Exemple 2", 2 => "Exemple 3"];
        // line 30
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articlenbre"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 31
            echo "                    <a class=\"dropdown-item text-secondary\" href=\"/\">";
            echo twig_escape_filter($this->env, $context["article"]);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </div>
            </li>
            <li class=\"nav-item col-6\">
                <a class=\"nav-link\" href=\"/Article/Add\">Ajout d'un article</a>
            </li>

            <li class=\"nav-item col-11\"></li>

            ";
        // line 41
        $context["connected"] = 0;
        // line 42
        echo "            ";
        if (0 === twig_compare(($context["connected"] ?? null), 1)) {
            // line 43
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["User"] ?? null), "nom", [], "any", false, false, false, 45), "html", null, true);
            echo " 
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item text-success\" href=\"/\">Panel Administrateur</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item text-danger\" href=\"/logout\">Déconnexion</a>
                    </div>
                </li>
            ";
        }
        // line 54
        echo "
            ";
        // line 55
        if (0 === twig_compare(($context["connected"] ?? null), 0)) {
            // line 56
            echo "                <li class=\"nav-item col-2\">
                  <a type=\"button\" class=\"btn btn-light btn-sm\" href=\"/Login\">Connexion</a>
                </li>

                <li class=\"nav-item col-3\">
                  <a type=\"button\" class=\"btn btn-secondary btn-sm\" href=\"/Inscription\">S'inscrire</a>
                </li>
            ";
        }
        // line 64
        echo "        </ul>

        

        <form class=\"form-inline\" method=\"post\" action=\"/Article/Search/\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\" >
            <input type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\" value=\"Rechercher\" name=\"searchSubmit\">
        </form>
    </div>

</nav>





    ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "


<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
";
        // line 90
        $this->displayBlock('javascript', $context, $blocks);
        // line 91
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "CESI BLOG";
    }

    // line 10
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 90
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 90,  191 => 80,  185 => 10,  178 => 5,  172 => 91,  170 => 90,  159 => 81,  157 => 80,  139 => 64,  129 => 56,  127 => 55,  124 => 54,  112 => 45,  108 => 43,  105 => 42,  103 => 41,  93 => 33,  84 => 31,  79 => 30,  77 => 29,  57 => 11,  55 => 10,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}CESI BLOG{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    {% block css %}{% endblock %}

<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/\">Blog du CESI</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
        <!--<div class=\"row\">-->

        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Rubriques
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    {% set articlenbre = [\"Exemple 1\", \"Exemple 2\", \"Exemple 3\"] %}
                    {% for article in articlenbre %}
                    <a class=\"dropdown-item text-secondary\" href=\"/\">{{ article|e }}</a>
                    {% endfor %}
                </div>
            </li>
            <li class=\"nav-item col-6\">
                <a class=\"nav-link\" href=\"/Article/Add\">Ajout d'un article</a>
            </li>

            <li class=\"nav-item col-11\"></li>

            {% set connected = 0 %}
            {% if connected == 1 %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {{ User.nom }} 
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item text-success\" href=\"/\">Panel Administrateur</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item text-danger\" href=\"/logout\">Déconnexion</a>
                    </div>
                </li>
            {% endif %}

            {% if connected == 0 %}
                <li class=\"nav-item col-2\">
                  <a type=\"button\" class=\"btn btn-light btn-sm\" href=\"/Login\">Connexion</a>
                </li>

                <li class=\"nav-item col-3\">
                  <a type=\"button\" class=\"btn btn-secondary btn-sm\" href=\"/Inscription\">S'inscrire</a>
                </li>
            {% endif %}
        </ul>

        

        <form class=\"form-inline\" method=\"post\" action=\"/Article/Search/\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\" >
            <input type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\" value=\"Rechercher\" name=\"searchSubmit\">
        </form>
    </div>

</nav>





    {% block body %}{% endblock %}



<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
{% block javascript %}{% endblock %}
</body>
</html>
", "index.html.twig", "C:\\Users\\Ankam\\OneDrive\\Bureau\\blog\\templates\\index.html.twig");
    }
}
