<?php

/* admin/course-set/tr.html.twig */
class __TwigTemplate_29280363a56b0a9c5f8a5b6cea7692f33a8b0af619e959593508b2f631571254 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/course-set/tr.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "admin/course-set/tr.html.twig", 3);
        // line 4
        $context["target"] = (("" . ($context["filter"] ?? null)) . "_index");
        // line 5
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 6
        $this->loadTemplate("org/parts/table-body-checkbox.html.twig", "admin/course-set/tr.html.twig", 6)->display($context);
        // line 7
        echo "  <td>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\"
       target=\"_blank\"><strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "</strong></a>
    ";
        // line 11
        if ((($context["filter"] ?? null) == "classroom")) {
            // line 12
            echo "      ";
            $context["classroom"] = (($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array"), null)) : (null));
            // line 13
            echo "      ";
            if ( !($context["classroom"] ?? null)) {
                // line 14
                echo "        <span class=\"label label-danger live-label mls\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.classroom_course_removed"), "html", null, true);
                echo "</span>
      ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if (($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "live")) {
            // line 18
            echo "      <span class=\"label label-success live-label mls\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.live_course"), "html", null, true);
            echo "</span>
    ";
        }
        // line 20
        echo "    <br>
    <span class=\"text-muted text-sm\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.category"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["category"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["category"] ?? null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 22
        if ($this->getAttribute(($context["courseSet"] ?? null), "recommended", array())) {
            // line 23
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.recommend", array("%recommendedTime%" => twig_date_format_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "recommendedTime", array()), "Y-m-d"), "%recommendedSeq%" => $this->getAttribute(($context["courseSet"] ?? null), "recommendedSeq", array()))), "html", null, true);
            echo "</span>
    ";
        }
        // line 25
        echo "  </td>
  <td>
    ";
        // line 27
        if ((((($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array()), 0)) : (0)) == 0) || ((($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array()), 0)) : (0)) == (($this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array()), 0)) : (0))))) {
            // line 28
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array()), 0)) : (0)), "html", null, true);
            echo "
    ";
        } else {
            // line 30
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array()))) : ("")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array()))) : ("")), "html", null, true);
            echo "
    ";
        }
        // line 32
        echo "  </td>
  ";
        // line 33
        if ((($context["filter"] ?? null) == "normal")) {
            // line 34
            echo "    <td><a class=\"pvs phs\" href=\"javascript:void(0);\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_list", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\" target=\"_blank\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["coursesCount"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array", false, true), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["coursesCount"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array", false, true), "courseNum", array()), 0)) : (0)), "html", null, true);
            echo "</a></td>
  ";
        }
        // line 36
        echo "  <td>";
        echo $context["dict_macro"]->getcourseStatus($this->getAttribute(($context["courseSet"] ?? null), "status", array()));
        echo "</td>

  ";
        // line 38
        $this->loadTemplate("org/parts/table-body-td.html.twig", "admin/course-set/tr.html.twig", 38)->display(array_merge($context, array("orgCode" => $this->getAttribute(($context["courseSet"] ?? null), "orgCode", array()))));
        // line 39
        echo "  ";
        if (((($context["filter"] ?? null) != "open") && (($context["filter"] ?? null) != "liveOpen"))) {
            // line 40
            echo "    ";
            if ((($context["filter"] ?? null) == "classroom")) {
                // line 41
                echo "      <td>
        ";
                // line 42
                $context["classroom"] = (($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array"), null)) : (null));
                // line 43
                echo "        ";
                if (($context["classroom"] ?? null)) {
                    // line 44
                    echo "          <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute(($context["classroom"] ?? null), "classroomId", array()))), "html", null, true);
                    echo "\"
             target=\"_blank\">";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["classroom"] ?? null), "classroomTitle", array()), "html", null, true);
                    echo "</a>
        ";
                }
                // line 47
                echo "      </td>
    ";
            } else {
                // line 49
                echo "      <td>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "studentNum", array()), "html", null, true);
                echo "</td>
    ";
            }
            // line 51
            echo "    ";
            if ((($context["filter"] ?? null) == "vip")) {
                // line 52
                echo "      ";
                $context["levels"] = $this->getAttribute(($context["courseSet"] ?? null), "levels", array(), "array");
                // line 53
                echo "      ";
                $context["length"] = twig_length_filter($this->env, ($context["levels"] ?? null));
                // line 54
                echo "      ";
                if ((($context["length"] ?? null) == 0)) {
                    // line 55
                    echo "        <td>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.vip_grade_removed"), "html", null, true);
                    echo "</td>
      ";
                } else {
                    // line 57
                    echo "        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["levels"] ?? null)), "name", array()), "html", null, true);
                    echo "
          ";
                    // line 58
                    if ((($context["length"] ?? null) > 1)) {
                        // line 59
                        echo "            <br>
            <span class=\"text-muted text-sm\">";
                        // line 60
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.vip_grade_count", array("%count%" => ($context["length"] ?? null))), "html", null, true);
                        echo "</span>
          ";
                    }
                    // line 62
                    echo "        </td>
      ";
                }
                // line 64
                echo "    ";
            }
            // line 65
            echo "  ";
        }
        // line 66
        echo "  
  <td>
    ";
        // line 68
        echo $context["admin_macro"]->getuser_link(($context["user"] ?? null));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  ";
        // line 72
        if (((($context["filter"] ?? null) != "open") && (($context["filter"] ?? null) != "liveOpen"))) {
            // line 73
            echo "    <td>
      <span class=\"text-info\">";
            // line 74
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("courseSerializeMode", $this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()));
            echo "</span>
    </td>
  ";
        }
        // line 77
        echo "  <td>
    <div class=\"btn-group\">

      ";
        // line 80
        if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage")) {
            // line 81
            echo "        <a class=\"btn btn-default btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\"
           target=\"_blank\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.manage_btn"), "html", null, true);
            echo "</a>
      ";
        }
        // line 84
        echo "      ";
        $this->loadTemplate("admin/role/templates/group-button.html.twig", "admin/course-set/tr.html.twig", 84)->display(array_merge($context, array("parentCode" => "admin_course_manage", "group" => "groupButton", "courseSet" => ($context["courseSet"] ?? null))));
        // line 85
        echo "    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "admin/course-set/tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 85,  252 => 84,  247 => 82,  242 => 81,  240 => 80,  235 => 77,  229 => 74,  226 => 73,  224 => 72,  219 => 70,  214 => 68,  210 => 66,  207 => 65,  204 => 64,  200 => 62,  195 => 60,  192 => 59,  190 => 58,  185 => 57,  179 => 55,  176 => 54,  173 => 53,  170 => 52,  167 => 51,  161 => 49,  157 => 47,  152 => 45,  147 => 44,  144 => 43,  142 => 42,  139 => 41,  136 => 40,  133 => 39,  131 => 38,  125 => 36,  117 => 34,  115 => 33,  112 => 32,  104 => 30,  98 => 28,  96 => 27,  92 => 25,  86 => 23,  84 => 22,  78 => 21,  75 => 20,  69 => 18,  66 => 17,  63 => 16,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  45 => 10,  41 => 9,  35 => 7,  33 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/course-set/tr.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/course-set/tr.html.twig");
    }
}
