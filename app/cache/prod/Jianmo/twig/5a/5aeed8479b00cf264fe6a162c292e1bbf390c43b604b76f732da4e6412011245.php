<?php

/* course/header/header-layout.html.twig */
class __TwigTemplate_3f5ddd6d3e9fed2a168641eda6d8da9f5f9ca6845a836ec1e1406c346320ac64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'course_header_info' => array($this, 'block_course_header_info'),
            'course_header_qrcode' => array($this, 'block_course_header_qrcode'),
            'course_header_subtitle' => array($this, 'block_course_header_subtitle'),
            'course_header_people_num' => array($this, 'block_course_header_people_num'),
            'course_member_count' => array($this, 'block_course_member_count'),
            'course_member_exit' => array($this, 'block_course_member_exit'),
            'course_heard_content' => array($this, 'block_course_heard_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "course/header/header-layout.html.twig", 1);
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script("app/js/course/header-top/index.js");
        // line 3
        echo "
<!-- 3、加入后：任务式学习 -->
<div class=\"container\">
  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage"), "html", null, true);
        echo "</a></li>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("breadcrumbs", $context)) ? (_twig_default_filter(($context["breadcrumbs"] ?? null))) : ("")));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
        if ((((array_key_exists("page_type", $context)) ? (_twig_default_filter(($context["page_type"] ?? null), "guest")) : ("guest")) == "member")) {
            // line 12
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo " </a></li>
      <li class=\"active\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
            echo " </li>
    ";
        } else {
            // line 15
            echo "      <li class=\"active\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo " </li>
    ";
        }
        // line 17
        echo "  </ol>

  ";
        // line 19
        $this->displayBlock('course_header_info', $context, $blocks);
        // line 20
        echo "  <div class=\"es-section course-detail-section clearfix\">
    <div class=\"course-detail-top clearfix\">
      <span class=\"tags mrm\">
        ";
        // line 23
        if (($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()) == "serialized")) {
            // line 24
            echo "          <span class=\"tag-serialing\"></span>
        ";
        } elseif (($this->getAttribute(        // line 25
($context["courseSet"] ?? null), "serializeMode", array()) == "finished")) {
            // line 26
            echo "          <span class=\"tag-finished\"></span>
        ";
        }
        // line 28
        echo "      </span>
      <span class=\"course-detail-heading\">
       ";
        // line 30
        if (($context["marketingPage"] ?? null)) {
            // line 31
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo "
         ";
        } else {
            // line 33
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
            echo "
       ";
        }
        // line 35
        echo "       ";
        $this->displayBlock('course_header_qrcode', $context, $blocks);
        // line 44
        echo "      </span>
      ";
        // line 45
        $this->displayBlock('course_header_subtitle', $context, $blocks);
        // line 46
        echo "      <ul class=\"course-operation hidden-xs hidden-sm clearfix\">
        <!--非营销页显示-->
        ";
        // line 48
        $this->displayBlock('course_header_people_num', $context, $blocks);
        // line 58
        echo "
        <!--营销页显示-->
        ";
        // line 60
        if (($context["marketingPage"] ?? null)) {
            // line 61
            echo "        <li class=\"js-unfavorite-btn\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\"
            ";
            // line 62
            if ( !($context["isUserFavorite"] ?? null)) {
                echo "style=\"display: none\" ";
            }
            echo ">
          <a class=\"btn btn-default btn-xs\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "\"
             data-trigger=\"hover\"> <i class=\"es-icon es-icon-bookmark color-primary\"></i>
          </a>
        </li>
        <li class=\"js-favorite-btn\" id=\"favorite-btn\" data-url=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\"
            ";
            // line 68
            if (($context["isUserFavorite"] ?? null)) {
                echo "style=\"display: none\"";
            }
            echo ">
          <a class=\"btn btn-default btn-xs\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "\"
             data-trigger=\"hover\"> <i class=\"es-icon es-icon-bookmarkoutline\"></i>
          </a>
        </li>
        ";
        }
        // line 74
        echo "
        <li class=\"es-share top\">
          <a class=\"btn btn-default btn-xs dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "\">
            <i class=\"es-icon es-icon-share\"></i>
          </a>
          ";
        // line 79
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-layout.html.twig", 79)->display(array_merge($context, array("type" => "courseSet")));
        // line 80
        echo "        </li>

        ";
        // line 82
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.header-marketing-btn.extension", array("course" => ($context["course"] ?? null)));
        echo "

        ";
        // line 84
        $context["canManage"] = (((($this->getAttribute(($context["member"] ?? null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["member"] ?? null), "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage"));
        // line 85
        echo "        ";
        if (($context["canManage"] ?? null)) {
            // line 86
            echo "          <li>
            ";
            // line 87
            if ((((array_key_exists("page_type", $context)) ? (_twig_default_filter(($context["page_type"] ?? null), "guest")) : ("guest")) == "member")) {
                // line 88
                echo "              <a class=\"btn btn-default btn-xs \"
                 href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                 data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_manage"), "html", null, true);
                echo "\"
                 data-trigger=\"hover\">
                <i class=\"es-icon es-icon-setting\"></i>
              </a>
            ";
            } else {
                // line 95
                echo "              <a class=\"btn btn-default btn-xs \"
                 href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
                echo "\"
                 data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_manage"), "html", null, true);
                echo "\"
                 data-trigger=\"hover\">
                <i class=\"es-icon es-icon-setting\"></i>
              </a>
            ";
            }
            // line 102
            echo "          </li>
        ";
        }
        // line 104
        echo "        ";
        $this->displayBlock('course_member_exit', $context, $blocks);
        // line 105
        echo "      </ul>
    </div>
    ";
        // line 107
        $this->displayBlock('course_heard_content', $context, $blocks);
        // line 108
        echo "  </div>
</div>
";
    }

    // line 19
    public function block_course_header_info($context, array $blocks = array())
    {
    }

    // line 35
    public function block_course_header_qrcode($context, array $blocks = array())
    {
        // line 36
        echo "        <span class=\"es-qrcode top pt5 hidden-xs\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_qrcode", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
          <i class=\"es-icon es-icon-qrcode\"></i>
          <span class=\"qrcode-popover\">
            <img src=\"\" alt=\"\">
            ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.tips.scan_qrcode_tips"), "html", null, true);
        echo "
          </span>
        </span>
       ";
    }

    // line 45
    public function block_course_header_subtitle($context, array $blocks = array())
    {
    }

    // line 48
    public function block_course_header_people_num($context, array $blocks = array())
    {
        // line 49
        echo "          ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 50
            echo "            <li>
              <span class=\"btn btn-xs cursor-default\">
                <i class=\"es-icon es-icon-people text-16\"></i>
                <span class=\"mls\">";
            // line 53
            $this->displayBlock('course_member_count', $context, $blocks);
            echo "</span>
              </span>
            </li>
          ";
        }
        // line 57
        echo "        ";
    }

    // line 53
    public function block_course_member_count($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_member_count", array("%studentsNum%" => $this->getAttribute(($context["course"] ?? null), "studentNum", array()))), "html", null, true);
        echo " ";
    }

    // line 104
    public function block_course_member_exit($context, array $blocks = array())
    {
    }

    // line 107
    public function block_course_heard_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "course/header/header-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 107,  312 => 104,  305 => 53,  301 => 57,  294 => 53,  289 => 50,  286 => 49,  283 => 48,  278 => 45,  270 => 40,  262 => 36,  259 => 35,  254 => 19,  248 => 108,  246 => 107,  242 => 105,  239 => 104,  235 => 102,  227 => 97,  223 => 96,  220 => 95,  212 => 90,  208 => 89,  205 => 88,  203 => 87,  200 => 86,  197 => 85,  195 => 84,  190 => 82,  186 => 80,  184 => 79,  178 => 76,  174 => 74,  166 => 69,  160 => 68,  156 => 67,  149 => 63,  143 => 62,  138 => 61,  136 => 60,  132 => 58,  130 => 48,  126 => 46,  124 => 45,  121 => 44,  118 => 35,  112 => 33,  106 => 31,  104 => 30,  100 => 28,  96 => 26,  94 => 25,  91 => 24,  89 => 23,  84 => 20,  82 => 19,  78 => 17,  72 => 15,  67 => 13,  60 => 12,  57 => 11,  46 => 9,  42 => 8,  36 => 7,  30 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-layout.html.twig", "/vagrant_data/nuliedu/app/Resources/views/course/header/header-layout.html.twig");
    }
}
