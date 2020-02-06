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

/* User/inscription.html.twig */
class __TwigTemplate_f29adc7882057f7df3d3bfdcf7761a45c7385cb5b50cf8edf01cc0c046a8a71b extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "User/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Inscription ";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
        ";
        // line 10
        if (0 === twig_compare(($context["inscrit"] ?? null), 0)) {
            // line 11
            echo "        <div class=\"alert alert-danger text-center\" role=\"alert\">
                Erreur lors de l'inscription
        </div>
        ";
        }
        // line 15
        echo "
        <form id=\"register-form\" class=\"form\" action=\"\" method=\"POST\">
                <br>
                <h1 class=\"text-center\">inscription</h1>
                <br>

        \t<div class=\"text-center\">
                    <label for=\"nom\">Nom</label>
                    <input name=\"nom\" class=\"input-huge\" type=\"text\">
                    
                    <label for=\"prenom\">Prénom</label>
                    <input name=\"prenom\" class=\"input-huge\" type=\"text\">   
                     
                    <label for=\"email\">Email</label>
                    <input name=\"email\" class=\"input-huge\" type=\"email\">

                    <label for=\"pass\">Mot de passe</label>
                    <input name=\"pass\" class=\"input-huge\" type=\"password\">

            \t</div>
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
                <div class=\"g-recaptcha\" data-sitekey=\"6LeDttUUAAAAAEFwEIe13cCVcZQjXM8DPDq7hTEI\"></div>
        \t<div>
                    <button type=\"submit\"  name=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        \t</div>
                
        </form>
  
        <br><br><br><br><br><br><br><br><br>

";
    }

    public function getTemplateName()
    {
        return "User/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  70 => 15,  64 => 11,  62 => 10,  59 => 9,  55 => 8,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}

{% block title %}{{ parent() }} - Inscription {% endblock %}




{% block body %}

        {% if inscrit == 0 %}
        <div class=\"alert alert-danger text-center\" role=\"alert\">
                Erreur lors de l'inscription
        </div>
        {% endif %}

        <form id=\"register-form\" class=\"form\" action=\"\" method=\"POST\">
                <br>
                <h1 class=\"text-center\">inscription</h1>
                <br>

        \t<div class=\"text-center\">
                    <label for=\"nom\">Nom</label>
                    <input name=\"nom\" class=\"input-huge\" type=\"text\">
                    
                    <label for=\"prenom\">Prénom</label>
                    <input name=\"prenom\" class=\"input-huge\" type=\"text\">   
                     
                    <label for=\"email\">Email</label>
                    <input name=\"email\" class=\"input-huge\" type=\"email\">

                    <label for=\"pass\">Mot de passe</label>
                    <input name=\"pass\" class=\"input-huge\" type=\"password\">

            \t</div>
                <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
                <div class=\"g-recaptcha\" data-sitekey=\"6LeDttUUAAAAAEFwEIe13cCVcZQjXM8DPDq7hTEI\"></div>
        \t<div>
                    <button type=\"submit\"  name=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        \t</div>
                
        </form>
  
        <br><br><br><br><br><br><br><br><br>

{% endblock %}", "User/inscription.html.twig", "E:\\dev\\Tp\\blog\\templates\\User\\inscription.html.twig");
    }
}
