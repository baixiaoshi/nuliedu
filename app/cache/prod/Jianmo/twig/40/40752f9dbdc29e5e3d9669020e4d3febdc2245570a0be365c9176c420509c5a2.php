<?php

/* layout.html.twig */
class __TwigTemplate_d6f30ca821b7c1171fbed0970333482565e4a24e6c494f5dd251e732902ba657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'footer_mobile' => array($this, 'block_footer_mobile'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
            'footer_script' => array($this, 'block_footer_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->

";
        // line 12
        $context["lang"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getLocale", array(), "method");
        // line 13
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 14
        echo "
";
        // line 15
        $context["currentTheme"] = $this->env->getExtension('AppBundle\Twig\ThemeExtension')->getCurrentTheme();
        // line 16
        $context["themeConfig"] = (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method"), false)) : (false))) ? ($this->getAttribute(($context["currentTheme"] ?? null), "config", array())) : ($this->getAttribute(($context["currentTheme"] ?? null), "confirmConfig", array())));
        // line 17
        $context["maincolor"] = (($this->getAttribute(($context["themeConfig"] ?? null), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["themeConfig"] ?? null), "maincolor", array()), "default")) : ("default"));
        // line 18
        $context["navigationcolor"] = (($this->getAttribute(($context["themeConfig"] ?? null), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["themeConfig"] ?? null), "navigationcolor", array()), "default")) : ("default"));
        // line 19
        echo "
<html lang=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\" class=\"";
        if ((($context["lang"] ?? null) == "en")) {
            echo "es-en";
        }
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\"
    content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 28
        $this->displayBlock('title', $context, $blocks);
        // line 31
        echo "</title>
  ";
        // line 32
        $this->displayBlock('meta', $context, $blocks);
        // line 42
        echo "

  ";
        // line 44
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 45
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")) {
            // line 46
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 49
        echo "
  <!--[if lt IE 9]>
  <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-shim.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-sham.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 56
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 60
        echo "
  ";
        // line 61
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 62
        echo "</head>
<body class=\"";
        // line 63
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">

<!--[if lt IE 9]>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/fix-ie.js"), "html", null, true);
        echo "\"></script>
";
        // line 67
        $this->loadTemplate("default/ie8-alert.html.twig", "layout.html.twig", 67)->display($context);
        // line 68
        echo "<![endif]-->

";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('footer_script', $context, $blocks);
        // line 135
        echo "
</body>
</html>";
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
    }

    // line 32
    public function block_meta($context, array $blocks = array())
    {
        // line 33
        echo "    <meta name=\"keywords\"
          content=\"
";
        // line 35
        ob_start();
        $this->displayBlock('keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta name=\"description\"
          content=\"";
        // line 37
        ob_start();
        $this->displayBlock('description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta content=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\"/>
    <meta content=\"";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\"/>
    <meta content=\"";
        // line 40
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.weixinmob_enabled"), 0), "html", null, true);
        echo "\" name=\"is-open\"/>
  ";
    }

    // line 35
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 37
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 56
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->loadTemplate("css_loader.html.twig", "layout.html.twig", 57)->display($context);
        // line 58
        echo "    ";
        $this->loadTemplate("default/stylesheet-webpack.html.twig", "layout.html.twig", 58)->display($context);
        // line 59
        echo "  ";
    }

    // line 61
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 63
    public function block_bodyClass($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("es-main-" . ($context["maincolor"] ?? null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ("es-nav-" . ($context["navigationcolor"] ?? null)), "html", null, true);
        echo " ";
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? null), "")) : (""))) {
            echo twig_escape_filter($this->env, ($context["bodyClass"] ?? null), "html", null, true);
        }
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "  <div class=\"es-wrap\">

    ";
        // line 73
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "
    ";
        // line 78
        $this->displayBlock('full_content', $context, $blocks);
        // line 87
        echo "
    ";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        echo "
    ";
        // line 92
        $this->displayBlock('footer_mobile', $context, $blocks);
        // line 94
        echo "
    ";
        // line 95
        $this->displayBlock('bottom', $context, $blocks);
        // line 96
        echo "  </div>

  ";
        // line 98
        $this->displayBlock('esBar', $context, $blocks);
        // line 103
        echo "
  ";
        // line 104
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 117
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>

  ";
        // line 122
        $context["reward_notify"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->popRewardPointNotify();
        // line 123
        echo "  ";
        if (($context["reward_notify"] ?? null)) {
            // line 124
            echo "    <div class=\"hidden\" id=\"rewardPointNotify\">
      ";
            // line 125
            echo twig_escape_filter($this->env, ($context["reward_notify"] ?? null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 128
        echo "
";
    }

    // line 73
    public function block_header($context, array $blocks = array())
    {
        // line 74
        echo "      ";
        $this->loadTemplate("site-hint.html.twig", "layout.html.twig", 74)->display($context);
        // line 75
        echo "      ";
        $this->loadTemplate("default/header.html.twig", "layout.html.twig", 75)->display($context);
        // line 76
        echo "    ";
    }

    // line 78
    public function block_full_content($context, array $blocks = array())
    {
        // line 79
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 80
        echo "
      <div id=\"content-container\" class=\"container\">
        ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "      </div>

      ";
        // line 85
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 86
        echo "    ";
    }

    // line 79
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
    }

    // line 85
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        // line 89
        echo "      ";
        $this->loadTemplate("default/footer.html.twig", "layout.html.twig", 89)->display($context);
        // line 90
        echo "    ";
    }

    // line 92
    public function block_footer_mobile($context, array $blocks = array())
    {
        // line 93
        echo "    ";
    }

    // line 95
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 98
    public function block_esBar($context, array $blocks = array())
    {
        // line 99
        echo "    ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
            // line 100
            echo "      ";
            $this->loadTemplate("es-bar/index.html.twig", "layout.html.twig", 100)->display($context);
            // line 101
            echo "    ";
        }
        // line 102
        echo "  ";
    }

    // line 104
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 105
        echo "  
    ";
        // line 106
        $context["cloudConsultPath"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudConsultPath();
        // line 107
        echo "    ";
        if (((array_key_exists("cloudConsultPath", $context)) ? (_twig_default_filter(($context["cloudConsultPath"] ?? null))) : (""))) {
            // line 108
            echo "      ";
            echo ($context["cloudConsultPath"] ?? null);
            echo "
    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter(($context["consultDisplay"] ?? null), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? null))) : ("")) == "/")))) {
            // line 112
            echo "      ";
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 113
                echo "        ";
                $this->loadTemplate("float-consult.html.twig", "layout.html.twig", 113)->display($context);
                // line 114
                echo "      ";
            }
            // line 115
            echo "    ";
        }
        // line 116
        echo "  ";
    }

    // line 131
    public function block_footer_script($context, array $blocks = array())
    {
        // line 132
        echo "  ";
        $this->loadTemplate("default/script-webpack.html.twig", "layout.html.twig", 132)->display($context);
        // line 133
        echo "  ";
        $this->loadTemplate("script_boot.html.twig", "layout.html.twig", 133)->display($context);
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 133,  456 => 132,  453 => 131,  449 => 116,  446 => 115,  443 => 114,  440 => 113,  437 => 112,  435 => 111,  432 => 110,  426 => 108,  423 => 107,  421 => 106,  418 => 105,  415 => 104,  411 => 102,  408 => 101,  405 => 100,  402 => 99,  399 => 98,  394 => 95,  390 => 93,  387 => 92,  383 => 90,  380 => 89,  377 => 88,  372 => 85,  367 => 82,  362 => 79,  358 => 86,  356 => 85,  352 => 83,  350 => 82,  346 => 80,  343 => 79,  340 => 78,  336 => 76,  333 => 75,  330 => 74,  327 => 73,  322 => 128,  316 => 125,  313 => 124,  310 => 123,  308 => 122,  301 => 118,  298 => 117,  296 => 104,  293 => 103,  291 => 98,  287 => 96,  285 => 95,  282 => 94,  280 => 92,  277 => 91,  275 => 88,  272 => 87,  270 => 78,  267 => 77,  265 => 73,  261 => 71,  258 => 70,  246 => 63,  241 => 61,  237 => 59,  234 => 58,  231 => 57,  228 => 56,  222 => 37,  216 => 35,  210 => 40,  206 => 39,  202 => 38,  196 => 37,  189 => 35,  185 => 33,  182 => 32,  171 => 29,  168 => 28,  162 => 135,  160 => 131,  157 => 130,  155 => 70,  151 => 68,  149 => 67,  145 => 66,  139 => 63,  136 => 62,  134 => 61,  131 => 60,  129 => 56,  123 => 53,  119 => 52,  115 => 51,  111 => 49,  106 => 47,  101 => 46,  99 => 45,  95 => 44,  91 => 42,  89 => 32,  86 => 31,  84 => 28,  70 => 20,  67 => 19,  65 => 18,  63 => 17,  61 => 16,  59 => 15,  56 => 14,  54 => 13,  52 => 12,  40 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/vagrant_data/nuliedu/app/Resources/views/layout.html.twig");
    }
}
