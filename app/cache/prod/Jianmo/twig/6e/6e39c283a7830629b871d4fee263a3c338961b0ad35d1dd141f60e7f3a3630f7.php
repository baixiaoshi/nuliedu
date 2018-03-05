<?php

/* admin/system/consult-setting.html.twig */
class __TwigTemplate_4301bdd629c3b4c4fa7e75980be6f6357a0e29b2478b8bc0e459bca8451e80e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/consult-setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_consult_setting";
        // line 5
        $context["script_controller"] = "setting/consult-setting";
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

  <form class=\"form-horizontal\" method=\"post\" id=\"consult-setting-form\" novalidate>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.customer_service_function"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.status.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.status.closed")), $this->getAttribute(($context["consult"] ?? null), "enabled", array()));
        echo "
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.floating_bar"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 25
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("color", array("default" => "<span class=\"btn btn-lg\" style=\"background:#37b97d\"></span>", "warning" => "<span class=\"btn btn-lg\" style=\"background:#e67e22\"></span>", "danger" => "<span class=\"btn btn-lg\" style=\"background:#e74c3c\"></span>"), $this->getAttribute(        // line 29
($context["consult"] ?? null), "color", array()));
        echo "
      </div>
    </div>
    <div data-role=\"template\" style=\"display:none\">
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                  title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
        echo "\">×
          </button>
          </input>
        </div>
      </div>
    </div>

    <div data-role=\"phone-template\" style=\"display:none\">
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
          <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\"
                  title=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
        echo "\">×
          </button>
          </input>
        </div>
      </div>
    </div>

    <div data-role=\"qqGroupTemplate\" style=\"display:none\">
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                  title=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
        echo "\">×
          </button>
          </input>
        </div>
      </div>
    </div>

    <fieldset>
      <legend>QQ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.customer_service_settings"), "html", null, true);
        echo "
        <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-property-tips\"
              data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
        <div id=\"qq-property-tips-html\" style=\"display:none;\">
          <div style=\"width:250px;\">
            <span style=\"color:blue;\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.get_online_service_link.tips"), "html", null, true);
        echo "</span><br>
            ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.customer_service_settings.tips", array("%http%" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getScheme", array(), "method")));
        echo "
            <br>
          </div>
        </div>
      </legend>
      <div id=\"consult-qq\">
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["consult"] ?? null), "qq", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            // line 97
            echo "          <div class=\"row form-group has-feedback\">
            <div class=\"controls col-md-2 col-md-offset-2\">
              <input type=\"text\" name=\"qq[";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_customer_service_name.placeholer"), "html", null, true);
            echo "\">
            </div>
            <div class=\"controls col-md-2\">
              <input type=\"text\" name=\"qq[";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_number.placeholer"), "html", null, true);
            echo "\">
            </div>
            <div class=\"controls col-md-4\">
              <input type=\"text\" name=\"qq[";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][url]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), "")) : ("")), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.enter_link_addr.placeholer"), "html", null, true);
            echo "\">
              ";
            // line 109
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 110
                echo "                <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                        title=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
                echo "\">×
                </button>
              ";
            }
            // line 114
            echo "            </div>
          </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "      </div>
      <div class=\"row form-group\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <span class=\"btn-link\" data-role=\"item-add\" data-parentId='consult-qq'
                data-length='";
        // line 121
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "qq", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.add_btn"), "html", null, true);
        echo "</span>
        </div>
      </div>
    </fieldset>


    <fieldset>
      <legend>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_group_setting"), "html", null, true);
        echo "
        <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-group-property-tips\"
              data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
        <div id=\"qq-group-property-tips-html\" style=\"display:none;\">
          <div style=\"width:250px;\">
            <span style=\"color:blue;\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.get_online_service_link.tips"), "html", null, true);
        echo "</span><br>
            ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_group_setting.tips");
        echo "
          </div>
        </div>
      </legend>
      <div id=\"consult-qqgroup\">
        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["consult"] ?? null), "qqgroup", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            // line 140
            echo "          <div class=\"row form-group has-feedback\">
            <div class=\"controls col-md-2 col-md-offset-2\">
              <input type=\"text\" name=\"qqgroup[";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_group_name.placeholer"), "html", null, true);
            echo "\">
            </div>
            <div class=\"controls col-md-2\">
              <input type=\"text\" name=\"qqgroup[";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\"
                     value=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_group_number.placeholer"), "html", null, true);
            echo "\">
            </div>
            <div class=\"controls col-md-4\">
              <input type=\"text\" name=\"qqgroup[";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][url]\" class=\"form-control\"
                     value=\"";
            // line 151
            echo twig_escape_filter($this->env, (($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), "")) : ("")), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.code_join_to_QQ_group.placeholer"), "html", null, true);
            echo "\">
              ";
            // line 152
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 153
                echo "                <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                        title=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
                echo "\">×
                </button>
              ";
            }
            // line 157
            echo "            </div>
          </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "      </div>
      <div class=\"row form-group\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <span class=\"btn-link\" data-parentId='consult-qqgroup'
                data-length='";
        // line 164
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "qqgroup", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.add_btn"), "html", null, true);
        echo "</span>
        </div>
      </div>
    </fieldset>

    <fieldset>
      <legend>";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.phone_setting"), "html", null, true);
        echo "</legend>
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"worktime\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.work_time"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"worktime\" name=\"worktime\" class=\"form-control\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "worktime", array()), "html", null, true);
        echo "\">
        </div>
      </div>


      <div id=\"consult-phone\">
        ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["consult"] ?? null), "phone", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 183
            echo "          <div class=\"row form-group has-feedback\">
            <div class=\"controls col-md-4 col-md-offset-2\">
              <input type=\"text\" name=\"phone[";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.Contact"), "html", null, true);
            echo "\">
            </div>
            <div class=\"controls col-md-4\">
              <input type=\"text\" name=\"phone[";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.phone"), "html", null, true);
            echo "\">
              ";
            // line 191
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 192
                echo "                <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\"
                        title=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
                echo "\">×
                </button>
              ";
            }
            // line 196
            echo "            </div>
          </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "      </div>
      <div class=\"row form-group\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <span class=\"btn-link\" data-role=\"phone-item-add\" data-parentId='consult-phone'
                data-length='";
        // line 203
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "phone", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.add_btn"), "html", null, true);
        echo "</span>
        </div>
      </div>
    </fieldset>

    <fieldset>
      <legend>";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.other_setting"), "html", null, true);
        echo "</legend>
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label>";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.WeChat_QR_code"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          <div id=\"consult-container\">";
        // line 215
        if ($this->getAttribute(($context["consult"] ?? null), "webchatURI", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["consult"] ?? null), "webchatURI", array())), "html", null, true);
            echo "\">";
        }
        // line 216
        echo "          </div>
          <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" id=\"consult-upload\"
             data-upload-token=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" type=\"button\"
             data-goto-url=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_consult_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
        echo "</a>
          <button class=\"btn btn-default btn-sm\" id=\"consult-webchat-del\" type=\"button\"
                  data-url=\"";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_consult_webchat_delete");
        echo "\"
                  ";
        // line 222
        if ( !$this->getAttribute(($context["consult"] ?? null), "webchatURI", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
        echo "</button>
          <p class=\"help-block\">";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.other_setting.help_block"), "html", null, true);
        echo "</p>
          <input type=\"hidden\" name=\"webchatURI\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "webchatURI", array()), "html", null, true);
        echo "\">
        </div>
      </div>


      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"email\">";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.work_email"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "email", array()), "html", null, true);
        echo "\">
        </div>
      </div>
    </fieldset>

    ";
        // line 240
        echo "    ";
        // line 241
        echo "    ";
        // line 242
        echo "    ";
        // line 243
        echo "    ";
        // line 244
        echo "    ";
        // line 245
        echo "    ";
        // line 246
        echo "    ";
        // line 247
        echo "    ";
        // line 248
        echo "    ";
        // line 249
        echo "    ";
        // line 250
        echo "    ";
        // line 251
        echo "
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

";
    }

    public function getTemplateName()
    {
        return "admin/system/consult-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 259,  584 => 255,  578 => 251,  576 => 250,  574 => 249,  572 => 248,  570 => 247,  568 => 246,  566 => 245,  564 => 244,  562 => 243,  560 => 242,  558 => 241,  556 => 240,  548 => 234,  542 => 231,  532 => 224,  528 => 223,  520 => 222,  516 => 221,  509 => 219,  505 => 218,  501 => 216,  495 => 215,  489 => 212,  483 => 209,  472 => 203,  466 => 199,  450 => 196,  444 => 193,  441 => 192,  439 => 191,  435 => 190,  429 => 189,  423 => 186,  417 => 185,  413 => 183,  396 => 182,  387 => 176,  381 => 173,  375 => 170,  364 => 164,  358 => 160,  342 => 157,  336 => 154,  333 => 153,  331 => 152,  325 => 151,  321 => 150,  313 => 147,  309 => 146,  303 => 143,  297 => 142,  293 => 140,  276 => 139,  268 => 134,  264 => 133,  256 => 128,  244 => 121,  238 => 117,  222 => 114,  216 => 111,  213 => 110,  211 => 109,  207 => 108,  201 => 107,  195 => 104,  189 => 103,  183 => 100,  177 => 99,  173 => 97,  156 => 96,  147 => 90,  143 => 89,  135 => 84,  124 => 76,  103 => 58,  85 => 43,  68 => 29,  67 => 25,  61 => 22,  53 => 17,  47 => 14,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/consult-setting.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/consult-setting.html.twig");
    }
}
