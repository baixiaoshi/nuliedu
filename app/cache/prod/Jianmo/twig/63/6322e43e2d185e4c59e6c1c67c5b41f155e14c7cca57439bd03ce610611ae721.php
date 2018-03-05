<?php

/* courseset-manage/create.html.twig */
class __TwigTemplate_b61054bac2d8fd8b37e77ec1678dbeeda369f7cb3d53ec43cc26f3f5cb1d4b30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "courseset-manage/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/courseset/create/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create_btn"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\">
    <div class=\"panel panel-default panel-page panel-create-course\">
      <div class=\"panel-heading\">
        <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create_btn"), "html", null, true);
        echo "</h2>
      </div>
      ";
        // line 13
        if ((( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "largeAvatar", array()) ||  !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "title", array())) ||  !$this->getAttribute(($context["userProfile"] ?? null), "about", array()))) {
            // line 14
            echo "        ";
            $this->loadTemplate("settings/user-profile.html.twig", "courseset-manage/create.html.twig", 14)->display($context);
            // line 15
            echo "      ";
        } else {
            // line 16
            echo "        <form id=\"courseset-create-form\" class=\"form-horizontal\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
            echo "\"
              method=\"post\">
          ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
            echo "
          <div class=\"course-piece\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type"), "html", null, true);
            echo "</div>
          <div class=\"form-group\">
            <div class=\"col-md-3\">
              <div class=\"course-select js-courseSetType active\" data-type=\"normal\"><i
                    class=\"es-icon es-icon-putongkecheng \"></i>
                <div class=\"course-type\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.course"), "html", null, true);
            echo "</div>
                <div class=\"course-intro\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.course.tips"), "html", null, true);
            echo "</div>
              </div>
            </div>
            <div class=\"col-md-3\">
              ";
            // line 29
            if ( !$this->getAttribute(($context["liveStatus"] ?? null), "isBuy", array())) {
                // line 30
                echo "                <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\"
                   title=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.not_purchase_live"), "html", null, true);
                echo "\" data-type=\"live\">
              ";
            } elseif ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("live-course.live_course_enabled")) {
                // line 33
                echo "                <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\"
                  title=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.available_after_open"), "html", null, true);
                echo "\" data-type=\"live\">
              ";
            } elseif (($this->getAttribute(            // line 35
($context["liveStatus"] ?? null), "isExpired", array(), "any", true, true) && ($this->getAttribute(($context["liveStatus"] ?? null), "isExpired", array()) == true))) {
                // line 36
                echo "                <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\"
                     title=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.valid_service"), "html", null, true);
                echo "\" data-type=\"live\">
              ";
            } else {
                // line 39
                echo "                <div class=\"course-select js-courseSetType\" data-type=\"live\">
              ";
            }
            // line 41
            echo "                  <i class=\"es-icon es-icon-zhibokecheng \"></i>
                  <div class=\"course-type\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_course"), "html", null, true);
            echo "</div>
                  <div class=\"course-intro\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_course.tips"), "html", null, true);
            echo "</div>
                </div>
            </div>

              <div class=\"col-md-3\">
                <div class=\"course-select js-courseSetType\" data-type=\"open\">
                  <i class=\"es-icon es-icon-lubogongkaike\"></i>
                  <div class=\"course-type\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.record_open_course"), "html", null, true);
            echo "</div>
                  <div class=\"course-intro\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.record_open_course.tips"), "html", null, true);
            echo "</div>
                </div>
              </div>

            <div class=\"col-md-3\">
              ";
            // line 56
            if ( !$this->getAttribute(($context["liveStatus"] ?? null), "isBuy", array())) {
                // line 57
                echo "                <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\"
                     title=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.not_purchase_live"), "html", null, true);
                echo "\" data-type=\"liveOpen\">
              ";
            } elseif ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("live-course.live_course_enabled")) {
                // line 60
                echo "                <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\"
                     title=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.available_after_open"), "html", null, true);
                echo "\" data-type=\"liveOpen\">
              ";
            } elseif (($this->getAttribute(            // line 62
($context["liveStatus"] ?? null), "isExpired", array(), "any", true, true) && ($this->getAttribute(($context["liveStatus"] ?? null), "isExpired", array()) == true))) {
                // line 63
                echo "                <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\"
                     title=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.valid_service"), "html", null, true);
                echo "\" data-type=\"liveOpen\">
              ";
            } else {
                // line 66
                echo "                <div class=\"course-select js-courseSetType\" data-type=\"liveOpen\">
              ";
            }
            // line 68
            echo "                  <i class=\"es-icon es-icon-zhibokecheng2\"></i>
                  <div class=\"course-type\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course"), "html", null, true);
            echo "</div>
                  <div class=\"course-intro\">";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.tips"), "html", null, true);
            echo "</div>
                </div>
            </div>
            ";
            // line 73
            $this->loadTemplate("org/course-create-org-tree-select.html.twig", "courseset-manage/create.html.twig", 73)->display($context);
            // line 74
            echo "            <div class=\"course-title form-group\">
              <div class=\"col-md-2 controls-label text-lg\">
                <div class=\"course-piece title\">";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.course_title"), "html", null, true);
            echo "</div>
              </div>
              <div class=\"col-md-10 controls\">
                <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\"
                       data-widget-cid=\"widget-1\" data-explain=\"\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            </div>
            <div class=\"text-center\">
              ";
            // line 85
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
                // line 86
                echo "                <span class=\"mrm\">
              <a href=\"http://www.qiqiuyu.com/course/22\" class=\"color-gray\" target=\"_blank\">";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.how_do_create"), "html", null, true);
                echo "</a>
            </span>
              ";
            }
            // line 90
            echo "              <button id=\"courseset-create-btn\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create.submiting"), "html", null, true);
            echo "\"
                     class=\"btn btn-fat btn-primary\" type=\"submit\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create"), "html", null, true);
            echo "</button>
              <a class=\"btn btn-fat btn-link\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "headers", array()), "get", array(0 => "Referer"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
            echo "</a>
            </div>
            <input type=\"hidden\" name=\"type\" value=\"normal\"/>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\"></div>
        </div>
      </form>
      ";
        }
        // line 99
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 99,  240 => 95,  232 => 92,  228 => 91,  223 => 90,  217 => 87,  214 => 86,  212 => 85,  200 => 76,  196 => 74,  194 => 73,  188 => 70,  184 => 69,  181 => 68,  177 => 66,  172 => 64,  169 => 63,  167 => 62,  163 => 61,  160 => 60,  155 => 58,  152 => 57,  150 => 56,  142 => 51,  138 => 50,  128 => 43,  124 => 42,  121 => 41,  117 => 39,  112 => 37,  109 => 36,  107 => 35,  103 => 34,  100 => 33,  95 => 31,  92 => 30,  90 => 29,  83 => 25,  79 => 24,  71 => 19,  67 => 18,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  48 => 11,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/create.html.twig", "/vagrant_data/nuliedu/app/Resources/views/courseset-manage/create.html.twig");
    }
}
