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

/* Article/view.html.twig */
class __TwigTemplate_a17be18dad7e8424dd98331ba00e63b7d68a904b4db7565f9ac2590e178fb125 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - View ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"jumbotron\">
    <h2 class=\"display-3\"></h2>
    <hr class=\"my-4\">
    <div class=\"row\">
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_TITRE", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
        <img src=\"uploads/images/";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_IMAGEREPOSITORY", [], "any", false, false, false, 11), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_IMAGEFILENAME", [], "any", false, false, false, 11), "html", null, true);
        echo "\" class=\"rounded\" alt=\"\" width=\"300\" height=\"300\">
        <p class=\"lead\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_DESCRIPTION", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
        <hr class=\"my-4\">
        <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_AUTEUR", [], "any", false, false, false, 14), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_DATEAJOUT", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
        
        <a class=\"btn btn-secondary btn-lg\" href=\"/\" role=\"button\">Retour</a>
    </div>


</div>


";
    }

    public function getTemplateName()
    {
        return "Article/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  75 => 12,  69 => 11,  65 => 10,  59 => 6,  55 => 5,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - View {% endblock %}


{% block body %}
<div class=\"jumbotron\">
    <h2 class=\"display-3\"></h2>
    <hr class=\"my-4\">
    <div class=\"row\">
        <h1>{{ article.ART_TITRE }}</h1>
        <img src=\"uploads/images/{{ article.ART_IMAGEREPOSITORY }}/{{ article.ART_IMAGEFILENAME }}\" class=\"rounded\" alt=\"\" width=\"300\" height=\"300\">
        <p class=\"lead\">{{ article.ART_DESCRIPTION }}</p>
        <hr class=\"my-4\">
        <p>{{ article.ART_AUTEUR }} - {{ article.ART_DATEAJOUT }}</p>
        
        <a class=\"btn btn-secondary btn-lg\" href=\"/\" role=\"button\">Retour</a>
    </div>


</div>


{% endblock %}", "Article/view.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\Article\\view.html.twig");
    }
}
