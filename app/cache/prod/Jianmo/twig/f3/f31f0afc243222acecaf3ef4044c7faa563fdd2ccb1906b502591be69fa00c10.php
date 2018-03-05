<?php

/* course-manage/overview/layout.html.twig */
class __TwigTemplate_7df89ecb307f72ba98b98830b513c9dd114f51771c4578f8c9c7f60004d02232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'overview' => array($this, 'block_overview'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCount($this->getAttribute(($context["course"] ?? null), "courseSetId", array())) > 1)) ? ("course") : ("courseset")) . "-manage/layout.html.twig"), "course-manage/overview/layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "overview";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.content_title"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"panel panel-default\">
        ";
        // line 8
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/overview/layout.html.twig", 8)->display(array_merge($context, array("code" => ($context["side_nav"] ?? null))));
        // line 9
        echo "        <div class=\"panel-body course-statictics\">
            ";
        // line 10
        $this->displayBlock('overview', $context, $blocks);
        // line 11
        echo "        </div>
    </div>
";
    }

    // line 10
    public function block_overview($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "course-manage/overview/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  55 => 11,  53 => 10,  50 => 9,  48 => 8,  45 => 7,  42 => 6,  32 => 3,  28 => 1,  26 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/layout.html.twig", "/vagrant_data/nuliedu/app/Resources/views/course-manage/overview/layout.html.twig");
    }
}
