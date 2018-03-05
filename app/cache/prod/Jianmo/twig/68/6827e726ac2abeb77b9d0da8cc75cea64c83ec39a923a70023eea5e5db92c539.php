<?php

/* admin/open-course/index.html.twig */
class __TwigTemplate_da3338f1e769a285c30fc0f63ddb75f4cae90279c57f18476088c99374d59d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/open-course/index.html.twig", 1);
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
        $context["menu"] = "admin_open_course";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 7
        $context["script_arguments"] = array("tagMatchUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_match"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $this->loadTemplate("admin/open-course/course-search-form.html.twig", "admin/open-course/index.html.twig", 12)->display(array_merge($context, array("actionUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_open_course"), "showStatusSelect" => 1)));
        // line 13
        echo "  
  ";
        // line 14
        if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled", 0) || (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled", 0) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_day") == "off")) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_hour") == "off")))) {
            // line 15
            echo "    <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.open_cloud_sms_tips"), "html", null, true);
            echo "&nbsp;&nbsp;";
            if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array()))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.open_cloud_sms", array("%cloudSmsUrl%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_sms")));
            }
            echo "</div>
  ";
        }
        // line 17
        echo "
  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      ";
        // line 21
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 22
            echo "        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      ";
        }
        // line 24
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.number_th"), "html", null, true);
        echo "</th>
      <th width=\"40%\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.name_th"), "html", null, true);
        echo "</th>
      <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.status_th"), "html", null, true);
        echo "</th>
      ";
        // line 27
        $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/open-course/index.html.twig", 27)->display($context);
        // line 28
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.creator_th"), "html", null, true);
        echo "</th>
      <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.operater_th"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 34
            echo "        ";
            $context["user"] = (($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 35
            echo "        ";
            $context["category"] = (($this->getAttribute(($context["categories"] ?? null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["categories"] ?? null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 36
            echo "        ";
            $this->loadTemplate("admin/open-course/tr.html.twig", "admin/open-course/index.html.twig", 36)->display($context);
            // line 37
            echo "      ";
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
            // line 38
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.empty"), "html", null, true);
            echo "</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </tbody>
  </table>
  ";
        // line 42
        $this->loadTemplate("org/batch-update-org-btn.html.twig", "admin/open-course/index.html.twig", 42)->display(array_merge($context, array("module" => "openCourse", "formId" => "course-table")));
        // line 43
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "admin/open-course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  148 => 42,  144 => 40,  135 => 38,  122 => 37,  119 => 36,  116 => 35,  113 => 34,  95 => 33,  88 => 29,  83 => 28,  81 => 27,  77 => 26,  73 => 25,  68 => 24,  64 => 22,  62 => 21,  56 => 17,  46 => 15,  44 => 14,  41 => 13,  38 => 12,  35 => 11,  31 => 1,  29 => 7,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/open-course/index.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/open-course/index.html.twig");
    }
}
