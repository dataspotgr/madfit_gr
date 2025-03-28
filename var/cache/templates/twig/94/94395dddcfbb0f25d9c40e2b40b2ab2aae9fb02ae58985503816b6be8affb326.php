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

/* __string_template__714642a60a16eadbfd43985883ebd815dcc75db07c58f7a01e5ff565dbd03b10 */
class __TwigTemplate_40a5f76e9be60600ae8a4b2078ae3f1fc49ccc505fc276a4de7482684e2ec2e1 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "low_stock_subj", ["[product]" => ((($context["product"] ?? null) . " #") . ($context["product_id"] ?? null))]);
    }

    public function getTemplateName()
    {
        return "__string_template__714642a60a16eadbfd43985883ebd815dcc75db07c58f7a01e5ff565dbd03b10";
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
        return new Source("", "__string_template__714642a60a16eadbfd43985883ebd815dcc75db07c58f7a01e5ff565dbd03b10", "");
    }
}
