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
        echo "
    <section id=\"sidebar\"> 
      <div id=\"sidebar-nav\">
      <br><br>
        <ul>
          <li><a href=\"/dashboard\"><i class=\"fa fa-desktop\"></i>Profil</a></li>
          <li><a href=\"/dashboard/categories\"><i class=\"fa fa-sitemap\"></i>Catégories</a></li>
          <li><a href=\"/dashboard/articles\"><i class=\"far fa-newspaper\"></i>Articles</a></li>  
          <li><a href=\"/listeMembre\"><i class=\"fa fa-users\"></i>Utilisateurs</a></li>
        </ul>
      </div>
</section>


    <div class=\"alert alert-secondary text-center\" role=\"alert\" style=\"margin-bottom: 0;\">Bienvenue sur votre panel M. ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_NOM", [], "any", false, false, false, 24), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "MEM_PRENOM", [], "any", false, false, false, 24), "html", null, true);
        echo "</div>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prenom</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Role</th>
        </tr>
        </thead>
        <tbody>

    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allContact"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 39
            echo "              <tr>
                <th scope=\"row\"><a href=\"\">#";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></th>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "MEM_NOM", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "MEM_PRENOM", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "MEM_EMAIL", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "ROLE", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-success\" href=\"\"><i class=\"far fa-eye\"></i></a>
                        <a class=\"btn btn-warning\" href=\"\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"\"><i class=\"far fa-trash-alt\"></i></a>
                    </div>
                    <a class=\"btn btn-secondary\" href=\"\"><i class=\"fas fa-file-download\"></i></a>

                </td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
        </tbody>
    </table>





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
        return array (  138 => 56,  120 => 44,  116 => 43,  112 => 42,  108 => 41,  104 => 40,  101 => 39,  97 => 38,  78 => 24,  62 => 10,  59 => 8,  55 => 7,  47 => 4,  36 => 1,);
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
          <li><a href=\"/dashboard\"><i class=\"fa fa-desktop\"></i>Profil</a></li>
          <li><a href=\"/dashboard/categories\"><i class=\"fa fa-sitemap\"></i>Catégories</a></li>
          <li><a href=\"/dashboard/articles\"><i class=\"far fa-newspaper\"></i>Articles</a></li>  
          <li><a href=\"/listeMembre\"><i class=\"fa fa-users\"></i>Utilisateurs</a></li>
        </ul>
      </div>
</section>


    <div class=\"alert alert-secondary text-center\" role=\"alert\" style=\"margin-bottom: 0;\">Bienvenue sur votre panel M. {{ user.MEM_NOM }} {{ user.MEM_PRENOM }}</div>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prenom</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Role</th>
        </tr>
        </thead>
        <tbody>

    {% for contact in allContact %}
              <tr>
                <th scope=\"row\"><a href=\"\">#{{ contact.id }}</a></th>
                <td>{{ contact.MEM_NOM }}</td>
                <td>{{ contact.MEM_PRENOM }}</td>
                <td>{{ contact.MEM_EMAIL }}</td>
                <td>{{ contact.ROLE }}</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-success\" href=\"\"><i class=\"far fa-eye\"></i></a>
                        <a class=\"btn btn-warning\" href=\"\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"\"><i class=\"far fa-trash-alt\"></i></a>
                    </div>
                    <a class=\"btn btn-secondary\" href=\"\"><i class=\"fas fa-file-download\"></i></a>

                </td>
            </tr>
    {% endfor %}

        </tbody>
    </table>





{% endblock %}", "Dashboard/listeMembre.html.twig", "E:\\dev\\Tp\\blog\\templates\\Dashboard\\listeMembre.html.twig");
    }
}
