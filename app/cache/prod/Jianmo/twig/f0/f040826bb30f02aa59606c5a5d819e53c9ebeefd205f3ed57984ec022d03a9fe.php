<?php

/* course-manage/tasks/default-tasks.html.twig */
class __TwigTemplate_ffddf29e4401b226951a249965bf06d9be5321a6a095034d18a6a80c5d489498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/tasks/layout.html.twig", "course-manage/tasks/default-tasks.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/tasks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-sortable.js", 1 => "app/js/course-manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"panel panel-default\">
    ";
        // line 6
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/tasks/default-tasks.html.twig", 6)->display(array_merge($context, array("code" => ($context["side_nav"] ?? null))));
        // line 7
        echo "    <div class=\"panel-body\">
      <div class=\"task-list-header clearfix js-task-list-header\">

        ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.total_tasks"), "html", null, true);
        echo "<span class=\"color-warning space\" id=\"task-num\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "taskNum", array()), "html", null, true);
        echo "</span>  ";
        if (((array_key_exists("taskPerDay", $context)) ? (_twig_default_filter(($context["taskPerDay"] ?? null), false)) : (false))) {
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.everyday_finish_tasks", array("%taskPerDay%" => ($context["taskPerDay"] ?? null)));
        }
        // line 11
        echo "        <div class=\"pull-right\">
          <button class=\"btn btn-primary btn-sm\" id=\"step-3\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "lesson")), "html", null, true);
        echo "\"> <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.create_btn"), "html", null, true);
        echo "
          </button>
          ";
        // line 15
        if (((($this->getAttribute(($context["courseSet"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "type", array()), "")) : ("")) == "normal")) {
            // line 16
            echo "          <button class=\"btn btn-default btn-sm js-batch-add
            ";
            // line 17
            if ( !(((($this->getAttribute(($context["courseSet"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "type", array()), "")) : ("")) == "normal") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
                // line 18
                echo "            disabled
            ";
            }
            // line 19
            echo "\"
            ";
            // line 20
            if ( !(((($this->getAttribute(($context["courseSet"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "type", array()), "")) : ("")) == "normal") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
                // line 21
                echo "              data-toggle=\"popover\" data-placement=\"top\" data-trigger=\"hover\" data-container=\".js-batch-add\"
              data-content='";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.batch_create_tips"), "html", null, true);
                echo "'
            ";
            } else {
                // line 24
                echo "              data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
              data-url=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_batch_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "mode" => "lesson", "token" => $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken("course-task", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "private"))), "html", null, true);
                echo "\"
            ";
            }
            // line 26
            echo ">
            <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.batch_create_btn"), "html", null, true);
            echo "
          </button>
          ";
        }
        // line 31
        echo "          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-default dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
              ";
        // line 34
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.chapter")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("part"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.part")), "html", null, true);
        echo "
              <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li>
                <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"
                  data-keyboard=\"false\" data-url=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
                  <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
                  ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.add_chapter_btn", array("%chapter_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.chapter")))), "html", null, true);
        echo "
                </a>
              </li>
              <li>
                <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"
                  data-keyboard=\"false\" data-url=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "unit")), "html", null, true);
        echo "\">
                  <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
                  ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.add_part_btn", array("%part_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("part"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.part")))), "html", null, true);
        echo "
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul id=\"sortable-list\" class=\"task-manage-list sortable-list\"
          data-sort-url='";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_items_sort", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "'>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 59
            echo "          ";
            if (($this->getAttribute($context["item"], "type", array()) == "lesson")) {
                // line 60
                echo "            ";
                $this->loadTemplate("task-manage/item/default-list-item.html.twig", "course-manage/tasks/default-tasks.html.twig", 60)->display(array_merge($context, array("task" => $context["item"])));
                // line 61
                echo "          ";
            } else {
                // line 62
                echo "            ";
                $this->loadTemplate("course-manage/chapter/list-item.html.twig", "course-manage/tasks/default-tasks.html.twig", 62)->display(array_merge($context, array("chapter" => $context["item"], "course" => ($context["course"] ?? null))));
                // line 63
                echo "          ";
            }
            // line 64
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "      </ul>
      <div class=\"empty task-empty js-task-empty ";
        // line 66
        if (($context["items"] ?? null)) {
            echo "  hidden ";
        }
        echo "\">
        <i class=\"es-icon es-icon-book task-empty-icon\"></i>
        ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.empty"), "html", null, true);
        echo "
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/tasks/default-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 68,  204 => 66,  201 => 65,  187 => 64,  184 => 63,  181 => 62,  178 => 61,  175 => 60,  172 => 59,  155 => 58,  151 => 57,  140 => 49,  135 => 47,  127 => 42,  122 => 40,  111 => 34,  106 => 31,  100 => 28,  96 => 26,  91 => 25,  88 => 24,  83 => 22,  80 => 21,  78 => 20,  75 => 19,  71 => 18,  69 => 17,  66 => 16,  64 => 15,  59 => 13,  55 => 12,  52 => 11,  44 => 10,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/tasks/default-tasks.html.twig", "/vagrant_data/nuliedu/app/Resources/views/course-manage/tasks/default-tasks.html.twig");
    }
}
