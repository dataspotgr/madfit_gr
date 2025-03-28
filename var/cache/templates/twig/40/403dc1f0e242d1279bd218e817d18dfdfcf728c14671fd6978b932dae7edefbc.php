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

/* __string_template__4f8a8439cc8511bfa0f625b0bdb9b2214039378b596411ccb8be076d7ef464f5 */
class __TwigTemplate_6d3a58f93e7150bcd76fd30493608a442cad6b3a97c8d5d1dfe86a28f7dad223 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "email.one_time_password.title")]);
        echo "
    ";
        // line 2
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "email.one_time_password.message", ["[storefront_url]" => ($context["storefront_url"] ?? null), "[password]" => ($context["password"] ?? null)]);
        echo "
  ";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__4f8a8439cc8511bfa0f625b0bdb9b2214039378b596411ccb8be076d7ef464f5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4f8a8439cc8511bfa0f625b0bdb9b2214039378b596411ccb8be076d7ef464f5", "");
    }
}
