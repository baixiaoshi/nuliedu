<?php

/* admin/system/auth.html.twig */
class __TwigTemplate_c252a4bdf013bb24abeaa89575e3621d33b00fe59a1ad031a886f18a6397ead9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/auth.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_user_auth";
        // line 5
        $context["script_controller"] = "setting/auth";
        // line 6
        $context["script_arguments"] = array("emailVerified" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "emailVerified", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form  id=\"auth-form\" class=\"form-horizontal\" method=\"post\" novalidate>

  <fieldset>
    <legend>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.sign_up_settings"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.User_sign_up_type"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default ";
        // line 20
        if (($this->getAttribute(($context["auth"] ?? null), "register_mode", array()) == "email")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"email\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.email"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 21
        if (($this->getAttribute(($context["auth"] ?? null), "register_mode", array()) == "mobile")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"mobile\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.phone"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 22
        if (($this->getAttribute(($context["auth"] ?? null), "register_mode", array()) == "email_or_mobile")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"email_or_mobile\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.email_or_mobile"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 23
        if (($this->getAttribute(($context["auth"] ?? null), "register_mode", array()) == "closed")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"closed\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.closed"), "html", null, true);
        echo "</button>
        </div>
        <input type=\"hidden\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["auth"] ?? null), "register_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["auth"] ?? null), "register_mode", array()), "none")) : ("none")), "html", null, true);
        echo "\" name=\"register_mode\" />
        <div class=\"help-block\" >";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.User_sign_up_type.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    
    <div class=\"email-content ";
        // line 31
        if ((($this->getAttribute(($context["auth"] ?? null), "register_mode", array()) == "mobile") || ($this->getAttribute(($context["auth"] ?? null), "register_mode", array()) == "closed"))) {
            echo "hidden";
        }
        echo "\">
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label >";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Email_verification_sign"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
        // line 37
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("email_enabled", array("opened" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Email_verification_sign.open"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Email_verification_sign.closed")), $this->getAttribute(($context["auth"] ?? null), "email_enabled", array()));
        echo "
         <button type=\"button\" class=\"btn btn-primary btn-sm js-email-send-check hidden\"  data-url=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_email_send");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Verify_email_address_btn"), "html", null, true);
        echo "</button>
         <div class=\"alert alert-info js-email-status hidden\"  data-url=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mailer");
        echo "\"role=\"alert\" style=\"padding: 5px;margin-bottom: 0\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Verifying"), "html", null, true);
        echo "</div>
         <div class=\"help-block\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Verify_email_address_btn.help_block"), "html", null, true);
        echo "</div>
        </div>
      </div>

      <input type=\"hidden\" name=\"setting_time\"  value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.setting_time"), "html", null, true);
        echo "\" >

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_title\" >";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_title"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"email_activation_title\" name=\"email_activation_title\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["auth"] ?? null), "email_activation_title", array()), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_body\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"email_activation_body\" name=\"email_activation_body\" class=\"form-control\" rows=\"5\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["auth"] ?? null), "email_activation_body", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.Variables"), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 64
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.Nickname_of_recipient"), "html", null, true);
        echo "</li>
              <li>";
        // line 65
        echo "{{sitename}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.as_site_name"), "html", null, true);
        echo "</li>
              <li>";
        // line 66
        echo "{{siteurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.as_site_url"), "html", null, true);
        echo "</li>
              <li>";
        // line 67
        echo "{{verifyurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.as_verify_url"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection"), "html", null, true);
        echo "</label>
      </div>

      <div class=\"controls col-md-8 radios\">
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"none\" value=\"none\" ";
        // line 82
        if (((($this->getAttribute(($context["auth"] ?? null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["auth"] ?? null), "register_protective", array()), null)) : (null)) == "none")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.none"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"low\" value=\"low\" ";
        // line 85
        if (((($this->getAttribute(($context["auth"] ?? null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["auth"] ?? null), "register_protective", array()), null)) : (null)) == "low")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"middle\" value=\"middle\" ";
        // line 88
        if (((($this->getAttribute(($context["auth"] ?? null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["auth"] ?? null), "register_protective", array()), null)) : (null)) == "middle")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.middle"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"high\" value=\"high\"";
        // line 91
        if (((($this->getAttribute(($context["auth"] ?? null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["auth"] ?? null), "register_protective", array()), null)) : (null)) == "high")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.high"), "html", null, true);
        echo "
        </label>
      </div>

      <div class=\"controls col-md-8 mtl low register-help  col-md-offset-3\" ";
        // line 95
        if (((($this->getAttribute(($context["auth"] ?? null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["auth"] ?? null), "register_protective", array()), null)) : (null)) == "low")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Explanation"), "html", null, true);
        echo "
          <p class=\"mll mtm\">1：";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Verification_code"), "html", null, true);
        echo "</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl middle register-help  col-md-offset-3\" ";
        // line 102
        if (((($this->getAttribute(($context["auth"] ?? null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["auth"] ?? null), "register_protective", array()), null)) : (null)) == "middle")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Explanation"), "html", null, true);
        echo "
          <p class=\"mll mtm\">1：";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Verification_code"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">2：";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.30_times"), "html", null, true);
        echo "</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl high register-help  col-md-offset-3\" ";
        // line 110
        if (((($this->getAttribute(($context["auth"] ?? null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["auth"] ?? null), "register_protective", array()), null)) : (null)) == "high")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Explanation"), "html", null, true);
        echo "
          <p class=\"mll mtm\">1：";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Verification_code"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">2：";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.10_times"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">3：";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.sign_up_count"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\" style=\"display:none;\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.send"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 checkboxs\">
        ";
        // line 130
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->checkboxs("welcome_methods", array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.In_site_message"), "email" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.email")), $this->getAttribute(($context["auth"] ?? null), "welcome_methods", array()));
        echo "
        <div class=\"help-block\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.help_block"), "html", null, true);
        echo "。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.send"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 140
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("welcome_enabled", array("opened" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.send.closed"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.send.open")), $this->getAttribute(($context["auth"] ?? null), "welcome_enabled", array()));
        echo "
        <div class=\"help-block\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.send.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_sender\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.sender"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_sender\" name=\"welcome_sender\" class=\"form-control\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute(($context["auth"] ?? null), "welcome_sender", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.sender.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.title"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_title\" name=\"welcome_title\" class=\"form-control\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["auth"] ?? null), "welcome_title", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_body\">";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.content"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_body\" name=\"welcome_body\" class=\"form-control\" rows=\"5\">";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute(($context["auth"] ?? null), "welcome_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          <div>";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.warning.help_block"), "html", null, true);
        echo "</div>
          <div>";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.Variables"), "html", null, true);
        echo "</div>
          <ul>
            <li>";
        // line 174
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.as_recipient.help_block"), "html", null, true);
        echo "</li>
            <li>";
        // line 175
        echo "{{sitename}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.as_site_name"), "html", null, true);
        echo "</li>
            <li>";
        // line 176
        echo "{{siteurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.as_site_url"), "html", null, true);
        echo "</li>
          </ul>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings.Enable"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 190
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("user_terms", array("opened" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings.open"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings.closed")), $this->getAttribute(($context["auth"] ?? null), "user_terms", array()));
        echo "
        <div class=\"help-block\">";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings.Enable.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms_body\">";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings.details"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea class=\"form-control\" id=\"user_terms_body\" rows=\"16\" name=\"user_terms_body\" data-image-upload-url=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["auth"] ?? null), "user_terms_body", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>

  </fieldset>


  ";
        // line 207
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.username_setting"), false)) {
            // line 208
            echo "    <fieldset>
      <legend>";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Name_setting"), "html", null, true);
            echo "</legend>
      <div class=\"row form-group\">
          <div class=\"col-md-2 col-md-offset-2 control-label\">
              <label for=\"user_name\">";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Name_setting.user_name"), "html", null, true);
            echo "</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"user_name\" name=\"user_name\" class=\"form-control\" ";
            // line 215
            if ($this->getAttribute(($context["defaultSetting"] ?? null), "user_name", array())) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["defaultSetting"] ?? null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["defaultSetting"] ?? null), "user_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student"))), "html", null, true);
                echo "\" ";
            }
            echo ">
          </div>
      </div>

      <div class=\"alert alert-info deduction text-center\">
        <p><strong> ";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Name_setting.help_block"), "html", null, true);
            echo "
        </strong></p>
      </div>
    </fieldset> 
  ";
        }
        // line 225
        echo "  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name='_cloud_sms'  value= \"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "admin/system/auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 233,  550 => 232,  544 => 229,  538 => 225,  530 => 220,  518 => 215,  512 => 212,  506 => 209,  503 => 208,  501 => 207,  489 => 200,  483 => 197,  474 => 191,  470 => 190,  464 => 187,  458 => 184,  445 => 176,  439 => 175,  433 => 174,  428 => 172,  424 => 171,  419 => 169,  413 => 166,  404 => 160,  398 => 157,  389 => 151,  385 => 150,  379 => 147,  370 => 141,  366 => 140,  360 => 137,  351 => 131,  347 => 130,  341 => 127,  334 => 123,  323 => 115,  319 => 114,  315 => 113,  311 => 112,  303 => 110,  296 => 106,  292 => 105,  288 => 104,  280 => 102,  273 => 98,  269 => 97,  261 => 95,  250 => 91,  240 => 88,  230 => 85,  220 => 82,  212 => 77,  197 => 67,  191 => 66,  185 => 65,  179 => 64,  174 => 62,  169 => 60,  163 => 57,  154 => 51,  148 => 48,  141 => 44,  134 => 40,  128 => 39,  122 => 38,  118 => 37,  112 => 34,  104 => 31,  96 => 26,  92 => 25,  83 => 23,  75 => 22,  67 => 21,  59 => 20,  52 => 16,  46 => 13,  38 => 8,  35 => 7,  31 => 1,  29 => 6,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/auth.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/auth.html.twig");
    }
}
