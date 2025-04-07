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

/* __string_template__2988145877555d66ce7b54bcee834fc5a9df634eef45acd209824bd0f7496a25 */
class __TwigTemplate_3c9fe886382a4e81d94549208e0d60fe2e9362cd1a7472cc8191f695f48d2945 extends \Twig\Template
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
        echo "</td>

</tr>

<tr class=\"message-footer\">
<td>
<table class=\"info ty-email-footer-left-part\" width=\"250\" align=\"left\">
  <tr>
    <th class=\"footer-contact__title ty-email-footer\" style=\"text-align: center;\">
      ";
        // line 10
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "contact_information");
        echo "
    </th>
  </tr>
  <tr>
    <td class=\"ty-email-footer\" style=\"text-align: center;\">
      <address>";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["company_data"] ?? null), "company_address", [], "any", false, false, false, 15);
        echo ", ";
        echo twig_get_attribute($this->env, $this->source, ($context["company_data"] ?? null), "company_city", [], "any", false, false, false, 15);
        echo "</address>
    </td>
  </tr>
</table>

<table class=\"info ty-email-footer-right-part\" width=\"250\" align=\"right\">
  <tr>
    <th class=\"footer-social__title ty-email-footer\" style=\"text-align: center;\">
      ";
        // line 23
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "get_social");
        echo "
    </th>
  </tr>
  <tr>
    <td class=\"ty-email-footer-social-buttons footer-social\">
      <table cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
        <tr>
          <td>
            <a href=\"https://www.facebook.com/madfitgr\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/facebook.png\"></a>
          </td>
          <td>
            <a href=\"https://www.instagram.com/madfit_shop/\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/insta.png\"></a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</td>
</tr>
";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["company_data"] ?? null), "company_name", [], "any", false, false, false, 43)) {
            // line 44
            echo "<tr class=\"message-copyright\">
<td>
<table class=\"copyright\" width=\"100%\">
<tr>
  <td>
    &copy;&nbsp;";
            // line 49
            echo twig_get_attribute($this->env, $this->source, ($context["company_data"] ?? null), "company_name", [], "any", false, false, false, 49);
            echo "
  </td>
  <td align=\"right\">
    ";
            // line 52
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "customer_text_letter_footer");
            echo "
  </td>
</tr>
</table>
</td>
</tr>
";
        }
        // line 59
        echo "</table>
<!-- content-wrapper -->
</td>
</tr>
</table>
<!-- main-wrapper -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__2988145877555d66ce7b54bcee834fc5a9df634eef45acd209824bd0f7496a25";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 59,  107 => 52,  101 => 49,  94 => 44,  92 => 43,  69 => 23,  56 => 15,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2988145877555d66ce7b54bcee834fc5a9df634eef45acd209824bd0f7496a25", "");
    }
}
