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

/* __string_template__1a94d64fa5ea4fb13cff7e396ee8962e4917b38937e2d2b3f22758f46b1b7855 */
class __TwigTemplate_a2fa9f1fe03239ccf9482746e8955b4f2f45ca11f0eab795d40a01b049342613 extends \Twig\Template
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
        echo ($context["subject"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__1a94d64fa5ea4fb13cff7e396ee8962e4917b38937e2d2b3f22758f46b1b7855";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1a94d64fa5ea4fb13cff7e396ee8962e4917b38937e2d2b3f22758f46b1b7855", "");
    }
}
