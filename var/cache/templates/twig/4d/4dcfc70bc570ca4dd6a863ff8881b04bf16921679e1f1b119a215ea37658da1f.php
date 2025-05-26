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

/* __string_template__38b3a2f786e26e23d681224fc14e56f6466fffb6b2c0347872891fa38c595a48 */
class __TwigTemplate_7c66fc3c6cfefa35f69080f8345297e60f56be06daeaaab1814dcb1d6b30d150 extends \Twig\Template
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
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "firstname", [], "any", false, false, false, 2)) {
            // line 3
            echo "  ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello_name", ["[name]" => twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "firstname", [], "any", false, false, false, 3)]);
            echo "
";
        } else {
            // line 5
            echo "  ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
            echo ",
";
        }
        // line 6
        echo "<br /><br />
";
        // line 7
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "we_would_like_to_inform");
        echo ": ";
        if ((twig_get_attribute($this->env, $this->source, ($context["reason"] ?? null), "action", [], "any", false, false, false, 7) == "A")) {
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "reward_points_subj_added_to", [0 => twig_get_attribute($this->env, $this->source, ($context["reason"] ?? null), "amount", [], "any", false, false, false, 7)]);
        } else {
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "reward_points_subj_subtracted_from", [0 => twig_get_attribute($this->env, $this->source, ($context["reason"] ?? null), "amount", [], "any", false, false, false, 7)]);
        }
        echo "<br />

<b>";
        // line 9
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "reason");
        echo ":</b><br />
";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["reason"] ?? null), "reason", [], "any", false, false, false, 10);
        echo "

";
        // line 12
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__38b3a2f786e26e23d681224fc14e56f6466fffb6b2c0347872891fa38c595a48";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  73 => 10,  69 => 9,  58 => 7,  55 => 6,  49 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__38b3a2f786e26e23d681224fc14e56f6466fffb6b2c0347872891fa38c595a48", "");
    }
}
