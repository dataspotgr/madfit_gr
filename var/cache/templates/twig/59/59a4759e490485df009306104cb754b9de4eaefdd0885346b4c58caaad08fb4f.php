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

/* __string_template__f3cd5de87d04e68df943d24874ecb1303da8555d4333f5bba04dd83cada92750 */
class __TwigTemplate_70e3db5399a2103c644ec82fdf5f368b0dcad777009490897040b1e89558936b extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "email_marketing.confirm_subscription");
    }

    public function getTemplateName()
    {
        return "__string_template__f3cd5de87d04e68df943d24874ecb1303da8555d4333f5bba04dd83cada92750";
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
        return new Source("", "__string_template__f3cd5de87d04e68df943d24874ecb1303da8555d4333f5bba04dd83cada92750", "");
    }
}
