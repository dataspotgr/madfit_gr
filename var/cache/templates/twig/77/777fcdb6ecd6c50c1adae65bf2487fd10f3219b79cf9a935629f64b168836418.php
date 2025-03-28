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

/* __string_template__6fed4fdbe0844bdaf5b316fa46607a0ac827aa7756748aebe1a4dbf1ba05b13e */
class __TwigTemplate_533ab2fff372b62aa7a64b86501c2b29270ee3f4faf9218fe5fbb1479e45b928 extends \Twig\Template
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
        echo "<table>
<tbody>
<tr>
    <td rowspan=\"2\" style=\"padding-right: 20px; font-family: Helvetica, Arial, sans-serif;\" width=\"20%\">";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "image", [], "any", false, false, false, 4);
        echo "
    </td>
    <td style=\"vertical-align: middle; ";
        // line 6
        if ((($context["language_direction"] ?? null) == "rtl")) {
            echo "text-align: right;";
        } else {
            echo "text-align: left;";
        }
        echo "\" width=\"80%\"><span style=\"font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; \"><strong style=\"font-weight: bold;\"><a href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "product_url", [], "any", false, false, false, 6);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "name", [], "any", false, false, false, 6);
        echo "</a></strong></span>
    </td>
</tr>
<tr>
    <td style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif; ";
        // line 10
        if ((($context["language_direction"] ?? null) == "rtl")) {
            echo "text-align: right;";
        } else {
            echo "text-align: left;";
        }
        echo "\"><span style=\"font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; \">";
        if (twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "product_code", [], "any", false, false, false, 10)) {
            echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "product_code", [], "any", false, false, false, 10);
            echo "<br> ";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "options", [], "any", false, false, false, 10)) {
            echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "options", [], "any", false, false, false, 10);
        }
        echo "</span>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__6fed4fdbe0844bdaf5b316fa46607a0ac827aa7756748aebe1a4dbf1ba05b13e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6fed4fdbe0844bdaf5b316fa46607a0ac827aa7756748aebe1a4dbf1ba05b13e", "");
    }
}
