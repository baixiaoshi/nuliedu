<?php

/* login/index.html.twig */
class __TwigTemplate_f6c69a4fc5111412c4d14ccb1eed355358556e577f7b5f0c7a6093e6f7f48f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/auth/login/index.js"));
        // line 3
        $context["bodyClass"] = "login";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.content_title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 9
            echo "    <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\"
      data-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" class=\"hidden\"><span
        class=\"receive-modal\"></span></a>
  ";
        }
        // line 13
        echo "  <div class=\"es-section login-section\">
    <div class=\"logon-tab clearfix\">
      <a class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.login_account"), "html", null, true);
        echo "</a>
      <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ($context["_target_path"] ?? null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.register_account"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"login-main\">
      <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">

        ";
        // line 21
        if (($context["error"] ?? null)) {
            // line 22
            echo "          <div class=\"alert alert-danger\">";
            if (($this->getAttribute(($context["error"] ?? null), "message", array()) == "Bad credentials.")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.user_password.error_tips"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "message", array())), "html", null, true);
            }
            echo "</div>
        ";
        }
        // line 24
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_username\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.account_label"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required
              placeholder='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.account_placeholder"), "html", null, true);
        echo "'/>
            <div class=\"help-block\"></div>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_password\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.password_label"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.password_placeholder"), "html", null, true);
        echo "'/>
          </div>
        </div>

        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.remember_me"), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"form-group mbl\">
          <button type=\"button\" class=\"btn btn-primary btn-lg btn-block js-btn-login\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.submit_button"), "html", null, true);
        echo "</button>
        </div>

        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["_target_path"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

      <div class=\"mbl\">
        <a class=\"link-primary\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.find_password"), "html", null, true);
        echo "</a>
        <span class=\"color-gray mhs\">|</span>
        <span class=\"color-gray\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.ask_register"), "html", null, true);
        echo "</span>
        <a class=\"link-primary\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ($context["_target_path"] ?? null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.go_register"), "html", null, true);
        echo "</a>
      </div>

      ";
        // line 60
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.enabled")) {
            // line 61
            echo "        <div class=\"social-login\">
        <span>
          ";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Login:oauth2LoginsBlock", array("targetPath" => ($context["_target_path"] ?? null))));
            echo "
        </span>
          <div class=\"line\"></div>
        </div>
      ";
        }
        // line 68
        echo "    </div>
  </div>

";
    }

    // line 73
    public function block_bottom($context, array $blocks = array())
    {
        // line 74
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "login/index.html.twig", 74)->display(array_merge($context, array("mobile_tool_bar" => "login")));
    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 74,  192 => 73,  185 => 68,  177 => 63,  173 => 61,  171 => 60,  163 => 57,  159 => 56,  152 => 54,  145 => 50,  141 => 49,  135 => 46,  128 => 42,  119 => 36,  114 => 34,  106 => 29,  102 => 28,  97 => 26,  91 => 24,  81 => 22,  79 => 21,  74 => 19,  66 => 16,  62 => 15,  58 => 13,  52 => 10,  49 => 9,  46 => 8,  43 => 7,  35 => 5,  31 => 1,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login/index.html.twig", "/vagrant_data/nuliedu/app/Resources/views/login/index.html.twig");
    }
}
