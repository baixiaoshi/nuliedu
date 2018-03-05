<?php

/* admin/system/course-setting.html.twig */
class __TwigTemplate_7517a5f829083da4954d7f09c0c2d83d1a4d818cf44fb3ba241cc5ae4cdf46c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/course-setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_course";
        // line 4
        $context["script_controller"] = "setting/course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>
    <legend>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_rule"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >
          ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.send_welcome_messages"), "html", null, true);
        echo "
        </label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 22
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("welcome_message_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.closed")), $this->getAttribute(($context["courseSetting"] ?? null), "welcome_message_enabled", array()));
        echo "
      <p class=\"help-block\">
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_rule.help_block"), "html", null, true);
        echo "
      </p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_message_body\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.welcome_messages_content"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_message_body\" name=\"welcome_message_body\" class=\"form-control\" rows=\"5\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSetting"] ?? null), "welcome_message_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">

          <div>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.welcome_messages_content.Variables"), "html", null, true);
        echo "</div>
          <ul>
            <li>";
        // line 39
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.welcome_messages_content.as_recipient_user_name"), "html", null, true);
        echo "</li>
            <li>";
        // line 40
        echo "{{course}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.welcome_messages_content.as_course_name"), "html", null, true);
        echo "</li>
          </ul>

        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_detail_show_relevant_course"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 52
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("relatedCourses", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.closed")), $this->getAttribute(($context["courseSetting"] ?? null), "relatedCourses", array()));
        echo "
        <div class=\"help-block\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_detail_show_relevant_course.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.authority_and_copyright"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.allow_teacher_manage_course_marketing"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 65
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("teacher_manage_marketing", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.yes"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.no")), $this->getAttribute(($context["courseSetting"] ?? null), "teacher_manage_marketing", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.allow_teacher_search_course_order"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 74
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("teacher_search_order", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.yes"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.no")), $this->getAttribute(($context["courseSetting"] ?? null), "teacher_search_order", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.allow_teacher_add_or_remove"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 83
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("teacher_manage_student", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.yes"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.no")), $this->getAttribute(($context["courseSetting"] ?? null), "teacher_manage_student", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.allow_teacher_export_material"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 92
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("teacher_export_student", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.yes"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.no")), $this->getAttribute(($context["courseSetting"] ?? null), "teacher_export_student", array()));
        echo "
      </div>
    </div>
    ";
        // line 95
        $context["smsSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms");
        // line 96
        echo "    ";
        if (((($this->getAttribute(($context["smsSetting"] ?? null), "sms_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["smsSetting"] ?? null), "sms_enabled", array()), 0)) : (0)) && (((($this->getAttribute(($context["smsSetting"] ?? null), "sms_normal_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["smsSetting"] ?? null), "sms_normal_lesson_publish", array()), "off")) : ("off")) == "on") || ((($this->getAttribute(($context["smsSetting"] ?? null), "sms_live_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["smsSetting"] ?? null), "sms_live_lesson_publish", array()), "off")) : ("off")) == "on")))) {
            // line 97
            echo "    ";
        }
        // line 98
        echo "    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_list_page_seq"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 103
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("explore_default_orderBy", array("latest" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.latest"), "studentNum" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.hotest"), "recommendedSeq" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.recommended")), $this->getAttribute(($context["courseSetting"] ?? null), "explore_default_orderBy", array()));
        echo "
        <p class=\"help-block\"><a target=\"_blank\" href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_list_page.help_block"), "html", null, true);
        echo "</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_list_page_seq.help_block"), "html", null, true);
        echo "</p>
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.Prevent_copying_rich_text_doc"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 113
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("copy_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.closed")), $this->getAttribute(($context["courseSetting"] ?? null), "copy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.Prevent_copying_test_paper"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 123
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("testpaperCopy_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.closed")), $this->getAttribute(($context["courseSetting"] ?? null), "testpaperCopy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_operation_mode"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_operation_mode.free_try_view"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 138
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("allowAnonymousPreview", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.allow"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.not_allow")), $this->getAttribute(($context["courseSetting"] ?? null), "allowAnonymousPreview", array()));
        echo "
        <div class=\"help-block\">";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_operation_mode.free_try_view.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_operation_mode.allow_show_user_count"), "html", null, true);
        echo "</label>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 146
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("show_student_num_enabled", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.open"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.closed")), (($this->getAttribute(($context["courseSetting"] ?? null), "show_student_num_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSetting"] ?? null), "show_student_num_enabled", array()), "1")) : ("1")));
        echo "
      </div>
    </div>

  </fieldset>

  <fieldset>
      <legend>";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.customer_chapter_section_name"), "html", null, true);
        echo "</legend>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label>";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置章节名称"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8 radios\">
            ";
        // line 160
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("custom_chapter_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), (($this->getAttribute(($context["courseSetting"] ?? null), "custom_chapter_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSetting"] ?? null), "custom_chapter_enabled", array()), true)) : (true)));
        echo "
          <div class=\"help-block\">
              ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后，在课时管理中添加章,节时，系统会自动生成按如下设置的章节名称。"), "html", null, true);
        echo "</div>
        </div>
      </div>

      <div class=\"";
        // line 166
        if ( !$this->getAttribute(($context["courseSetting"] ?? null), "custom_chapter_enabled", array())) {
            echo "hide";
        }
        echo "\" id=\"show_course_chapter_name\">
        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"chapter_name\">";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task_chapter_name"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"chapter_name\" name=\"chapter_name\" class=\"form-control\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["defaultSetting"] ?? null), "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["defaultSetting"] ?? null), "chapter_name", array()), "admin.setting_course.chapter")) : ("admin.setting_course.chapter")), "html", null, true);
        echo "\">
          </div>
        </div>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"part_name\">";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task_section_name"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"part_name\" name=\"part_name\" class=\"form-control\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["defaultSetting"] ?? null), "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["defaultSetting"] ?? null), "part_name", array()), "admin.setting_course.section")) : ("admin.setting_course.section")), "html", null, true);
        echo "\">
          </div>
        </div>
      </div>
    <div class=\"alert alert-info deduction text-center\">
    <p><strong>
    ";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.customer_chapter_section_name.tips"), "html", null, true);
        echo "
    </strong></p>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "admin/system/course-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 198,  379 => 195,  368 => 187,  359 => 181,  353 => 178,  344 => 172,  338 => 169,  330 => 166,  323 => 162,  318 => 160,  312 => 157,  305 => 153,  295 => 146,  290 => 144,  282 => 139,  278 => 138,  272 => 135,  265 => 131,  254 => 123,  248 => 120,  238 => 113,  232 => 110,  219 => 104,  215 => 103,  209 => 100,  205 => 98,  202 => 97,  199 => 96,  197 => 95,  191 => 92,  185 => 89,  176 => 83,  169 => 80,  160 => 74,  154 => 71,  145 => 65,  139 => 62,  133 => 59,  124 => 53,  120 => 52,  114 => 49,  100 => 40,  94 => 39,  89 => 37,  83 => 34,  77 => 31,  67 => 24,  62 => 22,  55 => 18,  48 => 14,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/course-setting.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/course-setting.html.twig");
    }
}
