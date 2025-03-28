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

/* __string_template__8c7c9d14982d5d9841664625daf9054ee7dbe731db8b6a20120de2da88c2cadb */
class __TwigTemplate_e725ad3a31956cf52110b62f8a83c71805a4092df559864e60af08c4bb29948d extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "profile_deactivated");
    }

    public function getTemplateName()
    {
        return "__string_template__8c7c9d14982d5d9841664625daf9054ee7dbe731db8b6a20120de2da88c2cadb";
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
        return new Source("", "__string_template__8c7c9d14982d5d9841664625daf9054ee7dbe731db8b6a20120de2da88c2cadb", "");
    }
}
