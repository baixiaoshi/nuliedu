<?php

/* default/header.html.twig */
class __TwigTemplate_7094f41ac0233709139716551a614dea455fe2ff68f48590494c527aa9bda4a7 extends Twig_Template
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
        echo "<div class=\"navbar navbar-inverse site-navbar\" id=\"site-navbar\"  data-counter-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_remind_counter");
        echo "\">

    <div class=\"container\">
      <div class=\"container-gap\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 11
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")) {
            // line 12
            echo "            <a class=\"navbar-brand-logo\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")), "html", null, true);
            echo "\"></a>
          ";
        } else {
            // line 14
            echo "            <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "</a>
          ";
        }
        // line 16
        echo "        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
      </ul>
          ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:topNavigation", array("siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? null), null)) : (null)))));
        echo "
          
          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 23
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 24
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的课程"), "html", null, true);
            echo " </a></li>
              ";
            // line 25
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled")) {
                // line 26
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
                echo "\" class=\"mobile-badge-container\">
                  <span class=\"glyphicon glyphicon-phone\"></span>
                </a></li>
              ";
            }
            // line 30
            echo "              <li>
                <form class=\"navbar-form navbar-right hidden-xs\" action=\"/search\" method=\"get\">
                  <div class=\"form-group\">
                    <input class=\"form-control js-search\" name=\"q\" placeholder=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
            echo "\">
                    <button class=\"button es-icon es-icon-search\"></button>
                  </div>
                </form>
              </li>
              <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
            echo "\" class=\"badge-container notification-badge-container\">
                <span class=\"glyphicon glyphicon-bullhorn hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "</span>
                ";
            // line 41
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) > 0)) {
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()), "html", null, true);
                echo "</span>";
            }
            echo "</a></li>
              <li>
                <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
            echo "\" class=\"badge-container message-badge-container\">
                <span class=\"glyphicon glyphicon-envelope hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "</span>
                ";
            // line 46
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array()) > 0)) {
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array()), "html", null, true);
                echo "</span>";
            }
            // line 47
            echo "                </a>
              </li>
              <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_orders");
            echo "\">
                <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getDefaultPath("qiandai.png"), "html", null, true);
            echo "\"  width=\"14\" style=\"margin-top: -2px\" />
              </a>
              </li>
              <li class=\"visible-lt-ie8\"><a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
            echo "</a></li>
              <li class=\"dropdown hidden-lt-ie8\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\"  data-toggle=\"dropdown\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的主页"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
            echo "\"><i class=\"glyphicon glyphicon-cog\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人设置"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  ";
            // line 60
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_BACKEND")) {
                // line 61
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
                echo "</a></li>
                    <li class=\"divider\"></li>
                  ";
            }
            // line 64
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出"), "html", null, true);
            echo "</a></li>
                </ul>
              </li>
            ";
        } else {
            // line 68
            echo "              ";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled")) {
                // line 69
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
                echo "\"><span class=\"glyphicon glyphicon-phone\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机版"), "html", null, true);
                echo "</a></li>
              ";
            }
            // line 71
            echo "              <li>
                <form class=\"navbar-form navbar-right hidden-xs\" action=\"/search\" method=\"get\">
                  <div class=\"form-group\">
                    <input class=\"form-control js-search\" name=\"q\" placeholder=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
            echo "\">
                    <button class=\"button es-icon es-icon-search\"></button>
                  </div>
                </form>
              </li>
              <li><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
            echo "</a></li>
              <li><a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 82
        echo "          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 82,  218 => 80,  212 => 79,  204 => 74,  199 => 71,  191 => 69,  188 => 68,  178 => 64,  169 => 61,  167 => 60,  160 => 58,  154 => 57,  149 => 55,  142 => 53,  136 => 50,  132 => 49,  128 => 47,  122 => 46,  118 => 45,  113 => 43,  104 => 41,  100 => 40,  95 => 38,  87 => 33,  82 => 30,  74 => 26,  72 => 25,  65 => 24,  63 => 23,  57 => 20,  51 => 16,  43 => 14,  35 => 12,  33 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/header.html.twig", "/vagrant_data/nuliedu/web/themes/default/views/default/header.html.twig");
    }
}
