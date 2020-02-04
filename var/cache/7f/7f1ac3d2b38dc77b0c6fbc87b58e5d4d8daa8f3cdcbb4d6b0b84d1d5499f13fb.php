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

/* Article/list.html.twig */
class __TwigTemplate_06732359d41d7e9642469824786f8e21abe28b29bb3ad1f9e013d042309fa350 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liste des articles - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        ";
        // line 7
        if (0 === twig_compare(($context["pageResultat"] ?? null), 1)) {
            // line 8
            echo "            <h1 class=\"display-4\">Résultat de la recherche : ";
            echo twig_escape_filter($this->env, ($context["searchResult"] ?? null), "html", null, true);
            echo "</h1>
        ";
        } else {
            // line 10
            echo "            <h1 class=\"display-4\">Liste des articles</h1>
        ";
        }
        // line 12
        echo "    </div>
    <div class=\"container\">
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Auteur</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "            <tr>
                <th scope=\"row\"><a href=\"/Article/Show/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></th>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "DateAjout", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-success\" href=\"/Article/Show/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                        <a class=\"btn btn-warning\" href=\"/Article/Update/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Article/Delete/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\"><i class=\"far fa-trash-alt\"></i></a>
                    </div>
                    <a class=\"btn btn-secondary\" href=\"/Article/WriteOne/";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\"><i class=\"fas fa-file-download\"></i></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 43
            echo "            <tr>
                <th scope=\"row\"><a href=\"/Article/Show/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</a></th>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "DateAjout", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-success\" href=\"/Article/Show/";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                        <a class=\"btn btn-warning\" href=\"/Article/Update/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Article/Delete/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\"><i class=\"far fa-trash-alt\"></i></a>
                    </div>
                    <a class=\"btn btn-secondary\" href=\"/Article/WriteOne/";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\"><i class=\"fas fa-file-download\"></i></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        </tbody>
    </table>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Article/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 59,  182 => 54,  177 => 52,  173 => 51,  169 => 50,  163 => 47,  159 => 46,  155 => 45,  149 => 44,  146 => 43,  141 => 42,  130 => 37,  125 => 35,  121 => 34,  117 => 33,  111 => 30,  107 => 29,  103 => 28,  97 => 27,  94 => 26,  90 => 25,  75 => 12,  71 => 10,  65 => 8,  63 => 7,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Liste des articles - {{ parent() }}{% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        {% if pageResultat == 1 %}
            <h1 class=\"display-4\">Résultat de la recherche : {{ searchResult }}</h1>
        {% else %}
            <h1 class=\"display-4\">Liste des articles</h1>
        {% endif %}
    </div>
    <div class=\"container\">
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Auteur</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for article in articleData %}
            <tr>
                <th scope=\"row\"><a href=\"/Article/Show/{{ article.id }}\">#{{ article.id }}</a></th>
                <td>{{ article.Titre }}</td>
                <td>{{ article.Auteur }}</td>
                <td>{{ article.DateAjout | date(\"d/m/Y\") }}</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-success\" href=\"/Article/Show/{{ article.id }}\"><i class=\"far fa-eye\"></i></a>
                        <a class=\"btn btn-warning\" href=\"/Article/Update/{{ article.id }}\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Article/Delete/{{ article.id }}\"><i class=\"far fa-trash-alt\"></i></a>
                    </div>
                    <a class=\"btn btn-secondary\" href=\"/Article/WriteOne/{{ article.id }}\"><i class=\"fas fa-file-download\"></i></a>

                </td>
            </tr>
        {% endfor %}
        {% for article in articleList %}
            <tr>
                <th scope=\"row\"><a href=\"/Article/Show/{{ article.id }}\">#{{ article.id }}</a></th>
                <td>{{ article.Titre }}</td>
                <td>{{ article.Auteur }}</td>
                <td>{{ article.DateAjout | date(\"d/m/Y\") }}</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-success\" href=\"/Article/Show/{{ article.id }}\"><i class=\"far fa-eye\"></i></a>
                        <a class=\"btn btn-warning\" href=\"/Article/Update/{{ article.id }}\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Article/Delete/{{ article.id }}\"><i class=\"far fa-trash-alt\"></i></a>
                    </div>
                    <a class=\"btn btn-secondary\" href=\"/Article/WriteOne/{{ article.id }}\"><i class=\"fas fa-file-download\"></i></a>

                </td>
            </tr>
        {% endfor %}

        </tbody>
    </table>
    </div>


{% endblock %}", "Article/list.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\Article\\list.html.twig");
    }
}
