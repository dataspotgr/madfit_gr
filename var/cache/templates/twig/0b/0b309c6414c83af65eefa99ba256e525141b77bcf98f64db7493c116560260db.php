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

/* __string_template__c47a34e340bebc0f7732de96d205940abe3fc3555ef7df6998b6b350135ff8aa */
class __TwigTemplate_7b96268e062022ad5df7cfaab644d0d2b04a56226afda45405186a04379583f2 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "order");
        echo " #";
        echo twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "order_id", [], "any", false, false, false, 1);
        echo " ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "edp_access_subj");
    }

    public function getTemplateName()
    {
        return "__string_template__c47a34e340bebc0f7732de96d205940abe3fc3555ef7df6998b6b350135ff8aa";
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
        return new Source("", "__string_template__c47a34e340bebc0f7732de96d205940abe3fc3555ef7df6998b6b350135ff8aa", "");
    }
}
