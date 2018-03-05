<?php

/* activity/video/modal.html.twig */
class __TwigTemplate_ac131a97f94b302339b6c47806fdade7b862ab35c3df8f7ee43062f8efaad88b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/activity-form-layout.html.twig", "activity/video/modal.html.twig", 1);
        $this->blocks = array(
            'activity_content' => array($this, 'block_activity_content'),
            'activity_finish' => array($this, 'block_activity_finish'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/activity-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("uploader"), 1 => "libs/perfect-scrollbar.js", 2 => "app/js/activity-manage/video/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_activity_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"form-group\">
    <div class=\"col-sm-2 control-label\">
      <label for=\"media\" class=\"style control-label-required\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-10\">
      ";
        // line 11
        if (((($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array()), null)) : (null)) && ($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array()), "mediaSource", array()) != "self"))) {
            // line 12
            echo "        ";
            $context["selectedFile"] = array("status" => "none", "source" => $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array()), "mediaSource", array()), "uri" => $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array()), "mediaUri", array()));
            // line 13
            echo "      ";
        }
        // line 14
        echo "      ";
        $this->loadTemplate("file-chooser/file-choose.html.twig", "activity/video/modal.html.twig", 14)->display(array_merge($context, array("mediaType" => "video", "fileType" => "video", "file" => (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "file", array()), null)) : (null)), "link" => (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array()), null)) : (null)), "selectedFile" => ((array_key_exists("selectedFile", $context)) ? (_twig_default_filter(($context["selectedFile"] ?? null), null)) : (null)))));
        // line 15
        echo "    </div>
  </div>
  <div class=\"form-group for-video-type\" id=\"lesson-length-form-group\">
    <div class=\"col-sm-2 control-label for-video-type\">
      <label class=\"control-label-required\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video.time"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-10\">
      <input id=\"mediaId\" class=\"form-control\" type=\"hidden\" name=\"mediaId\" value=";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "mediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "mediaId", array()), null)) : (null)), "html", null, true);
        echo ">
      <!-- todo:mediaId 和 ext_mediaId的字段整改 -->
      <input class=\"form-control width-150 js-length\" id=\"minute\" type=\"text\" name=\"minute\"
             value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "minute", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "minute", array()), null)) : (null)), "html", null, true);
        echo "\"><span class=\"mhs\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.date.minute"), "html", null, true);
        echo "</span><input
          class=\"form-control width-150 js-length\" id=\"second\" type=\"text\" name=\"second\"
          value=\"";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "second", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "second", array()), null)) : (null)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.date.second"), "html", null, true);
        echo "
      <input type=\"hidden\" id=\"length\" name=\"length\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "length", array()), 0)) : (0)), "html", null, true);
        echo "\">
    </div>
  </div>

  ";
        // line 32
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") == "cloud") && ((($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array()), "self")) : ("self")) == "self"))) {
            // line 33
            echo "    <div class=\"form-group for-video-subtitle\" id=\"video-subtitle-form-group\">
      <div class=\"col-sm-2 control-label for-video-subtitle\">
        <label class=\"control-label\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video.subtitle"), "html", null, true);
            echo "</label>
      </div>

      <div class=\"col-sm-10 controls js-subtitle-list\" data-dialog-url=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_subtitle_manage_dialog");
            echo "\">
        <p style=\"margin-top:6px;color:#a1a1a1\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video.add_subtitle_tips"), "html", null, true);
            echo "</p>
      </div>
      <div class=\"col-sm-offset-2 help-block\">
        <p style=\"margin-left:10px;\">
          ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video.code_convert_tips");
            echo "
        </p>
      </div>

      <input id=\"ext_mediaId_for_subtitle\" class=\"form-control\" type=\"hidden\" value=";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaId", array()), null)) : (null)), "html", null, true);
            echo ">
    </div>
  ";
        }
        // line 50
        echo "
";
    }

    // line 53
    public function block_activity_finish($context, array $blocks = array())
    {
        // line 54
        echo "  <div class=\" form-group\">
    <div class=\"col-sm-2 control-label\">
      <label>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.finished_condition"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-4\">
      <select id=\"finish-condition\" name=\"finishType\" class=\"form-control\">
        ";
        // line 60
        $context["finishType"] = (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "finishType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "finishType", array()), "end")) : ("end"));
        // line 61
        echo "        <option value=\"end\" ";
        if ((($context["finishType"] ?? null) == "end")) {
            echo " selected ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video.last"), "html", null, true);
        echo "</option>
        <option value=\"time\" ";
        // line 62
        if ((($context["finishType"] ?? null) == "time")) {
            echo " selected ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video.learn_time"), "html", null, true);
        echo "</option>
      </select>
    </div>
  </div>

  <div class=\" form-group hidden viewLength\">
    <div class=\"col-sm-2 control-label\">
      <label>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.ppt.lear_at_least_time"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-4 controls\">
      <input id=\"condition-detail\" class=\"form-control\" type=\"text\" name=\"finishDetail\" value=\"";
        // line 72
        if (((($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "finishDetail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "finishDetail", array()), 1)) : (1)) != 0)) {
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "finishDetail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "finishDetail", array()), 1)) : (1)), "html", null, true);
        } else {
            echo "1";
        }
        echo "\">
    </div>
    <div class=\"col-sm-4 controls\">
      <p class=\"form-control-static\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.date.minute"), "html", null, true);
        echo "</p>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "activity/video/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 75,  180 => 72,  174 => 69,  160 => 62,  151 => 61,  149 => 60,  142 => 56,  138 => 54,  135 => 53,  130 => 50,  124 => 47,  117 => 43,  110 => 39,  106 => 38,  100 => 35,  96 => 33,  94 => 32,  87 => 28,  81 => 27,  74 => 25,  68 => 22,  62 => 19,  56 => 15,  53 => 14,  50 => 13,  47 => 12,  45 => 11,  39 => 8,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/video/modal.html.twig", "/vagrant_data/nuliedu/app/Resources/views/activity/video/modal.html.twig");
    }
}
