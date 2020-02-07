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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "


    <div class=\"container-fluid mt-2\">
        <form method=\"post\" action=\"/Contact/sendMail\">
            <input type=\"text\" name=\"nom\">
            <input type=\"email\" name=\"email\">
            <textarea name=\"content\"></textarea>
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 9
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
        return array (  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


    <div class=\"container-fluid mt-2\">
        <form method=\"post\" action=\"/Contact/sendMail\">
            <input type=\"text\" name=\"nom\">
            <input type=\"email\" name=\"email\">
            <textarea name=\"content\"></textarea>
            <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
            <input type=\"submit\">
        </form>
    </div>

", "Contact/form.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\Contact\\form.html.twig");
    }
}
