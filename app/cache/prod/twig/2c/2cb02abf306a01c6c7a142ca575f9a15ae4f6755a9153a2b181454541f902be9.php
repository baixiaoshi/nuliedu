<?php

/* default/footer.html.twig */
class __TwigTemplate_dc4ded16246b94a1821685d0c228c7b12f9462cbd1cdd3348bd666b5dabbbf2d extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 2
            echo "    ";
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 3
            echo "    ";
            if ((($context["code"] ?? null) == "footer-link")) {
                // line 4
                echo "      ";
                $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
                // line 5
                echo "      ";
                $this->loadTemplate((("default/" . ($context["code"] ?? null)) . ".html.twig"), "default/footer.html.twig", 5)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? null))));
                // line 6
                echo "    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<footer class=\"es-footer\">
  <div class=\"copyright\">
    <div class=\"container\">
      ";
        // line 12
        $this->loadTemplate("powered-by.html.twig", "default/footer.html.twig", 12)->display($context);
        // line 13
        echo "      ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo "
      <a class=\"mlm\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_archive");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.footer.archive"), "html", null, true);
        echo "</a>
      <div class=\"mts\">
        ";
        // line 16
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright")) {
            // line 17
            echo "          ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.footer.course_copyright", array("%copyRightUrl%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright")));
            echo "
        ";
        }
        // line 19
        echo "        ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp")) {
            // line 20
            echo "          <a class=\"mlm\" href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 24
        echo "      </div>
    </div>
  </div>
</footer>
";
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
        return array (  103 => 24,  97 => 21,  94 => 20,  91 => 19,  85 => 17,  83 => 16,  76 => 14,  71 => 13,  69 => 12,  63 => 8,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/footer.html.twig", "/vagrant_data/nuliedu/app/Resources/views/default/footer.html.twig");
    }
}
