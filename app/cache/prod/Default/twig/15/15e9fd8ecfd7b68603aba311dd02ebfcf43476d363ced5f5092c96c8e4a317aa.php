<?php

/* default/promoted-teacher-block.html.twig */
class __TwigTemplate_48aa91146675753ef9a1d00cdc1b451a3196c66a79c73f1aa72069a24f5c5ce4 extends Twig_Template
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
        if (($context["teacher"] ?? null)) {
            // line 2
            echo "<div class=\"es-box\">
  <div class=\"es-box-heading\"><h2>";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teacher.promoted_teacher.content_title"), "html", null, true);
            echo "</h2></div>
  <div class=\"es-box-body\">
    <div class=\"promoted-teacher\">
      <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["teacher"] ?? null), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["teacher"] ?? null), "mediumAvatar", array()), "avatar.png"), "html", null, true);
            echo "\" class=\"avatar\"></a>
      <a class=\"nickname\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["teacher"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? null), "nickname", array()), "html", null, true);
            echo "</a>
      <div class=\"title\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? null), "title", array()), "html", null, true);
            echo "</div>
      <div class=\"about\">";
            // line 9
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute(($context["teacher"] ?? null), "about", array()), 100);
            echo "</div>
      <div class=\"more\"><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["teacher"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teacher.promoted_teacher.see_ben"), "html", null, true);
            echo " &raquo;</a></div>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/promoted-teacher-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  46 => 9,  42 => 8,  36 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/promoted-teacher-block.html.twig", "/vagrant_data/nuliedu/app/Resources/views/default/promoted-teacher-block.html.twig");
    }
}
