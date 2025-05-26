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

/* __string_template__97c39512d06995c69f32c93a9913493ff9a3526950a8a91f14ce81701a2cbcf6 */
class __TwigTemplate_425be22788695cd4452952b1c18c62e5f75f89c0061e477847c5e0d9fd25438e extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        echo "

 <h1>";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 3);
        echo "</h1> ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "discount_coupon_code");
        echo ": <b>";
        echo ($context["coupon"] ?? null);
        echo "</b> ";
        echo twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "short_description", [], "any", false, false, false, 3);
        echo "<br/> ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "more_info");
        echo ": <a href=\"";
        echo ($context["url"] ?? null);
        echo "\">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["url"] ?? null));
        echo "</a>
";
        // line 4
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__97c39512d06995c69f32c93a9913493ff9a3526950a8a91f14ce81701a2cbcf6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__97c39512d06995c69f32c93a9913493ff9a3526950a8a91f14ce81701a2cbcf6", "");
    }
}
