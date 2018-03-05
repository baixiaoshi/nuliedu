<?php

/* admin/system/user-avatar.html.twig */
class __TwigTemplate_7ecb2d93143bbd1096542eeb8bd624f9a9acd807ba2321ef69d5e68fd24ec79f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/user-avatar.html.twig", 1);
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
        $context["menu"] = "admin_setting_avatar";
        // line 4
        $context["script_controller"] = "setting/default-user-avatar";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

 <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8 radios\" id=\"default-avatar\" >
        ";
        // line 13
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("avatar", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_avatar.customer_default_avatar"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_avatar.system_default_avatar")), (($this->getAttribute(($context["defaultSetting"] ?? null), "defaultAvatar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["defaultSetting"] ?? null), "defaultAvatar", array()), 0)) : (0)));
        echo "
        <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_avatar.avatar.tips"), "html", null, true);
        echo "</p>    
        ";
        // line 15
        $this->loadTemplate("admin/system/default-avatar.html.twig", "admin/system/user-avatar.html.twig", 15)->display($context);
        // line 16
        echo "      </div>
    </div>
  </fieldset>
  <form method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_avatar");
        echo "\" >
    <div class=\"form-group mll\">
        <div class=\"col-md-3 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary mtl\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>  
        </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"defaultAvatar\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["defaultSetting"] ?? null), "defaultAvatar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["defaultSetting"] ?? null), "defaultAvatar", array()), 0)) : (0)), "html", null, true);
        echo "\">
    </div>
  </form>

";
    }

    public function getTemplateName()
    {
        return "admin/system/user-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  72 => 25,  67 => 23,  60 => 19,  55 => 16,  53 => 15,  49 => 14,  45 => 13,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/user-avatar.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/user-avatar.html.twig");
    }
}
