<?php

/* testpaper/manage/index.html.twig */
class __TwigTemplate_b168b590d0bc8c6894025ace9f34cbc2deb588c76abb560b0c4705595fd43825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "testpaper/manage/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "testpaper/manage/index.html.twig", 2);
        // line 6
        $context["side_nav"] = "testpaper";
        // line 7
        $context["parentId"] = ((array_key_exists("parentId", $context)) ? (_twig_default_filter(($context["parentId"] ?? null), null)) : (null));
        // line 9
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/testpaper-manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">
      <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_create", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\"
         class=\"btn btn-info btn-sm pull-right mls\"><span class=\"es-icon es-icon-anonymous-iconfont\"></span>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create_btn"), "html", null, true);
        echo "</a>
      ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.content_title"), "html", null, true);
        echo "
      ";
        // line 18
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course_set.testpaper_import_btn.extension", array("courseSet" => ($context["courseSet"] ?? null)));
        echo "
    </div>

    <div class=\"panel-body \" id=\"quiz-table-container\">

      <table class=\"table table-striped table-hover\" id=\"quiz-table\">
        ";
        // line 24
        echo $context["web_macro"]->getflash_messages();
        echo "
        <thead>
        <tr>
          <th><input type=\"checkbox\" autocomplete=\"off\" data-role=\"batch-select\"></th>
          <th width=\"20%\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.name"), "html", null, true);
        echo "</th>
          <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.status"), "html", null, true);
        echo "</th>
          <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.statistics"), "html", null, true);
        echo "</th>
          <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.time_limit"), "html", null, true);
        echo "</th>
          <th >";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.update"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.operation"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testpapers"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["testpaper"]) {
            // line 38
            echo "          ";
            $context["user"] = $this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["testpaper"], "updatedUserId", array()), array(), "array");
            // line 39
            echo "          ";
            $this->loadTemplate("testpaper/manage/testpaper-list-tr.html.twig", "testpaper/manage/index.html.twig", 39)->display($context);
            // line 40
            echo "        ";
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
            // line 41
            echo "          <tr>
            <td colspan=\"20\">
              ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.empty", array("%createUrl%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_create", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array())))));
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testpaper'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
      </table>
      <div>
        <label class=\"checkbox-inline\"><input type=\"checkbox\" autocomplete=\"off\" data-role=\"batch-select\"> ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.select_all"), "html", null, true);
        echo "</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.testpaper"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_deletes", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.delete_btn"), "html", null, true);
        echo "</button>
      </div>

      ";
        // line 54
        echo $context["web_macro"]->getpaginator(($context["paginator"] ?? null));
        echo "

      <div class=\"color-gray mtl\">
        ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.tips");
        echo "
      </div>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 57,  179 => 54,  169 => 51,  165 => 50,  160 => 47,  150 => 43,  146 => 41,  133 => 40,  130 => 39,  127 => 38,  109 => 37,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  75 => 24,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  49 => 12,  46 => 11,  38 => 4,  34 => 1,  32 => 9,  30 => 7,  28 => 6,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/index.html.twig", "/vagrant_data/nuliedu/app/Resources/views/testpaper/manage/index.html.twig");
    }
}
