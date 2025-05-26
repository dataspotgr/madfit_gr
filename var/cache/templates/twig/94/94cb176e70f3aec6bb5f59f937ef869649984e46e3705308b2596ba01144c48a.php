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

/* __string_template__f2d999a2667f4944700c71752a44e201819181f86815774d3c50768fcbc53ff7 */
class __TwigTemplate_77bdb8cbc14e828c217d87a385e17625b956625d49cb0a03bfbfea89e0248a29 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "track_request_subj")]);
        echo "
    ";
        // line 2
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
        echo ",
    <br />
    <br /> ";
        // line 4
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_track_request");
        echo "
    <br />
    <br /> ";
        // line 6
        if (($context["order_id"] ?? null)) {
            echo " ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_track_view_order", ["[order]" => ($context["order_id"] ?? null)]);
            echo "
    <br />
    <a href=\"";
            // line 8
            echo ($context["url"] ?? null);
            echo "\">";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["url"] ?? null));
            echo "</a>
    <br />
    <br /> ";
        }
        // line 10
        echo " ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_track_view_all_orders");
        echo "
    <br />
    <a href=\"";
        // line 12
        echo ($context["track_all_url"] ?? null);
        echo "\">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["track_all_url"] ?? null));
        echo "</a>
    <br />
  ";
        // line 14
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__f2d999a2667f4944700c71752a44e201819181f86815774d3c50768fcbc53ff7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  72 => 12,  66 => 10,  58 => 8,  51 => 6,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f2d999a2667f4944700c71752a44e201819181f86815774d3c50768fcbc53ff7", "");
    }
}
