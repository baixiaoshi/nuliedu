<?php

/* org/parts/table-thead-tr.html.twig */
class __TwigTemplate_4ba92bf4d96ade99b267db9834e3827a5dc180103fe72fa7181dae26a1c2e2e4 extends Twig_Template
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
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "  <th width=\"12%\">
\t";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.org.belongs_to_org_th"), "html", null, true);
            echo "
  </th>
";
        }
    }

    public function getTemplateName()
    {
        return "org/parts/table-thead-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "org/parts/table-thead-tr.html.twig", "/vagrant_data/nuliedu/app/Resources/views/org/parts/table-thead-tr.html.twig");
    }
}
