<?php

/* admin/navigation/tbody.html.twig */
class __TwigTemplate_9f526adcb4eb8979fce30f4cfaee9a84119fcfd4d11771109431ee513c4ec860 extends Twig_Template
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
        echo "<tbody data-update-seqs-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_seqs_update");
        echo "\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigations"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["navigation"]) {
            // line 3
            echo "\t\t<tr class=\"treegrid-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["navigation"], "parentId", array()) != 0)) {
                echo "treegrid-parent-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "parentId", array()), "html", null, true);
            }
            echo " ";
            if (($this->getAttribute($context["navigation"], "parentId", array()) == 0)) {
                echo "has-subItems";
            } else {
                echo " child";
            }
            echo "\" id=\"navigations-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\" data-parent-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "parentId", array()), "html", null, true);
            echo "\">
\t\t  <td class=\"sort-handle\" style=\"vertical-align: middle; ";
            // line 4
            if (($this->getAttribute($context["navigation"], "parentId", array()) != 0)) {
                echo "padding-left: 30px";
            }
            echo "\">
        ";
            // line 8
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->navigationUrlFilter($this->getAttribute($context["navigation"], "url", array())), "html", null, true);
            echo "\" target=\"_blank\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "name", array()), "html", null, true);
            echo " </a>
      </td>
\t\t  <td>
\t\t\t\t";
            // line 11
            if (($this->getAttribute($context["navigation"], "isNewWin", array()) == 0)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.isNewWin.no"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.isNewWin.yes"), "html", null, true);
            }
            // line 12
            echo "  \t\t</td>
\t\t  <td>
        ";
            // line 14
            if (($this->getAttribute($context["navigation"], "isOpen", array()) == 1)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.status.open"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.status.closed"), "html", null, true);
            }
            // line 15
            echo "  \t\t</td>
\t\t  <td>
        ";
            // line 17
            if ((($this->getAttribute($context["navigation"], "type", array()) == "top") && ($this->getAttribute($context["navigation"], "parentId", array()) == 0))) {
                // line 18
                echo "\t        <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_create", array("type" => $this->getAttribute($context["navigation"], "type", array()), "parentId" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.add_child_menu_btn"), "html", null, true);
                echo "</button>
        ";
            }
            // line 20
            echo "          <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_update", array("id" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.edit_btn"), "html", null, true);
            echo "</button>
\t        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_delete", array("id" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
            echo "\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
            echo "</button>
\t\t   </td>
\t\t </tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "\t  <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navigation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
</tbody>";
    }

    public function getTemplateName()
    {
        return "admin/navigation/tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 27,  116 => 25,  103 => 21,  96 => 20,  88 => 18,  86 => 17,  82 => 15,  76 => 14,  72 => 12,  66 => 11,  57 => 8,  51 => 4,  29 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/navigation/tbody.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/navigation/tbody.html.twig");
    }
}
