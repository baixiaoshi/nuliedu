<?php

/* admin/system/site.html.twig */
class __TwigTemplate_061b07886e95681a948439d6584e04fd8328b9054892f1005b0ddb2d511b92d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/site.html.twig", 1);
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
        $context["menu"] = "admin_setting_message";
        // line 5
        $context["script_controller"] = "setting/site";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"site-form\" method=\"post\" data-save-url=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_site_save");
        echo "\">

  <fieldset>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.name"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "name", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"slogan\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.slogan"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
         <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "slogan", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"url\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.url"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
       <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "url", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.url.help_block", array("%http%" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getScheme", array(), "method"))), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"logo\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.logo"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-logo-container\">";
        // line 48
        if ($this->getAttribute(($context["site"] ?? null), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["site"] ?? null), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" id=\"site-logo-upload\"
        data-upload-token=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_logo_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default\" id=\"site-logo-remove\" type=\"button\" data-url=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_logo_remove");
        echo "\" ";
        if ( !$this->getAttribute(($context["site"] ?? null), "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
        echo "</button>
        <p class=\"help-block\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.logo.help_block"), "html", null, true);
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.logo.view_btn"), "html", null, true);
        echo "</a></p>
        <input type=\"hidden\" name=\"logo\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "logo", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"favicon\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.favicon"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-favicon-container\">";
        // line 63
        if ($this->getAttribute(($context["site"] ?? null), "favicon", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["site"] ?? null), "favicon", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\"
        id=\"site-favicon-upload\"
        data-upload-token=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_favicon_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default\"
        id=\"site-favicon-remove\"
        type=\"button\" data-url=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_favicon_remove");
        echo "\" ";
        if ( !$this->getAttribute(($context["site"] ?? null), "favicon", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
        echo "</button>
        <p class=\"help-block\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.favicon.help_block"), "html", null, true);
        echo "</p>
        <input type=\"hidden\" name=\"favicon\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "favicon", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_keywords\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.seo_keywords"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "seo_keywords", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.seo_keywords.help_block"), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_description\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.seo_description"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "seo_description", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"master_email\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.master_email"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"master_email\" name=\"master_email\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "master_email", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"copyright\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.copyright"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "copyright", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.copyright.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"icp\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.icp"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "icp", array()), "html", null, true);
        echo "\">
      </div>
    </div>

  </fieldset>

<br>

  <fieldset>
    <legend>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_statistics_analysis"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"analytics\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.analytics"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">

        <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "analytics", array()), "html", null, true);
        echo "</textarea>
        ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.analytics.help_block");
        echo "
      </div>
    </div>
  </fieldset>

  <fieldset style=\"display:none;\">
    <legend>";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 149
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("status", array("open" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status.open"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status.closed")), $this->getAttribute(($context["site"] ?? null), "status", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.closed_note"), "html", null, true);
        echo "</label>
      </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "closed_note", array()), "html", null, true);
        echo "</textarea>
        <p class=\"help-block\">";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.closed_note.help_block"), "html", null, true);
        echo "。</p>
      </div>
    </div>
  </fieldset>

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"button\" class=\"btn btn-primary\" id=\"save-site\">";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    public function getTemplateName()
    {
        return "admin/system/site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 170,  359 => 166,  349 => 159,  345 => 158,  339 => 155,  330 => 149,  324 => 146,  317 => 142,  308 => 136,  304 => 135,  297 => 131,  291 => 128,  279 => 119,  273 => 116,  264 => 110,  260 => 109,  254 => 106,  245 => 100,  239 => 97,  230 => 91,  224 => 88,  215 => 82,  211 => 81,  205 => 78,  196 => 72,  192 => 71,  182 => 70,  174 => 67,  170 => 66,  160 => 63,  154 => 60,  145 => 54,  137 => 53,  127 => 52,  121 => 51,  117 => 50,  108 => 48,  102 => 45,  93 => 39,  89 => 38,  83 => 35,  74 => 29,  68 => 26,  59 => 20,  53 => 17,  44 => 11,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/site.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/site.html.twig");
    }
}
