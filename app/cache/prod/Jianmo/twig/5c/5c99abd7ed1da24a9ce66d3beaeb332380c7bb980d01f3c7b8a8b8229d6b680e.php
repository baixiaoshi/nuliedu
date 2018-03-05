<?php

/* admin/system/user-fields.html.twig */
class __TwigTemplate_517089970792e113092da1c285265b97ee8ddf1d127e2ba63118fe564a174738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/user-fields.html.twig", 1);
        $this->blocks = array(
            'page_buttons' => array($this, 'block_page_buttons'),
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
        $context["script_controller"] = "system/user-fields";
        // line 5
        $context["menu"] = "admin_setting_user_fields";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 7
        echo "<button type=\"button\" class=\"btn btn-success btn-sm pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.add_field_btn"), "html", null, true);
        echo "</button>
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "
<form action=\"\" class=\"form-horizontal\" method=\"post\">
  <fieldset>
    <legend>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.customer_fields_setting"), "html", null, true);
        echo "</legend>
    <table class=\"table table-striped table-hover\" id=\"course-table\">
      <thead>
      <tr>
        <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.fields_title"), "html", null, true);
        echo "</th>
        <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.fields_fieldName"), "html", null, true);
        echo "</th>
        <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.fields_enabled"), "html", null, true);
        echo "</th>
        <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.fields_seq"), "html", null, true);
        echo "</th>
        <!-- <th>创建时间</th> -->
        <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.operation"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 27
        $this->loadTemplate("admin/system/user-fields.table.tr.html.twig", "admin/system/user-fields.html.twig", 27)->display($context);
        // line 28
        echo "      </tbody>
    </table>
  </fieldset>
  
  
  <fieldset>
    <legend>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Personal_info_configiration"), "html", null, true);
        echo "</legend>

    ";
        // line 36
        $context["commonFields"] = _twig_default_filter($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userInfoFields"), null);
        // line 37
        echo "
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Require_personal"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 43
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("buy_fill_userinfo", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Personal_info_configiration.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Personal_info_configiration.closed")), (($this->getAttribute(($context["courseSetting"] ?? null), "buy_fill_userinfo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSetting"] ?? null), "buy_fill_userinfo", array()), 0)) : (0)));
        echo "
        <p class=\"help-block\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Personal_info_configiration.help_block"), "html", null, true);
        echo "</p>
      </div>

      <div class=\"controls col-md-8 col-md-offset-3\" id=\"show-list\">
        <div class=\"pull-left\">
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["courseSetting"] ?? null), "userinfoFields", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSetting"] ?? null), "userinfoFields", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 50
            echo "            ";
            $context["userCustomField"] = (($this->getAttribute(($context["userFields"] ?? null), $context["sort"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["userFields"] ?? null), $context["sort"], array(), "array"), null)) : (null));
            // line 51
            echo "            ";
            $context["userInfoFieldsDict"] = _twig_default_filter($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("userInfoFields", $context["sort"]), null);
            // line 52
            echo "            ";
            if (($context["userCustomField"] ?? null)) {
                // line 53
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute(($context["userCustomField"] ?? null), "title", array()), "html", null, true);
                echo "
              </button>
            ";
            } elseif (            // line 56
($context["userInfoFieldsDict"] ?? null)) {
                // line 57
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 58
                echo twig_escape_filter($this->env, ($context["userInfoFieldsDict"] ?? null), "html", null, true);
                echo "
              </button>
            ";
            }
            // line 61
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </div>
          
        <div class=\"pull-right \">
          <a href=\"javascript:\" id=\"show-list-btn\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.edit_btn"), "html", null, true);
        echo " 
            <span class=\"glyphicon glyphicon-chevron-down\"></span>
          </a>
        </div>
      </div>

      <div class=\"controls col-md-8 col-md-offset-2\" id=\"show-register-list\" style=\"display:none\">
        <div class=\"form-group\">
          <ul class=\"register-list sortable-list list-unstyled col-md-12\" data-role=\"list\">
            ";
        // line 74
        $context["checkedFieldsKeys"] = (($this->getAttribute(($context["courseSetting"] ?? null), "userinfoFields", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSetting"] ?? null), "userinfoFields", array()), array())) : (array()));
        // line 75
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commonFields"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            if (($context["commonFields"] ?? null)) {
                // line 76
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"userinfoFields[]\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["key"], ($context["checkedFieldsKeys"] ?? null))) {
                    echo "checked=true";
                }
                echo " />
                <input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
                // line 79
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" /> 
                ";
                // line 80
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "
                ";
                // line 81
                if ((($context["key"] == "email") || ($context["key"] == "mobile"))) {
                    echo "<span class=\"text-muted\">  (";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Formart_verifcation"), "html", null, true);
                    echo ")</span>";
                }
                // line 82
                echo "              </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userFields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (((array_key_exists("userFields", $context)) ? (_twig_default_filter(($context["userFields"] ?? null), null)) : (null))) {
                // line 86
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"userinfoFields[]\" value=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" ";
                if (twig_in_filter($this->getAttribute($context["field"], "fieldName", array()), ($context["checkedFieldsKeys"] ?? null))) {
                    echo "checked=true";
                }
                echo " />
                <input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" /> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                echo "
              </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "          </ul>

          <div class=\"help-block col-md-12\"><span class=\"text-success\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Formart_verifcation.help_block"), "html", null, true);
        echo "</span></div>

        </div>
        <div class=\"mbl\" style=\"text-align:center;\">
          <a href=\"javascript:\" id=\"hide-list-btn\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Formart_verifcation.hide"), "html", null, true);
        echo "
            <span class=\"glyphicon glyphicon-chevron-up\"></span>
          </a>
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Require_personal_information"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 110
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("fill_userinfo_after_login", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.closed")), _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.fill_userinfo_after_login"), 0));
        echo "
        <p class=\"help-block\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Require_personal_information.help_block"), "html", null, true);
        echo "</p>
      </div>

      <div class=\"controls col-md-8 col-md-offset-3\" id=\"show-checked-fields-list\">
        <div class=\"pull-left\">
          ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["authSetting"] ?? null), "registerSort", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["authSetting"] ?? null), "registerSort", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 117
            echo "            ";
            if (($context["sort"] == "emailOrMobile")) {
                $context["sort"] = "email";
            }
            // line 118
            echo "            ";
            $context["userCustomField"] = (($this->getAttribute(($context["userFields"] ?? null), $context["sort"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["userFields"] ?? null), $context["sort"], array(), "array"), null)) : (null));
            // line 119
            echo "            ";
            $context["userInfoFieldsDict"] = _twig_default_filter($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("userInfoFields", $context["sort"]), null);
            // line 120
            echo "            ";
            if (($context["userCustomField"] ?? null)) {
                // line 121
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute(($context["userCustomField"] ?? null), "title", array()), "html", null, true);
                echo "
              </button>
            ";
            } elseif (            // line 124
($context["userInfoFieldsDict"] ?? null)) {
                // line 125
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 126
                echo twig_escape_filter($this->env, ($context["userInfoFieldsDict"] ?? null), "html", null, true);
                if ((($context["sort"] == "mobile") && (($this->getAttribute(($context["authSetting"] ?? null), "mobileSmsValidate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["authSetting"] ?? null), "mobileSmsValidate", array()), 0)) : (0)))) {
                    echo "(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.verified_mobile_tip"), "html", null, true);
                    echo ")";
                }
                // line 127
                echo "              </button>
            ";
            }
            // line 129
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "        </div>
          
        <div class=\"pull-right \">
          <a href=\"javascript:\" id=\"show-fields-list-btn\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.edit_btn"), "html", null, true);
        echo "
            <span class=\"glyphicon glyphicon-chevron-down\"></span>
          </a>
        </div>
      </div>

      <div class=\"controls col-md-8 col-md-offset-2\" id=\"show-fields-list\" style=\"display:none\">
        <div class=\"form-group\">
          <ul class=\"fill-userinfo-list sortable-list list-unstyled col-md-12\" data-role=\"list\">
            ";
        // line 142
        $context["checkedUserFieldsKeys"] = (($this->getAttribute(($context["authSetting"] ?? null), "registerSort", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["authSetting"] ?? null), "registerSort", array()), array())) : (array()));
        // line 143
        echo "
            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commonFields"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            if (($context["commonFields"] ?? null)) {
                // line 145
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"registerSort[]\" value=\"";
                // line 147
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if ((twig_in_filter($context["key"], ($context["checkedUserFieldsKeys"] ?? null)) && (($context["key"] != "mobile") || (($context["key"] == "mobile") &&  !(($this->getAttribute(($context["authSetting"] ?? null), "mobileSmsValidate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["authSetting"] ?? null), "mobileSmsValidate", array()), 0)) : (0)))))) {
                    echo "checked=true";
                }
                echo " ";
                if (($context["key"] == "mobile")) {
                    echo "data-sms-validate=\"0\"";
                }
                echo " />
                <input type=\"hidden\" name=\"registerFieldNameArray[]\" value=\"";
                // line 148
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" /> 
                ";
                // line 149
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "
                ";
                // line 150
                if (twig_in_filter($context["key"], array(0 => "email", 1 => "mobile"))) {
                    echo "<span class=\"text-muted\">  (";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Formart_verifcation"), "html", null, true);
                    echo ")</span>";
                }
                // line 151
                echo "              </li>

              ";
                // line 153
                if (($context["key"] == "mobile")) {
                    // line 154
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                  <input type=\"checkbox\" name=\"registerSort[]\" value=\"mobile\" ";
                    // line 156
                    if ((twig_in_filter($context["key"], ($context["checkedUserFieldsKeys"] ?? null)) && (($this->getAttribute(($context["authSetting"] ?? null), "mobileSmsValidate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["authSetting"] ?? null), "mobileSmsValidate", array()), 0)) : (0)))) {
                        echo "checked=true";
                    }
                    echo " data-sms-validate=\"1\" />
                  <input type=\"hidden\" name=\"registerFieldNameArray[]\" value=\"mobile\" /> 
                  ";
                    // line 158
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "
                  <span class=\"text-muted\">  (";
                    // line 159
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Formart_mobile_verifcation"), "html", null, true);
                    echo ")</span>
                </li>
              ";
                }
                // line 162
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "
            ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userFields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (((array_key_exists("userFields", $context)) ? (_twig_default_filter(($context["userFields"] ?? null), null)) : (null))) {
                // line 165
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"registerSort[]\" value=\"";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" ";
                if (twig_in_filter($this->getAttribute($context["field"], "fieldName", array()), ($context["checkedUserFieldsKeys"] ?? null))) {
                    echo "checked=true";
                }
                echo " />
                <input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" /> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                echo "
              </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "          </ul>

          <div class=\"help-block col-md-12\"><span class=\"text-success\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Formart_verifcation.help_block"), "html", null, true);
        echo "</span></div>

        </div>
        <div class=\"mbl\" style=\"text-align:center;\">
          <a href=\"javascript:\" id=\"hide-fields-list-btn\">";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.Formart_verifcation.hide"), "html", null, true);
        echo "
            <span class=\"glyphicon glyphicon-chevron-up\"></span>
          </a>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.other_setting"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.other_setting.avatar"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 192
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("avatar_alert", array("open" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.open"), "close" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.closed")), _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("user_partner.avatar_alert"), "close"));
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.other_setting.edit_user_name"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 200
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("nickname_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.login_connect.closed")), _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("user_partner.nickname_enabled"), 0));
        echo "
      </div>
    </div>
  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"mobileSmsValidate\" value=\"";
        // line 211
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["authSetting"] ?? null), "mobileSmsValidate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["authSetting"] ?? null), "mobileSmsValidate", array()), 0)) : (0)), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name='_cloud_sms'  value= \"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled"), "html", null, true);
        echo "\">
</form>

";
        // line 216
        $this->loadTemplate("admin/system/user-fields.modal.html.twig", "admin/system/user-fields.html.twig", 216)->display($context);
        // line 217
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/system/user-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 217,  548 => 216,  542 => 213,  538 => 212,  534 => 211,  528 => 208,  517 => 200,  511 => 197,  503 => 192,  497 => 189,  491 => 186,  479 => 177,  472 => 173,  468 => 171,  456 => 168,  448 => 167,  444 => 165,  439 => 164,  436 => 163,  429 => 162,  423 => 159,  419 => 158,  412 => 156,  408 => 154,  406 => 153,  402 => 151,  396 => 150,  392 => 149,  388 => 148,  376 => 147,  372 => 145,  367 => 144,  364 => 143,  362 => 142,  350 => 133,  345 => 130,  339 => 129,  335 => 127,  328 => 126,  325 => 125,  323 => 124,  318 => 122,  315 => 121,  312 => 120,  309 => 119,  306 => 118,  301 => 117,  297 => 116,  289 => 111,  285 => 110,  279 => 107,  267 => 98,  260 => 94,  256 => 92,  244 => 89,  236 => 88,  232 => 86,  227 => 85,  224 => 84,  216 => 82,  210 => 81,  206 => 80,  202 => 79,  194 => 78,  190 => 76,  184 => 75,  182 => 74,  170 => 65,  165 => 62,  159 => 61,  153 => 58,  150 => 57,  148 => 56,  143 => 54,  140 => 53,  137 => 52,  134 => 51,  131 => 50,  127 => 49,  119 => 44,  115 => 43,  109 => 40,  104 => 37,  102 => 36,  97 => 34,  89 => 28,  87 => 27,  80 => 23,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  56 => 14,  50 => 11,  47 => 10,  44 => 9,  37 => 7,  34 => 6,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/user-fields.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/user-fields.html.twig");
    }
}
