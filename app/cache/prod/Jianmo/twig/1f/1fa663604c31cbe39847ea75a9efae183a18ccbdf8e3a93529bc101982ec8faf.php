<?php

/* admin/role/templates/navigation.html.twig */
class __TwigTemplate_95d49eb1d23d442e85caddd5298a3ed89183f7075ad2e98070713823f5e5ab47 extends Twig_Template
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
        $context["permissions"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions(($context["parentCode"] ?? null));
        // line 2
        echo "
";
        // line 3
        if (((array_key_exists("permissions", $context)) ? (_twig_default_filter(($context["permissions"] ?? null), null)) : (null))) {
            // line 4
            echo "  ";
            if (((array_key_exists("menu", $context)) ? (_twig_default_filter(($context["menu"] ?? null), null)) : (null))) {
                // line 5
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array()));
                // line 6
                echo "  ";
            } else {
                // line 7
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode("admin");
                // line 8
                echo "  ";
            }
            // line 9
            echo "
  <ul class=\"nav navbar-nav\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visable", array(), "any", true, true) || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visable", array())))) {
                    // line 12
                    echo "      ";
                    // line 13
                    echo "      ";
                    if (($this->getAttribute($context["m"], "code", array()) != "admin_homepage")) {
                        // line 14
                        echo "        <li ";
                        if ((($context["menu"] ?? null) && ($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute(($context["rootMenu"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["rootMenu"] ?? null), "code", array()), null)) : (null))))) {
                            echo "class=\"active\"";
                        }
                        echo " id=\"menu_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "code", array()), "html", null, true);
                        echo "\">
          ";
                        // line 15
                        $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]));
                        // line 16
                        echo "          ";
                        if (((($this->getAttribute(($context["tabMenu"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tabMenu"] ?? null), "mode", array()), "")) : ("")) == "capsules")) {
                            // line 17
                            echo "            ";
                            $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild(($context["tabMenu"] ?? null));
                            // line 18
                            echo "          ";
                        }
                        // line 19
                        echo "          <a
              title=\"";
                        // line 20
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                        echo "\"
              href=\"";
                        // line 21
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["tabMenu"] ?? null)), "html", null, true);
                        echo "\"
              ";
                        // line 22
                        if ((($this->getAttribute($context["m"], "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "blank", array()), false)) : (false))) {
                            // line 23
                            echo "                target=\"_blank\"
              ";
                        }
                        // line 25
                        echo "          >
            ";
                        // line 26
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                        echo "
          </a>

        ";
                        // line 30
                        echo "      </li>
      ";
                    }
                    // line 32
                    echo "      ";
                    // line 33
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/role/templates/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  107 => 33,  105 => 32,  101 => 30,  95 => 26,  92 => 25,  88 => 23,  86 => 22,  82 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  64 => 15,  55 => 14,  52 => 13,  50 => 12,  45 => 11,  41 => 9,  38 => 8,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/role/templates/navigation.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/role/templates/navigation.html.twig");
    }
}
