<?php

/* css_loader.html.twig */
class __TwigTemplate_59f5f8b17d03abbcb7e9c2f8536c2539e898d4bbbec42371c781a23005944cb4 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if ((is_string($__internal_1e06c81e8246c1450953f0dbc34b5914b4736f711c17b1441a96fb021c5b6811 = $context["path"]) && is_string($__internal_d54de2bf7ff134a490b95ea915e71cb7990fac86cacb6fbaf8a2020ad74cc6f9 = "http://") && ('' === $__internal_d54de2bf7ff134a490b95ea915e71cb7990fac86cacb6fbaf8a2020ad74cc6f9 || 0 === strpos($__internal_1e06c81e8246c1450953f0dbc34b5914b4736f711c17b1441a96fb021c5b6811, $__internal_d54de2bf7ff134a490b95ea915e71cb7990fac86cacb6fbaf8a2020ad74cc6f9)))) {
                // line 3
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            } else {
                // line 5
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "css_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "css_loader.html.twig", "/vagrant_data/nuliedu/app/Resources/views/css_loader.html.twig");
    }
}
