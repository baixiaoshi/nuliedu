<?php

/* course-manage/chapter/chapter-modal.html.twig */
class __TwigTemplate_7f920288103eb89f0b260911022ab9486fbd03295c218a3ff0da22b0c6493bf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "course-manage/chapter/chapter-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/course-chapter-manage/index.js"));
        // line 5
        $context["chapter"] = ((array_key_exists("chapter", $context)) ? (_twig_default_filter(($context["chapter"] ?? null), null)) : (null));
        // line 53
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if (($context["chapter"] ?? null)) {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.edit_btn"), "html", null, true);
            echo "
  ";
        } else {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.create_btn"), "html", null, true);
            echo "
  ";
        }
        // line 13
        echo "
  ";
        // line 14
        if ((($context["type"] ?? null) == "unit")) {
            // line 15
            echo "    ";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("part"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.part")), "html", null, true);
            echo "
  ";
        } elseif ((        // line 16
($context["type"] ?? null) == "lesson")) {
            // line 17
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.task"), "html", null, true);
            echo "
  ";
        } else {
            // line 19
            echo "    ";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.chapter")), "html", null, true);
            echo "
  ";
        }
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "<form id=\"course-chapter-form\" class=\"form-horizontal\" method=\"post\" ";
        if (array_key_exists("parentId", $context)) {
            echo "data-parentId=\"";
            echo twig_escape_filter($this->env, ($context["parentId"] ?? null), "html", null, true);
            echo "\" ";
        }
        // line 25
        echo "  ";
        if (($context["chapter"] ?? null)) {
            // line 26
            echo "\t  action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_edit", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "chapterId" => $this->getAttribute(($context["chapter"] ?? null), "id", array()))), "html", null, true);
            echo "\"
\t";
        } else {
            // line 28
            echo "\t  action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 30
        echo "  >
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      ";
        // line 33
        if ((($context["type"] ?? null) == "unit")) {
            // line 34
            echo "        <label for=\"chapter-title-field\">";
            if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("part")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("part"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.part")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.part"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.title"), "html", null, true);
            echo "</label>
      ";
        } elseif ((        // line 35
($context["type"] ?? null) == "lesson")) {
            // line 36
            echo "        <label for=\"chapter-title-field\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.task"), "html", null, true);
            echo "</label>
      ";
        } else {
            // line 38
            echo "        <label for=\"chapter-title-field\">";
            if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.chapter")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.chapter"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.title"), "html", null, true);
            echo "</label>
      ";
        }
        // line 40
        echo "    </div>
    <div class=\"col-md-8 controls\"><input id=\"chapter-title-field\" type=\"text\" name=\"title\" value=\"";
        // line 41
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->fieldValue(($context["chapter"] ?? null), "title");
        echo "\" class=\"form-control\"></div>
  </div>
  <input type=\"hidden\" name=\"type\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">
</form>

";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "</button>
    <button id=\"course-chapter-btn\" data-loading-text=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit.submiting"), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-chapter-form\" data-chapter=\"";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.chapter")), "html", null, true);
        echo "\" data-part=\"";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("part"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.part")), "html", null, true);
        echo "\">";
        if (($context["chapter"] ?? null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.add"), "html", null, true);
        }
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "course-manage/chapter/chapter-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 50,  161 => 49,  158 => 48,  150 => 43,  145 => 41,  142 => 40,  131 => 38,  125 => 36,  123 => 35,  113 => 34,  111 => 33,  106 => 30,  100 => 28,  94 => 26,  91 => 25,  84 => 24,  81 => 23,  73 => 19,  67 => 17,  65 => 16,  60 => 15,  58 => 14,  55 => 13,  49 => 11,  43 => 9,  40 => 8,  37 => 7,  33 => 1,  31 => 53,  29 => 5,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/chapter/chapter-modal.html.twig", "/vagrant_data/nuliedu/app/Resources/views/course-manage/chapter/chapter-modal.html.twig");
    }
}
