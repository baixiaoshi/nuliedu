<?php

/* admin/system/mailer.html.twig */
class __TwigTemplate_14b39fa83121e1bd462455d1b73b92af126262e901808bf5b66046c7a0b539f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/mailer.html.twig", 1);
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
        // line 2
        $context["script_controller"] = "system/mailer";
        // line 3
        $context["script_arguments"] = array("registerEmailVerified" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.email_enabled", "closed"));
        // line 4
        $context["menu"] = "admin_setting_mailer";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isTrial()) {
            // line 7
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        <p style = \"text-align:center;font-size:16px\">";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.is_trial.tips");
            echo "
          <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
          BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'});
        </script>
        </br>
      </div>
    </div>
  ";
        } else {
            // line 25
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
            echo "
    <form class=\"form-horizontal\" method=\"post\" id=\"mailer-form\" ";
            // line 26
            echo "novalidate data-user-setting=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_auth");
            echo "\">
      ";
            // line 27
            if ((($context["status"] ?? null) == "cloud_email_crm")) {
                // line 28
                echo "        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label >";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.cloud_email_crm"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 mts\">
            <span class=\"text-success\">";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.cloud_email_crm.status.open"), "html", null, true);
                echo "</span>
            <p class=\"help-block\">";
                // line 34
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.cloud_email_crm.status.help_block", array("%url%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_email")));
                echo "</p>
          </div>
        </div>
      ";
            } else {
                // line 38
                echo "        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label>";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.cloud_email_crm"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 mts\">
            <a href=\"";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_email");
                echo "\" class=\"prl\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.use_cloud_email_crm"), "html", null, true);
                echo "</a>
            <a href=\"http://open.edusoho.com/show/cloud/email\" target=\"_blank\">";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.understand_cloud_email_crm_advantage"), "html", null, true);
                echo "</a>
            ";
                // line 45
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.cloud_email_crm.help_block");
                echo "
          </div>
        </div>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label >";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.send_email"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            ";
                // line 53
                echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.send_email.status.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.send_email.status.closed")), $this->getAttribute(($context["mailer"] ?? null), "enabled", array()));
                echo "
            <p class=\"help-block\">";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.send_email.help_block"), "html", null, true);
                echo "</p>
          </div>
        </div>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"host\">SMTP";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.server_address"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"host\" name=\"host\" class=\"form-control\" value=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute(($context["mailer"] ?? null), "host", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">
              ";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.server_address.help_block"), "html", null, true);
                echo "
              ";
                // line 65
                if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright") == "2"))) {
                    // line 66
                    echo "                <a href=\"http://www.qiqiuyu.com/article/785\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.commonly_document"), "html", null, true);
                    echo "</a>
              ";
                }
                // line 68
                echo "            </p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"port\">";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_Port_number"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"port\" name=\"port\" class=\"form-control\" value=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute(($context["mailer"] ?? null), "port", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_Port_number.help_block"), "html", null, true);
                echo "25</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"username\" >";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_user_name"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute(($context["mailer"] ?? null), "username", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_user_name.help_block"), "html", null, true);
                echo "abc@mail.com</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"password\" >";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_password"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" value=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute(($context["mailer"] ?? null), "password", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_password.help_block"), "html", null, true);
                echo "</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"from\" >";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.senders_email_address"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"from\" name=\"from\" class=\"form-control\" value=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute(($context["mailer"] ?? null), "from", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.senders_email_address.help_block"), "html", null, true);
                echo "abc@mail.com</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"name\" >";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.senders_name"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute(($context["mailer"] ?? null), "name", array()), "html", null, true);
                echo "\">
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\"></div>
          <div class=\"controls col-md-8\">
            <button type=\"submit\" class=\"btn btn-primary\">";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
                echo "</button>
            ";
                // line 125
                if ($this->getAttribute(($context["mailer"] ?? null), "enabled", array())) {
                    // line 126
                    echo "              <a class=\"btn btn-primary js-self-test\" data-url=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mailer_test");
                    echo "\" href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.verify"), "html", null, true);
                    echo "</a>
              <div class=\"mtl ptm\">
                <div class=\"alert alert-info\" role=\"alert\">
                  ";
                    // line 129
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.verifcation.tips"), "html", null, true);
                    echo "
                </div>
              </div>
            ";
                }
                // line 133
                echo "          </div>
        </div>
      ";
            }
            // line 136
            echo "      <input type=\"hidden\" name=\"email-setting-status\" value=\"";
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo "\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        }
    }

    public function getTemplateName()
    {
        return "admin/system/mailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 137,  296 => 136,  291 => 133,  284 => 129,  275 => 126,  273 => 125,  269 => 124,  259 => 117,  253 => 114,  244 => 108,  240 => 107,  234 => 104,  225 => 98,  221 => 97,  215 => 94,  206 => 88,  202 => 87,  196 => 84,  187 => 78,  183 => 77,  177 => 74,  169 => 68,  163 => 66,  161 => 65,  157 => 64,  152 => 62,  146 => 59,  138 => 54,  134 => 53,  128 => 50,  120 => 45,  116 => 44,  110 => 43,  104 => 40,  100 => 38,  93 => 34,  89 => 33,  83 => 30,  79 => 28,  77 => 27,  72 => 26,  67 => 25,  54 => 15,  50 => 14,  41 => 7,  38 => 6,  35 => 5,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/mailer.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/mailer.html.twig");
    }
}
