<?php

/* admin/course/delete.html.twig */
class __TwigTemplate_3329a6c2a856d73cadfcf0eba5dcf545d71afaa82b74a1736a464247e17df9f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("old-bootstrap-modal-layout.html.twig", "admin/course/delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "old-bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.auth_user"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <form id=\"delete-form\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_check_password");
        echo "\">
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.user_passwd"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.input_passwd_placeholder"), "html", null, true);
        echo "\">
      </div>
    </div>
    <input type=\"hidden\" name=\"courseId\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
  <div id=\"delete-course-progress\" class=\"delete-course-progress\" style=\"display:none;\">
    <div class=\"progress progress-striped active\">
      <div class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
    </div>
    <div class=\"text-success progress-text\"></div>
  </div>
";
    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        // line 27
        echo "  <button id=\"delete-btn\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit.submiting"), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary pull-right js-delete-btn\" data-toggle=\"form-submit\" data-target=\"#delete-form\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_set_delete", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-link pull-right btn-closed\" data-dismiss=\"modal\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "</button>
  <script>app.load('course/delete-modal');</script>
";
    }

    public function getTemplateName()
    {
        return "admin/course/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  78 => 27,  75 => 26,  62 => 16,  58 => 15,  52 => 12,  46 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/course/delete.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/course/delete.html.twig");
    }
}
