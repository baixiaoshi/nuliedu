<?php

/* course-manage/chapter/list-item.html.twig */
class __TwigTemplate_73f8277809974352d5cb346abf793f148d569ea62a9387e91cdea890466988c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li id=\"chapter-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chapter"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"task-manage-item drag task-manage-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chapter"] ?? null), "type", array()), "html", null, true);
        echo " js-task-manage-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chapter"] ?? null), "type", array()), "html", null, true);
        echo " clearfix\">
  <div class=\"item-content\">
    ";
        // line 3
        if (($this->getAttribute(($context["chapter"] ?? null), "type", array()) == "chapter")) {
            // line 4
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.which_chapter", array("%chapterNumber%" => $this->getAttribute(($context["chapter"] ?? null), "number", array()), "%chapter%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.chapter")), "%title%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute(($context["chapter"] ?? null), "title", array()), 30)));
            echo "
    ";
        } elseif (($this->getAttribute(        // line 5
($context["chapter"] ?? null), "type", array()) == "unit")) {
            // line 6
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.which_part", array("%chapterNumber%" => $this->getAttribute(($context["chapter"] ?? null), "number", array()), "%part%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("part"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.part")), "%title%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute(($context["chapter"] ?? null), "title", array()), 30)));
            echo "
    ";
        } elseif (($this->getAttribute(        // line 7
($context["chapter"] ?? null), "type", array()) == "lesson")) {
            // line 8
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.which_task", array("%chapterNumber%" => $this->getAttribute(($context["chapter"] ?? null), "number", array()), "%task%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.task"), "%title%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute(($context["chapter"] ?? null), "title", array()), 30)));
            echo "
    ";
        }
        // line 10
        echo "  </div>
  <div class=\"item-actions\">
    <span class=\"dropdown\">
      <a class=\"dropdown-toggle dropdown-more btn gray-darker\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-anonymous-iconfont mrs\"></i>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.create_btn"), "html", null, true);
        echo "
      </a>
      <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\" aria-labelledby=\"dLabel\" style=\"display:none;\">
        ";
        // line 16
        if (($this->getAttribute(($context["chapter"] ?? null), "type", array()) == "chapter")) {
            // line 17
            echo "          <li>
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "unit", "parentId" => ("chapter-" . $this->getAttribute(($context["chapter"] ?? null), "id", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.create_part", array("%partName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("part"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.part")))), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 21
        echo "        ";
        if (($this->getAttribute(($context["chapter"] ?? null), "type", array()) != "lesson")) {
            // line 22
            echo "          <li>
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "lesson", "chapterId" => ("chapter-" . $this->getAttribute(($context["chapter"] ?? null), "id", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.create_task"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 26
        echo "      </ul>
    </span>

    <a class=\"btn gray-darker\" href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_edit", array("chapterId" => $this->getAttribute(($context["chapter"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
      <i class=\"es-icon es-icon-edit mrs\"></i>
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.edit_btn"), "html", null, true);
        echo "
    </a>
    <a href=\"javascript:;\" class=\"btn gray-darker delete-item\" data-type=\"chapter\" data-url=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_delete", array("chapterId" => $this->getAttribute(($context["chapter"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
      <i class=\"es-icon es-icon-delete mrs\"></i>
      ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.delete_btn"), "html", null, true);
        echo "
    </a>
    ";
        // line 37
        if (($this->getAttribute(($context["chapter"] ?? null), "type", array()) == "chapter")) {
            // line 38
            echo "      <a href=\"javascript:;\" class=\"btn gray-darker js-chapter-toggle-show\">
        <i class=\"es-icon  es-icon-keyboardarrowup mr5 js-remove-icon\"></i>
        <span class=\"js-remove-text\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起"), "html", null, true);
            echo "</span>
      </a>
    ";
        }
        // line 43
        echo "  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "course-manage/chapter/list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  120 => 40,  116 => 38,  114 => 37,  109 => 35,  104 => 33,  99 => 31,  94 => 29,  89 => 26,  81 => 23,  78 => 22,  75 => 21,  67 => 18,  64 => 17,  62 => 16,  56 => 13,  51 => 10,  45 => 8,  43 => 7,  38 => 6,  36 => 5,  31 => 4,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/chapter/list-item.html.twig", "/vagrant_data/nuliedu/app/Resources/views/course-manage/chapter/list-item.html.twig");
    }
}
