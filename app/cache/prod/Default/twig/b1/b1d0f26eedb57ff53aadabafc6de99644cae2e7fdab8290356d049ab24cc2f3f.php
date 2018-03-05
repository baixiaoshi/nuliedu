<?php

/* stylesheet/stylesheet-custom.html.twig */
class __TwigTemplate_33519019f64e34be453363164040639a02fb5ba35e4c09f677c021c3909af0c7 extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/defaulttheme/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />";
    }

    public function getTemplateName()
    {
        return "stylesheet/stylesheet-custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "stylesheet/stylesheet-custom.html.twig", "/vagrant_data/nuliedu/web/themes/default/views/stylesheet/stylesheet-custom.html.twig");
    }
}
