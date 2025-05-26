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

/* __string_template__4d6e7a298ac21e7f7472fdb8dd331f1570978dcbbe1c38a3a05842814b9a1161 */
class __TwigTemplate_fb63cad5b426b0b0a5702b00054200011391272d1b9f0a06fba701bf6e395732 extends \Twig\Template
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
        echo ($context["subject"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__4d6e7a298ac21e7f7472fdb8dd331f1570978dcbbe1c38a3a05842814b9a1161";
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
        return new Source("", "__string_template__4d6e7a298ac21e7f7472fdb8dd331f1570978dcbbe1c38a3a05842814b9a1161", "");
    }
}
