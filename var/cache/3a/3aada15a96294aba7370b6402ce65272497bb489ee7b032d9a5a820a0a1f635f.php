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

/* Article/add.html.twig */
class __TwigTemplate_743d7958ecd04fdef823129017675b626b3817a3d7924a4124654da538df65b3 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout d'un article ";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
    <div class=\"container-fluid mt-2\">
        
        <h2 class=\"display-3 text-center\">Ajout d'un article</h2>

        <hr class=\"my-4\">

    <div class=\"container-fluid\">
        <form class=\"mx-auto col-6\" name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\">
                </div>
            </div>

            <div class=\"dropdown row form-group\">
                <label for=\"Categorie\" class=\"col-sm-2 col-form-label\">Rubriques : </label>
                <select class=\"dropdown btn btn-secondary dropdown-toggle\" aria-labelledby=\"dropdownMenuButton\" name=\"Categorie\">                    
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["AllCategorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 27
            echo "                        <option class=\"dropdown-item text-center text-light\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "ID_CATEGORIE", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "CAT_NOM", [], "any", false, false, false, 27), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </select>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"9\"></textarea>
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"DateAjout\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"DateAjout\" class=\"form-control disabled\" value=\"<?php (new \\DateTime())->format('Y-m-d');?>\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"article_auteur\" class=\"col-sm-2 col-form-label\">Auteur</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Auteur\" class=\"form-control\">
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
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 63
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
        return "Article/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 63,  95 => 29,  84 => 27,  80 => 26,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}

{% block title %}{{ parent() }} - Ajout d'un article {% endblock %}


{% block body %}

    <div class=\"container-fluid mt-2\">
        
        <h2 class=\"display-3 text-center\">Ajout d'un article</h2>

        <hr class=\"my-4\">

    <div class=\"container-fluid\">
        <form class=\"mx-auto col-6\" name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\">
                </div>
            </div>

            <div class=\"dropdown row form-group\">
                <label for=\"Categorie\" class=\"col-sm-2 col-form-label\">Rubriques : </label>
                <select class=\"dropdown btn btn-secondary dropdown-toggle\" aria-labelledby=\"dropdownMenuButton\" name=\"Categorie\">                    
                    {% for categorie in AllCategorie %}
                        <option class=\"dropdown-item text-center text-light\" value=\"{{ categorie.ID_CATEGORIE }}\">{{ categorie.CAT_NOM }}</option>
                    {% endfor %}
                </select>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"9\"></textarea>
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"DateAjout\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"DateAjout\" class=\"form-control disabled\" value=\"<?php (new \\DateTime())->format('Y-m-d');?>\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"article_auteur\" class=\"col-sm-2 col-form-label\">Auteur</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Auteur\" class=\"form-control\">
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
            <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
            <input type=\"submit\" class=\"btn btn-primary my-1 mx-auto text-center\">
        </form>
    </div>
</div>

{% endblock %}", "Article/add.html.twig", "E:\\dev\\Tp\\blog\\templates\\Article\\add.html.twig");
    }
}
