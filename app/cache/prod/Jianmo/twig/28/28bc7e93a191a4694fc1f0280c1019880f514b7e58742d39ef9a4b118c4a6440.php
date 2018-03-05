<?php

/* admin/system/security.html.twig */
class __TwigTemplate_44f48fccf47a98c8ecf423e1dcee63e1d0b87e99d88fa7bd8e4e6941d75882aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/security.html.twig", 1);
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
        $context["menu"] = "admin_setting_security";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\">
  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.security.IFrame_white_domain"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-10\">
        <textarea name=\"safe_iframe_domains\" rows=\"8\" class=\"form-control\">";
        // line 16
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["security"] ?? null), "safe_iframe_domains", array()), "
"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.security.help_block"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-10\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </div>
    </div>
  </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "admin/system/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  64 => 21,  57 => 17,  52 => 16,  46 => 13,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/security.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/security.html.twig");
    }
}
