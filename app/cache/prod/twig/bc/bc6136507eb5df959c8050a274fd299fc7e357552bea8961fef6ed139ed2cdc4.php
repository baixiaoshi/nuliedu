<?php

/* script/translation.html.twig */
class __TwigTemplate_7a936487963ac65f18552e36aa82f8d9601a3f8ece2ab18fb49572359ae58e3b extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/translations/translator.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 3
        $context["locales"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "session", array()), "get", array(0 => "_locale", 1 => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array())), "method");
        // line 4
        if ($this->getAttribute(($context["app"] ?? null), "debug", array())) {
            // line 5
            echo "  <script src=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jstranslation_js", array("domain" => "js"));
            echo "?locales=";
            echo twig_escape_filter($this->env, ($context["locales"] ?? null), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 7
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/translations/" . ($context["locales"] ?? null)) . ".js")), "html", null, true);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "script/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  29 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "script/translation.html.twig", "/vagrant_data/nuliedu/app/Resources/views/script/translation.html.twig");
    }
}
