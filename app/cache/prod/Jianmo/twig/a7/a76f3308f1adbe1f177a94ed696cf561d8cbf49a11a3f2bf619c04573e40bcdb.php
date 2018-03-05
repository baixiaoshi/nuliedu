<?php

/* settings/profile.html.twig */
class __TwigTemplate_7d9ab33df8cc39904eb162aa0a23a2a183c051ce17f3d1c793a2cb0f6ff4aa81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("v2/layout.html.twig", "settings/profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "v2/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "profile";
        // line 7
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/bootstrap-datetimepicker.js", 2 => "libs/jquery-validation.js", 3 => "app/js/settings/profile/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.personal_info_menu"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.personal_info_menu"), "html", null, true);
        echo "
";
    }

    // line 13
    public function block_main_body($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        if (($context["fromCourse"] ?? null)) {
            // line 15
            echo "    <div class=\"alert cd-alert cd-alert-info\">
      ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.alter_description"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(0 => true), "method"), "html", null, true);
        echo "
  <form id=\"user-profile-form\" class=\"row cd-row\" method=\"post\">
    <div class=\"col-md-11\">
      <div class=\"cd-image-upload cd-mr24 cd-mb32\">
        <img class=\"cd-avatar cd-avatar-square cd-avatar-lg\" id=\"profile-avatar\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["user"] ?? null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
        <div class=\"image-upload-mask\">
          <div class=\"image-upload-content\">
            <i class=\"cd-icon cd-icon-camera\"></i>
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.shange_avatar"), "html", null, true);
        echo "
          </div>
        </div>
        ";
        // line 31
        $this->loadTemplate("common/local-crop-image.html.twig", "settings/profile.html.twig", 31)->display(array_merge($context, array("saveUrl" => "settings_profile_avatar_crop_modal", "targetImg" => "#profile-avatar", "cropWidth" => "270", "cropHeight" => "270")));
        // line 37
        echo "      </div>
      <div class=\"form-group cd-form-group cd-form-group-inline cd-form-group-action\" id=\"nickname-form-group\">

        <label for=\"nickname\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.username_label"), "html", null, true);
        echo "</label>

        <div class=\"static-text input-edit__static-dom\">
          <span class=\"input-edit__static-text\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
        echo "</span>
          ";
        // line 44
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("user_partner.nickname_enabled")) {
            // line 45
            echo "            <i class=\"cd-icon cd-icon-edit cd-icon-hover input-edit__edit-btn\"></i>
          ";
        }
        // line 47
        echo "        </div>

        <div class=\"input-edit__edit-dom\" style=\"display:none\">
          <input data-url=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_nickname_check");
        echo "\" name=\"nickname\" id=\"nickname\" type=\"text\" class=\"form-control input-edit__input\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
        echo "\">

          <div class=\"action-button\">
            <button type=\"button\" class=\"btn cd-btn cd-btn-primary input-edit__save-btn\"
              data-input-name=\"nickname\"
              data-url=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("setting_nickname");
        echo "\" 
              data-loading-text=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\">
              ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "
            </button>
            <button type=\"button\" class=\"btn cd-btn cd-btn-flat-default input-edit__cancel-btn\">
              ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "
            </button>
          </div>
        </div> 

      </div>
    </div>
    <div class=\"col-md-5\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_truename\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fileds.realname"), "html", null, true);
        echo "</label>
        ";
        // line 70
        if (($this->getAttribute(($context["profile"] ?? null), "truename", array()) && (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approved") || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approving")))) {
            // line 71
            echo "          <input type=\"text\" id=\"profile_truename\" name=\"profile[truename]\"  class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "truename", array()), "html", null, true);
            echo "\" readonly>
        ";
        } else {
            // line 73
            echo "          <input type=\"text\" id=\"profile_truename\" name=\"profile[truename]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "truename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "truename", array()), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 75
        echo "      </div>
    </div>
    <div class=\"col-md-5 col-md-offset-1\">
      <div class=\"form-group cd-form-group\">
        <label>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.gender_label"), "html", null, true);
        echo "</label>
        <div class=\"cd-radio-group\">
          <label class=\"cd-radio ";
        // line 81
        if (($this->getAttribute(($context["profile"] ?? null), "gender", array()) == "male")) {
            echo "checked";
        }
        echo "\" for=\"profile_gender_0\">
            <input type=\"radio\" id=\"profile_gender_0\" name=\"profile[gender]\" value=\"male\" ";
        // line 82
        if (($this->getAttribute(($context["profile"] ?? null), "gender", array()) == "male")) {
            echo "checked";
        }
        echo " data-toggle=\"cd-radio\">
            ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.gender.male"), "html", null, true);
        echo "
          </label>

          <label class=\"cd-radio ";
        // line 86
        if (($this->getAttribute(($context["profile"] ?? null), "gender", array()) == "female")) {
            echo "checked";
        }
        echo "\" for=\"profile_gender_1\" >
            <input type=\"radio\" id=\"profile_gender_1\" name=\"profile[gender]\" value=\"female\" ";
        // line 87
        if (($this->getAttribute(($context["profile"] ?? null), "gender", array()) == "female")) {
            echo "checked";
        }
        echo " data-toggle=\"cd-radio\">
            ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.gender.female"), "html", null, true);
        echo "
          </label>
        </div>
      </div>
    </div>

    <div class=\"col-md-5\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_title\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.rank"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_title\" name=\"profile[title]\" class=\"form-control\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"col-md-5 col-md-offset-1\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_signature\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.personal_signature"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_signature\" name=\"profile[signature]\" class=\"form-control\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "signature", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "signature", array()), "")) : ("")), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"col-md-11\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_about\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.self_introduction"), "html", null, true);
        echo "</label>
        <textarea name=\"profile[about]\" rows=\"10\" id=\"profile_about\" class=\"form-control\" data-image-upload-url=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("user"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "about", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "about", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
      </div>
    </div>

    <div class=\"col-md-5\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_company\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.company_label"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_company\" name=\"profile[company]\" class=\"form-control\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "company", array()), "")) : ("")), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"col-md-5  col-md-offset-1\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_job\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.occupation"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_job\" name=\"profile[job]\" class=\"form-control\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "job", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "job", array()), "")) : ("")), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"col-md-5\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_site\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.personal_space"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_site\" name=\"profile[site]\" class=\"form-control\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "site", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "site", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"http://\">
      </div>
    </div>

    <div class=\"col-md-5  col-md-offset-1\">
      <div class=\"form-group cd-form-group\">
        <label for=\"weibo\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fileds.microblog"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"weibo\" name=\"profile[weibo]\" class=\"form-control\"  value=\"";
        // line 139
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "weibo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "weibo", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"http://\">
        <input class=\"hidden\" type=\"text\" name=\"profile[isWeiboPublic]\" value=\"1\"/>
        <div class=\"help-block\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.public"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"col-md-5\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_weixin\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fileds.wechat"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_weixin\" name=\"profile[weixin]\" class=\"form-control\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "weixin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "weixin", array()), "")) : ("")), "html", null, true);
        echo "\">
        <input class=\"hidden\" type=\"text\" name=\"profile[isWeixinPublic]\" value=\"1\"/>
      </div>
    </div>

    <div class=\"col-md-5  col-md-offset-1\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_qq\">";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fileds.qq"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_qq\" name=\"profile[qq]\" class=\"form-control\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "qq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "qq", array()), "")) : ("")), "html", null, true);
        echo "\">
        <input class=\"hidden\" type=\"text\" name=\"profile[isQQPublic]\" value=\"1\"/>
      </div>
    </div>

    ";
        // line 161
        if (($context["fields"] ?? null)) {
            // line 162
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 163
                echo "        <div class=\"
          ";
                // line 164
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 165
                    echo "            col-md-11
          ";
                } else {
                    // line 167
                    echo "            col-md-5 ";
                    if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                        echo "col-md-offset-1";
                    }
                    // line 168
                    echo "          ";
                }
                echo "\">
          <div class=\"form-group cd-form-group\">
            <label for=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                echo "</label>

            ";
                // line 172
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 173
                    echo "              <textarea id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" rows=\"4\" maxlength=\"80\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "</textarea>
            ";
                } elseif (($this->getAttribute(                // line 174
$context["field"], "type", array()) == "int")) {
                    // line 175
                    echo "              <input type=\"text\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.validate_rules.max_int"), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
            ";
                } elseif (($this->getAttribute(                // line 176
$context["field"], "type", array()) == "float")) {
                    // line 177
                    echo "              <input type=\"text\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.validate_rules.two_decimal_places"), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
            ";
                } elseif (($this->getAttribute(                // line 178
$context["field"], "type", array()) == "date")) {
                    // line 179
                    echo "              <input type=\"text\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"js-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
            ";
                } elseif (($this->getAttribute(                // line 180
$context["field"], "type", array()) == "varchar")) {
                    // line 181
                    echo "              <input type=\"text\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
            ";
                }
                // line 183
                echo "          </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "    ";
        }
        // line 187
        echo "
    <div class=\"col-md-11\">
      <button id=\"profile-save-btn\" data-loading-text=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn cd-btn cd-btn-primary cd-btn-lg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
";
    }

    public function getTemplateName()
    {
        return "settings/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 191,  481 => 189,  477 => 187,  474 => 186,  458 => 183,  448 => 181,  446 => 180,  435 => 179,  433 => 178,  422 => 177,  420 => 176,  409 => 175,  407 => 174,  398 => 173,  396 => 172,  389 => 170,  383 => 168,  378 => 167,  374 => 165,  372 => 164,  369 => 163,  351 => 162,  349 => 161,  341 => 156,  337 => 155,  327 => 148,  323 => 147,  314 => 141,  309 => 139,  305 => 138,  296 => 132,  292 => 131,  283 => 125,  279 => 124,  270 => 118,  266 => 117,  255 => 111,  251 => 110,  242 => 104,  238 => 103,  229 => 97,  225 => 96,  214 => 88,  208 => 87,  202 => 86,  196 => 83,  190 => 82,  184 => 81,  179 => 79,  173 => 75,  167 => 73,  161 => 71,  159 => 70,  155 => 69,  143 => 60,  137 => 57,  133 => 56,  129 => 55,  119 => 50,  114 => 47,  110 => 45,  108 => 44,  104 => 43,  98 => 40,  93 => 37,  91 => 31,  85 => 28,  78 => 24,  71 => 20,  68 => 19,  62 => 16,  59 => 15,  56 => 14,  53 => 13,  46 => 10,  43 => 9,  35 => 3,  31 => 1,  29 => 7,  27 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/profile.html.twig", "/vagrant_data/nuliedu/app/Resources/views/settings/profile.html.twig");
    }
}
