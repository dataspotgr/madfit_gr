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

/* __string_template__a04ac43e05062261c57663af7c1bc43916d344efccee8072be231b1335a00568 */
class __TwigTemplate_afb78585eef2808a5cc28d169ca4a8a95d681dff32620347eabf5cf3d5d2dccc extends \Twig\Template
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
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
        echo ",<br /><br />

";
        // line 5
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_new_post_notification");
        echo "&nbsp;<b>";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, ($context["object_name"] ?? null));
        echo "</b>:&nbsp;";
        echo twig_get_attribute($this->env, $this->source, ($context["object_data"] ?? null), "description", [], "any", false, false, false, 5);
        echo "
<br /><br />
<b>";
        // line 7
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "person_name");
        echo "</b>:&nbsp;";
        echo twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "name", [], "any", false, false, false, 7);
        echo "<br />
";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "rating_value", [], "any", false, false, false, 8)) {
            // line 9
            echo "<b>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "rating");
            echo "</b>:&nbsp;";
            if ((twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "rating_value", [], "any", false, false, false, 9) == "5")) {
                echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "excellent");
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "rating_value", [], "any", false, false, false, 9) == "4")) {
                echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "very_good");
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "rating_value", [], "any", false, false, false, 9) == "3")) {
                echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "average");
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "rating_value", [], "any", false, false, false, 9) == "2")) {
                echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "fair");
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "rating_value", [], "any", false, false, false, 9) == "1")) {
                echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "poor");
            }
            // line 10
            echo "<br />
";
        }
        // line 12
        echo "
";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "message", [], "any", false, false, false, 13)) {
            // line 14
            echo "<b>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "message");
            echo "</b>:<br />
";
            // line 15
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "message", [], "any", false, false, false, 15), "html", null, true));
            echo "
<br /><br />
";
        }
        // line 18
        echo "
";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "status", [], "any", false, false, false, 19) == "N")) {
            // line 20
            echo "<b>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_approval_notice");
            echo "</b>
<br />
";
        }
        // line 23
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "view");
        echo ":<br />
<a href=\"";
        // line 24
        echo ($context["url"] ?? null);
        echo "\">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["url"] ?? null));
        echo "</a>
";
        // line 25
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__a04ac43e05062261c57663af7c1bc43916d344efccee8072be231b1335a00568";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 25,  115 => 24,  111 => 23,  104 => 20,  102 => 19,  99 => 18,  93 => 15,  88 => 14,  86 => 13,  83 => 12,  79 => 10,  64 => 9,  62 => 8,  56 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a04ac43e05062261c57663af7c1bc43916d344efccee8072be231b1335a00568", "");
    }
}
