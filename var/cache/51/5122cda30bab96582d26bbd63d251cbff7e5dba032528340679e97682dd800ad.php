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

/* Contact/form.html.twig */
class __TwigTemplate_d562eb37c0ab4acaf5e8297a9fdfa2321b58a6388e2cc2035d6f51bf04a57eb5 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Contact/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Contactez nous ";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"container-fluid mt-2\">
        <form method=\"post\" action=\"/Contact/sendMail\">
            <input type=\"text\" name=\"nom\">
            <input type=\"email\" name=\"email\">
            <textarea name=\"content\"></textarea>
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
            <input type=\"submit\">
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "Contact/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  59 => 4,  55 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Contactez nous {% endblock %}
{% block body %}

    <div class=\"container-fluid mt-2\">
        <form method=\"post\" action=\"/Contact/sendMail\">
            <input type=\"text\" name=\"nom\">
            <input type=\"email\" name=\"email\">
            <textarea name=\"content\"></textarea>
            <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
            <input type=\"submit\">
        </form>
    </div>

{% endblock %}", "Contact/form.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\Contact\\form.html.twig");
    }
}
