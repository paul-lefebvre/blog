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

/* User/login.html.twig */
class __TwigTemplate_22329ba2de2cddeb768bc8fb2b19d524acce229308753c01783058d2f541fbe8 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "User/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connectez vous ";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errorlogin", [], "any", true, true, false, 6)) {
            // line 7
            echo "            <div class=\"alert alert-danger text-center\">Erreur de connexion : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errorlogin", [], "any", false, false, false, 7), "html", null, true);
            echo "</div>
        ";
        }
        // line 9
        echo "


    <div class=\"container-fluid\">
    <br><br><br><br><br><br>
        <div class=\"mx-auto col-5\">
        <h1 class=\"text-center\">Connexion</h1>
        <form method=\"post\" action=\"/Login\">
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Email</label>
                <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Mot de passe</label>
                <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
            </div>
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
            <button type=\"submit\" class=\"btn btn-secondary\">Connexion</button>
        </form>
        </div>
        <br><br><br><br><br><br><br>
    </div>
";
    }

    public function getTemplateName()
    {
        return "User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  71 => 9,  65 => 7,  63 => 6,  59 => 4,  55 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Connectez vous {% endblock %}
{% block body %}


        {% if session.errorlogin is defined %}
            <div class=\"alert alert-danger text-center\">Erreur de connexion : {{ session.errorlogin }}</div>
        {% endif %}



    <div class=\"container-fluid\">
    <br><br><br><br><br><br>
        <div class=\"mx-auto col-5\">
        <h1 class=\"text-center\">Connexion</h1>
        <form method=\"post\" action=\"/Login\">
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Email</label>
                <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Mot de passe</label>
                <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
            </div>
            <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
            <button type=\"submit\" class=\"btn btn-secondary\">Connexion</button>
        </form>
        </div>
        <br><br><br><br><br><br><br>
    </div>
{% endblock %}", "User/login.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\User\\login.html.twig");
    }
}
