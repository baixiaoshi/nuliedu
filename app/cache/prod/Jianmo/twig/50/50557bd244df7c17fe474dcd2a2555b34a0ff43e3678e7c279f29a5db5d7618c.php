<?php

/* course/course-show.html.twig */
class __TwigTemplate_02f4484126dd4ce26b94471401cc6909305ab8f3fa1410f3ca7426f7c517f547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "course/course-show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
            'detail_content' => array($this, 'block_detail_content'),
            'member_expired' => array($this, 'block_member_expired'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/easy-pie-chart/dist/jquery.easypiechart.js", 1 => "libs/excanvas-compiled.js", 2 => "libs/echo-js.js", 3 => "libs/jquery-countdown.js", 4 => "app/js/courseset/show/index.js"));
        // line 5
        $context["course_set"] = twig_array_merge($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), array("tags" => "tags"));
        // line 6
        $context["bodyClass"] = "course-dashboard-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course_set"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_keywords($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course_set"] ?? null), "tags", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            $this->displayParentBlock("keywords", $context, $blocks);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 15
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyAndTrimHtml($this->getAttribute(($context["course"] ?? null), "about", array())), ""), 100);
    }

    // line 17
    public function block_full_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["eventReportParams"] = array("user-id" => (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array()), 0)) : (0)));
        // line 19
        echo "    ";
        $this->loadTemplate("event_report.html.twig", "course/course-show.html.twig", 19)->display(array_merge($context, array("eventName" => "course.view", "subjectType" => "course", "subjectId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "eventReportParams" => ($context["eventReportParams"] ?? null))));
        // line 20
        echo "
  ";
        // line 21
        $context["previewAs"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "previewAs"), "method");
        // line 22
        echo "  ";
        $context["metas"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseShowMetas(((((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null))) ? ("member") : ("guest")));
        // line 23
        echo "  ";
        $context["route_params"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
        // line 24
        echo "
  ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute(($context["metas"] ?? null), "header", array()), array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()), "course" => ($context["course"] ?? null), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null)))));
        echo "

  ";
        // line 27
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("marketing.tool", array("type" => "course", "targetId" => $this->getAttribute(($context["course"] ?? null), "id", array())));
        echo "

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-9 col-md-8 course-detail-content\">
        ";
        // line 32
        $this->loadTemplate("course/announcement/block.html.twig", "course/course-show.html.twig", 32)->display(array_merge($context, array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))));
        // line 33
        echo "        <section class=\"es-section\">
          <div class=\"nav-btn-tab\">

\t          ";
        // line 36
        if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null))) {
            // line 37
            echo "\t\t          ";
            $this->loadTemplate("course/header/nav-tab-for-member.html.twig", "course/course-show.html.twig", 37)->display($context);
            // line 38
            echo "\t          ";
        } else {
            // line 39
            echo "\t\t          ";
            $this->loadTemplate("course/header/nav-tab-for-guest.html.twig", "course/course-show.html.twig", 39)->display($context);
            // line 40
            echo "\t          ";
        }
        // line 41
        echo "
            ";
        // line 42
        if (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "admin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "admin", array()), false)) : (false)) || ((array_key_exists("isCourseTeacher", $context)) ? (_twig_default_filter(($context["isCourseTeacher"] ?? null), false)) : (false)))) {
            // line 43
            echo "              <div class=\"btnbar hidden-xs\">
                <a href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_add", array("targetType" => "course", "targetId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\"
                  class=\"btn btn-link\">
                  <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
                  ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.announcement"), "html", null, true);
            echo "
                </a>
              </div>
            ";
        }
        // line 52
        echo "
          </div>
          ";
        // line 54
        $this->displayBlock('detail_content', $context, $blocks);
        // line 57
        echo "        </section>

        ";
        // line 59
        $this->loadTemplate("course/block/related-courses.html.twig", "course/course-show.html.twig", 59)->display(array_merge($context, array("courseSetId" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))));
        // line 60
        echo "
      </div>

      <div class=\"col-lg-3 col-md-4 course-sidebar\">

        ";
        // line 65
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.show.sidebar", array("course" => ($context["course"] ?? null)));
        echo "

        ";
        // line 68
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["metas"] ?? null), "widgets", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["widget"]) {
            // line 69
            echo "          ";
            if ((((((($this->getAttribute($context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "classroom") && ($this->getAttribute(($context["course"] ?? null), "parentId", array()) > 0)) || (((($this->getAttribute(            // line 70
$context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "course") && ($this->getAttribute(($context["course"] ?? null), "parentId", array()) == 0))) || ((($this->getAttribute(            // line 71
$context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "all"))) {
                // line 72
                echo "            ";
                if (($this->getAttribute($context["widget"], "renderType", array()) == "render")) {
                    // line 73
                    echo "              ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute($context["widget"], "uri", array()), array("course" => ($context["course"] ?? null), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), array())) : (array())))));
                    echo "
            ";
                } elseif (($this->getAttribute(                // line 74
$context["widget"], "renderType", array()) == "include")) {
                    // line 75
                    echo "              ";
                    $this->loadTemplate($this->getAttribute($context["widget"], "uri", array()), "course/course-show.html.twig", 75)->display(array_merge($context, array("course" => ($context["course"] ?? null))));
                    // line 76
                    echo "            ";
                }
                // line 77
                echo "          ";
            }
            // line 78
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "      </div>

    </div>
  </div>

  ";
        // line 84
        $this->displayBlock('member_expired', $context, $blocks);
        // line 91
        echo "
    ";
        // line 92
        $this->loadTemplate("common/weixin-share.html.twig", "course/course-show.html.twig", 92)->display(array_merge($context, array("title" => $this->getAttribute(        // line 93
($context["course_set"] ?? null), "title", array()), "desc" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 94
($context["course_set"] ?? null), "summary", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 95
($context["app"] ?? null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl((($this->getAttribute($this->getAttribute(        // line 96
($context["course_set"] ?? null), "cover", array(), "any", false, true), "large", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["course_set"] ?? null), "cover", array(), "any", false, true), "large", array()))) : ("")), "course.png"))));
        // line 98
        echo "
  ";
        // line 99
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.bottom.extension", array("course" => ($context["course"] ?? null)));
        echo "
";
    }

    // line 54
    public function block_detail_content($context, array $blocks = array())
    {
        // line 55
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute($this->getAttribute($this->getAttribute(($context["metas"] ?? null), "tabs", array()), ($context["tab"] ?? null), array(), "array"), "content", array()), array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()), "course" => ($context["course"] ?? null), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null)))));
        echo "
          ";
    }

    // line 84
    public function block_member_expired($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->isMemberExpired(((array_key_exists("course", $context)) ? (_twig_default_filter(($context["course"] ?? null), null)) : (null)), ((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null)))) {
            // line 86
            echo "      <div class=\"member-expire\">
        <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_member_expired", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\"></a>
      </div>
    ";
        }
        // line 90
        echo "  ";
    }

    public function getTemplateName()
    {
        return "course/course-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 90,  303 => 87,  300 => 86,  297 => 85,  294 => 84,  287 => 55,  284 => 54,  278 => 99,  275 => 98,  273 => 96,  272 => 95,  271 => 94,  270 => 93,  269 => 92,  266 => 91,  264 => 84,  257 => 79,  243 => 78,  240 => 77,  237 => 76,  234 => 75,  232 => 74,  227 => 73,  224 => 72,  222 => 71,  221 => 70,  219 => 69,  201 => 68,  196 => 65,  189 => 60,  187 => 59,  183 => 57,  181 => 54,  177 => 52,  170 => 48,  164 => 45,  160 => 43,  158 => 42,  155 => 41,  152 => 40,  149 => 39,  146 => 38,  143 => 37,  141 => 36,  136 => 33,  134 => 32,  126 => 27,  121 => 25,  118 => 24,  115 => 23,  112 => 22,  110 => 21,  107 => 20,  104 => 19,  101 => 18,  98 => 17,  92 => 15,  51 => 12,  48 => 11,  40 => 9,  36 => 1,  34 => 6,  32 => 5,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/course-show.html.twig", "/vagrant_data/nuliedu/app/Resources/views/course/course-show.html.twig");
    }
}
