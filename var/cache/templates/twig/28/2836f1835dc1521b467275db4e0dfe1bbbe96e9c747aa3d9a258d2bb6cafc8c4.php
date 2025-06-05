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

/* __string_template__c1bc02ccbef3671647af26092a4056597f14e3d6bb5ebc67a95456c006a283ad */
class __TwigTemplate_ee0e454ba9b008dc3ebf6d65ceb583f245ae03dbe1794ede06309fef71b08780 extends \Twig\Template
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


";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "firstname", [], "any", false, false, false, 4)) {
            // line 5
            echo "  ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello_name", ["[name]" => twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "firstname", [], "any", false, false, false, 5)]);
            echo "<br /><br />
";
        } else {
            // line 7
            echo "  ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
            echo ",<br /><br />
";
        }
        // line 9
        echo "
";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["return_status"] ?? null), "email_header", [], "any", false, false, false, 10);
        echo "<br /><br />

<b>";
        // line 12
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "packing_slip");
        echo ":</b><br />

";
        // line 14
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->includeDocFunction($this->env, $context, "rma_packing_slip.default", twig_get_attribute($this->env, $this->source, ($context["return_info"] ?? null), "return_id", [], "any", false, false, false, 14));
        echo "
";
        // line 15
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__c1bc02ccbef3671647af26092a4056597f14e3d6bb5ebc67a95456c006a283ad";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  70 => 14,  65 => 12,  60 => 10,  57 => 9,  51 => 7,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c1bc02ccbef3671647af26092a4056597f14e3d6bb5ebc67a95456c006a283ad", "");
    }
}
