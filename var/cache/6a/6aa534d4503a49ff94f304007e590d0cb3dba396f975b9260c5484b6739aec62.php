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
class __TwigTemplate_ae898f5f2e32a27050afe1a03a8dc19c9adac5bdefc2430b76207ea58e1c175d extends Template
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
            echo "            <h1 class=\"display-4 text-center\">Articles</h1>
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 17), "html", null, true);
            echo "</h1>
                <p class=\"lead\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Description", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                <hr class=\"my-4\">
                <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Consulter l'article</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        ";
        // line 25
        echo "

        ";
        // line 28
        echo "        
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "            <div class=\"row\"><div class=\"mx-auto\">
            <div class=\"jumbotron\">
                <h1 class=\"display-4\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 32), "html", null, true);
            echo "</h1>
                <div class=\"\"> <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ImageRepository", [], "any", false, false, false, 33), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\" width=\"304\" height=\"236\"> </div>
                <p class=\"lead\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Description", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
                <hr class=\"my-4\">
                <p>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 36), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "DateAjout", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                <a class=\"btn btn-secondary btn-lg\" href=\"#\" role=\"button\">Consulter l'article</a>
            </div></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return array (  149 => 41,  136 => 36,  131 => 34,  127 => 33,  123 => 32,  119 => 30,  115 => 29,  112 => 28,  108 => 25,  106 => 24,  96 => 20,  91 => 18,  87 => 17,  84 => 16,  79 => 15,  75 => 12,  71 => 10,  65 => 8,  63 => 7,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
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
            <h1 class=\"display-4 text-center\">Articles</h1>
        {% endif %}
    </div>
    <div class=\"container\">
        {# ==========================================[RESULTAT DE RECHERCHE]================================================= #}
        {% for article in articleData %}
            <div class=\"jumbotron\">
                <h1 class=\"display-4\">{{ article.Titre }}</h1>
                <p class=\"lead\">{{ article.Description }}</p>
                <hr class=\"my-4\">
                <p>{{ article.Auteur }}</p>
                <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Consulter l'article</a>
            </div>
        {% endfor %}
        {# =================================================================================================================== #}


        {# ==========================================[AFFICHAGE DES ARTICLES]================================================= #}
        
        {% for article in articleList %}
            <div class=\"row\"><div class=\"mx-auto\">
            <div class=\"jumbotron\">
                <h1 class=\"display-4\">{{ article.Titre }}</h1>
                <div class=\"\"> <img src=\"{{ article.ImageRepository }}\" class=\"rounded\" alt=\"\" width=\"304\" height=\"236\"> </div>
                <p class=\"lead\">{{ article.Description }}</p>
                <hr class=\"my-4\">
                <p>{{ article.Auteur }} - {{ article.DateAjout }}</p>
                <a class=\"btn btn-secondary btn-lg\" href=\"#\" role=\"button\">Consulter l'article</a>
            </div></div>
            </div>
        {% endfor %}
        
    </div>


{% endblock %}", "Article/list.html.twig", "C:\\Users\\Ankam\\OneDrive\\Bureau\\blog\\templates\\Article\\list.html.twig");
    }
}
