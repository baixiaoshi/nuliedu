<?php

/* admin/system/default-course-picture.html.twig */
class __TwigTemplate_6263ce428c69f225dcb35ffab2928c2c8b8fd576778f8354949ccfb64b38a8db extends Twig_Template
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
        echo "
<div class=\"form-group\" id=\"course-picture-class\" 
";
        // line 3
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.defaultCoursePicture") == 0)) {
            // line 4
            echo "style=\"display:none;\"
";
        }
        // line 6
        echo ">
<div class=\"col-md-8 control-label\"><b>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_avatar.customer_default_avatar"), "html", null, true);
        echo "</b></div>
  <form id=\"course-picture-form\" method=\"post\" >
    <div class=\"controls col-md-8 controls\">
      <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath("", "course.png"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8 controls\">      
        <a id=\"default-course-picture-btn\"
        data-upload-token=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_default_course_picture_crop");
        echo "\"
        class=\"btn btn-default btn-sm\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
        echo "</a>
      </div>
    </div>
  </form>
</div>

<div class=\"form-group\" id=\"system-course-picture-class\" 
";
        // line 26
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.defaultCoursePicture") == 1)) {
            // line 27
            echo "style=\"display:none;\"
";
        }
        // line 29
        echo ">
  <div class=\"col-md-8 control-label\"><b>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_avatar.system_default_avatar"), "html", null, true);
        echo "</b></div>
    <div class=\"controls col-md-8 controls\">
      <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/course.png"), "html", null, true);
        echo "\">
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/system/default-course-picture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 32,  75 => 30,  72 => 29,  68 => 27,  66 => 26,  56 => 19,  52 => 18,  48 => 17,  38 => 10,  32 => 7,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/default-course-picture.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/default-course-picture.html.twig");
    }
}
