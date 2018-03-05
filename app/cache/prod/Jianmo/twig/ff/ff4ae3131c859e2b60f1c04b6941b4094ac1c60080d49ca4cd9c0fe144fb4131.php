<?php

/* courseset-manage/layout.html.twig */
class __TwigTemplate_eb264e68d488035a379a45111dcf6f39f9a6e0c72b9b5128e2f4953b7f6b8699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "courseset-manage/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'course_header' => array($this, 'block_course_header'),
            'main' => array($this, 'block_main'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["use_webapck_loader"] = true;
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-intro.js", 1 => "app/js/courseset-manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_manage"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        $this->displayBlock('course_header', $context, $blocks);
        // line 12
        echo "  ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "  ";
        // line 19
        echo "  ";
        // line 20
        echo "  ";
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        // line 24
        echo "  ";
        // line 25
        echo "  <div class=\"row\">
    <div class=\"col-md-3\">
      ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseSetManage:sidebar", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "curCourse" => ((array_key_exists("course", $context)) ? (_twig_default_filter(($context["course"] ?? null), null)) : (null)), "sideNav" => ((array_key_exists("side_nav", $context)) ? (_twig_default_filter(($context["side_nav"] ?? null), null)) : (null)))));
        echo "
    </div>
    <div class=\"col-md-9\">
      ";
        // line 30
        $this->displayBlock('main', $context, $blocks);
        // line 31
        echo "    </div>
  </div>
  ";
    }

    // line 9
    public function block_course_header($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseSetManage:header", array("courseSet" => ($context["courseSet"] ?? null), "course" => ((array_key_exists("course", $context)) ? (_twig_default_filter(($context["course"] ?? null), null)) : (null)), "manage" => true)));
        echo "
  ";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
    }

    // line 35
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "courseset-manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  105 => 30,  98 => 10,  95 => 9,  89 => 31,  87 => 30,  81 => 27,  77 => 25,  75 => 24,  73 => 23,  71 => 22,  69 => 21,  67 => 20,  65 => 19,  63 => 18,  61 => 17,  59 => 16,  57 => 15,  55 => 14,  53 => 13,  51 => 12,  48 => 9,  45 => 8,  37 => 3,  33 => 1,  31 => 6,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/layout.html.twig", "/vagrant_data/nuliedu/app/Resources/views/courseset-manage/layout.html.twig");
    }
}
