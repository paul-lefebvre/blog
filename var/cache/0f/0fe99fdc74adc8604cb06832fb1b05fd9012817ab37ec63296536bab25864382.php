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

/* Dashboard/listeArticles.html.twig */
class __TwigTemplate_d681131f3a3a56a0320691927fccd27cfdc8aff514ebb12c6e01654a9f194035 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Dashboard/listeArticles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liste des articles - ";
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
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Auteur</th>
            <th scope=\"col\">Statut</th>
            <th scope=\"col\">Actions</th>
        </tr>
        </thead>
        <tbody>

    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allArticles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 60
            echo "              <tr>
                <th scope=\"row\"><a href=\"\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ID_ARTICLE", [], "any", false, false, false, 61), "html", null, true);
            echo "</a></th>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_TITRE", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_DATEAJOUT", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_AUTEUR", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>
                ";
            // line 66
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "ART_STATUT", [], "any", false, false, false, 66), 0)) {
                // line 67
                echo "                    Attente
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 68
$context["article"], "ART_STATUT", [], "any", false, false, false, 68), 1)) {
                // line 69
                echo "                    En ligne
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 70
$context["article"], "ART_STATUT", [], "any", false, false, false, 70), 2)) {
                // line 71
                echo "                    Refusé
                ";
            }
            // line 73
            echo "                </td>
                
                <td>
                    
                    <div class=\"btn-group\" role=\"group\">

                        ";
            // line 79
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "ART_STATUT", [], "any", false, false, false, 79), 0)) {
                // line 80
                echo "                        <a class=\"btn btn-success\" href=\"\" data-toggle=\"tooltip\"  title=\"Valider l'article\"><i class=\"fas fa-check-circle\"></i></a>
                        <a class=\"btn btn-warning\" href=\"\" data-toggle=\"tooltip\"  title=\"refuser l'article\"><i class=\"fas fa-times-circle\"></i></a>
                        ";
            }
            // line 83
            echo "                                                
                        
                        ";
            // line 85
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "ART_STATUT", [], "any", false, false, false, 85), 1)) {
                // line 86
                echo "                        <a class=\"btn btn-danger\" href=\"\" data-toggle=\"tooltip\"  title=\"Supprimer l'article\"><i class=\"far fa-trash-alt\"></i></a>
                        ";
            }
            // line 88
            echo "
                        ";
            // line 89
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "ART_STATUT", [], "any", false, false, false, 89), 2)) {
                // line 90
                echo "                        <a class=\"btn btn-danger\" href=\"\" data-toggle=\"tooltip\"  title=\"Supprimer l'article\"><i class=\"far fa-trash-alt\"></i></a>
                        ";
            }
            // line 92
            echo "
                    </div>

                </td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
        </tbody>
    </table>

</div>
</div>

<br><br><br>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/listeArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 98,  203 => 92,  199 => 90,  197 => 89,  194 => 88,  190 => 86,  188 => 85,  184 => 83,  179 => 80,  177 => 79,  169 => 73,  165 => 71,  163 => 70,  160 => 69,  158 => 68,  155 => 67,  153 => 66,  148 => 64,  144 => 63,  140 => 62,  136 => 61,  133 => 60,  129 => 59,  106 => 38,  101 => 35,  99 => 34,  96 => 33,  90 => 29,  88 => 28,  83 => 25,  67 => 13,  62 => 10,  59 => 8,  55 => 7,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}


{% block title %} Liste des articles - {{ parent() }}{% endblock %}


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
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Auteur</th>
            <th scope=\"col\">Statut</th>
            <th scope=\"col\">Actions</th>
        </tr>
        </thead>
        <tbody>

    {% for article in allArticles %}
              <tr>
                <th scope=\"row\"><a href=\"\">{{ article.ID_ARTICLE }}</a></th>
                <td>{{ article.ART_TITRE }}</td>
                <td>{{ article.ART_DATEAJOUT }}</td>
                <td>{{ article.ART_AUTEUR }}</td>
                <td>
                {% if article.ART_STATUT == 0 %}
                    Attente
                {% elseif article.ART_STATUT == 1 %}
                    En ligne
                {% elseif article.ART_STATUT == 2 %}
                    Refusé
                {% endif %}
                </td>
                
                <td>
                    
                    <div class=\"btn-group\" role=\"group\">

                        {% if article.ART_STATUT == 0 %}
                        <a class=\"btn btn-success\" href=\"\" data-toggle=\"tooltip\"  title=\"Valider l'article\"><i class=\"fas fa-check-circle\"></i></a>
                        <a class=\"btn btn-warning\" href=\"\" data-toggle=\"tooltip\"  title=\"refuser l'article\"><i class=\"fas fa-times-circle\"></i></a>
                        {% endif %}
                                                
                        
                        {% if article.ART_STATUT == 1 %}
                        <a class=\"btn btn-danger\" href=\"\" data-toggle=\"tooltip\"  title=\"Supprimer l'article\"><i class=\"far fa-trash-alt\"></i></a>
                        {% endif %}

                        {% if article.ART_STATUT == 2 %}
                        <a class=\"btn btn-danger\" href=\"\" data-toggle=\"tooltip\"  title=\"Supprimer l'article\"><i class=\"far fa-trash-alt\"></i></a>
                        {% endif %}

                    </div>

                </td>
            </tr>
    {% endfor %}

        </tbody>
    </table>

</div>
</div>

<br><br><br>

{% endblock %}", "Dashboard/listeArticles.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\Dashboard\\listeArticles.html.twig");
    }
}
