<?php

/* admin/system/user-fields.modal.html.twig */
class __TwigTemplate_f3ec84716f7b362d7785318dbed1b8e6f2b10a4a089364efd7bb172ce42d68e7 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"myModal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.add_field_btn"), "html", null, true);
        echo "</h4>
      </div>
      <form method=\"post\" class=\"form-horizontal\" id=\"field-form\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_user_fields_add");
        echo "\">
      <div class=\"modal-body\">
            
            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=
             \"field_title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.fields_title"), "html", null, true);
        echo "</label>
              <div class=\"col-md-6 controls\">
              <input type=\"text\"  name=\"field_title\" id=\"field_title\"  class=\"form-control\" value=\"\">
              </div>
            </div>

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=\"field_type\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.fields_fieldName"), "html", null, true);
        echo "</label>
              <div class=\"col-md-6 controls\">
                  <select class=\"form-control\" name=\"field_type\" id=\"field_type\">
                    <option value=\"\" num=\"\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.select_fields"), "html", null, true);
        echo "</option>
                    <option value =\"varchar\" num=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.varchar_fields.tips", array("%varcharCount%" => (10 - ($context["varcharCount"] ?? null)))), "html", null, true);
        echo "\" ";
        if ((($context["varcharCount"] ?? null) == 10)) {
            echo "disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.varchar_fields"), "html", null, true);
        if ((($context["varcharCount"] ?? null) == 10)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.varchar_fields.disabled.tips"), "html", null, true);
            echo ")";
        }
        echo "</option>
                    <option value =\"text\" num=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.text_fields.tips", array("%textCount%" => (10 - ($context["textCount"] ?? null)))), "html", null, true);
        echo "\" ";
        if ((($context["textCount"] ?? null) == 10)) {
            echo "disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.text_fields"), "html", null, true);
        if ((($context["textCount"] ?? null) == 10)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.text_fields.disabled.tips"), "html", null, true);
            echo ")";
        }
        echo "</option>
                    <option value=\"int\" num=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.init_fields.tips", array("%intCount%" => (5 - ($context["intCount"] ?? null)))), "html", null, true);
        echo "\" ";
        if ((($context["intCount"] ?? null) == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.init_fields"), "html", null, true);
        if ((($context["intCount"] ?? null) == 5)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.init_fields.disabled.tips"), "html", null, true);
            echo ")";
        }
        echo "</option>
                    <option value=\"float\" num=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.float_fields.tips", array("%floatCount%" => (5 - ($context["floatCount"] ?? null)))), "html", null, true);
        echo "\" ";
        if ((($context["floatCount"] ?? null) == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.float_fields"), "html", null, true);
        if ((($context["floatCount"] ?? null) == 5)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.init_fields.disabled.tips"), "html", null, true);
            echo ")";
        }
        echo "</option>
                    <option value=\"date\" num=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.date_fields.tips", array("%5-dateCount%" => (5 - ($context["dateCount"] ?? null)))), "html", null, true);
        echo "\" ";
        if ((($context["dateCount"] ?? null) == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.date_fields"), "html", null, true);
        if ((($context["dateCount"] ?? null) == 5)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.modal.init_fields.disabled.tips"), "html", null, true);
            echo ")";
        }
        echo "</option>
                  </select>
                  <div class=\"help-block\" id=\"type_num\" style=\"color:green;\" ></div>
              </div>
            </div> 

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=\"field_seq\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.fields_seq"), "html", null, true);
        echo "</label>
              <div class=\"col-md-6 controls\">
              <input type=\"text\"  name=\"field_seq\" id=\"field_seq\" class=\"form-control\" value=\"1\">
              </div>
            </div>

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_fields.fields_enabled"), "html", null, true);
        echo "</label>
             <div class=\"col-md-2\"><input type=\"checkbox\"  checked=checked name=\"field_enabled\" vaule=\"1\" style=\"height:18px;width:18px;\"></div>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
       </div> 
      
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "</button>
        <button type=\"submit\" class=\"btn btn-primary\" id=\"add-btn\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
      </div>
      </form>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/system/user-fields.modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 50,  163 => 49,  156 => 45,  150 => 42,  140 => 35,  119 => 28,  104 => 27,  89 => 26,  74 => 25,  59 => 24,  55 => 23,  49 => 20,  39 => 13,  31 => 8,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/system/user-fields.modal.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/system/user-fields.modal.html.twig");
    }
}
