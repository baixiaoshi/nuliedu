<?php

/* default/footer-link.html.twig */
class __TwigTemplate_24642805373e966b8ee6e2f3ba379f42b676464207fbbcb0b0b50c465aefe20f extends Twig_Template
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
        echo "<div class=\"es-footer-link\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("jianmo:bottom_info");
        echo "
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/footer-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/footer-link.html.twig", "/vagrant_data/nuliedu/app/Resources/views/default/footer-link.html.twig");
    }
}
