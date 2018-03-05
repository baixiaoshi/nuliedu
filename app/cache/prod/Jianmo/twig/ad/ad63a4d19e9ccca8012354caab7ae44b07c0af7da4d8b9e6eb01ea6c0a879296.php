<?php

/* admin/classroom/set.html.twig */
class __TwigTemplate_535051f7878c1e06ca6120612c96c1d328943ba7e02695a6d89b198efba1eb17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/classroom/set.html.twig", 1);
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
        $context["menu"] = "admin_classroom_setting";
        // line 5
        $context["script_controller"] = "topxiaadminbundle/controller/classroom/set";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" method=\"post\" id=\"member-zone-form\" novalidate>
    
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.classroom.setting_classroom_name"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-4\">
        <input name=\"name\" type=\"text\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom"), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom"), "name", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <div class=\"help-block\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.classroom.setting_classroom_name.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"alert alert-warning col-md-offset-2\" role=\"alert\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.classroom.setting_classroom_name.tips"), "html", null, true);
        echo "
    </div>
    
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.classroom.course_discount"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-7 radios\">
        ";
        // line 31
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("discount_buy", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.yes"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.no")), (($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom"), "discount_buy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom"), "discount_buy", array()), 1)) : (1)));
        echo "
        <div class=\"help-block\"><p>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.classroom.course_discount.help_block"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.classroom.classroom_list_default_seq"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-7 radios\">
        ";
        // line 42
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("explore_default_orderBy", array("createdTime" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.latest"), "studentNum" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.hotest"), "recommendedSeq" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.recommended")), $this->getAttribute(($context["classroomSetting"] ?? null), "explore_default_orderBy", array()));
        echo "
        <p class=\"help-block\"><a target=\"_blank\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.classroom.classroom_list.help_block"), "html", null, true);
        echo "</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.classroom.classroom_list_default_seq.help_block"), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>  
      </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
";
    }

    public function getTemplateName()
    {
        return "admin/classroom/set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 53,  117 => 50,  103 => 43,  99 => 42,  93 => 39,  83 => 32,  79 => 31,  73 => 28,  65 => 23,  58 => 19,  54 => 18,  48 => 15,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/classroom/set.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/classroom/set.html.twig");
    }
}
