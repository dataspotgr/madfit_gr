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

/* __string_template__68d4848a7af229bef0ea4b7c9bdee5ade5fea9ca956608bcd1b85178ea81f52e */
class __TwigTemplate_b9cda432e1b0519d32adef846328b711ced768ba0fdcc3eabeb891b4b6ea9ff6 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "rma_return");
        echo " #";
        echo twig_get_attribute($this->env, $this->source, ($context["return_info"] ?? null), "return_id", [], "any", false, false, false, 1);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["return_status"] ?? null), "email_subj", [], "any", false, false, false, 1);
    }

    public function getTemplateName()
    {
        return "__string_template__68d4848a7af229bef0ea4b7c9bdee5ade5fea9ca956608bcd1b85178ea81f52e";
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
        return new Source("", "__string_template__68d4848a7af229bef0ea4b7c9bdee5ade5fea9ca956608bcd1b85178ea81f52e", "");
    }
}
