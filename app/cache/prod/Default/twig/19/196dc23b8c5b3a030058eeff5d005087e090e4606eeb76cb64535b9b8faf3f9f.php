<?php

/* admin/theme/index.html.twig */
class __TwigTemplate_f0d543e28a77e1e707db9984f240df2896a76a46380a91ddd52c27576e666446 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/theme/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "setting/theme";
        // line 5
        $context["menu"] = "admin_setting_theme";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <table class=\"table table-striped table-hover\" id=\"theme-table\">
    <thead>
    <tr>
      <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.name"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.version"), "html", null, true);
        echo "</th>
      <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.author"), "html", null, true);
        echo "</th>
      <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.operation"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 20
            echo "        <tr>
          <td>

            <div class=\"media\">
              <img class=\"media-object pull-left\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("themes/" . $this->getAttribute($context["theme"], "uri", array())) . "/") . $this->getAttribute($context["theme"], "thumb", array()))), "html", null, true);
            echo "\" width=\"150\">
              <div class=\"media-body\">
                <h5 class=\"media-heading\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "</h5>
                ";
            // line 27
            echo (($this->getAttribute($context["theme"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "description", array()), "")) : (""));
            echo "
                ";
            // line 28
            if ((($this->getAttribute($context["theme"], "setting", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "setting", array()), null)) : (null))) {
                // line 29
                echo "                  <a href=\"../";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "setting", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.setting_btn"), "html", null, true);
                echo "</a>
                ";
            }
            // line 31
            echo "              </div>
            </div>
          </td>
          <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "version", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "author", array()), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 37
            if (($this->getAttribute(($context["currentTheme"] ?? null), "uri", array()) == $this->getAttribute($context["theme"], "uri", array()))) {
                // line 38
                echo "              <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.current_theme"), "html", null, true);
                echo "</span>
\t            ";
                // line 39
                if ((($this->getAttribute($context["theme"], "support_config", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "support_config", array()), false)) : (false))) {
                    // line 40
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_manage", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                    echo "\"class=\"btn btn-primary\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage_btn"), "html", null, true);
                    echo "</a>
\t            ";
                }
                // line 42
                echo "            ";
            } else {
                // line 43
                echo "              <button class=\"btn btn-default btn-sm use-theme-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_theme_change", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.use_btn"), "html", null, true);
                echo "</button>
            ";
            }
            // line 45
            echo "            
           
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </tbody>
  </table>


";
    }

    public function getTemplateName()
    {
        return "admin/theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 50,  136 => 45,  128 => 43,  125 => 42,  117 => 40,  115 => 39,  110 => 38,  108 => 37,  103 => 35,  99 => 34,  94 => 31,  86 => 29,  84 => 28,  80 => 27,  76 => 26,  71 => 24,  65 => 20,  61 => 19,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/theme/index.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/theme/index.html.twig");
    }
}
