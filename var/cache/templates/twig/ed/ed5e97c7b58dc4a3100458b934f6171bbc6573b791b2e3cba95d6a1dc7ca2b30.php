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

/* __string_template__ff7ce889a6ba687b86afc676d8f91613a01938c614b4f4882b1de7e85aa7f69a */
class __TwigTemplate_4a68f0353e5fe7bf36c34754f1b6349e946e4f1068444b476c38960b2cf25763 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "change_order_status_d_subj", ["[order]" => twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "order_id", [], "any", false, false, false, 1)]);
    }

    public function getTemplateName()
    {
        return "__string_template__ff7ce889a6ba687b86afc676d8f91613a01938c614b4f4882b1de7e85aa7f69a";
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
        return new Source("", "__string_template__ff7ce889a6ba687b86afc676d8f91613a01938c614b4f4882b1de7e85aa7f69a", "");
    }
}
