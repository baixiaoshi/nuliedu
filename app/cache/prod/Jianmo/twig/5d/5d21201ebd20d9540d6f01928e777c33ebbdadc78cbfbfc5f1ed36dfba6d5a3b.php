<?php

/* course/task-list/default-task-list.html.twig */
class __TwigTemplate_bebec509a11c8a2e3fb525ad17c29f727bd5ed593623c238e9c53d07c8050608 extends Twig_Template
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
        echo "<div class=\"course-detail-content\">

  ";
        // line 3
        if ((($context["courseItems"] ?? null) && ($this->getAttribute($this->getAttribute(($context["courseItems"] ?? null), 0, array(), "array"), "seq", array(), "array") != 1))) {
            // line 4
            echo "    <a class=\"js-up-more-link link-gray center-block text-center\" href=\"javascript:\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_paging_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "offsetSeq" => ($this->getAttribute($this->getAttribute(($context["courseItems"] ?? null), 0, array(), "array"), "seq", array(), "array") - 1), "direction" => "up")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.click_loading_more"), "html", null, true);
            echo "</a>
  ";
        }
        // line 6
        echo "
  <ul class=\"task-list task-list-md task-list-hover infinite-container\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseItems"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !(($this->getAttribute($context["item"], "itemType", array()) == "task") && $this->getAttribute($context["item"], "isOptional", array()))) {
                // line 9
                echo "      ";
                $context["file"] = (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "activity", array(), "any", false, true), "ext", array(), "any", false, true), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "activity", array(), "any", false, true), "ext", array(), "any", false, true), "file", array()))) : (""));
                // line 10
                echo "      ";
                if (($this->getAttribute($context["item"], "itemType", array()) == "chapter")) {
                    // line 11
                    echo "        <li class=\"task-item bg-gray-lighter js-task-chapter infinite-item\"><i class=\"es-icon es-icon-menu left-menu\"></i>
          <a href=\"javascript:\" class=\"title gray-dark\">";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.chapter", array("%chapter_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter"), "章"), "%number%" => $this->getAttribute($context["item"], "number", array()), "%title%" => $this->getAttribute($context["item"], "title", array()))), "html", null, true);
                    echo "</a>
          <i class=\"right-menu es-icon es-icon-remove js-remove-icon\"></i>
        </li>
      ";
                } elseif (($this->getAttribute(                // line 15
$context["item"], "itemType", array()) == "unit")) {
                    // line 16
                    echo "        <li class=\"task-item color-gray bg-gray-lighter infinite-item\">
          <span class=\"title\">";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.unit", array("%part_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("part"), "节"), "%number%" => $this->getAttribute($context["item"], "number", array()), "%title%" => $this->getAttribute($context["item"], "title", array()))), "html", null, true);
                    echo "</span>
        </li>
      ";
                } elseif (($this->getAttribute(                // line 19
$context["item"], "itemType", array()) == "task")) {
                    // line 20
                    echo "        ";
                    $context["task"] = $context["item"];
                    // line 21
                    echo "
        ";
                    // line 22
                    $context["task_lock"] = false;
                    // line 23
                    echo "        <li class=\"task-item task-content mouse-control infinite-item\">
          <i class=\"es-icon
            ";
                    // line 25
                    if (($context["task_lock"] ?? null)) {
                        // line 26
                        echo "            es-icon-lock
            ";
                    } elseif (( !(($this->getAttribute(                    // line 27
($context["task"] ?? null), "result", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["task"] ?? null), "result", array()), null)) : (null)) || twig_test_empty(($context["member"] ?? null)))) {
                        // line 28
                        echo "            es-icon-undone-check color-gray
            ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 29
($context["task"] ?? null), "result", array()), "status", array()) == "start")) {
                        // line 30
                        echo "            es-icon-doing color-primary
            ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 31
($context["task"] ?? null), "result", array()), "status", array()) == "finish")) {
                        // line 32
                        echo "            es-icon-iccheckcircleblack24px color-primary
            ";
                    }
                    // line 34
                    echo "            left-menu\"></i>
          ";
                    // line 35
                    $context["isOvertime"] = (($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()) && ($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()) < twig_date_format_filter($this->env, "now", "U"))) || ($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()) && ($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()) < twig_date_format_filter($this->env, "now", "U"))));
                    // line 36
                    echo "
          ";
                    // line 37
                    if ((($this->getAttribute(($context["course"] ?? null), "status", array()) == "published") && ($this->getAttribute(($context["task"] ?? null), "status", array()) == "published"))) {
                        // line 38
                        echo "            ";
                        if (($context["member"] ?? null)) {
                            // line 39
                            echo "              <a class=\"title\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
                            echo "\">
                ";
                            // line 40
                            $this->loadTemplate("course/task-list/parts/list-li-title.html.twig", "course/task-list/default-task-list.html.twig", 40)->display($context);
                            // line 41
                            echo "              </a>
            ";
                        } elseif ( !                        // line 42
($context["isOvertime"] ?? null)) {
                            // line 43
                            echo "              <a class=\"title\" href=\"#modal\" data-toggle=\"modal\"
                data-url=\"";
                            // line 44
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
                            echo "\"
                style=\"margin-top:-8px\">";
                            // line 45
                            $this->loadTemplate("course/task-list/parts/list-li-title.html.twig", "course/task-list/default-task-list.html.twig", 45)->display($context);
                            echo "</a>
            ";
                        } else {
                            // line 47
                            echo "              <a class=\"title\" href=\"javascript:;\" data-toggle=\"modal\"
                  style=\"margin-top:-8px\">";
                            // line 48
                            $this->loadTemplate("course/task-list/parts/list-li-title.html.twig", "course/task-list/default-task-list.html.twig", 48)->display($context);
                            echo "</a>
            ";
                        }
                        // line 50
                        echo "
            ";
                        // line 51
                        $this->loadTemplate("course/task-list/parts/task-length.html.twig", "course/task-list/default-task-list.html.twig", 51)->display($context);
                        // line 52
                        echo "            <span class=\"right-menu mouse-enter\">
            ";
                        // line 53
                        if ((( !($context["member"] ?? null) &&  !($context["isOvertime"] ?? null)) && ((($this->getAttribute(($context["courseSet"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "status", array()), "published")) : ("published")) == "published"))) {
                            // line 54
                            echo "              ";
                            if ($this->getAttribute(($context["task"] ?? null), "isFree", array())) {
                                // line 55
                                echo "                <a class=\"btn btn-primary\" href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"";
                                // line 56
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
                                echo "\"
                  style=\"margin-top:-8px\">";
                                // line 57
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.preview_btn"), "html", null, true);
                                echo "</a>
              ";
                            } elseif ($this->getAttribute(                            // line 58
($context["task"] ?? null), "tryLookable", array())) {
                                // line 59
                                echo "                <a class=\"btn btn-warning\" href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"";
                                // line 60
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
                                echo "\"
                  style=\"margin-top:-8px\">";
                                // line 61
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.try_look_btn"), "html", null, true);
                                echo "</a>
              ";
                            } elseif (( !$this->getAttribute(                            // line 62
($context["task"] ?? null), "isFree", array()) && ((($this->getAttribute(($context["course"] ?? null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "parentId", array()), 0)) : (0)) == 0))) {
                                // line 63
                                echo "                ";
                                if ($this->getAttribute(($context["course"] ?? null), "isFree", array())) {
                                    // line 64
                                    echo "                  <a style=\"margin-top:-8px\" class=\"btn btn-primary js-task-buy-btn\" href=\"javascript:\" data-url=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_buy", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.join_btn"), "html", null, true);
                                    echo "
                  </a>
                ";
                                } else {
                                    // line 67
                                    echo "                  <a style=\"margin-top:-8px\" class=\"btn btn-primary js-task-buy-btn\" href=\"javascript:\" data-url=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_buy", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.buy_btn"), "html", null, true);
                                    echo "</a>
                ";
                                }
                                // line 69
                                echo "              ";
                            }
                            // line 70
                            echo "
            ";
                        }
                        // line 72
                        echo "            </span>
          ";
                    } else {
                        // line 74
                        echo "            <span class=\"title\">
              ";
                        // line 75
                        $this->loadTemplate("course/task-list/parts/list-li-title.html.twig", "course/task-list/default-task-list.html.twig", 75)->display($context);
                        // line 76
                        echo "            </span>
            <span class=\"right-menu color-gray\">
              ";
                        // line 78
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.looking_forward"), "html", null, true);
                        echo "
            </span>
          ";
                    }
                    // line 81
                    echo "        </li>

      ";
                }
                // line 84
                echo "
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "  </ul>

  ";
        // line 88
        if (((array_key_exists("nextOffsetSeq", $context)) ? (_twig_default_filter(($context["nextOffsetSeq"] ?? null), 0)) : (0))) {
            // line 89
            echo "    <a class=\"infinite-more-link js-down-loading-more\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_paging_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "offsetSeq" => ($context["nextOffsetSeq"] ?? null))), "html", null, true);
            echo "\"></a>
  ";
        }
        // line 91
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "course/task-list/default-task-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 91,  260 => 89,  258 => 88,  254 => 86,  243 => 84,  238 => 81,  232 => 78,  228 => 76,  226 => 75,  223 => 74,  219 => 72,  215 => 70,  212 => 69,  204 => 67,  195 => 64,  192 => 63,  190 => 62,  186 => 61,  182 => 60,  179 => 59,  177 => 58,  173 => 57,  169 => 56,  166 => 55,  163 => 54,  161 => 53,  158 => 52,  156 => 51,  153 => 50,  148 => 48,  145 => 47,  140 => 45,  136 => 44,  133 => 43,  131 => 42,  128 => 41,  126 => 40,  121 => 39,  118 => 38,  116 => 37,  113 => 36,  111 => 35,  108 => 34,  104 => 32,  102 => 31,  99 => 30,  97 => 29,  94 => 28,  92 => 27,  89 => 26,  87 => 25,  83 => 23,  81 => 22,  78 => 21,  75 => 20,  73 => 19,  68 => 17,  65 => 16,  63 => 15,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  37 => 8,  33 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/task-list/default-task-list.html.twig", "/vagrant_data/nuliedu/app/Resources/views/course/task-list/default-task-list.html.twig");
    }
}
