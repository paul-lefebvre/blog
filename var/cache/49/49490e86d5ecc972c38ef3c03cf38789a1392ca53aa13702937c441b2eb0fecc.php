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

/* Article/update.html.twig */
class __TwigTemplate_40eaed5f8a0f0b938bffbd61b107b3b9db574aa7694b724af25e67f8c754aa90 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Mise à jour d'un article ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid mt-2\">
    <h2 class=\"display-3\">Mise à jour d'un article</h2>
    <hr class=\"my-4\">
    <div class=\"row\">
        <div class=\"card col-lg-4 ml\" style=\"width: 15rem;\">

            ";
        // line 12
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 12), "") && call_user_func_array($this->env->getFunction('file_exist')->getCallable(), [((("./uploads/images/" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 12)) . "/") . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 12))]))) {
            // line 13
            echo "                <img class='card-img-top' alt='Article' src='/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 13), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 13), "html", null, true);
            echo "'/>
            ";
        } else {
            // line 15
            echo "                <h6 class=\"display-4\">Pas d'image</h6>
            ";
        }
        // line 17
        echo "
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Titre", [], "any", false, false, false, 19), "html", null, true);
        echo "</h5>
                <p class=\"card-text\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Description", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
            </div>
        </div>


        <form name=\"updateArticle\" method=\"post\" class=\"col-lg-8\" enctype=\"multipart/form-data\">

            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre de l'article</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Titre", [], "any", false, false, false, 30), "html", null, true);
        echo "\" >
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"7\">";
        // line 37
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Description", [], "any", false, false, false, 37), "html", null, true));
        echo "</textarea>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"DateAjout\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"DateAjout\" class=\"form-control disabled\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "DateAjout", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Auteur\" class=\"col-sm-2 col-form-label\">Auteur</label>
                <div class=\"col-sm-10\">
                    <select name=\"Auteur\" class=\"form-control\">
                        ";
        // line 52
        $context["Auteurs"] = [0 => "Brice", 1 => "Bruno", 2 => "Fabien", 3 => "Marion", 4 => "Jean-Pierre", 5 => "Benoit", 6 => "Emmanuel", 7 => "Sylvie"];
        // line 53
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Auteurs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Auteur"]) {
            // line 54
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["Auteur"], "html", null, true);
            echo "\" ";
            if (0 === twig_compare($context["Auteur"], twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Auteur", [], "any", false, false, false, 54))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["Auteur"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </select>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"image\" class=\"col-sm-2 col-form-label\">Image de l'article</label>
                <div class=\"col-sm-10\">
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"form-control-file custom-file-input\" name=\"image\" id=\"inputFile\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\"></label>
                    </div>
                </div>
            </div>

            <input type=\"hidden\" name=\"imageAncienne\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 71), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 71), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>


</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Article/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 72,  172 => 71,  155 => 56,  140 => 54,  135 => 53,  133 => 52,  122 => 44,  112 => 37,  102 => 30,  89 => 20,  85 => 19,  81 => 17,  77 => 15,  69 => 13,  67 => 12,  59 => 6,  55 => 5,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Mise à jour d'un article {% endblock %}


{% block body %}
<div class=\"container-fluid mt-2\">
    <h2 class=\"display-3\">Mise à jour d'un article</h2>
    <hr class=\"my-4\">
    <div class=\"row\">
        <div class=\"card col-lg-4 ml\" style=\"width: 15rem;\">

            {% if article.ImageFileName != '' and    file_exist('./uploads/images/'~article.ImageRepository~'/'~article.ImageFileName) %}
                <img class='card-img-top' alt='Article' src='/uploads/images/{{ article.ImageRepository }}/{{article.ImageFileName}}'/>
            {% else %}
                <h6 class=\"display-4\">Pas d'image</h6>
            {% endif %}

            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ article.Titre }}</h5>
                <p class=\"card-text\">{{ article.Description }}</p>
            </div>
        </div>


        <form name=\"updateArticle\" method=\"post\" class=\"col-lg-8\" enctype=\"multipart/form-data\">

            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre de l'article</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\" value=\"{{ article.Titre }}\" >
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"7\">{{ article.Description | nl2br }}</textarea>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"DateAjout\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"DateAjout\" class=\"form-control disabled\" value=\"{{ article.DateAjout }}\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Auteur\" class=\"col-sm-2 col-form-label\">Auteur</label>
                <div class=\"col-sm-10\">
                    <select name=\"Auteur\" class=\"form-control\">
                        {% set Auteurs = ['Brice','Bruno','Fabien','Marion','Jean-Pierre','Benoit','Emmanuel','Sylvie'] %}
                        {% for Auteur in Auteurs %}
                            <option value=\"{{Auteur}}\" {% if Auteur == article.Auteur %}selected{% endif %}>{{ Auteur }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"image\" class=\"col-sm-2 col-form-label\">Image de l'article</label>
                <div class=\"col-sm-10\">
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"form-control-file custom-file-input\" name=\"image\" id=\"inputFile\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\"></label>
                    </div>
                </div>
            </div>

            <input type=\"hidden\" name=\"imageAncienne\" value=\"{{ article.ImageRepository }}/{{ article.ImageFileName }}\">
            <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>


</div>
</div>

{% endblock %}", "Article/update.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\Article\\update.html.twig");
    }
}
