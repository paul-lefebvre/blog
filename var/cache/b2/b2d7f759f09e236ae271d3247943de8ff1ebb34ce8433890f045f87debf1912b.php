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

/* Dashboard/dashboard.html.twig */
class __TwigTemplate_54cffb6c4bb37def7c4536a83034f03fa3d91370a304a02db98d01d2aff15031 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Dashboard/dashboard.html.twig", 1);
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
        echo "
    <section id=\"sidebar\"> 
      <div id=\"sidebar-nav\">
      <br><br>
        <ul>
          <li><a href=\"/dashboard\"><i class=\"fa fa-desktop\"></i>Mon Profil</a></li>
          ";
        // line 16
        if (0 === twig_compare(($context["role"] ?? null), "Redacteur")) {
            // line 17
            echo "          <li><a href=\"/categories\"><i class=\"fa fa-sitemap\"></i>Catégories</a></li>
          <li><a href=\"/Article/Add\"><i class=\"far fa-newspaper\"></i>Ajouter un article</a></li>  
          <li><a href=\"/dashboard/articles\"><i class=\"far fa-newspaper\"></i>Modifier un article</a></li>
          <li><a href=\"/dashboard/articles\"><i class=\"far fa-newspaper\"></i>Supprimer un article</a></li>
          ";
        }
        // line 22
        echo "          ";
        if (0 === twig_compare(($context["role"] ?? null), "Administrateur")) {
            // line 23
            echo "          <li><a href=\"/dashboard/users\"><i class=\"fa fa-users\"></i>Gérer les Utilisateurs</a></li>
          ";
        }
        // line 25
        echo "        </ul>
      </div>
    </section>


    <div class=\"alert alert-secondary text-center\" role=\"alert\" style=\"margin-bottom: 0;\">Bienvenue sur votre panel M. ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_NOM", [], "any", false, false, false, 30), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_PRENOM", [], "any", false, false, false, 30), "html", null, true);
        echo "</div>




        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





";
    }

    public function getTemplateName()
    {
        return "Dashboard/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  86 => 25,  82 => 23,  79 => 22,  72 => 17,  70 => 16,  62 => 10,  59 => 8,  55 => 7,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}


{% block title %} Dashboard - {{ parent() }}{% endblock %}


{% block body %}

    {# TEMPLATE DU MENU DASHBOARD #}

    <section id=\"sidebar\"> 
      <div id=\"sidebar-nav\">
      <br><br>
        <ul>
          <li><a href=\"/dashboard\"><i class=\"fa fa-desktop\"></i>Mon Profil</a></li>
          {% if role == \"Redacteur\" %}
          <li><a href=\"/categories\"><i class=\"fa fa-sitemap\"></i>Catégories</a></li>
          <li><a href=\"/Article/Add\"><i class=\"far fa-newspaper\"></i>Ajouter un article</a></li>  
          <li><a href=\"/dashboard/articles\"><i class=\"far fa-newspaper\"></i>Modifier un article</a></li>
          <li><a href=\"/dashboard/articles\"><i class=\"far fa-newspaper\"></i>Supprimer un article</a></li>
          {% endif %}
          {% if role == \"Administrateur\" %}
          <li><a href=\"/dashboard/users\"><i class=\"fa fa-users\"></i>Gérer les Utilisateurs</a></li>
          {% endif %}
        </ul>
      </div>
    </section>


    <div class=\"alert alert-secondary text-center\" role=\"alert\" style=\"margin-bottom: 0;\">Bienvenue sur votre panel M. {{ user.MEM_NOM }} {{ user.MEM_PRENOM }}</div>




        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





{% endblock %}", "Dashboard/dashboard.html.twig", "C:\\Users\\Ankam\\OneDrive\\Bureau\\blog\\templates\\Dashboard\\dashboard.html.twig");
    }
}
