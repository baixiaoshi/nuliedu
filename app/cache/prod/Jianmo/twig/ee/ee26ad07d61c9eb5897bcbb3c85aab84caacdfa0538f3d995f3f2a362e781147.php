<?php

/* admin/system/login-connect.html.twig */
class __TwigTemplate_e33ea63c6ab907280aea03be0515926d9f0579600bc7a61884ff80b6044f2318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/login-connect.html.twig", 1);
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
        $context["script_controller"] = "system/login_bind";
        // line 5
        $context["menu"] = "admin_setting_login_bind";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" method=\"post\" id=\"login_bind-form\" novalidate>

    <fieldset>
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.User_login_restrictions"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
        // line 19
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("login_limit", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.closed")), $this->getAttribute(($context["loginConnect"] ?? null), "login_limit", array()));
        echo "
          <p class=\"help-block\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.User_login_restrictions.help_block"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </fieldset>

    <fieldset>
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.Third_party_login"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
        // line 31
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.closed")), $this->getAttribute(($context["loginConnect"] ?? null), "enabled", array()));
        echo "
        </div>
      </div>
    </fieldset>


    <fieldset>
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.User_login_protection"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
        // line 43
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("temporary_lock_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.closed")), $this->getAttribute(($context["loginConnect"] ?? null), "temporary_lock_enabled", array()));
        echo "
          <p class=\"help-block\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.Third_party_login.help_block"), "html", null, true);
        echo "</p>
        </div>

        <div id=\"times_and_minutes\" class=\"col-md-8 col-md-offset-3\"
          ";
        // line 48
        if ( !(($this->getAttribute(($context["loginConnect"] ?? null), "temporary_lock_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["loginConnect"] ?? null), "temporary_lock_enabled", array()), false)) : (false))) {
            echo "style=\"display:none\"";
        }
        echo ">
          <div class=\"row\">
            <div class=\"col-md-4 lock-user-text-right\">
              ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.User_login_protection.enter_wrong_password"), "html", null, true);
        echo "
            </div>
            <div class=\"controls col-md-2 form-group\">
              <input type=\"text\" id=\"temporary_lock_allowed_times\" name=\"temporary_lock_allowed_times\" class=\"form-control\"
                value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["loginConnect"] ?? null), "temporary_lock_allowed_times", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-3 lock-user-text-left\">
              ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.User_login_protection.enter_wrong_password.banned"), "html", null, true);
        echo "
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-4 lock-user-text-right\">
              ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.User_login_protection.some_IP_enter_wrong_password"), "html", null, true);
        echo "
            </div>
            <div class=\"controls col-md-2 form-group\">
              <input type=\"text\" id=\"temporary_lock_allowed_times\" name=\"ip_temporary_lock_allowed_times\" class=\"form-control\"
                value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["loginConnect"] ?? null), "ip_temporary_lock_allowed_times", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-3 lock-user-text-left\">
              ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.User_login_protection.some_IP_enter_wrong_password.banned"), "html", null, true);
        echo "
            </div>
          </div>


          <div class=\"row\">
            <div class=\"col-md-4 lock-user-text-right\">
              ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.User_login_protection.after"), "html", null, true);
        echo "
            </div>
            <div class=\"controls col-md-2 form-group\">
              <input type=\"text\" id=\"temporary_lock_minutes\" name=\"temporary_lock_minutes\" class=\"form-control\"
                value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["loginConnect"] ?? null), "temporary_lock_minutes", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-3 lock-user-text-left\">
              ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.User_login_protection.after.unblock"), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
    </fieldset>
    <fieldset id=\"third_login\" ";
        // line 90
        if (((($this->getAttribute(($context["loginConnect"] ?? null), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["loginConnect"] ?? null), "enabled", array()), null)) : (null)) == 0)) {
            echo " style=\"display:none\"";
        }
        echo ">
      ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["client"]) {
            // line 92
            echo "        <fieldset data-role=\"oauth2-setting\" data-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
          <legend>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "admin_name", array()), "html", null, true);
            echo "</legend>
          <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
              <label>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "admin_name", array()), "html", null, true);
            echo "</label>
            </div>
            <div class=\"controls col-md-8 radios\">
              ";
            // line 99
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios(($context["type"] . "_enabled"), array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.closed")), $this->getAttribute(($context["loginConnect"] ?? null), ($context["type"] . "_enabled"), array(), "array"));
            echo "
              ";
            // line 100
            if ((($this->getAttribute($context["client"], "apply_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["client"], "apply_url", array()), null)) : (null))) {
                // line 101
                echo "              ";
                if (($context["type"] == "weixinmob")) {
                    // line 102
                    echo "              <div class=\"help-block\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.weixinmob.frist.help_block"), "html", null, true);
                    echo "</div>
              <div class=\"help-block\">
                ";
                    // line 104
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.weixinmob.help_block");
                    echo "
                ";
                } elseif ((                // line 105
$context["type"] == "weixinweb")) {
                    // line 106
                    echo "                <div class=\"help-block\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.weixin.help_block");
                    echo "
                </div>
                <div class=\"help-block\">
                  ";
                    // line 109
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.weixin.frist.help_block"), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 111
                    echo "                  <div class=\"help-block\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "apply_url", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.other.apply_btn"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "admin_name", array()), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 113
                echo "                    ";
                if (($context["type"] == "qq")) {
                    // line 114
                    echo "                      <a class=\"pll\" href=\"javascript:;\" id=\"help\" data-toggle=\"popover\" data-trigger=\"click\" data-placement=\"top\"
                        title=\"";
                    // line 115
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.other.qq.help_title"), "html", null, true);
                    echo "\" data-html=\"true\"
                        data-content=\"";
                    // line 116
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.other.qq.data_content");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.other.qq.help_btn"), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 118
                echo "                  </div>
                  ";
            }
            // line 120
            echo "                </div>
              </div>

              <div class=\"form-group\">
                <div class=\"col-md-3 control-label\">
                  <label for=\"";
            // line 125
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_key\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "key_setting_label", array()), "html", null, true);
            echo "</label>
                </div>
                <div class=\"controls col-md-8\">
                  <input type=\"text\" id=\"";
            // line 128
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_key\" name=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_key\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["loginConnect"] ?? null), ($context["type"] . "_key"), array(), "array"), "html", null, true);
            echo "\">
                </div>
              </div>

              <div class=\"form-group\">
                <div class=\"col-md-3 control-label\">
                  <label for=\"";
            // line 134
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_secret\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "secret_setting_label", array()), "html", null, true);
            echo "</label>
                </div>
                <div class=\"controls col-md-8\">
                  <input type=\"text\" id=\"";
            // line 137
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_secret\" name=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_secret\" class=\"form-control\"
                    value=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute(($context["loginConnect"] ?? null), ($context["type"] . "_secret"), array(), "array"), "html", null, true);
            echo "\">
                  ";
            // line 139
            if (($context["type"] == "weixinweb")) {
                // line 140
                echo "                    <div class=\"help-block\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.type.weixinweb.help_block");
                echo "</div>
                  ";
            } elseif ((            // line 141
$context["type"] == "weixinmob")) {
                // line 142
                echo "                    <div class=\"help-block\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.type.weixinmob.help_block");
                echo "
                    </div>
                  ";
            }
            // line 145
            echo "                </div>
              </div>
              ";
            // line 147
            if (($context["type"] == "weixinmob")) {
                // line 148
                echo "                <div class=\"form-group\">
                  <div class=\"col-md-3 control-label\">
                    <label for=\"weixinmob_mp_secret\">";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "mp_secret_setting_label", array()), "html", null, true);
                echo "</label>
                  </div>
                  <div class=\"controls col-md-8\">
                    <input type=\"text\" id=\"weixinmob_mp_secret\" name=\"weixinmob_mp_secret\" class=\"form-control\"
                      value=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute(($context["loginConnect"] ?? null), "weixinmob_mp_secret", array(), "array"), "html", null, true);
                echo "\">
                    <p class=\"help-block\">";
                // line 155
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.type.weixinmob.MP_verify.help_block"), "html", null, true);
                echo "</p>
                  </div>
                </div>
              ";
            }
            // line 159
            echo "              ";
            if (($context["type"] == "weibo")) {
                // line 160
                echo "                <div class=\"form-group\">
                  <div class=\"col-md-3 control-label\">
                    <label for=\"\"></label>
                  </div>
                  <div class=\"controls col-md-8 radios\">
                    <div class=\"help-block\"><a href=\"#port\">";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.type.weibo.help_block"), "html", null, true);
                echo "></a></div>
                  </div>
                </div>
              ";
            }
            // line 169
            echo "        </fieldset>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "
      <fieldset>
        <legend id=\"port\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.verifcation_loging_interface"), "html", null, true);
        echo "</legend>
        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"verify_code\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.verifcation_code"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <textarea id=\"verify_code\" name=\"verify_code\" class=\"form-control\" rows=\"5\">";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute(($context["loginConnect"] ?? null), "verify_code", array()), "html", null, true);
        echo "</textarea>
            <div class=\"help-block\">";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.verifcation_code.help_block"), "html", null, true);
        echo "</div>
          </div>
        </div>
      </fieldset>
    </fieldset>
    <div class=\"form-group\">
      <div class=\"controls col-md-offset-3 col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
      </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>

";
    }

    public function getTemplateName()
    {
        return "admin/system/login-connect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 190,  413 => 187,  403 => 180,  399 => 179,  393 => 176,  387 => 173,  383 => 171,  376 => 169,  369 => 165,  362 => 160,  359 => 159,  352 => 155,  348 => 154,  341 => 150,  337 => 148,  335 => 147,  331 => 145,  324 => 142,  322 => 141,  317 => 140,  315 => 139,  311 => 138,  305 => 137,  297 => 134,  284 => 128,  276 => 125,  269 => 120,  265 => 118,  258 => 116,  254 => 115,  251 => 114,  248 => 113,  239 => 111,  234 => 109,  227 => 106,  225 => 105,  221 => 104,  215 => 102,  212 => 101,  210 => 100,  206 => 99,  200 => 96,  194 => 93,  189 => 92,  185 => 91,  179 => 90,  170 => 84,  164 => 81,  157 => 77,  147 => 70,  141 => 67,  134 => 63,  126 => 58,  120 => 55,  113 => 51,  105 => 48,  98 => 44,  94 => 43,  88 => 40,  76 => 31,  70 => 28,  59 => 20,  55 => 19,  49 => 16,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/login-connect.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/login-connect.html.twig");
    }
}
