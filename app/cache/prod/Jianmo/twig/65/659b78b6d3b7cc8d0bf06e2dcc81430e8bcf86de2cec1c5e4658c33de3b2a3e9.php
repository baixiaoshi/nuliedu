<?php

/* admin/role/index.html.twig */
class __TwigTemplate_2a5e591a2f2c7b26420903ac49a6eb77acd2fa5d3a6215853f962d226dbaeb8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/role/index.html.twig", 1);
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
        $context["menu"] = "admin_role_manage";
        // line 5
        $context["script_controller"] = "topxiaadminbundle/controller/role/index";
        // line 6
        $context["notUpdateRoles"] = array(0 => "ROLE_SUPER_ADMIN", 1 => "ROLE_ADMIN", 2 => "ROLE_TEACHER", 3 => "ROLE_USER");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select id=\"keywordType\" class=\"form-control\" name=\"keywordType\">
          ";
        // line 15
        $context["options"] = array("" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.keyword_type"), "nameLike" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.nameLike"), "codeLike" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.codeLike"));
        // line 16
        echo "          ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(($context["options"] ?? null), $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
    </select>
  </div>
  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.keyword.placeholer"), "html", null, true);
        echo "\">
  </div>

  <button class=\"btn btn-primary\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"25%\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.nameLike"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.codeLike"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.createdTime"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.nickname"), "html", null, true);
        echo "</th>
      <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.operation"), "html", null, true);
        echo "</th>
    </tr>   
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 36
            echo "      <tr>
        <td>
          ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true);
            echo "
        <td>
          ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "code", array()), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["role"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "        </td>
        <td>
          ";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["role"], "createdUserId", array()), array(), "array", false, true), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["role"], "createdUserId", array()), array(), "array", false, true), "nickname", array()), "--")) : ("--")), "html", null, true);
            echo "
        </td>
        <td>
          <div class=\"btn-group\">
            <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_show", array("id" => $this->getAttribute($context["role"], "id", array()))), "html", null, true);
            echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.view"), "html", null, true);
            echo "</a>
            ";
            // line 50
            if (!twig_in_filter($this->getAttribute($context["role"], "code", array()), ($context["notUpdateRoles"] ?? null))) {
                // line 51
                echo "              ";
                $this->loadTemplate("admin/role/templates/group-button.html.twig", "admin/role/index.html.twig", 51)->display(array_merge($context, array("parentCode" => "admin_role_manage", "group" => "groupBtn", "role" => $context["role"])));
                // line 52
                echo "            ";
            }
            // line 53
            echo "          </div>
        </td>
      </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 57
            echo "      <tr><td class=\"empty\" colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.role.empty"), "html", null, true);
            echo "</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </table>

  <div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.help_block");
        echo "
  </div>


  ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "admin/role/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 66,  187 => 62,  182 => 59,  173 => 57,  157 => 53,  154 => 52,  151 => 51,  149 => 50,  143 => 49,  136 => 45,  131 => 43,  125 => 40,  120 => 38,  116 => 36,  98 => 35,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  68 => 23,  60 => 20,  52 => 16,  50 => 15,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  29 => 6,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/role/index.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/role/index.html.twig");
    }
}
