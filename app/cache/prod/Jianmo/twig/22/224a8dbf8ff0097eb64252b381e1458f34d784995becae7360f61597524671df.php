<?php

/* courseset-manage/cover.html.twig */
class __TwigTemplate_d4905384f43493c6aea889b575b98d979d9aa53cdcd905c637744b2fe48459c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "courseset-manage/cover.html.twig", 1);
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
        // line 4
        $context["side_nav"] = "cover";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/courseset-manage/cover/index.js"));
        // line 6
        $context["token"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("tmp", "image");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image.content_title"), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">
      ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img class=\"img-responsive\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover(($context["courseSet"] ?? null), "large"), "courseSet.png"), "html", null, true);
        echo "\" />
        </div>
      </div>
      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <p class=\"help-block upload-height\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image.upload_tips");
        echo "</p>
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <a
          id=\"upload-picture-btn\"
          class=\"upload-picture-btn btn btn-fat btn-primary\"
          data-upload-token=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
          ";
        // line 33
        if ((($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "open") || ($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "liveOpen"))) {
            // line 34
            echo "            data-goto-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_picture_crop", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\"
          ";
        } else {
            // line 36
            echo "            data-goto-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_cover_crop", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\"
          ";
        }
        // line 38
        echo "
          >";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image.upload_btn"), "html", null, true);
        echo "</a>
        </div>
      </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/cover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  103 => 38,  97 => 36,  91 => 34,  89 => 33,  85 => 32,  73 => 23,  65 => 18,  58 => 14,  51 => 10,  47 => 8,  44 => 7,  36 => 3,  32 => 1,  30 => 6,  28 => 5,  26 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/cover.html.twig", "/vagrant_data/nuliedu/app/Resources/views/courseset-manage/cover.html.twig");
    }
}
