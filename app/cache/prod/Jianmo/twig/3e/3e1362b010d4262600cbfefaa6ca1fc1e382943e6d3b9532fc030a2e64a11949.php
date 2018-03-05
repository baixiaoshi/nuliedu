<?php

/* course-manage/overview/task-detail/task-chart.html.twig */
class __TwigTemplate_70d9aaf94627aa8ac7accd2c9bebe31cfa699d03a175276b2f19cef28f77d2ad extends Twig_Template
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
        echo "<span class=\"select-content\">
  <form class=\"js-task-detail\" id=\"overview-task-list\">
    <input class=\"select-time-input\" type=\"text\" name=\"titleLike\" placeholder=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.study_detail.name"), "html", null, true);
        echo "\">
    <i class=\"es-icon es-icon-search cursor-pointer js-task-detail-search\"></i>
    <input type=\"hidden\" name=\"courseId\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "id", array()), "html", null, true);
        echo "\">
  </form>
</span>
";
        // line 8
        $this->loadTemplate("export/export-btn.html.twig", "course-manage/overview/task-detail/task-chart.html.twig", 8)->display(array_merge($context, array("exportFileName" => "course-overview-task-list", "targetFormId" => "overview-task-list", "exportClass" => "btn-sm pull-right", "exportWebpack" => "ture")));
        // line 16
        echo "<div id=\"task-data-chart\"
  data-url=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_task_detail", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\"
  data-form=\".js-task-detail\"
  class=\"mtl detail-chart-container chart-container text-sm\">
</div>";
    }

    public function getTemplateName()
    {
        return "course-manage/overview/task-detail/task-chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 17,  36 => 16,  34 => 8,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/task-detail/task-chart.html.twig", "/vagrant_data/nuliedu/app/Resources/views/course-manage/overview/task-detail/task-chart.html.twig");
    }
}
