<?php

/* admin/open-course/course-search-form.html.twig */
class __TwigTemplate_679e724ca628b4d6fd89668bfa350fbf865023c5f9232ac9466e43f9e832df1d extends Twig_Template
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
        echo "<form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("actionUrl", $context)) ? (_twig_default_filter(($context["actionUrl"] ?? null), "")) : ("")), "html", null, true);
        echo "\" method=\"get\" novalidate>
  ";
        // line 2
        $this->loadTemplate("org/org-tree-select.html.twig", "admin/open-course/course-search-form.html.twig", 2)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 3
        echo "  <div class=\"form-group\">
    <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
      ";
        // line 5
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.category_placeholder"));
        echo "
    </select>
  </div>
  ";
        // line 8
        if (((array_key_exists("showStatusSelect", $context)) ? (_twig_default_filter(($context["showStatusSelect"] ?? null), null)) : (null))) {
            // line 9
            echo "    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        ";
            // line 11
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.status_option"));
            echo "
      </select>
    </div>
  ";
        }
        // line 15
        echo "  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.title_placeholder"), "html", null, true);
        echo "\" name=\"titleLike\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
  </div>
  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.creator_placeholer"), "html", null, true);
        echo "\" name=\"creator\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
  </div>
  <button class=\"btn btn-primary\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>
  ";
        // line 22
        $this->loadTemplate("admin/widget/tooltip-widget.html.twig", "admin/open-course/course-search-form.html.twig", 22)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.open_tips"), "placement" => "left")));
        // line 23
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "admin/open-course/course-search-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  71 => 22,  67 => 21,  60 => 19,  52 => 16,  49 => 15,  42 => 11,  38 => 9,  36 => 8,  30 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/open-course/course-search-form.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/open-course/course-search-form.html.twig");
    }
}
