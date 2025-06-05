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

/* __string_template__310760964fbb7a1b0344a1062e0b6ef3e9cc2b21fbe461c6707095f3a3234cb7 */
class __TwigTemplate_3eb31943e3a14f8ff3c53ce9652ecd2d515ca1882d307c33d52afaf88a9ea882 extends \Twig\Template
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
        echo ($context["company_name"] ?? null);
        echo ": ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "email_marketing.email_subscribed_2optin");
    }

    public function getTemplateName()
    {
        return "__string_template__310760964fbb7a1b0344a1062e0b6ef3e9cc2b21fbe461c6707095f3a3234cb7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__310760964fbb7a1b0344a1062e0b6ef3e9cc2b21fbe461c6707095f3a3234cb7", "");
    }
}
