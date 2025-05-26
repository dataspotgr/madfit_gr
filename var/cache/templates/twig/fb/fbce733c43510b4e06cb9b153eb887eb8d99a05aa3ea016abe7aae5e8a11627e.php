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

/* __string_template__4dc5e90741e1bcb3661968cbfaf4b5b8d91b3c351c8ed6752da55c0d2af755c5 */
class __TwigTemplate_80010994125f436fdc5467801f9063d85242f42bef1f905317a8df7f5099d603 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "new_shipment_was_created")]);
        echo "
    ";
        // line 2
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello_name", ["[name]" => twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "firstname", [], "any", false, false, false, 2)]);
        echo "
    <br />
    <br /> ";
        // line 4
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "products_were_sent");
        echo "
    <br />
    <br />

    <b>";
        // line 8
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "order_id");
        echo "</b>:&nbsp;#";
        echo twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "order_id", [], "any", false, false, false, 8);
        echo "
    <br />
    <b>";
        // line 10
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "shipping_method");
        echo "</b>:&nbsp;";
        echo twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "shipping", [], "any", false, false, false, 10);
        echo "
    <br />
    <b>";
        // line 12
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "shipment_date");
        echo "</b>:&nbsp;";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->dateFilter(twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "timestamp", [], "any", false, false, false, 12), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Appearance", [], "any", false, false, false, 12), "date_format", [], "any", false, false, false, 12) . ", ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Appearance", [], "any", false, false, false, 12), "time_format", [], "any", false, false, false, 12)));
        echo "
    <br /> ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "carrier_info", [], "any", false, false, false, 13)) {
            // line 14
            echo "    <b>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "carrier");
            echo "</b>:&nbsp;";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "carrier_info", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14);
            echo "
    <br /> ";
        }
        // line 15
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "tracking_number", [], "any", false, false, false, 15)) {
            // line 16
            echo "    <b>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "tracking_number");
            echo "</b>:&nbsp; ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "carrier_info", [], "any", false, false, false, 16), "tracking_url", [], "any", false, false, false, 16)) {
                // line 17
                echo "    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "carrier_info", [], "any", false, false, false, 17), "tracking_url", [], "any", false, false, false, 17);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "tracking_number", [], "any", false, false, false, 17);
                echo "</a> ";
            } else {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "tracking_number", [], "any", false, false, false, 17);
                echo " ";
            }
            // line 18
            echo "    <br />
    <br /> ";
        }
        // line 19
        echo " ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "carrier_info", [], "any", false, false, false, 19), "info", [], "any", false, false, false, 19);
        echo "

    <b>";
        // line 21
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "products");
        echo ":</b>
    <p>
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "products", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["hash"] => $context["amount"]) {
            echo " ";
            if (($context["amount"] > 0)) {
                echo " ";
                echo $context["amount"];
                echo "<span dir=\"{\$language_direction}\">&nbsp;x&nbsp;</span>";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "products", [], "any", false, false, false, 23)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["hash"]] ?? null) : null), "product", [], "any", false, false, false, 23);
                echo "
      <br /> ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "products", [], "any", false, false, false, 24)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["hash"]] ?? null) : null), "product_options", [], "any", false, false, false, 24)) {
                    echo " ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "products", [], "any", false, false, false, 24)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["hash"]] ?? null) : null), "product_options", [], "any", false, false, false, 24));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "option_name", [], "any", false, false, false, 24);
                        echo ":&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "variant_name", [], "any", false, false, false, 24);
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 24)) {
                            echo ", ";
                        }
                        echo " ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "      <br /> ";
                }
                // line 26
                echo "      <br /> ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hash'], $context['amount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </p>

    ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "comments", [], "any", false, false, false, 29)) {
            // line 30
            echo "    <br />
    <br />
    <b>";
            // line 32
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "comments");
            echo "</b>: ";
            echo twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "comments", [], "any", false, false, false, 32);
            echo " ";
        }
        // line 33
        echo "
  ";
        // line 34
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__4dc5e90741e1bcb3661968cbfaf4b5b8d91b3c351c8ed6752da55c0d2af755c5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 34,  195 => 33,  189 => 32,  185 => 30,  183 => 29,  179 => 27,  171 => 26,  168 => 25,  129 => 24,  117 => 23,  112 => 21,  106 => 19,  102 => 18,  91 => 17,  86 => 16,  83 => 15,  75 => 14,  73 => 13,  67 => 12,  60 => 10,  53 => 8,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4dc5e90741e1bcb3661968cbfaf4b5b8d91b3c351c8ed6752da55c0d2af755c5", "");
    }
}
