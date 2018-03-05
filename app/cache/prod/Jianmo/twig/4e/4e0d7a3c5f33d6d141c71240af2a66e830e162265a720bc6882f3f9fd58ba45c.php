<?php

/* courseset-manage/header.html.twig */
class __TwigTemplate_1c48af3e4734368cd89400b25200d37a2e3f85c1b762baebf1b7e8c97eeb16f6 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "courseset-manage/header.html.twig", 1);
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/courseset-manage/header/index.js"));
        // line 3
        $context["basepath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array())));
        // line 4
        echo "

<div class=\"es-section course-manage-header clearfix\">
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["basepath"] ?? null), "html", null, true);
        echo "\">
      <img class=\"picture\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover(($context["courseSet"] ?? null), "large"), "courseSet.png"), "html", null, true);
        echo "\" /> <!-- courseSet.largePicture -->
    </a>
  <h1 class=\"title\">
    ";
        // line 11
        if (($this->getAttribute(($context["courseSet"] ?? null), "type", array()) != "normal")) {
            // line 12
            echo "      [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseType"), $this->getAttribute(($context["courseSet"] ?? null), "type", array()), array(), "array"), "html", null, true);
            echo "]
    ";
        }
        // line 14
        echo "    <a class=\"link-dark\" href=\"";
        echo twig_escape_filter($this->env, ($context["basepath"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 15
        if (($this->getAttribute(($context["courseSet"] ?? null), "status", array()) == "closed")) {
            // line 16
            echo "      <span class=\"label label-danger \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.closed"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 17
($context["courseSet"] ?? null), "status", array()) == "draft")) {
            // line 18
            echo "      <span class=\"label label-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.unpublished"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 19
($context["courseSet"] ?? null), "status", array()) == "published")) {
            // line 20
            echo "      ";
            if (($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()) == "serialized")) {
                // line 21
                echo "        <span class=\"label label-success \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.serialized"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute(            // line 22
($context["courseSet"] ?? null), "serializeMode", array()) == "finished")) {
                // line 23
                echo "        <span class=\"label label-warning \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.finished"), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 25
                echo "        <span class=\"label label-success \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.published"), "html", null, true);
                echo "</span>
      ";
            }
            // line 27
            echo "    ";
        }
        // line 28
        echo "  </h1>

  <div class=\"teachers\">
    ";
        // line 31
        if ((($this->getAttribute(($context["courseSet"] ?? null), "teacherIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "teacherIds", array()), null)) : (null))) {
            // line 32
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher"), "html", null, true);
            echo "
      ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["courseSet"] ?? null), "teacherIds", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 34
                echo "        ";
                $context["user"] = $this->getAttribute(($context["users"] ?? null), $context["id"], array(), "array");
                // line 35
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nickname", array()), "html", null, true);
                echo "</a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        }
        // line 38
        echo "  </div>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 41
        if (((($this->getAttribute(($context["course"] ?? null), "courseSetId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "courseSetId", array()), null)) : (null)) && (_twig_default_filter($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCount($this->getAttribute(($context["course"] ?? null), "courseSetId", array())), 0) > 1))) {
            // line 42
            echo "        <a class=\"btn btn-default btn-sm \" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.back_course_edit"), "html", null, true);
            echo "</a>
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if (($this->getAttribute(($context["courseSet"] ?? null), "status", array()) == "published")) {
            // line 46
            echo "      <div class=\"btn-group\">
        <a class=\"btn btn-default btn-sm\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["basepath"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.back_course_homepage"), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if (($this->getAttribute(($context["courseSet"] ?? null), "status", array()) != "published")) {
            // line 52
            echo "      <div class=\"btn-group\">
        <a class=\"btn btn-default btn-sm\" target=\"_blank\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()), "previewAs" => "guest")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.preview"), "html", null, true);
            echo "</a>
      </div>
      <div class=\"btn-group\">
        <button class=\"btn btn-primary btn-sm course-publish-btn\" data-url=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_publish", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.publish"), "html", null, true);
            echo "</button>
      </div>
    ";
        }
        // line 59
        echo "  </div>
</div>
";
        // line 61
        if (($this->getAttribute(($context["courseSet"] ?? null), "status", array()) == "closed")) {
            // line 62
            echo "<div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.remove_students_tips"), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "courseset-manage/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 62,  188 => 61,  184 => 59,  176 => 56,  168 => 53,  165 => 52,  163 => 51,  160 => 50,  152 => 47,  149 => 46,  147 => 45,  144 => 44,  136 => 42,  134 => 41,  129 => 38,  126 => 37,  115 => 35,  112 => 34,  108 => 33,  103 => 32,  101 => 31,  96 => 28,  93 => 27,  87 => 25,  81 => 23,  79 => 22,  74 => 21,  71 => 20,  69 => 19,  64 => 18,  62 => 17,  57 => 16,  55 => 15,  48 => 14,  42 => 12,  40 => 11,  34 => 8,  30 => 7,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/header.html.twig", "/vagrant_data/nuliedu/app/Resources/views/courseset-manage/header.html.twig");
    }
}
