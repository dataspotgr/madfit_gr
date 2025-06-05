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

/* __string_template__679e989f3c10188be2fe4903a8ed54e6f7eac8f1e1a5e3f03e5af52e88576fd9 */
class __TwigTemplate_64591f4a16ed45ad6b09407ca8071d03edf1152aa1126f3b6f570ec8bec1413d extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "usergroup_disactivated")]);
        echo "
    ";
        // line 2
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_usergroup_disactivated", ["[usergroups]" => ($context["usergroups"] ?? null)]);
        echo "
  ";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__679e989f3c10188be2fe4903a8ed54e6f7eac8f1e1a5e3f03e5af52e88576fd9";
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
        return new Source("", "__string_template__679e989f3c10188be2fe4903a8ed54e6f7eac8f1e1a5e3f03e5af52e88576fd9", "");
    }
}
