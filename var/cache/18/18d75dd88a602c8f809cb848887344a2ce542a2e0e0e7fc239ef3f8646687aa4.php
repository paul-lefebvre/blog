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
class __TwigTemplate_e22a61fa5d80dff0f6b2b6158b6f76033c1463aed5b7a2c963ac0990539c3845 extends Template
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
            'footer' => [$this, 'block_footer'],
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
    <link rel=\"stylesheet\" href=\"assets/css/main.css\">
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 14
        echo "
<body>

    <nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark d-flex flex-row\">

        <a class=\"navbar-brand p-2\" href=\"/\">Blog du CESI</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse d-flex\" id=\"navbarTogglerDemo02\">

            <ul class=\"navbar-nav\">


                <li class=\"nav-item dropdown p-2\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Rubriques
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        ";
        // line 35
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listCategorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 36
            echo "                        <a class=\"dropdown-item text-secondary\" href=\"/\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "CAT_NOM", [], "any", false, false, false, 36), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </div>
                </li>


                <li class=\"nav-item p-2 col-12\">
                    <a class=\"nav-link p-2\" href=\"/Article/All\">Tout les Articles</a>
                </li>


                <li class=\"nav-item p-2 col-12\"></li>




                ";
        // line 52
        if (0 === twig_compare(($context["isConnected"] ?? null), 1)) {
            // line 53
            echo "                    <li class=\"nav-item dropdown ml-auto p-2\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-user\">   </i>   ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_NOM", [], "any", false, false, false, 55), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_PRENOM", [], "any", false, false, false, 55), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item text-success\" href=\"/dashboard\">Panel</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item text-danger\" href=\"/logout\">Déconnexion</a>
                        </div>
                    </li>
                ";
        }
        // line 64
        echo "
                ";
        // line 65
        if (0 === twig_compare(($context["connected"] ?? null), 0)) {
            // line 66
            echo "                    <li class=\"nav-item ml-auto p-2\">
                        <a type=\"button\" class=\"btn btn-light btn-sm\" href=\"/Login\">Connexion</a>
                    </li>

                    <li class=\"nav-item ml-auto p-2\">
                        <a type=\"button\" class=\"btn btn-secondary btn-sm\" href=\"/Inscription\">S'inscrire</a>
                    </li>
                ";
        }
        // line 74
        echo "

            </ul>
        </div>
    </nav>





";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "

";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 131
        echo "

    <script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>

";
        // line 140
        $this->displayBlock('javascript', $context, $blocks);
        // line 142
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "CESI BLOG";
    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 84
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 88
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo " 
    <footer class=\"page-footer font-small pt-4 footer\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-6 mb-4\">

                    <!-- Form -->
                    <form class=\"form-inline\" method=\"post\" action=\"/Article/Search/\">
                        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\" >
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
                        <input type=\"submit\" class=\"btn btn-outline-light my-2 my-sm-0\" value=\"Rechercher\" name=\"searchSubmit\">
                    </form>
                    <!-- Form -->

                </div>
            </div>
        </div>

            <div class=\"footer-copyright text-center py-3\">© 2020 Copyright:
                <a href=\"/\"> BlogCesi.fr</a>
            </div>

    </footer>

    <style>
        html{
            overflow-x: hidden;
        }
        .footer {
            position: relative;
            bottom: 0;
            width: 100%;
            background: linear-gradient(-45deg, #343a40, #343a40);
            color: #b9b9b9;
        
        }
    </style>

";
    }

    // line 140
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
        return array (  258 => 140,  224 => 101,  210 => 89,  206 => 88,  200 => 84,  194 => 12,  187 => 5,  180 => 142,  178 => 140,  167 => 131,  165 => 88,  161 => 86,  159 => 84,  147 => 74,  137 => 66,  135 => 65,  132 => 64,  118 => 55,  114 => 53,  112 => 52,  96 => 38,  87 => 36,  82 => 35,  60 => 14,  58 => 12,  48 => 5,  42 => 1,);
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
    <link rel=\"stylesheet\" href=\"assets/css/main.css\">
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
{% block css %}
{% endblock %}

<body>

    <nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark d-flex flex-row\">

        <a class=\"navbar-brand p-2\" href=\"/\">Blog du CESI</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse d-flex\" id=\"navbarTogglerDemo02\">

            <ul class=\"navbar-nav\">


                <li class=\"nav-item dropdown p-2\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Rubriques
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        {#{% set articlenbre = [\"Exemple 1\", \"Exemple 2\", \"Exemple 3\"] %}#}
                        {% for categorie in listCategorie %}
                        <a class=\"dropdown-item text-secondary\" href=\"/\">{#{{ article|e }}#}{{ categorie.CAT_NOM }}</a>
                        {% endfor %}
                    </div>
                </li>


                <li class=\"nav-item p-2 col-12\">
                    <a class=\"nav-link p-2\" href=\"/Article/All\">Tout les Articles</a>
                </li>


                <li class=\"nav-item p-2 col-12\"></li>




                {% if isConnected == 1 %}
                    <li class=\"nav-item dropdown ml-auto p-2\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-user\">   </i>   {{ user.MEM_NOM }} {{ user.MEM_PRENOM }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item text-success\" href=\"/dashboard\">Panel</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item text-danger\" href=\"/logout\">Déconnexion</a>
                        </div>
                    </li>
                {% endif %}

                {% if connected == 0 %}
                    <li class=\"nav-item ml-auto p-2\">
                        <a type=\"button\" class=\"btn btn-light btn-sm\" href=\"/Login\">Connexion</a>
                    </li>

                    <li class=\"nav-item ml-auto p-2\">
                        <a type=\"button\" class=\"btn btn-secondary btn-sm\" href=\"/Inscription\">S'inscrire</a>
                    </li>
                {% endif %}


            </ul>
        </div>
    </nav>





{% block body %}
{% endblock %}


{% block footer %}
 
    <footer class=\"page-footer font-small pt-4 footer\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-6 mb-4\">

                    <!-- Form -->
                    <form class=\"form-inline\" method=\"post\" action=\"/Article/Search/\">
                        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\" >
                        <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
                        <input type=\"submit\" class=\"btn btn-outline-light my-2 my-sm-0\" value=\"Rechercher\" name=\"searchSubmit\">
                    </form>
                    <!-- Form -->

                </div>
            </div>
        </div>

            <div class=\"footer-copyright text-center py-3\">© 2020 Copyright:
                <a href=\"/\"> BlogCesi.fr</a>
            </div>

    </footer>

    <style>
        html{
            overflow-x: hidden;
        }
        .footer {
            position: relative;
            bottom: 0;
            width: 100%;
            background: linear-gradient(-45deg, #343a40, #343a40);
            color: #b9b9b9;
        
        }
    </style>

{% endblock %}


    <script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>

{% block javascript %}
{% endblock %}

</body>
</html>
", "index.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\index.html.twig");
    }
}
