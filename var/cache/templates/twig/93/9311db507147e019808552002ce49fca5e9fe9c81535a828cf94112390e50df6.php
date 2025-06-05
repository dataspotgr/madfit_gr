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

/* __string_template__81eb4144e75dd3b6a814f028f8bd11312a51b64ea3b8104b0bdf8b9d672d6b5a */
class __TwigTemplate_617c20812314ad81519b5a8442e186f4409da128893e1d628625b0bcf038818f extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 2
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "email_marketing.text_email_subscribed", ["[href]" => ($context["url"] ?? null)]);
        echo "
";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__81eb4144e75dd3b6a814f028f8bd11312a51b64ea3b8104b0bdf8b9d672d6b5a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__81eb4144e75dd3b6a814f028f8bd11312a51b64ea3b8104b0bdf8b9d672d6b5a", "");
    }
}
