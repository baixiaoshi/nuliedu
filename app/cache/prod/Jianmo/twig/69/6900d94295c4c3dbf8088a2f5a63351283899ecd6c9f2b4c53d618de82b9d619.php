<?php

/* default/header/user-operation.html.twig */
class __TwigTemplate_f38c72ffc939797b757a439686a1c4cb6fe4c76db528f720b883d01811262247 extends Twig_Template
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
        echo "<div class=\"navbar-user ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
  <ul class=\"nav user-nav\">
    ";
        // line 3
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 4
            echo "      ";
            $this->loadTemplate("default/header/part/user-role-manage.html.twig", "default/header/user-operation.html.twig", 4)->display($context);
            // line 5
            echo "      ";
            $this->loadTemplate("default/header/part/user-inform.html.twig", "default/header/user-operation.html.twig", 5)->display($context);
            // line 6
            echo "      ";
            $this->loadTemplate("default/header/part/user-avatar.html.twig", "default/header/user-operation.html.twig", 6)->display($context);
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "      ";
            $this->loadTemplate("default/header/part/visitor-login.html.twig", "default/header/user-operation.html.twig", 8)->display($context);
            // line 9
            echo "    ";
        }
        // line 10
        echo "    ";
        // line 11
        echo "  </ul>
  <form class=\"navbar-form navbar-right hidden-xs\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
    <div class=\"form-group\">
      <input class=\"form-control js-search\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "q"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "q"), "method"))) : ("")), "html", null, true);
        echo "\" name=\"q\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.search"), "html", null, true);
        echo "\">
      <button class=\"button es-icon es-icon-search\"></button>
    </div>
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "default/header/user-operation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  52 => 12,  49 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  29 => 4,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/header/user-operation.html.twig", "/vagrant_data/nuliedu/app/Resources/views/default/header/user-operation.html.twig");
    }
}
