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
        echo " Accueil - ";
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
            echo "            <h1 class=\"display-4 text-center\">Accueil</h1>
        ";
        }
        // line 12
        echo "    </div>
    <div class=\"container\">
        ";
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 16
            echo "            <div class=\"jumbotron\">
                <h1 class=\"display-4\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_TITRE", [], "any", false, false, false, 17), "html", null, true);
            echo "</h1>
                <img src=\"uploads/images/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_IMAGEREPOSITORY", [], "any", false, false, false, 18), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_IMAGEFILENAME", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\" width=\"300\" height=\"300\">
                <p class=\"lead\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_DESCRIPTION", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                <hr class=\"my-4\">
                <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_AUTEUR", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                <a class=\"btn btn-primary btn-lg\" href=\"\" role=\"button\">Consulter l'article</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        ";
        // line 26
        echo "

        ";
        // line 29
        echo "        
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 31
            echo "            <div class=\"row\"><div class=\"mx-auto col-9\">
            <div class=\"jumbotron\">
                <h1 class=\"display-4\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_TITRE", [], "any", false, false, false, 33), "html", null, true);
            echo "</h1>
                <img src=\"uploads/images/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_IMAGEREPOSITORY", [], "any", false, false, false, 34), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_IMAGEFILENAME", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\" width=\"300\" height=\"300\">
                <p class=\"lead\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_DESCRIPTION", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                <hr class=\"my-4\">
                <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_AUTEUR", [], "any", false, false, false, 37), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ART_DATEAJOUT", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
                <a class=\"btn btn-secondary btn-lg\" href=\"/Article/view/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ID_ARTICLE", [], "any", false, false, false, 38), "html", null, true);
            echo "\" role=\"button\">Consulter l'article</a>
            </div></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        
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
        return array (  160 => 42,  150 => 38,  144 => 37,  139 => 35,  133 => 34,  129 => 33,  125 => 31,  121 => 30,  118 => 29,  114 => 26,  112 => 25,  102 => 21,  97 => 19,  91 => 18,  87 => 17,  84 => 16,  79 => 15,  75 => 12,  71 => 10,  65 => 8,  63 => 7,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Accueil - {{ parent() }}{% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        {% if pageResultat == 1 %}
            <h1 class=\"display-4\">Résultat de la recherche : {{ searchResult }}</h1>
        {% else %}
            <h1 class=\"display-4 text-center\">Accueil</h1>
        {% endif %}
    </div>
    <div class=\"container\">
        {# ==========================================[RESULTAT DE RECHERCHE]================================================= #}
        {% for article in articleData %}
            <div class=\"jumbotron\">
                <h1 class=\"display-4\">{{ article.ART_TITRE }}</h1>
                <img src=\"uploads/images/{{ article.ART_IMAGEREPOSITORY }}/{{ article.ART_IMAGEFILENAME }}\" class=\"rounded\" alt=\"\" width=\"300\" height=\"300\">
                <p class=\"lead\">{{ article.ART_DESCRIPTION }}</p>
                <hr class=\"my-4\">
                <p>{{ article.ART_AUTEUR }}</p>
                <a class=\"btn btn-primary btn-lg\" href=\"\" role=\"button\">Consulter l'article</a>
            </div>
        {% endfor %}
        {# =================================================================================================================== #}


        {# ==========================================[AFFICHAGE DES ARTICLES]================================================= #}
        
        {% for article in articleList %}
            <div class=\"row\"><div class=\"mx-auto col-9\">
            <div class=\"jumbotron\">
                <h1 class=\"display-4\">{{ article.ART_TITRE }}</h1>
                <img src=\"uploads/images/{{ article.ART_IMAGEREPOSITORY }}/{{ article.ART_IMAGEFILENAME }}\" class=\"rounded\" alt=\"\" width=\"300\" height=\"300\">
                <p class=\"lead\">{{ article.ART_DESCRIPTION }}</p>
                <hr class=\"my-4\">
                <p>{{ article.ART_AUTEUR }} - {{ article.ART_DATEAJOUT }}</p>
                <a class=\"btn btn-secondary btn-lg\" href=\"/Article/view/{{ article.ID_ARTICLE }}\" role=\"button\">Consulter l'article</a>
            </div></div>
            </div>
        {% endfor %}
        
    </div>


{% endblock %}", "Article/list.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\Article\\list.html.twig");
    }
}
