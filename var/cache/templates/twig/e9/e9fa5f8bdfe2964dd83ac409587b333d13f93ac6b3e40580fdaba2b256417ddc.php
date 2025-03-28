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

/* __string_template__e52a7bd4f94ff45acc5332e64872225d04533ba997123de9515c4290c4b7756b */
class __TwigTemplate_a70ee125fde9ead58c555fde66f316e4d5d0badf60dd6edd3888e27d946f1067 extends \Twig\Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>";
        // line 7
        echo ($context["company_name"] ?? null);
        echo ": Message title</title>
  <style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      width: 100% !important;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      margin: 0;
      padding: 0;
    }

    img {
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a {
      outline: none;
    }

    a img {
      border: none;
    }

    .image_fix {
      display: block;
    }

    .message-header > td {
      padding: 10px 30px 20px 30px;
      background-color:#000;
    }

    .message-header__title {
      background-color:#efb52d;
    }

    .message-header__title > td {
      padding: 20px 30px;
    }

    .message-header__title h1 {
      font-size: 20px;
      text-transform: uppercase;
      font-weight: normal;
      color: #Fff;
    }

    .message-title > td,
    .message-body > td {
      padding: 30px;
    }

    .message-footer > td {
      padding: 20px 30px;
      background-color: #757f83;
    }

    .message-copyright > td {
      padding: 0px 30px 10px;
    }

    .message-header td,
    .message-title td,
    .message-body th, .message-body td,
    .message-footer th, .message-footer td,
    .message-copyright th, .message-copyright td {
      color: ";
        // line 78
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "font", [], "any", false, false, false, 78);
        echo ";
      font-size: ";
        // line 79
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "body_font_size", [], "any", false, false, false, 79);
        echo ";
      font-family: ";
        // line 80
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "body_font", [], "any", false, false, false, 80);
        echo ",Helvetica,Arial,sans-serif;
    }

    .message-footer {
      border-top: 1px solid ";
        // line 84
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 84);
        echo "
    }

    .message-body table th,
    .message-footer table th {
      text-transform: uppercase;
      border-bottom: 1px solid ";
        // line 90
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 90);
        echo ";
      text-align: left;
    }

    .message-body table td,
    .message-footer table td {
      padding: 5px;
    }

    .message-footer table th{
        border: none;
    }

    .message-footer td {
      color: #fff;
    }

    .footer-contact__title {
      margin: 0px;
      text-transform: uppercase;
      font-size: 16px !important;
      font-weight: bold;
      color: #fff !important;
    }

    .footer-social__title {
      margin: 0px;
      text-transform: uppercase;
      font-size: 16px !important;
      font-weight: bold;
      color: #fff !important;
    }

    .message-footer table td.footer-social td {
      padding: 0px;
      padding-right: 10px;
    }

    .email-preview{
      display:none;
      font-size:1px;
      color:#333333;
      line-height:1px;
      max-height:0px;
      max-width:0px;
      opacity:0;
      overflow:hidden;
    }

    .with-subline {
      color: ";
        // line 140
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "font", [], "any", false, false, false, 140);
        echo ";
      text-transform: uppercase;
      font-weight: bold;
      font-size: 1em;
      padding-bottom: 10px;
      border-bottom: 1px solid #D4D4D4;
    }

    p {
      margin: 1em 0;
    }

    h1,h2,h3,h4,h5,h6 {
      color: ";
        // line 153
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "font", [], "any", false, false, false, 153);
        echo ";
    }

    h1 a,h2 a,h3 a,h4 a,h5 a,h6 a {
      color: ";
        // line 157
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "links", [], "any", false, false, false, 157);
        echo ";
    }

    h1 a:active,h2 a:active,h3 a:active,h4 a:active,h5 a:active,h6 a:active {
      color: red;
    }

    h1 a:visited,h2 a:visited,h3 a:visited,h4 a:visited,h5 a:visited,h6 a:visited {
      color: purple;
    }

    table td,
    table th {
      border-collapse: collapse;
    }

    table {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    address {
      margin: 0px;
    }

    .content-wrapper {
      border: 1px solid ";
        // line 184
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 184);
        echo ";
      background-color: ";
        // line 185
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "general_bg_color", [], "any", false, false, false, 185);
        echo ";
    }

    .copyright td {
      padding: 10px 0 0 0;
      padding-bottom: 0 !important;
    }

    a {
      color: ";
        // line 194
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "links", [], "any", false, false, false, 194);
        echo ";
    }

    ";
        // line 197
        if ((($context["language_direction"] ?? null) == "rtl")) {
            // line 198
            echo "
    .ty-email-footer {
      text-align: center !important;
    }

    .ty-email-footer-social-buttons {
      text-align: center !important;
    }

    .ty-email-footer-right-part {
      text-align: center !important;
      float: left !important;
    }

    .ty-email-footer-left-part {
      text-align: center !important;
      float: right !important;
    }

    ";
        }
        // line 218
        echo "
  </style>
</head>

<body>
    <style>

      @media only screen and (max-device-width: 480px){
        .content-wrapper{width: 100% !important;border: 3px solid #ccc !important; }

        .message-header > td,
        .message-title > td,
        .message-body > td,
        .message-footer > td,
        .message-copyright > td {
          padding: 10px !important;
        }

        .message-header td,
        .message-title td,
        .message-body th, .message-body td,
        .message-footer th, .message-footer td,
        .message-copyright th, .message-copyright td {
          font-size: 16px !important;
        }
      }

      @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {}

      @media only screen and (-webkit-min-device-pixel-ratio: 2) {}

      @media only screen and (-webkit-device-pixel-ratio:.75) {}

      @media only screen and (-webkit-device-pixel-ratio:1) {}

      @media only screen and (-webkit-device-pixel-ratio:1.5) {}
    </style>
  <!-- Targeting Windows Mobile -->
  <!--[if IEMobile 7]>
  <style type=\"text/css\">

  </style>
  <![endif]-->

  <!--[if gte mso 9]>
    <style>
        /* Target Outlook 2007 and 2010 */
    </style>
  <![endif]-->
  <table class=\"main-wrapper\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"";
        // line 267
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 267);
        echo "\" style=\"background-color: #fff\" dir=\"";
        echo ($context["language_direction"] ?? null);
        echo "\">
    <tr>
      <td style=\"padding: 40px 10px 40px 10px;\">
        <table class=\"content-wrapper\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"600\">
          <tr class=\"message-header\">
            <td>
              <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tr>
                  <td style=\"text-align:center\"><a href=\"";
        // line 275
        echo twig_get_attribute($this->env, $this->source, ($context["company_data"] ?? null), "company_website", [], "any", false, false, false, 275);
        echo "\"><img src=\"/madfit_gr/images/design_images/logo.png\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["company_data"] ?? null), "company_name", [], "any", false, false, false, 275);
        echo "\" width=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logos"] ?? null), "mail", [], "any", false, false, false, 275), "image", [], "any", false, false, false, 275), "image_x", [], "any", false, false, false, 275);
        echo "\" height=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logos"] ?? null), "mail", [], "any", false, false, false, 275), "image", [], "any", false, false, false, 275), "image_y", [], "any", false, false, false, 275);
        echo "\" /></a></td>
                </tr>
              </table>
            </td>
          </tr>
          ";
        // line 280
        if (($context["title"] ?? null)) {
            // line 281
            echo "          <tr class=\"message-header__title\">
            <td>
              <h1>";
            // line 283
            echo ($context["title"] ?? null);
            echo "</h1>
            </td>
          </tr>
          ";
        }
        // line 287
        echo "
          <tr class=\"message-body\">

<td>";
    }

    public function getTemplateName()
    {
        return "__string_template__e52a7bd4f94ff45acc5332e64872225d04533ba997123de9515c4290c4b7756b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 287,  379 => 283,  375 => 281,  373 => 280,  359 => 275,  346 => 267,  295 => 218,  273 => 198,  271 => 197,  265 => 194,  253 => 185,  249 => 184,  219 => 157,  212 => 153,  196 => 140,  143 => 90,  134 => 84,  127 => 80,  123 => 79,  119 => 78,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e52a7bd4f94ff45acc5332e64872225d04533ba997123de9515c4290c4b7756b", "");
    }
}
