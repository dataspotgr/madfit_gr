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

/* __string_template__ae7111c69b98f120eec65386ad2265664e4d236d637525e197dc6aec478ae34a */
class __TwigTemplate_1752c81bfaedcdb8baecaeb4bf0b0632222fee1d349b94e71874e7cc7bbadc38 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "change_order_status_c_subj", ["[order]" => twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "order_id", [], "any", false, false, false, 1)])]);
        echo "
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "firstname", [], "any", false, false, false, 2)) {
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello_name", ["[name]" => twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "firstname", [], "any", false, false, false, 2)]);
            echo " ";
        } else {
            echo " ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
            echo ",  ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "customer");
            echo " ";
        }
        // line 3
        echo "    <br />
    ";
        // line 4
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "change_order_status_default_text", ["[status]" => twig_get_attribute($this->env, $this->source, ($context["order_status"] ?? null), "description", [], "any", false, false, false, 4)]);
        echo "
    <br />
    <br /> ";
        // line 6
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->includeDocFunction($this->env, $context, "order.summary", twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "order_id", [], "any", false, false, false, 6));
        echo "
  ";
        // line 7
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__ae7111c69b98f120eec65386ad2265664e4d236d637525e197dc6aec478ae34a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  60 => 6,  55 => 4,  52 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ae7111c69b98f120eec65386ad2265664e4d236d637525e197dc6aec478ae34a", "");
    }
}
