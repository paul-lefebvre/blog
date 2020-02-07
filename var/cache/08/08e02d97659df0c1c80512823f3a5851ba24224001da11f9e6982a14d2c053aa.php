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
class __TwigTemplate_adf5e111781314e65cca1d78722f62815532b926e197f476f680f68ca5fd5b56 extends Template
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
    <link rel=\"stylesheet\" href=\"../assets/css/main.css\">
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 15
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
        // line 36
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listCategorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 37
            echo "                        <a class=\"dropdown-item text-secondary\" href=\"/\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "CAT_NOM", [], "any", false, false, false, 37), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </div>
                </li>


                <li class=\"nav-item p-2 col-12\">
                    <a class=\"nav-link p-2\" href=\"/Article/All\">Tout les Articles</a>
                </li>


                <li class=\"nav-item p-2 col-7\"></li>




                ";
        // line 53
        if (0 === twig_compare(($context["isConnected"] ?? null), 1)) {
            // line 54
            echo "                    <li class=\"nav-item dropdown ml-auto p-2\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-user\">   </i>   ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_NOM", [], "any", false, false, false, 56), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_PRENOM", [], "any", false, false, false, 56), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        ";
            // line 59
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_ACTIF", [], "any", false, false, false, 59), 1)) {
                // line 60
                echo "                            <a class=\"dropdown-item text-success\" href=\"/dashboard\">Panel</a>
                            <div class=\"dropdown-divider\"></div>
                        ";
            }
            // line 63
            echo "                            <a class=\"dropdown-item text-danger\" href=\"/logout\">Déconnexion</a>
                        </div>
                    </li>
                ";
        }
        // line 67
        echo "
                ";
        // line 68
        if (0 === twig_compare(($context["isConnected"] ?? null), 0)) {
            // line 69
            echo "                    <li class=\"nav-item ml-auto p-2\">
                        <a type=\"button\" class=\"btn btn-light btn-sm\" href=\"/Login\">Connexion</a>
                    </li>

                    <li class=\"nav-item ml-auto p-2\">
                        <a type=\"button\" class=\"btn btn-secondary btn-sm\" href=\"/Inscription\">S'inscrire</a>
                    </li>
                ";
        }
        // line 77
        echo "

            </ul>
        </div>
    </nav>





";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "

";
        // line 91
        $this->displayBlock('footer', $context, $blocks);
        // line 141
        echo "

    <script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>

";
        // line 150
        $this->displayBlock('javascript', $context, $blocks);
        // line 152
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

    // line 13
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 87
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 91
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo " 
    <footer class=\"page-footer font-small pt-4 footer\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-6 mb-4\">

                    <!-- Form -->
                    <form class=\"form-inline\" method=\"post\" action=\"/Article/Search/\">
                        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\" >
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
                        <select name=\"filtre\" class=\"form-control\">
                            <option value=\"0\">Toutes nos catégories</option>
                            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listCategorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filtre"]) {
            // line 108
            echo "                            <option value= \"1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filtre"], "CAT_NOM", [], "any", false, false, false, 108), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filtre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                        </select>
                        
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

    // line 150
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
        return array (  285 => 150,  251 => 110,  242 => 108,  238 => 107,  232 => 104,  218 => 92,  214 => 91,  208 => 87,  202 => 13,  195 => 5,  188 => 152,  186 => 150,  175 => 141,  173 => 91,  169 => 89,  167 => 87,  155 => 77,  145 => 69,  143 => 68,  140 => 67,  134 => 63,  129 => 60,  127 => 59,  119 => 56,  115 => 54,  113 => 53,  97 => 39,  88 => 37,  83 => 36,  61 => 15,  59 => 13,  48 => 5,  42 => 1,);
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
    <link rel=\"stylesheet\" href=\"../assets/css/main.css\">
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


                <li class=\"nav-item p-2 col-7\"></li>




                {% if isConnected == 1 %}
                    <li class=\"nav-item dropdown ml-auto p-2\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-user\">   </i>   {{ user.MEM_NOM }} {{ user.MEM_PRENOM }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        {% if user.MEM_ACTIF == 1 %}
                            <a class=\"dropdown-item text-success\" href=\"/dashboard\">Panel</a>
                            <div class=\"dropdown-divider\"></div>
                        {% endif %}
                            <a class=\"dropdown-item text-danger\" href=\"/logout\">Déconnexion</a>
                        </div>
                    </li>
                {% endif %}

                {% if isConnected == 0 %}
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
                        <select name=\"filtre\" class=\"form-control\">
                            <option value=\"0\">Toutes nos catégories</option>
                            {% for filtre in listCategorie %}
                            <option value= \"1\">{{ filtre.CAT_NOM }}</option>
                            {% endfor %}
                        </select>
                        
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
", "index.html.twig", "E:\\dev\\Tp\\blog\\templates\\index.html.twig");
    }
}
