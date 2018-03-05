<?php

/* course-manage/info.html.twig */
class __TwigTemplate_e0e408f177f76cc8e54c4bd15b2e630f0fcffd2fa771bcf2f2535baa2f5a9955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCount($this->getAttribute(($context["course"] ?? null), "courseSetId", array())) > 1)) ? ("course") : ("courseset")) . "-manage/layout.html.twig"), "course-manage/info.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "info";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-validation.js", 2 => "libs/bootstrap-datetimepicker.js", 3 => "app/js/course-manage/info/index.js"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"panel panel-default\" role=\"course-manage-info\">
    ";
        // line 9
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/info.html.twig", 9)->display(array_merge($context, array("code" => ($context["side_nav"] ?? null))));
        // line 10
        echo "    <div class=\"panel-body\">
      ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <form class=\"form-horizontal\" role=\"form\" id=\"course-info-form\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"form-group\">
          <div class=\"col-sm-2 control-label\">
          <label for=\"title\" class=\"control-label-required\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.name"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-sm-8\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"courseSetId\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\">
            <input class=\"form-control\" type=\"text\" id=\"title\" name=\"title\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-sm-2 control-label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode"), "html", null, true);
        echo "</label>
          <div class=\"col-sm-8 form-control-static\">
             ";
        // line 27
        if (((($this->getAttribute(($context["course"] ?? null), "learnMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "learnMode", array()), "freeMode")) : ("freeMode")) == "freeMode")) {
            // line 28
            echo "               ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode.free"), "html", null, true);
            echo "<a class=\"es-icon es-icon-help ml5 link-gray\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" data-content=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode.free_tips"), "html", null, true);
            echo "\"></a>
             ";
        } else {
            // line 30
            echo "               ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode.locked"), "html", null, true);
            echo "<a class=\"es-icon es-icon-help ml5 link-gray\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" data-content=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode.locked_tips"), "html", null, true);
            echo "\"></a>
               <p class=\"help-block\" id=\"learnLockModeHelp\" data-role=\"tab-content\" >";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(""), "html", null, true);
            echo "</p>
             ";
        }
        // line 33
        echo "          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-sm-2 control-label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule"), "html", null, true);
        echo "</label>
          <div class=\"col-sm-8 radios\">
            <label>
              <input type=\"radio\" name=\"enableFinish\" value=\"0\" ";
        // line 39
        if (((($this->getAttribute(($context["course"] ?? null), "enableFinish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableFinish", array()), "0")) : ("0")) == 0)) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule.depend_on_finish_condition"), "html", null, true);
        echo "
              <a class=\"es-icon es-icon-help ml5 link-gray\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" data-content=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule.depend_on_finish_condition_tips"), "html", null, true);
        echo "\"></a>
            </label>
            <label>
              <input type=\"radio\" name=\"enableFinish\" value=\"1\" ";
        // line 43
        if (((($this->getAttribute(($context["course"] ?? null), "enableFinish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableFinish", array()), "0")) : ("0")) == 1)) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule.nothing"), "html", null, true);
        echo "
            </label>
          </div>
        </div>
        
        ";
        // line 48
        if (((($context["audioServiceStatus"] ?? null) != "needOpen") && ($this->getAttribute(($context["course"] ?? null), "type", array()) == "normal"))) {
            // line 49
            echo "          <div class=\"form-group\" id=\"audio-modal-id\">
            <label for=\"\" class=\"col-sm-2 control-label\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.enable"), "html", null, true);
            echo "</label>
            <div class=\"col-sm-8 radios\" data-value=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["audioServiceStatus"] ?? null), "html", null, true);
            echo "\" id=\"course-audio-mode\">
              <label>
                <input type=\"radio\" name=\"enableAudio\" value=\"1\" ";
            // line 53
            if (((($this->getAttribute(($context["course"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableAudio", array()), "0")) : ("0")) == 1)) {
                echo "checked";
            }
            echo ">
                ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.start"), "html", null, true);
            echo "
              </label>
              <label>
                <input type=\"radio\" name=\"enableAudio\" value=\"0\" ";
            // line 57
            if (((($this->getAttribute(($context["course"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableAudio", array()), "0")) : ("0")) == 0)) {
                echo "checked";
            }
            echo ">
                ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.close"), "html", null, true);
            echo "
              </label>
              <div>
                <label>1.";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.enable.video.convert.audio.benefit"), "html", null, true);
            echo "</label>
                <label>2.";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.audio.status"), "html", null, true);
            echo "：";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\CourseExtension')->getAudioConvertionStatus($this->getAttribute(($context["course"] ?? null), "id", array())), "html", null, true);
            echo " <a class=\"ml5\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_files", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array(), "array"))), "html", null, true);
            echo "\" target=\"__blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.audio.detail"), "html", null, true);
            echo "</a></label>
              </div>
            </div>
          </div>
        ";
        }
        // line 67
        echo "        ";
        // line 68
        echo "        ";
        // line 110
        echo "        ";
        if (($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "live")) {
            // line 111
            echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\" for=\"maxStudentNum-field\">";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.member_numbers"), "html", null, true);
            echo "</label>
            <div class=\"col-md-10 controls\">
              <input type=\"text\" id=\"maxStudentNum-field\" name=\"maxStudentNum\" class=\"form-control width-input width-input-large\"
                value=\"";
            // line 115
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "maxStudentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "maxStudentNum", array()), "")) : ("")), "html", null, true);
            echo "\" data-live-capacity-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_live_capacity", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\" data-explain=\"\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.people"), "html", null, true);
            echo "
              <div class=\"help-block\" style=\"display:none;\"></div></div>
            <div class=\"col-md-offset-2 col-md-10 js-course-rule\">
              <p class=\"alert-warning\"></p>
              <a href=\"";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("content_course_rule");
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.member_numbers.view_rule_btn"), "html", null, true);
            echo "</a>
            </div>
          </div>
        ";
        }
        // line 123
        echo "
        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">
            <label>";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.summary"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-md-8 controls\">
            <textarea class=\"form-control invisible\" name=\"summary\" rows=\"10\" id=\"summary\" data-image-upload-url=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->fieldValue(($context["course"] ?? null), "summary");
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group dynamic-collection\" id=\"course-goals-form-group\">
          <div class=\"col-md-2 control-label\">
            <label>";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.target"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-md-8 controls\">
            <div id=\"course-goals\" data-field-name=\"goals\" data-init-value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->jsonEncodeUtf8((($this->getAttribute(($context["course"] ?? null), "goals", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "goals", array()), array())) : (array()))), "html", null, true);
        echo "\"></div>
          </div>
        </div>
        <div class=\"form-group\" id=\"course-audiences-form-group\">
          <div class=\"col-md-2 control-label\">
            <label>";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.audiences"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-md-8 controls\">
            <div id=\"intended-students\" data-field-name=\"audiences\" data-init-value=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->jsonEncodeUtf8((($this->getAttribute(($context["course"] ?? null), "audiences", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "audiences", array()), array())) : (array()))), "html", null, true);
        echo "\"></div>
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"col-sm-offset-2 col-sm-8\">
            <button id=\"course-submit\" type=\"button\" class=\"btn btn-primary\" data-loading-text=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
            <div id=\"test\"></div>
          </div>
        </div>
      </form>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 150,  286 => 145,  280 => 142,  272 => 137,  266 => 134,  256 => 129,  250 => 126,  245 => 123,  236 => 119,  225 => 115,  219 => 112,  216 => 111,  213 => 110,  211 => 68,  209 => 67,  195 => 62,  191 => 61,  185 => 58,  179 => 57,  173 => 54,  167 => 53,  162 => 51,  158 => 50,  155 => 49,  153 => 48,  141 => 43,  135 => 40,  127 => 39,  121 => 36,  116 => 33,  111 => 31,  104 => 30,  96 => 28,  94 => 27,  89 => 25,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  64 => 15,  58 => 12,  54 => 11,  51 => 10,  49 => 9,  46 => 8,  43 => 7,  33 => 3,  29 => 1,  27 => 5,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/info.html.twig", "/vagrant_data/nuliedu/app/Resources/views/course-manage/info.html.twig");
    }
}
