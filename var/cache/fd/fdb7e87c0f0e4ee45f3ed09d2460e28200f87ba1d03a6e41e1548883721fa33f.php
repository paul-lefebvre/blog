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

/* Categorie/add.html.twig */
class __TwigTemplate_094a7e5b9a025af687f08a5ee8d23f0e73e62a482522ce9a88bbb34cf6d8ab58 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Categorie/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout d'une catégorie ";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
    <div class=\"container-fluid mt-2\">
        
        <h2 class=\"display-3 text-center\">Ajout d'une catégorie</h2>

        <hr class=\"my-4\">

    <div class=\"container-fluid\">
        <form class=\"mx-auto col-6\" name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group row\">
                <label for=\"name\" class=\"col-sm-2 col-form-label\">Nom</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"name\" class=\"form-control form-control-lg\">
                </div>
            </div>
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
            <input type=\"submit\" class=\"btn btn-primary my-1 mx-auto text-center\">
        </form>
    </div>
</div>




";
    }

    public function getTemplateName()
    {
        return "Categorie/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}

{% block title %}{{ parent() }} - Ajout d'une catégorie {% endblock %}


{% block body %}

    <div class=\"container-fluid mt-2\">
        
        <h2 class=\"display-3 text-center\">Ajout d'une catégorie</h2>

        <hr class=\"my-4\">

    <div class=\"container-fluid\">
        <form class=\"mx-auto col-6\" name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group row\">
                <label for=\"name\" class=\"col-sm-2 col-form-label\">Nom</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"name\" class=\"form-control form-control-lg\">
                </div>
            </div>
            <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
            <input type=\"submit\" class=\"btn btn-primary my-1 mx-auto text-center\">
        </form>
    </div>
</div>




{% endblock %}", "Categorie/add.html.twig", "C:\\Users\\Ankam\\OneDrive\\Bureau\\blog\\templates\\Categorie\\add.html.twig");
    }
}
