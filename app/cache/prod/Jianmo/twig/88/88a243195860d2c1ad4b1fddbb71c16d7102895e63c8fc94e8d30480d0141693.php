<?php

/* course/header/header-for-member-responsive.html.twig */
class __TwigTemplate_c12f11ac6f6f788185fa01cb36be68de274a8533e2d6f0be511379a4d6193969 extends Twig_Template
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
        echo "<div class=\"course-detail-section-responsive visible-xs visible-sm clearfix\">
  <ul class=\"clearfix\">
    <!--营销页显示-->
    ";
        // line 4
        if (($context["marketingPage"] ?? null)) {
            // line 5
            echo "    <li class=\"js-unfavorite-btn\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\"
      ";
            // line 6
            if ( !($context["isUserFavorite"] ?? null)) {
                echo "style=\"display: none\" ";
            }
            echo ">
      <a class=\"color-primary\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "\"
        data-trigger=\"hover\">
        <i class=\"es-icon es-icon-bookmark color-primary\"></i>
        <br/>
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "
      </a>
    </li>
    <li class=\"js-favorite-btn\" id=\"favorite-btn\" data-url=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\"
    ";
            // line 15
            if (($context["isUserFavorite"] ?? null)) {
                echo "style=\"display: none\"";
            }
            echo ">
    <a class=\"\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "\"
        data-trigger=\"hover\">
        <i class=\"es-icon es-icon-bookmarkoutline\"></i>
        <br/>
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "
    </a>
    </li>
    ";
        }
        // line 24
        echo "    <li class=\"es-share top  ";
        if ( !($context["marketingPage"] ?? null)) {
            echo " learn-es-share ";
        }
        echo "\">
      <a class=\" dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "\">
        <i class=\"es-icon es-icon-share\"></i>
        <br/>
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "
      </a>
      ";
        // line 30
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-for-member-responsive.html.twig", 30)->display(array_merge($context, array("type" => "courseSet")));
        // line 31
        echo "    </li>
    ";
        // line 32
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.header-marketing-btn.extension", array("course" => ($context["course"] ?? null), "mobile" => true));
        echo "
  </ul>
</div>
<div class=\"text-right buy-btn-group visible-xs visible-sm\">
  <span class=\"mr20\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.course.free_mode_plan.task_progress"), "html", null, true);
        echo twig_escape_filter($this->env, ($context["taskResultCount"] ?? null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, ($context["taskCount"] ?? null), "html", null, true);
        echo "</span>
  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["toLearnTasks"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["toLearnTask"]) {
            // line 38
            echo "    ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 39
                echo "      <a class=\"btn btn-primary btn-lg \"
        href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute($context["toLearnTask"], "id", array()))), "html", null, true);
                echo "\">
        ";
                // line 41
                if ((($context["taskResultCount"] ?? null) < 1)) {
                    // line 42
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.start_learning"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 44
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.continue_learning_btn"), "html", null, true);
                    echo "
        ";
                }
                // line 46
                echo "      </a>
    ";
            }
            // line 48
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toLearnTask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "course/header/header-for-member-responsive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 49,  156 => 48,  152 => 46,  146 => 44,  140 => 42,  138 => 41,  134 => 40,  131 => 39,  128 => 38,  111 => 37,  104 => 36,  97 => 32,  94 => 31,  92 => 30,  87 => 28,  81 => 25,  74 => 24,  67 => 20,  60 => 16,  54 => 15,  50 => 14,  44 => 11,  37 => 7,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-member-responsive.html.twig", "/vagrant_data/nuliedu/app/Resources/views/course/header/header-for-member-responsive.html.twig");
    }
}
