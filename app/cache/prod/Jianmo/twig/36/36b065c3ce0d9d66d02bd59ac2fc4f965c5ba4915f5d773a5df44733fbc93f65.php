<?php

/* admin/system/user-center.html.twig */
class __TwigTemplate_3a6b5a4a4866365771f16ccb4f2d2b7f62ca6e2163d777ed585217f82d89f713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/user-center.html.twig", 1);
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
        $context["script_controller"] = "setting/user-center";
        // line 5
        $context["menu"] = "admin_setting_user_center";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        if (($this->getAttribute(($context["setting"] ?? null), "mode", array()) != "default")) {
            // line 11
            echo "    <div class=\"page-header clearfix\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_admin_sync");
            echo "\" class=\"pull-right btn btn-link\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_center.admin_sync_btn"), "html", null, true);
            echo "</a>
    </div>
  ";
        }
        // line 14
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_center.user_center.title"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios mode-radios\">
      ";
        // line 23
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("mode", array("default" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.none"), "discuz" => "Discuz (Ucenter)"), $this->getAttribute(($context["setting"] ?? null), "mode", array()));
        echo "
      ";
        // line 24
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.uc_phpwind", "0")) {
            // line 25
            echo "      <label><input type=\"radio\" name=\"mode\" value=\"phpwind\" ";
            if (($this->getAttribute(($context["setting"] ?? null), "mode", array()) == "phpwind")) {
                echo "checked";
            }
            echo "> Phpwind</label>
      ";
        }
        // line 27
        echo "      <div class=\"help-block\">
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_center.user_center.help_block"), "html", null, true);
        echo "
      </div>
    </div>
  </div>
  <div class=\"with-discuz\" style=\"display:none;\">
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>Ucenter";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_center.Configration"), "html", null, true);
        echo "</label></div>
      <div class=\"controls col-md-8\">
        <div class=\"help-block\"><a href=\"http://www.qiqiuyu.com/course/125\" target=\"_blank\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_center.Configration.help_block"), "html", null, true);
        echo "</a></div>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_CONNECT</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_connect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_connect", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_CONNECT\" name=\"discuzConfig[uc_connect]\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_DBHOST</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbhost", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbhost", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_DBHOST\" name=\"discuzConfig[uc_dbhost]\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_DBUSER</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbuser", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbuser", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_DBUSER\" name=\"discuzConfig[uc_dbuser]\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_DBPW</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"password\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbpw", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbpw", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_DBPW\" name=\"discuzConfig[uc_dbpw]\">
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_DBNAME</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbname", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_DBNAME\" name=\"discuzConfig[uc_dbname]\">
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_DBCHARSET</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbcharset", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbcharset", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_DBCHARSET\" name=\"discuzConfig[uc_dbcharset]\">
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_DBTABLEPRE</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbtablepre", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbtablepre", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_DBTABLEPRE\" name=\"discuzConfig[uc_dbtablepre]\">
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_DBCONNECT</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbconnect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_dbconnect", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_DBCONNECT\" name=\"discuzConfig[uc_dbconnect]\">
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_KEY</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_key", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_key", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_KEY\" name=\"discuzConfig[uc_key]\">
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_API</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_api", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_api", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_API\" name=\"discuzConfig[uc_api]\">
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_CHARSET</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_charset", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_charset", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_CHARSET\" name=\"discuzConfig[uc_charset]\">
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_IP</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_ip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_ip", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_IP\" name=\"discuzConfig[uc_ip]\">
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_APPID</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_appid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_appid", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_APPID\" name=\"discuzConfig[uc_appid]\">
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"><label>UC_PPP</label></div>
      <div class=\"controls col-md-8\">
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["discuzConfig"] ?? null), "uc_ppp", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["discuzConfig"] ?? null), "uc_ppp", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"UC_PPP\" name=\"discuzConfig[uc_ppp]\">
      </div>
    </div>
  </div>
  
  ";
        // line 129
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.uc_phpwind", "0")) {
            // line 130
            echo "  <div class=\"row form-group with-phpwind\" style=\"display:none;\">
    <div class=\"col-md-3 control-label\"><label>";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_center.WindId_Configration"), "html", null, true);
            echo "</label></div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" name=\"phpwind_config\" rows=\"10\">";
            // line 133
            echo twig_escape_filter($this->env, ($context["phpwindConfig"] ?? null), "html", null, true);
            echo "</textarea>
      <div class=\"help-block\">";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_center.WindId_Configration.help_block"), "html", null, true);
            echo "<a href=\"http://demo.edusoho.com/course/125\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_center.Configration.help_block"), "html", null, true);
            echo "</a></div>
    </div>
  </div>
  ";
        }
        // line 138
        echo "
  <div class=\"form-group with-phpwind with-discuz\">
    <div class=\"col-md-3 control-label\">
      <label for=\"email_filter\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_center.filtr_email_list"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"email_filter\" name=\"email_filter\" class=\"form-control\" rows=\"5\">";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? null), "email_filter", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">
        <div>";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_center.filtr_email_list.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <div class=\"alert alert-info\">
    ";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_center.tips");
        echo "
  </div>


  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "admin/system/user-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 163,  292 => 159,  284 => 154,  273 => 146,  268 => 144,  262 => 141,  257 => 138,  248 => 134,  244 => 133,  239 => 131,  236 => 130,  234 => 129,  226 => 124,  217 => 118,  208 => 112,  199 => 106,  190 => 100,  181 => 94,  172 => 88,  163 => 82,  154 => 76,  145 => 70,  136 => 64,  126 => 57,  116 => 50,  106 => 43,  96 => 36,  91 => 34,  82 => 28,  79 => 27,  71 => 25,  69 => 24,  65 => 23,  59 => 20,  51 => 15,  48 => 14,  39 => 11,  36 => 10,  33 => 9,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/user-center.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/user-center.html.twig");
    }
}
