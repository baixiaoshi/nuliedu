<?php

/* courseset-manage/base.html.twig */
class __TwigTemplate_a6af5d8ff997769e2042ad0bcecd8adcdab8c73caabcc1be4fe8e48655e9f134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "courseset-manage/base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "libs/select2.js", 2 => "app/js/courseset-manage/base/index.js"));
        // line 6
        $context["side_nav"] = "base";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "\t<div class=\"panel panel-default\" role=\"courseset-manage-base\">
    <div class=\"panel-heading\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.content_title"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      <form class=\"form-horizontal\" id=\"courseset-form\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "
        <div class=\"form-group\">
          <div class=\"col-sm-2 control-label\">
          <label class=\"control-label-required\" for=\"title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.title"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-md-8\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\" id=\"courseSetType\" name=\"type\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "type", array()), "html", null, true);
        echo "\">
            <input type=\"text\" id=\"title\" name=\"title\" required=\"required\" class=\"form-control\"
                   value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\" for=\"subtitle\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.sub_title"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8\">
            <textarea id=\"subtitle\" name=\"subtitle\" class=\"form-control\">";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "subtitle", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\" for=\"tags\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls\">
            <input type=\"text\" id=\"tags\" name=\"tags\" class=\"width-full select2-offscreen\"tabindex=\"-1\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_join_filter(($context["tags"] ?? null), ","), "html", null, true);
        echo "\"
              data-url=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_match");
        echo "\"
              data-explain=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag_tips"), "html", null, true);
        echo "\">
            <div class=\"help-block\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag_tips"), "html", null, true);
        echo "</div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\" for=\"categoryId\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.category"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls\">
            <select id=\"categoryId\" name=\"categoryId\" class=\"form-control width-input width-input-large\">
              ";
        // line 47
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"), $this->getAttribute(($context["courseSet"] ?? null), "categoryId", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.category"));
        echo "
            </select>
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>
        ";
        // line 52
        $this->loadTemplate("org/org-tree-select-webpack.html.twig", "courseset-manage/base.html.twig", 52)->display(array_merge($context, array("orgCode" => $this->getAttribute(($context["courseSet"] ?? null), "orgCode", array()), "inputClass" => "width-input width-input-large")));
        // line 53
        echo "
        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 radios\">
            ";
        // line 57
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("serializeMode", array("none" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.none"), "serialized" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.serialized"), "finished" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.finished")), (($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()), "none")) : ("none")));
        echo "
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"col-sm-offset-2 col-sm-8\">
            <button id=\"courseset-base-submit\" type=\"button\" class=\"btn btn-primary\" data-loading-text=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </form>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 62,  152 => 57,  147 => 55,  143 => 53,  141 => 52,  133 => 47,  127 => 44,  120 => 40,  116 => 39,  112 => 38,  108 => 37,  103 => 35,  95 => 30,  90 => 28,  82 => 23,  77 => 21,  73 => 20,  69 => 19,  63 => 16,  57 => 13,  53 => 12,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/base.html.twig", "/vagrant_data/nuliedu/app/Resources/views/courseset-manage/base.html.twig");
    }
}
