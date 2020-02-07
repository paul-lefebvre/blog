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
        echo "

<div class=\"jumbotron\">
    
    <h2 class=\"display-3\"></h2>
    <hr class=\"my-4\">
    <div class=\"row\">
    ";
        // line 13
        if ((isset($context["envoyer"]) || array_key_exists("envoyer", $context))) {
            // line 14
            echo "    
    ";
        }
        // line 16
        echo "    <p class=\"alert alert-success\">Votre mail est envoyé avec succée !</p>
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_TITRE", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
        <img src=\"uploads/images/";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_IMAGEREPOSITORY", [], "any", false, false, false, 18), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_IMAGEFILENAME", [], "any", false, false, false, 18), "html", null, true);
        echo "\" class=\"rounded\" alt=\"\" width=\"300\" height=\"300\">
        <p class=\"lead\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_DESCRIPTION", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
        <hr class=\"my-4\">
        <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_AUTEUR", [], "any", false, false, false, 21), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_DATEAJOUT", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
        
        <a class=\"btn btn-secondary btn-lg\" href=\"/\" role=\"button\">Retour</a>
    </div>


</div>
<div class = \"jumbotron\">
    <div class=\"container-fluid mt-2\">
        <form method=\"post\" action=\"/Contact/sendMail\">
        <div class=\"form-group\">
            <div class=\"form-group\">
                <label for=\"nom\">Votre Nom</label>
                <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Nom\">
            </div>
            <div class=\"form-group\">
                <label for=\"email\">Votre Email</label>
                <input type=\"email\" name=\"email\" placeholder =\"Email\" class=\"form-control\">
            
            </div>
            <div class=\"form-group\">
                <label for=\"content\">Entrer votre message</label>
                <textarea name=\"content\" placeholder=\"Ecrire ici\" class=\"form-control\"></textarea>
            </div>
             <input type=\"hidden\" name=\"token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
             <input type=\"hidden\" name=\"Titre\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ART_TITRE", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
             <input type=\"hidden\" name=\"id\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ID_ARTICLE", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
            <div>
                <input type=\"submit\" name=\"btn\" class=\"btn btn-primary\">
            </div>
        </div>
        </form>
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
        return array (  129 => 47,  125 => 46,  121 => 45,  92 => 21,  87 => 19,  81 => 18,  77 => 17,  74 => 16,  70 => 14,  68 => 13,  59 => 6,  55 => 5,  47 => 2,  36 => 1,);
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
    {% if envoyer is defined %}
    
    {%  endif %}
    <p class=\"alert alert-success\">Votre mail est envoyé avec succée !</p>
        <h1>{{ article.ART_TITRE }}</h1>
        <img src=\"uploads/images/{{ article.ART_IMAGEREPOSITORY }}/{{ article.ART_IMAGEFILENAME }}\" class=\"rounded\" alt=\"\" width=\"300\" height=\"300\">
        <p class=\"lead\">{{ article.ART_DESCRIPTION }}</p>
        <hr class=\"my-4\">
        <p>{{ article.ART_AUTEUR }} - {{ article.ART_DATEAJOUT }}</p>
        
        <a class=\"btn btn-secondary btn-lg\" href=\"/\" role=\"button\">Retour</a>
    </div>


</div>
<div class = \"jumbotron\">
    <div class=\"container-fluid mt-2\">
        <form method=\"post\" action=\"/Contact/sendMail\">
        <div class=\"form-group\">
            <div class=\"form-group\">
                <label for=\"nom\">Votre Nom</label>
                <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Nom\">
            </div>
            <div class=\"form-group\">
                <label for=\"email\">Votre Email</label>
                <input type=\"email\" name=\"email\" placeholder =\"Email\" class=\"form-control\">
            
            </div>
            <div class=\"form-group\">
                <label for=\"content\">Entrer votre message</label>
                <textarea name=\"content\" placeholder=\"Ecrire ici\" class=\"form-control\"></textarea>
            </div>
             <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
             <input type=\"hidden\" name=\"Titre\" value=\"{{ article.ART_TITRE }}\">
             <input type=\"hidden\" name=\"id\" value=\"{{ article.ID_ARTICLE }}\">
            <div>
                <input type=\"submit\" name=\"btn\" class=\"btn btn-primary\">
            </div>
        </div>
        </form>
    </div>
</div>    



{% endblock %}
", "Article/view.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\Article\\view.html.twig");
    }
}
