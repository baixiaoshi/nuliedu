<?php

/* courseset-manage/sidebar.html.twig */
class __TwigTemplate_c99d44d878ef6b43cdc3a6f06e34eb4e69e4b74807ed8afdd0f29e3aa7264c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'side' => array($this, 'block_side'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('side', $context, $blocks);
    }

    public function block_side($context, array $blocks = array())
    {
        // line 2
        echo "  ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter(($context["side_nav"] ?? null), null)) : (null));
        // line 3
        echo "  ";
        $context["menuType"] = "course";
        // line 4
        echo "  ";
        if (twig_in_filter(($context["side_nav"] ?? null), array(0 => "base", 1 => "detail", 2 => "cover", 3 => "question", 4 => "testpaper", 5 => "files", 6 => "plan"))) {
            // line 5
            echo "    ";
            $context["menuType"] = "courseSet";
            // line 6
            echo "  ";
        }
        // line 7
        echo "  ";
        $context["coursesLength"] = twig_length_filter($this->env, ($context["courses"] ?? null));
        // line 8
        echo "  ";
        $context["courseListIntroCookie"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "cookies", array(), "any", false, true), "get", array(0 => "COURSE_LIST_INTRO_COOKIE"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "cookies", array(), "any", false, true), "get", array(0 => "COURSE_LIST_INTRO_COOKIE"), "method"), null)) : (null));
        // line 9
        echo "  ";
        $context["isShowCourseMenu"] = (($context["curCourse"] ?? null) && (((($context["menuType"] ?? null) != "courseSet") || (($context["coursesLength"] ?? null) <= 1)) || ($context["courseListIntroCookie"] ?? null)));
        // line 10
        echo "  ";
        $context["isShowCourseList"] = ((($this->getAttribute(($context["courseSet"] ?? null), "type", array()) != "live") && ((($this->getAttribute(($context["courseSet"] ?? null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "parentId", array()), 0)) : (0)) <= 0)) && (((($context["menuType"] ?? null) == "courseSet") || (($context["coursesLength"] ?? null) <= 1)) || ((array_key_exists("courseListIntroCookie", $context)) ? (_twig_default_filter(($context["courseListIntroCookie"] ?? null), null)) : (null))));
        // line 11
        echo "
  ";
        // line 13
        echo "  <div class=\"sidenav locked js-sidenav\" data-course-length=\"";
        echo twig_escape_filter($this->env, ($context["coursesLength"] ?? null), "html", null, true);
        echo "\">
    <ul class=\"list-group\">
      ";
        // line 16
        echo "      ";
        if (((($context["menuType"] ?? null) == "courseSet") || (($context["coursesLength"] ?? null) <= 1))) {
            // line 17
            echo "        <li class=\"list-group-item ";
            if ((($context["side_nav"] ?? null) == "base")) {
                echo "active";
            }
            echo "\">
          ";
            // line 18
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 19
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "base")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 23
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 27
            echo "        </li>
        <li class=\"list-group-item ";
            // line 28
            if ((($context["side_nav"] ?? null) == "detail")) {
                echo "active";
            }
            echo "\">
          ";
            // line 29
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 30
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "detail")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.detail"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 34
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_detail", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.detail"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 38
            echo "        </li>
        <li class=\"list-group-item ";
            // line 39
            if ((($context["side_nav"] ?? null) == "cover")) {
                echo "active";
            }
            echo "\">
          ";
            // line 40
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 41
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "cover")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 45
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_cover", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 49
            echo "        </li>
        <hr class=\"mv5 mh10 bg-border-color\"/>
        <li class=\"list-group-item ";
            // line 51
            if ((($context["side_nav"] ?? null) == "files")) {
                echo "active";
            }
            echo "\">
          ";
            // line 52
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 53
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "files")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 57
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_files", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 61
            echo "        </li>
        <li class=\"list-group-item ";
            // line 62
            if ((($context["side_nav"] ?? null) == "testpaper")) {
                echo "active";
            }
            echo "\">
          ";
            // line 63
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 64
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "testpaper")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 68
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 72
            echo "        </li>
        <li class=\"list-group-item ";
            // line 73
            if ((($context["side_nav"] ?? null) == "question")) {
                echo "active";
            }
            echo "\">
          ";
            // line 74
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 75
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "question")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 79
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 83
            echo "        </li>
        ";
            // line 84
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course_set.menu.extension", array("courseSet" => ($context["courseSet"] ?? null), "sideNav" => ($context["side_nav"] ?? null)));
            echo "
      ";
        }
        // line 86
        echo "      
      ";
        // line 88
        echo "      ";
        if (($context["isShowCourseMenu"] ?? null)) {
            // line 89
            echo "      <div class=\"js-sidenav-course-menu \">
        ";
            // line 90
            if (((($context["coursesLength"] ?? null) > 1) &&  !($context["courseListIntroCookie"] ?? null))) {
                // line 91
                echo "          <li class=\"list-group-heading\">
            ";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute(($context["curCourse"] ?? null), "title", array()), "html", null, true);
                echo "
          </li>
        ";
            } else {
                // line 95
                echo "          <hr class=\"mv5 mh10 bg-border-color\"/>
        ";
            }
            // line 97
            echo "        <li class=\"list-group-item ";
            if ((($context["side_nav"] ?? null) == "overview")) {
                echo "active";
            }
            echo "\" id=\"step-0\">
            <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_overview", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t      ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_overview"), "html", null, true);
            echo "
            </a>
        </li>
        
        <li class=\"list-group-item ";
            // line 103
            if ((($context["side_nav"] ?? null) == "tasks")) {
                echo "active";
            }
            echo "\" id=\"step-1\">
          ";
            // line 104
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 105
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "tasks")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 109
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 113
            echo "        </li>
        <li class=\"list-group-item ";
            // line 114
            if ((($context["side_nav"] ?? null) == "info")) {
                echo "active";
            }
            echo "\">
          ";
            // line 115
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 116
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "info")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 120
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 124
            echo "        </li>
        ";
            // line 125
            if ((($context["hasLiveTasks"] ?? null) || ($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "live"))) {
                // line 126
                echo "          <li class=\"list-group-item ";
                if ((($context["side_nav"] ?? null) == "replay")) {
                    echo "active";
                }
                echo "\">
          ";
                // line 127
                if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                    // line 128
                    echo "            <a class=\"pl10\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "replay")), "html", null, true);
                    echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                    // line 129
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.replay_manage"), "html", null, true);
                    echo "
            </a>
          ";
                } else {
                    // line 132
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_replay", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
                    echo "\">
              ";
                    // line 133
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.replay_manage"), "html", null, true);
                    echo "
            </a>
          ";
                }
                // line 136
                echo "        ";
            }
            // line 137
            echo "        </li>
        <li class=\"list-group-item ";
            // line 138
            if ((($context["side_nav"] ?? null) == "marketing")) {
                echo "active";
            }
            echo "\" id=\"step-2\">
          ";
            // line 139
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 140
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "marketing")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 144
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_marketing", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 148
            echo "        </li>
        <li class=\"list-group-item ";
            // line 149
            if ((($context["side_nav"] ?? null) == "teachers")) {
                echo "active";
            }
            echo "\">
          ";
            // line 150
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 151
                echo "            <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "teachers")), "html", null, true);
                echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher_setup"), "html", null, true);
                echo "
            </a>
          ";
            } else {
                // line 155
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_teachers", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher_setup"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 159
            echo "        </li>
        <li class=\"list-group-item ";
            // line 160
            if ((($context["side_nav"] ?? null) == "students")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.student_manage"), "html", null, true);
            echo "
          </a>
        </li>
        <hr class=\"mv5 mh10 bg-border-color\"/>
        <li class=\"list-group-item ";
            // line 166
            if ((($context["side_nav"] ?? null) == "testpaper-check")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_testpaper_check_list", array("id" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_check"), "html", null, true);
            echo "
          </a>
        </li>
        <li class=\"list-group-item ";
            // line 170
            if ((($context["side_nav"] ?? null) == "homework-check")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_homework_check_list", array("id" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.homework_check"), "html", null, true);
            echo "
          </a>
        </li>
        <hr class=\"mv5 mh10 bg-border-color\"/>

        ";
            // line 176
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") == "cloud")) {
                // line 177
                echo "          <li class=\"list-group-item ";
                if ((($context["side_nav"] ?? null) == "question_marker")) {
                    echo "active";
                }
                echo "\">
            <a href=\"";
                // line 178
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_question_marker", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 179
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_marker_statistics"), "html", null, true);
                echo "</a>
          </li>
        ";
            }
            // line 182
            echo "

        ";
            // line 184
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isAdmin", array(), "method") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_search_order") == 1))) {
                // line 185
                echo "          <li class=\"list-group-item ";
                if ((($context["side_nav"] ?? null) == "orders")) {
                    echo "active";
                }
                echo "\">
            <a href=\"";
                // line 186
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_orders", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.order"), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            // line 190
            echo "      </div>
      ";
        }
        // line 192
        echo "      ";
        // line 193
        echo "      ";
        if (($context["isShowCourseList"] ?? null)) {
            // line 194
            echo "        <div class=\"js-sidenav-course-list\">
          <hr class=\"mv5 mh10 bg-border-color\"/>
          <li class=\"list-group-item ";
            // line 196
            if ((($context["side_nav"] ?? null) == "plan")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_courses", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teach_plan_manage"), "html", null, true);
            echo "
            </a>
          </li>
        </div>
      ";
        }
        // line 203
        echo "    </ul>
  </div>


";
    }

    public function getTemplateName()
    {
        return "courseset-manage/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  602 => 203,  594 => 198,  590 => 197,  584 => 196,  580 => 194,  577 => 193,  575 => 192,  571 => 190,  562 => 186,  555 => 185,  553 => 184,  549 => 182,  543 => 179,  539 => 178,  532 => 177,  530 => 176,  520 => 171,  514 => 170,  506 => 167,  500 => 166,  493 => 162,  489 => 161,  483 => 160,  480 => 159,  474 => 156,  469 => 155,  463 => 152,  458 => 151,  456 => 150,  450 => 149,  447 => 148,  441 => 145,  436 => 144,  430 => 141,  425 => 140,  423 => 139,  417 => 138,  414 => 137,  411 => 136,  405 => 133,  400 => 132,  394 => 129,  389 => 128,  387 => 127,  380 => 126,  378 => 125,  375 => 124,  369 => 121,  364 => 120,  358 => 117,  353 => 116,  351 => 115,  345 => 114,  342 => 113,  336 => 110,  331 => 109,  325 => 106,  320 => 105,  318 => 104,  312 => 103,  305 => 99,  301 => 98,  294 => 97,  290 => 95,  284 => 92,  281 => 91,  279 => 90,  276 => 89,  273 => 88,  270 => 86,  265 => 84,  262 => 83,  256 => 80,  251 => 79,  245 => 76,  240 => 75,  238 => 74,  232 => 73,  229 => 72,  223 => 69,  218 => 68,  212 => 65,  207 => 64,  205 => 63,  199 => 62,  196 => 61,  190 => 58,  185 => 57,  179 => 54,  174 => 53,  172 => 52,  166 => 51,  162 => 49,  156 => 46,  151 => 45,  145 => 42,  140 => 41,  138 => 40,  132 => 39,  129 => 38,  123 => 35,  118 => 34,  112 => 31,  107 => 30,  105 => 29,  99 => 28,  96 => 27,  90 => 24,  85 => 23,  79 => 20,  74 => 19,  72 => 18,  65 => 17,  62 => 16,  56 => 13,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/sidebar.html.twig", "/vagrant_data/nuliedu/app/Resources/views/courseset-manage/sidebar.html.twig");
    }
}
