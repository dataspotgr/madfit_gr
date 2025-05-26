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

/* __string_template__5c9d277b0cc4afbb9aed8f800e09364c2e0de0a7ddabf64204a6439fb79e1680 */
class __TwigTemplate_a207a4a6585041ec93d619e9ef674dc297bea9c0c3080e2981157fefaa5cd8c5 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "email_marketing.email_subscribed");
    }

    public function getTemplateName()
    {
        return "__string_template__5c9d277b0cc4afbb9aed8f800e09364c2e0de0a7ddabf64204a6439fb79e1680";
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
        return new Source("", "__string_template__5c9d277b0cc4afbb9aed8f800e09364c2e0de0a7ddabf64204a6439fb79e1680", "");
    }
}
