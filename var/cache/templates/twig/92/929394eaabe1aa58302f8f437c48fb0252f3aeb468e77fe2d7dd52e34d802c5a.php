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

/* __string_template__97ecc2a91fa737bf88ecb10442f3963e93288e8f870185dfc870a65c4c76a781 */
class __TwigTemplate_64fff9c552971a2c22f4b33b5ca51133a76f9983d21e22285048a4e7dad2fbcb extends \Twig\Template
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
    <br /> ";
        // line 4
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "edp_access_granted");
        echo "
    <br />
    <br /> <a href=\"";
        // line 6
        echo ($context["order_files_list_url"] ?? null);
        echo "\"><b>";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "view_avail_files_for_order", ["[order_id]" => twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "order_id", [], "any", false, false, false, 6)]);
        echo "</b></a>
    <br />
    <br /> ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["edp_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "files", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 10
                echo "    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["file"], "url", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, false, 10);
                echo " (";
                echo $this->extensions['Tygh\Twig\TwigCoreExtension']->filesizeFilter(twig_get_attribute($this->env, $this->source, $context["file"], "file_size", [], "any", false, false, false, 10));
                echo "&nbsp;";
                echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "bytes");
                echo ")</a>
    <br />
    <br /> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__97ecc2a91fa737bf88ecb10442f3963e93288e8f870185dfc870a65c4c76a781";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  92 => 12,  76 => 10,  71 => 9,  67 => 8,  60 => 6,  55 => 4,  52 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__97ecc2a91fa737bf88ecb10442f3963e93288e8f870185dfc870a65c4c76a781", "");
    }
}
