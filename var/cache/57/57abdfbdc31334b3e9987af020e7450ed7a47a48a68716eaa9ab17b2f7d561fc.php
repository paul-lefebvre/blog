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

/* Contact/mail.html.twig */
class __TwigTemplate_1006951e8f7116d7334bd8e1d148c3db359d9bbf4db79d651c74ab19fb62e49a extends Template
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
        echo "<html>
<head></head>
<body>
<h1>Demande de contact</h1>
<p>Bonjour ";
        // line 5
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo ", <br/>Vous nous avais contacter à propos de cette article : ";
        echo twig_escape_filter($this->env, ($context["titre"] ?? null), "html", null, true);
        echo "<br/><br/>
Voici votre message :<br/></p>
<p>
    ";
        // line 8
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "
</p>
<p>Nous vous recontacterons prochainement</p>
<p>Cordialament</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Contact/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head></head>
<body>
<h1>Demande de contact</h1>
<p>Bonjour {{ nom }}, <br/>Vous nous avais contacter à propos de cette article : {{ titre }}<br/><br/>
Voici votre message :<br/></p>
<p>
    {{ message }}
</p>
<p>Nous vous recontacterons prochainement</p>
<p>Cordialament</p>
</body>
</html>", "Contact/mail.html.twig", "C:\\Users\\samso\\Desktop\\Cours\\Projet PHP\\templates\\Contact\\mail.html.twig");
    }
}
