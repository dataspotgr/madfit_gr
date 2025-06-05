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

/* __string_template__51cd8421687eff81a3d3f5c8e4189df3cd83d36ab0a67aaa964f638e6b287af6 */
class __TwigTemplate_23e2bef518551cb98bd1c545871822e7c51c173ca976bb83b8fa7152dfdd0daf extends \Twig\Template
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
        // line 3
        echo ($context["body"] ?? null);
        echo "

";
        // line 5
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__51cd8421687eff81a3d3f5c8e4189df3cd83d36ab0a67aaa964f638e6b287af6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__51cd8421687eff81a3d3f5c8e4189df3cd83d36ab0a67aaa964f638e6b287af6", "");
    }
}
