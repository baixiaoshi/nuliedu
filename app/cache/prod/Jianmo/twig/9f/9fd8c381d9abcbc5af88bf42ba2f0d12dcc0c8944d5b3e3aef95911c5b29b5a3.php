<?php

/* common/local-crop-image.html.twig */
class __TwigTemplate_f42e3d51972c9414e47409a65b72ee3077ecfdd138d7c48242ba80fcbd9aeef6 extends Twig_Template
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
        echo "<label class=\"image-upload-label\">
  <input type=\"file\" name=\"file\" class=\"js-upload-input hidden\" accept=\"image/bmp,image/jpeg,image/png\"
  data-token=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("default", "image"), "html", null, true);
        echo "\" 
  data-file-upload=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_upload");
        echo "\" 
  data-crop=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_img_crop");
        echo "\" 
  data-save-url=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["saveUrl"] ?? null));
        echo "\"
  data-targe-img=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["targetImg"] ?? null), "html", null, true);
        echo "\"
  data-crop-width=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["cropWidth"] ?? null), "html", null, true);
        echo "\"
  data-crop-height=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["cropHeight"] ?? null), "html", null, true);
        echo "\" />
</label>";
    }

    public function getTemplateName()
    {
        return "common/local-crop-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/local-crop-image.html.twig", "/vagrant_data/nuliedu/app/Resources/views/common/local-crop-image.html.twig");
    }
}
