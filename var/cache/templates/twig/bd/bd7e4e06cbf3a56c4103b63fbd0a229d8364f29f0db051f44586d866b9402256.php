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

/* __string_template__378bbde4b4ba1551a4bb2cee7bee49b96933487fdfb6df72334560640800a13b */
class __TwigTemplate_e7c32c87742ca584492360e8086dbdfafcd16766da33302f1a1faa820e381ac4 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "change_order_status_i_subj", ["[order]" => twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "order_id", [], "any", false, false, false, 1)]);
    }

    public function getTemplateName()
    {
        return "__string_template__378bbde4b4ba1551a4bb2cee7bee49b96933487fdfb6df72334560640800a13b";
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
        return new Source("", "__string_template__378bbde4b4ba1551a4bb2cee7bee49b96933487fdfb6df72334560640800a13b", "");
    }
}
