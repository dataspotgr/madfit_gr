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

/* __string_template__f23003b7edf77887335d8a35e57e49ae44b6ffd9b19b8c82e766666cf8667601 */
class __TwigTemplate_4bfaa2fdc66f2913a5034d59d0c27072a18ec4e8abcba40855844eab7849a235 extends \Twig\Template
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
        echo ($context["company_name"] ?? null);
        echo ": ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "profile_activated");
    }

    public function getTemplateName()
    {
        return "__string_template__f23003b7edf77887335d8a35e57e49ae44b6ffd9b19b8c82e766666cf8667601";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f23003b7edf77887335d8a35e57e49ae44b6ffd9b19b8c82e766666cf8667601", "");
    }
}
