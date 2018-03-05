<?php

/* default/footer.html.twig */
class __TwigTemplate_3938466287fd1a7a34dc54a570418eaf3368440b148761c454cf2e9d35974cea extends Twig_Template
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
        echo "<div class=\"site-footer container clearfix\">

    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:default:footNavigation"));
        echo "

    <div class=\"text-gray\" data-role=\"default-foot-bar\">
      ";
        // line 6
        $this->loadTemplate("powered-by.html.twig", "default/footer.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo "
      <div class=\"pull-right\">";
        // line 8
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程内容版权均归"), "html", null, true);
            echo "<a href=\"/\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所有"), "html", null, true);
        }
        echo "&nbsp;";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp")) {
            echo "<a href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp"), "html", null, true);
            echo "</a>";
        }
        echo "</div>

      <div class=\"pull-right mhs\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_archive");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程存档"), "html", null, true);
        echo "</a></div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  36 => 8,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/footer.html.twig", "/vagrant_data/nuliedu/web/themes/default/views/default/footer.html.twig");
    }
}
