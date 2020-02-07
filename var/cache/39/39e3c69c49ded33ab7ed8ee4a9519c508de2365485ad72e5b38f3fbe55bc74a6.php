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

/* Dashboard/listeMembre.html.twig */
class __TwigTemplate_673f4af991afc2efb7d84ccd9df40c804922fe38e93c906c0d890dff31818aa9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig", "Dashboard/listeMembre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Dashboard - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    ";
        // line 10
        echo "<div class=\"container-fluid\">
    <div class=\"row d-flex flex-wrap\">

 <div class=\"alert alert-secondary text-center p-2 col-12\" role=\"alert\" style=\"margin-bottom: 0;\">Bienvenue sur votre panel M. ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_NOM", [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_PRENOM", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>


    


      <section id=\"sidebar\"> 
        <div id=\"sidebar-nav\">
          <br><br>
          <ul>

            ";
        // line 25
        echo "
            <li><a href=\"/dashboard\"><i class=\"fa fa-desktop\"></i>Mon Profil</a></li>

            ";
        // line 28
        if ((0 === twig_compare(($context["role"] ?? null), "Redacteur") || 0 === twig_compare(($context["role"] ?? null), "Administrateur"))) {
            // line 29
            echo "            <li><a href=\"/categories\"><i class=\"fa fa-sitemap\"></i>Catégories</a></li>
            <li><a href=\"/Article/Add\"><i class=\"far fa-newspaper\"></i>Ajouter un article</a></li>  
            <li><a href=\"/dashboard/articles\"><i class=\"far fa-newspaper\"></i>Liste des articles</a></li>
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if (0 === twig_compare(($context["role"] ?? null), "Administrateur")) {
            // line 35
            echo "            <li><a href=\"/Listemembre\"><i class=\"fa fa-users\"></i class=\"text-center\">Utilisateurs</a></li>
            <li><a href=\"\"><i class=\"fa fa-desktop\"></i class=\"text-center\">Modfiier le CSS</a></li>
            ";
        }
        // line 38
        echo "
          </ul>
        </div>
      </section>


   

    <table class=\"table table-striped mx-auto col-8\" style=\"margin-top: 3em;\">
        <thead>
        <tr>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prenom</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Rôle</th>
        </tr>
        </thead>
        <tbody>

    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allContact"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 59
            echo "              <tr>
                <th scope=\"row\"><a href=\"\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "ID_MEMBRE", [], "any", false, false, false, 60), "html", null, true);
            echo "</a></th>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "MEM_NOM", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "MEM_PRENOM", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "MEM_EMAIL", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>
                ";
            // line 65
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["contact"], "ROLE", [], "any", false, false, false, 65), 0)) {
                // line 66
                echo "                    Visiteur
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 67
$context["contact"], "ROLE", [], "any", false, false, false, 67), 1)) {
                // line 68
                echo "                    Rédacteur
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 69
$context["contact"], "ROLE", [], "any", false, false, false, 69), 2)) {
                // line 70
                echo "                    Administrateur
                ";
            }
            // line 72
            echo "                </td>

                <td>
                    
                    <div class=\"btn-group\" role=\"group\">

                        ";
            // line 78
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["contact"], "MEM_ACTIF", [], "any", false, false, false, 78), 0)) {
                // line 79
                echo "                        <a class=\"btn btn-success\" href=\"/validation/user/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "ID_MEMBRE", [], "any", false, false, false, 79), "html", null, true);
                echo "\" data-toggle=\"tooltip\"  title=\"Valider l'inscription\"><i class=\"fas fa-user-check\"></i></a>
                        <a class=\"btn btn-warning\" href=\"\" data-toggle=\"tooltip\"  title=\"refuser l'inscription\"><i class=\"fas fa-times-circle\"></i></a>
                        ";
            }
            // line 82
            echo "                                                
                        
                        ";
            // line 84
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["contact"], "ROLE", [], "any", false, false, false, 84), 1)) {
                // line 85
                echo "                        <a class=\"btn btn-danger\" href=\"\" data-toggle=\"tooltip\"  title=\"Supprimer l'utilisateur\"><i class=\"far fa-trash-alt\"></i></a>
                        ";
            }
            // line 87
            echo "                    </div>

                </td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
        </tbody>
    </table>

</div>
</div>



";
    }

    public function getTemplateName()
    {
        return "Dashboard/listeMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 92,  195 => 87,  191 => 85,  189 => 84,  185 => 82,  178 => 79,  176 => 78,  168 => 72,  164 => 70,  162 => 69,  159 => 68,  157 => 67,  154 => 66,  152 => 65,  147 => 63,  143 => 62,  139 => 61,  135 => 60,  132 => 59,  128 => 58,  106 => 38,  101 => 35,  99 => 34,  96 => 33,  90 => 29,  88 => 28,  83 => 25,  67 => 13,  62 => 10,  59 => 8,  55 => 7,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}


{% block title %} Dashboard - {{ parent() }}{% endblock %}


{% block body %}

    {# TEMPLATE DU MENU DASHBOARD liste des membres #}
<div class=\"container-fluid\">
    <div class=\"row d-flex flex-wrap\">

 <div class=\"alert alert-secondary text-center p-2 col-12\" role=\"alert\" style=\"margin-bottom: 0;\">Bienvenue sur votre panel M. {{ user.MEM_NOM }} {{ user.MEM_PRENOM }}</div>


    


      <section id=\"sidebar\"> 
        <div id=\"sidebar-nav\">
          <br><br>
          <ul>

            {# PRIVILEGES DANS LE DASHBOARD #}

            <li><a href=\"/dashboard\"><i class=\"fa fa-desktop\"></i>Mon Profil</a></li>

            {% if role == \"Redacteur\" or role == \"Administrateur\" %}
            <li><a href=\"/categories\"><i class=\"fa fa-sitemap\"></i>Catégories</a></li>
            <li><a href=\"/Article/Add\"><i class=\"far fa-newspaper\"></i>Ajouter un article</a></li>  
            <li><a href=\"/dashboard/articles\"><i class=\"far fa-newspaper\"></i>Liste des articles</a></li>
            {% endif %}

            {% if role == \"Administrateur\" %}
            <li><a href=\"/Listemembre\"><i class=\"fa fa-users\"></i class=\"text-center\">Utilisateurs</a></li>
            <li><a href=\"\"><i class=\"fa fa-desktop\"></i class=\"text-center\">Modfiier le CSS</a></li>
            {% endif %}

          </ul>
        </div>
      </section>


   

    <table class=\"table table-striped mx-auto col-8\" style=\"margin-top: 3em;\">
        <thead>
        <tr>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prenom</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Rôle</th>
        </tr>
        </thead>
        <tbody>

    {% for contact in allContact %}
              <tr>
                <th scope=\"row\"><a href=\"\">{{ contact.ID_MEMBRE }}</a></th>
                <td>{{ contact.MEM_NOM }}</td>
                <td>{{ contact.MEM_PRENOM }}</td>
                <td>{{ contact.MEM_EMAIL }}</td>
                <td>
                {% if contact.ROLE == 0 %}
                    Visiteur
                {% elseif contact.ROLE == 1 %}
                    Rédacteur
                {% elseif contact.ROLE == 2 %}
                    Administrateur
                {% endif %}
                </td>

                <td>
                    
                    <div class=\"btn-group\" role=\"group\">

                        {% if contact.MEM_ACTIF == 0 %}
                        <a class=\"btn btn-success\" href=\"/validation/user/{{ contact.ID_MEMBRE }}\" data-toggle=\"tooltip\"  title=\"Valider l'inscription\"><i class=\"fas fa-user-check\"></i></a>
                        <a class=\"btn btn-warning\" href=\"\" data-toggle=\"tooltip\"  title=\"refuser l'inscription\"><i class=\"fas fa-times-circle\"></i></a>
                        {% endif %}
                                                
                        
                        {% if contact.ROLE == 1 %}
                        <a class=\"btn btn-danger\" href=\"\" data-toggle=\"tooltip\"  title=\"Supprimer l'utilisateur\"><i class=\"far fa-trash-alt\"></i></a>
                        {% endif %}
                    </div>

                </td>
            </tr>
    {% endfor %}

        </tbody>
    </table>

</div>
</div>



{% endblock %}", "Dashboard/listeMembre.html.twig", "E:\\dev\\Tp\\blog\\templates\\Dashboard\\listeMembre.html.twig");
    }
}
