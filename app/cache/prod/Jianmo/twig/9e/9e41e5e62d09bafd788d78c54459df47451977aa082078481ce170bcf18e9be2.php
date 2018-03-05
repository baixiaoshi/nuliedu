<?php

/* activity/activity-form-layout.html.twig */
class __TwigTemplate_39d68c08e1889389470d290a6fc7374853155229ef14b5102b38d591495da2b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "activity/activity-form-layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'activity_content' => array($this, 'block_activity_content'),
            'activity_finish' => array($this, 'block_activity_finish'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "libs/iframe-resizer-contentWindow.js"), 500);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"tab-content\" id=\"iframe-content\">
    <div class=\"tab-pane js-course-tasks-pane active js-step2-view\">
      <form class=\"form-horizontal\" id=\"step2-form\" >
        <div class=\"form-group\">
          <div class=\"col-sm-2 control-label\">
          <label for=\"title\" class=\"control-label-required\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.title_name"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-sm-10\">
            <input id=\"title\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\" >
          </div>
        </div>

        ";
        // line 17
        $this->displayBlock('activity_content', $context, $blocks);
        // line 19
        echo "      </form>
    </div>
    <div class=\"tab-pane js-course-tasks-pane js-step3-view\">
      <form class=\"form-horizontal\" id=\"step3-form\" >
        ";
        // line 23
        $this->displayBlock('activity_finish', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $context["task"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("TaskByActivity", array("courseId" => (($this->getAttribute(($context["activity"] ?? null), "fromCourseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "fromCourseId", array()), 0)) : (0)), "activityId" => (($this->getAttribute(($context["activity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "id", array()), 0)) : (0))));
        // line 27
        echo "        <div class=\"form-group\">
          <div class=\"col-sm-10 col-sm-offset-2 radios\">
            <label>
              <input type=\"checkbox\" name=\"isOptional\" value=\"1\" ";
        // line 30
        if (((($this->getAttribute(($context["task"] ?? null), "isOptional", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["task"] ?? null), "isOptional", array()), false)) : (false)) || (twig_test_empty(($context["task"] ?? null)) && ((array_key_exists("optionalDefault", $context)) ? (_twig_default_filter(($context["optionalDefault"] ?? null), 0)) : (0))))) {
            echo " checked ";
        }
        echo ">
               ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.setup_is_option"), "html", null, true);
        echo "
            </label>
              <span class=\"color-gray\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.setup_is_option_tips"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </form>
    </div>
  </div>
";
    }

    // line 17
    public function block_activity_content($context, array $blocks = array())
    {
        // line 18
        echo "        ";
    }

    // line 23
    public function block_activity_finish($context, array $blocks = array())
    {
        // line 24
        echo "        ";
    }

    public function getTemplateName()
    {
        return "activity/activity-form-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  105 => 23,  101 => 18,  98 => 17,  87 => 33,  82 => 31,  76 => 30,  71 => 27,  69 => 26,  66 => 25,  64 => 23,  58 => 19,  56 => 17,  49 => 13,  43 => 10,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/activity-form-layout.html.twig", "/vagrant_data/nuliedu/app/Resources/views/activity/activity-form-layout.html.twig");
    }
}
