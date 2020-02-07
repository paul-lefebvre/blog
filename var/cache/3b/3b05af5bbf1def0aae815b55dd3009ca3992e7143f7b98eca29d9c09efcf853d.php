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
class __TwigTemplate_cb39d95fed9abd2a6bc1fee158d63437fde110fb95cd52bf04682a23f25a60ad extends Template
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
        echo "   |   Email: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_EMAIL", [], "any", false, false, false, 13), "html", null, true);
        echo "   |   Vous possédez les privilèges d'un ";
        echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
        echo "</div>

      <section id=\"sidebar\"> 
        <div id=\"sidebar-nav\">
          <br><br>


            ";
        // line 21
        echo "
            <li><a href=\"/dashboard\"><i class=\"fa fa-desktop\"></i>Mon Profil</a></li>

            ";
        // line 24
        if ((0 === twig_compare(($context["role"] ?? null), "Redacteur") || 0 === twig_compare(($context["role"] ?? null), "Administrateur"))) {
            // line 25
            echo "            <li><a href=\"/categories\"><i class=\"fa fa-sitemap\"></i>Catégories</a></li>
            <li><a href=\"/Article/Add\"><i class=\"far fa-newspaper\"></i>Ajouter un article</a></li>  
            <li><a href=\"/dashboard/articles\"><i class=\"far fa-newspaper\"></i>Liste des articles</a></li>
            ";
        }
        // line 29
        echo "
            ";
        // line 30
        if (0 === twig_compare(($context["role"] ?? null), "Administrateur")) {
            // line 31
            echo "            <li><a href=\"/Listemembre\"><i class=\"fa fa-users\"></i class=\"text-center\">Utilisateurs</a></li>
            <li><a href=\"\"><i class=\"fa fa-desktop\"></i class=\"text-center\">Modfiier le CSS</a></li>
            <li><a href=\"/Api/Article\"><i class=\"fa fa-desktop\"></i class=\"text-center\">API</a></li>
            ";
        }
        // line 35
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
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allArticles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 57
            echo "              <tr>
                <th scope=\"row\"><a href=\"\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ID_ARTICLE", [], "any", false, false, false, 58), "html", null, true);
            echo "</a></th>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_TITRE", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_DATEAJOUT", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_AUTEUR", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>
                ";
            // line 63
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "ART_STATUT", [], "any", false, false, false, 63), 0)) {
                // line 64
                echo "                    Attente
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 65
$context["article"], "ART_STATUT", [], "any", false, false, false, 65), 1)) {
                // line 66
                echo "                    En ligne
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 67
$context["article"], "ART_STATUT", [], "any", false, false, false, 67), 2)) {
                // line 68
                echo "                    Refusé
                ";
            }
            // line 70
            echo "                </td>
                
                <td>
                    
                    <div class=\"btn-group\" role=\"group\">

                        ";
            // line 76
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "ART_STATUT", [], "any", false, false, false, 76), 0)) {
                // line 77
                echo "                        <a class=\"btn btn-success\" href=\"/validation/article/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ID_ARTICLE", [], "any", false, false, false, 77), "html", null, true);
                echo "\" data-toggle=\"tooltip\"  title=\"Valider l'article\"><i class=\"fas fa-check-circle\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Article/Delete/";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ID_ARTICLE", [], "any", false, false, false, 78), "html", null, true);
                echo "\" data-toggle=\"tooltip\"  title=\"Supprimer l'article\"><i class=\"far fa-trash-alt\"></i></a>
                        ";
            }
            // line 80
            echo "                                                
                        
                        ";
            // line 82
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "ART_STATUT", [], "any", false, false, false, 82), 1)) {
                // line 83
                echo "                        <a class=\"btn btn-secondary\" href=\"\" data-toggle=\"tooltip\"  title=\"Visionner\"><i class=\"far fa-eye\"></i></a>
                        <a class=\"btn btn-primary\" href=\"\" data-toggle=\"tooltip\"  title=\"Modifier\"><i class=\"fas fa-pencil-alt\"></i></a>
                        <a class=\"btn btn-warning\" href=\"\" data-toggle=\"tooltip\"  title=\"Change le statut\"><i class=\"fas fa-edit\"></i></a>
                        ";
            }
            // line 87
            echo "
                        ";
            // line 88
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "ART_STATUT", [], "any", false, false, false, 88), 2)) {
                // line 89
                echo "                        <a class=\"btn btn-secondary\" href=\"\" data-toggle=\"tooltip\"  title=\"Voir l'article\"><i class=\"far fa-eye\"></i></a>
                        <a class=\"btn btn-primary\" href=\"\" data-toggle=\"tooltip\"  title=\"Valider l'article\"><i class=\"fas fa-pencil-alt\"></i></a>
                        <a class=\"btn btn-secondary\" href=\"\" data-toggle=\"tooltip\"  title=\"Valider l'article\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Article/Delete/";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ID_ARTICLE", [], "any", false, false, false, 92), "html", null, true);
                echo "\" data-toggle=\"tooltip\"  title=\"Supprimer l'article\"><i class=\"far fa-trash-alt\"></i></a>
                        ";
            }
            // line 94
            echo "
                    </div>

                </td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
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
        return array (  228 => 100,  217 => 94,  212 => 92,  207 => 89,  205 => 88,  202 => 87,  196 => 83,  194 => 82,  190 => 80,  185 => 78,  180 => 77,  178 => 76,  170 => 70,  166 => 68,  164 => 67,  161 => 66,  159 => 65,  156 => 64,  154 => 63,  149 => 61,  145 => 60,  141 => 59,  137 => 58,  134 => 57,  130 => 56,  107 => 35,  101 => 31,  99 => 30,  96 => 29,  90 => 25,  88 => 24,  83 => 21,  67 => 13,  62 => 10,  59 => 8,  55 => 7,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}


{% block title %} Liste des articles - {{ parent() }}{% endblock %}


{% block body %}

    {# TEMPLATE DU MENU DASHBOARD liste des membres #}
<div class=\"container-fluid\">
    <div class=\"row d-flex flex-wrap\">

 <div class=\"alert alert-secondary text-center p-2 col-12\" role=\"alert\" style=\"margin-bottom: 0;\">Bienvenue sur votre panel M. {{ user.MEM_NOM }} {{ user.MEM_PRENOM }}   |   Email: {{ user.MEM_EMAIL }}   |   Vous possédez les privilèges d'un {{ role }}</div>

      <section id=\"sidebar\"> 
        <div id=\"sidebar-nav\">
          <br><br>


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
            <li><a href=\"/Api/Article\"><i class=\"fa fa-desktop\"></i class=\"text-center\">API</a></li>
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
                        <a class=\"btn btn-success\" href=\"/validation/article/{{ article.ID_ARTICLE }}\" data-toggle=\"tooltip\"  title=\"Valider l'article\"><i class=\"fas fa-check-circle\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Article/Delete/{{ article.ID_ARTICLE }}\" data-toggle=\"tooltip\"  title=\"Supprimer l'article\"><i class=\"far fa-trash-alt\"></i></a>
                        {% endif %}
                                                
                        
                        {% if article.ART_STATUT == 1 %}
                        <a class=\"btn btn-secondary\" href=\"\" data-toggle=\"tooltip\"  title=\"Visionner\"><i class=\"far fa-eye\"></i></a>
                        <a class=\"btn btn-primary\" href=\"\" data-toggle=\"tooltip\"  title=\"Modifier\"><i class=\"fas fa-pencil-alt\"></i></a>
                        <a class=\"btn btn-warning\" href=\"\" data-toggle=\"tooltip\"  title=\"Change le statut\"><i class=\"fas fa-edit\"></i></a>
                        {% endif %}

                        {% if article.ART_STATUT == 2 %}
                        <a class=\"btn btn-secondary\" href=\"\" data-toggle=\"tooltip\"  title=\"Voir l'article\"><i class=\"far fa-eye\"></i></a>
                        <a class=\"btn btn-primary\" href=\"\" data-toggle=\"tooltip\"  title=\"Valider l'article\"><i class=\"fas fa-pencil-alt\"></i></a>
                        <a class=\"btn btn-secondary\" href=\"\" data-toggle=\"tooltip\"  title=\"Valider l'article\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Article/Delete/{{ article.ID_ARTICLE }}\" data-toggle=\"tooltip\"  title=\"Supprimer l'article\"><i class=\"far fa-trash-alt\"></i></a>
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

{% endblock %}", "Dashboard/listeArticles.html.twig", "E:\\dev\\Tp\\blog\\templates\\Dashboard\\listeArticles.html.twig");
    }
}
