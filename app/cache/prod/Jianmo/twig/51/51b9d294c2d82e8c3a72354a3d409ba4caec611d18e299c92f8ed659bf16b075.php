<?php

/* admin/system/default-avatar.html.twig */
class __TwigTemplate_40720101c3fe56c5f1e048132513cb4024b41ea1fb4916ea25739936d77844f0 extends Twig_Template
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
        echo "<div class=\"form-group\" id=\"avatar-class\"
";
        // line 2
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.defaultAvatar") == 0)) {
            // line 3
            echo "style=\"display:none;\"
";
        }
        // line 5
        echo ">
  <div class=\"col-md-8 control-label\"><b>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_avatar.customer_default_avatar"), "html", null, true);
        echo "</b></div>
  <form id=\"avatar-form\" method=\"post\">
    <div class=\"controls col-md-8 controls\">
      <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath("", "avatar.png"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8 controls\">
        <p class=\"help-block\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_avatar.customer_default_avatar.help_block"), "html", null, true);
        echo "。</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8 controls\">
        <a id=\"default-avatar-btn\" 
          class=\"btn btn-default btn-sm\"
          data-upload-token=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
          data-goto-url=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_default_avatar_crop");
        echo "\"
        >";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
        echo "</a>
      </div>
    </div>
  </form>
</div>

<div class=\"form-group\" id=\"system-avatar-class\" 
";
        // line 33
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.defaultAvatar") == 1)) {
            // line 34
            echo "style=\"display:none;\"
";
        }
        // line 36
        echo ">
  <div class=\"col-md-8 control-label\"><b>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_avatar.system_default_avatar"), "html", null, true);
        echo "</b></div>
    <div class=\"controls col-md-8 controls\">
      <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
        echo "\">
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/system/default-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  85 => 37,  82 => 36,  78 => 34,  76 => 33,  66 => 26,  62 => 25,  58 => 24,  46 => 15,  37 => 9,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/default-avatar.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/default-avatar.html.twig");
    }
}
