<?php

/* admin/course-set/tab.html.twig */
class __TwigTemplate_53a888f158301b0233376c723bdebab0690835fd97a8d1c59e789a2696cba4b6 extends Twig_Template
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
        echo "<div class=\"btn-group\">

    <a href=\" ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course_set", array("filter" => "normal"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if ((($context["filter"] ?? null) == "normal")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.normal_course"), "html", null, true);
        echo "</a>

    <a href=\" ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course_set", array("filter" => "classroom"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if ((($context["filter"] ?? null) == "classroom")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.classroom_course", array("%classroomName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getClassroomName(), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom")))), "html", null, true);
        echo "</a>

    ";
        // line 7
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip")) {
            // line 8
            echo "        <a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course_set", array("filter" => "vip"));
            echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
            if ((($context["filter"] ?? null) == "vip")) {
                echo "btn-primary";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.vip_course"), "html", null, true);
            echo "</a>
    ";
        }
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "admin/course-set/tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  47 => 8,  45 => 7,  34 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/course-set/tab.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/course-set/tab.html.twig");
    }
}
