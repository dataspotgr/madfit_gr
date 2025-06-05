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

/* __string_template__5cdf5cfebc6bcaa24c3de2e0dc9e4237d12e6314d1d1d84a4ea3c0c338bcb294 */
class __TwigTemplate_3d47a42088329bd89ea55d0d6e1cacb2209eaf3732e6ae224382c1b19428d750 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["reason"] ?? null), "action", [], "any", false, false, false, 1) == "A")) {
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "reward_points_subj_added_to", [0 => twig_get_attribute($this->env, $this->source, ($context["reason"] ?? null), "amount", [], "any", false, false, false, 1)]);
        } else {
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "reward_points_subj_subtracted_from", [0 => twig_get_attribute($this->env, $this->source, ($context["reason"] ?? null), "amount", [], "any", false, false, false, 1)]);
        }
    }

    public function getTemplateName()
    {
        return "__string_template__5cdf5cfebc6bcaa24c3de2e0dc9e4237d12e6314d1d1d84a4ea3c0c338bcb294";
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
        return new Source("", "__string_template__5cdf5cfebc6bcaa24c3de2e0dc9e4237d12e6314d1d1d84a4ea3c0c338bcb294", "");
    }
}
