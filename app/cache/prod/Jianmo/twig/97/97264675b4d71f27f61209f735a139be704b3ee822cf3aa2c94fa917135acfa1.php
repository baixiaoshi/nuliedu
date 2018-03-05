<?php

/* admin/system/course-avatar.html.twig */
class __TwigTemplate_f7a8353c3116c3e464c99a4c0e6ab43a4a9fc68452368ace3d079db5dbf096a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/course-avatar.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_setting_course_avatar";
        // line 4
        $context["script_controller"] = "setting/default-course-picture";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8 radios\" id=\"defaultCoursePicture\">
        ";
        // line 15
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("coursePicture", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_avatar.customer_default_avatar"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_avatar.system_default_avatar")), (($this->getAttribute(($context["defaultSetting"] ?? null), "defaultCoursePicture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["defaultSetting"] ?? null), "defaultCoursePicture", array()), 0)) : (0)));
        echo "
        <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_avatar.tips"), "html", null, true);
        echo "</p>
        ";
        // line 17
        $this->loadTemplate("admin/system/default-course-picture.html.twig", "admin/system/course-avatar.html.twig", 17)->display($context);
        // line 18
        echo "      </div>
    </div>
  </fieldset>

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>
  <input type=\"hidden\" name=\"defaultCoursePicture\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["defaultSetting"] ?? null), "defaultCoursePicture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["defaultSetting"] ?? null), "defaultCoursePicture", array()), 0)) : (0)), "html", null, true);
        echo "\">

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary mtl mll\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "admin/system/course-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  73 => 27,  66 => 23,  59 => 18,  57 => 17,  53 => 16,  49 => 15,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/course-avatar.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/course-avatar.html.twig");
    }
}
