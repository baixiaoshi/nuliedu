<?php

/* task-manage/modal-layout.html.twig */
class __TwigTemplate_2d8b14b65e21c4a821340efd7044d8f3f3e5b410f538e7ffb200938edd6f98d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "task-manage/modal-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'task_create_type' => array($this, 'block_task_create_type'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        if (((array_key_exists("task", $context)) ? (_twig_default_filter(($context["task"] ?? null), false)) : (false))) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.modify"), "html", null, true);
            echo "
  ";
        } else {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.create"), "html", null, true);
            echo "
  ";
        }
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"task-create-editor\" id=\"task-create-editor\">
    <ul class=\"es-step es-step-3 clearfix\" id=\"task-create-step\">
      <li class=\"doing\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.choose_teach_way");
        echo "
      </li>
      <li>
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.setup_content");
        echo "
      </li>
      <li>
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.setup_finish_condition");
        echo "
      </li>
    </ul>
    ";
        // line 25
        $this->displayBlock('task_create_type', $context, $blocks);
        // line 26
        echo "    <div id=\"task-create-content\" class=\"task-create-content hidden\"></div>
  </div>
";
    }

    // line 25
    public function block_task_create_type($context, array $blocks = array())
    {
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "  ";
        if (((((array_key_exists("task", $context)) ? (_twig_default_filter(($context["task"] ?? null), false)) : (false)) && ((array_key_exists("taskMode", $context)) ? (_twig_default_filter(($context["taskMode"] ?? null), "")) : (""))) && (($context["taskMode"] ?? null) != "lesson"))) {
            // line 31
            echo "    <button id=\"course-tasks-delete\" type=\"submit\" class=\"btn btn-danger pull-left delete-task\"
            data-url=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_delete", array("taskId" => $this->getAttribute(($context["task"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()))), "html", null, true);
            echo "\">
      <i class=\"es-icon es-icon-delete\"></i>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
            echo "</button>
  ";
        }
        // line 35
        echo "  <button id=\"course-tasks-prev\" type=\"submit\" class=\"btn btn-default hidden\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上一步"), "html", null, true);
        echo "</button>
  <button id=\"course-tasks-next\" type=\"submit\" class=\"btn btn-default hidden\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下一步"), "html", null, true);
        echo "</button>
  <button id=\"course-tasks-submit\" type=\"submit\" class=\"btn btn-primary hidden\"
          data-loading-text=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存..."), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "task-manage/modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 38,  116 => 36,  111 => 35,  106 => 33,  102 => 32,  99 => 31,  96 => 30,  93 => 29,  88 => 25,  82 => 26,  80 => 25,  74 => 22,  68 => 19,  62 => 16,  57 => 13,  54 => 12,  46 => 8,  40 => 6,  37 => 5,  34 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task-manage/modal-layout.html.twig", "/vagrant_data/nuliedu/app/Resources/views/task-manage/modal-layout.html.twig");
    }
}
