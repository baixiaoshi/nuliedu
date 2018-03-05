<?php

/* admin/course-set/index.html.twig */
class __TwigTemplate_8115bad4373f748150ddc745e2bf65af85c7cd28cd56424743a60530a077f485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/course-set/index.html.twig", 1);
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
        $context["menu"] = "admin_course_manage";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->loadTemplate("admin/course-set/tab.html.twig", "admin/course-set/index.html.twig", 8)->display($context);
        // line 9
        echo "  <br>
  <div class=\"well well-sm mtl\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      ";
        // line 12
        $this->loadTemplate("org/org-tree-select.html.twig", "admin/course-set/index.html.twig", 12)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 13
        echo "
      <div class=\"form-group\">
        <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
          ";
        // line 16
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.category_placeholder"));
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"status\">
          ";
        // line 21
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.status_placeholder"));
        echo "
        </select>
      </div>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.title_placeholder"), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.creator_placeholer"), "html", null, true);
        echo "\" name=\"creatorName\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "creatorName"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>

      ";
        // line 33
        $this->loadTemplate("admin/widget/tooltip-widget.html.twig", "admin/course-set/index.html.twig", 33)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.course_tips"), "placement" => "left")));
        // line 34
        echo "    </form>
  </div>
  
  <p class=\"text-muted\">
    <span class=\"mrl\">";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.count", array("%courseNum%" => $this->getAttribute(($context["courseSetStatusNum"] ?? null), "total", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.published_count", array("%publishedNum%" => $this->getAttribute(($context["courseSetStatusNum"] ?? null), "published", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.closed_count", array("%closedNum%" => $this->getAttribute(($context["courseSetStatusNum"] ?? null), "closed", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.unpublish_count", array("%unPublishedNum%" => $this->getAttribute(($context["courseSetStatusNum"] ?? null), "draft", array())));
        echo "</span>
  </p>

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      ";
        // line 47
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 48
            echo "        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      ";
        }
        // line 50
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.number"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.name"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.price"), "html", null, true);
        echo "</th>
      ";
        // line 53
        if ((($context["filter"] ?? null) == "normal")) {
            // line 54
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.course_num"), "html", null, true);
            echo "</th>
      ";
        }
        // line 56
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.status"), "html", null, true);
        echo "</th>
      ";
        // line 57
        $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/course-set/index.html.twig", 57)->display($context);
        // line 58
        echo "      
      ";
        // line 59
        if ((($context["filter"] ?? null) == "classroom")) {
            // line 60
            echo "        <th width=\"15%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.classroom_course_location", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</th>
      ";
        } else {
            // line 62
            echo "        <th>
          ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.student_number"), "html", null, true);
            echo "
        </th>
      ";
        }
        // line 66
        echo "
      ";
        // line 67
        if ((($context["filter"] ?? null) == "course")) {
            // line 68
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.income_RMB"), "html", null, true);
            echo "</th>
      ";
        }
        // line 70
        echo "
      ";
        // line 71
        if ((($context["filter"] ?? null) == "vip")) {
            // line 72
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.vip_grade"), "html", null, true);
            echo "</th>
      ";
        }
        // line 74
        echo "
      
      <th>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.creator"), "html", null, true);
        echo "</th>
      <th>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.serialize_mode"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.operater"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            // line 83
            echo "      ";
            $context["user"] = (($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array"), null)) : (null));
            // line 84
            echo "      ";
            $context["category"] = (($this->getAttribute(($context["categories"] ?? null), $this->getAttribute($context["courseSet"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["categories"] ?? null), $this->getAttribute($context["courseSet"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 85
            echo "      ";
            $this->loadTemplate("admin/course-set/tr.html.twig", "admin/course-set/index.html.twig", 85)->display($context);
            // line 86
            echo "    ";
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
            // line 87
            echo "      <tr>
        <td colspan=\"20\">
          <div class=\"empty\">";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.empty"), "html", null, true);
            echo "</div>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    </tbody>
  </table>
  ";
        // line 95
        $this->loadTemplate("org/batch-update-org-btn.html.twig", "admin/course-set/index.html.twig", 95)->display(array_merge($context, array("module" => "courseSet", "formId" => "course-table")));
        // line 96
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "admin/course-set/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 96,  269 => 95,  265 => 93,  255 => 89,  251 => 87,  238 => 86,  235 => 85,  232 => 84,  229 => 83,  211 => 82,  204 => 78,  200 => 77,  196 => 76,  192 => 74,  186 => 72,  184 => 71,  181 => 70,  175 => 68,  173 => 67,  170 => 66,  164 => 63,  161 => 62,  155 => 60,  153 => 59,  150 => 58,  148 => 57,  143 => 56,  137 => 54,  135 => 53,  131 => 52,  127 => 51,  122 => 50,  118 => 48,  116 => 47,  107 => 41,  103 => 40,  99 => 39,  95 => 38,  89 => 34,  87 => 33,  82 => 31,  75 => 29,  67 => 26,  59 => 21,  51 => 16,  46 => 13,  44 => 12,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/course-set/index.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/course-set/index.html.twig");
    }
}
