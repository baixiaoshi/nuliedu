<?php

/* admin/order/list.html.twig */
class __TwigTemplate_3ae371fc67cc45b31fe457825fd7612965edbdbe14e6e0d93d41054f1055956f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/order/list.html.twig", 1);
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
        $context["menu"] = "admin_order_manage";
        // line 5
        $context["script_controller"] = "manage/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">
      <div class=\"form-group\">
        <label class=\"ptm\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.created_time"), "html", null, true);
        echo ":</label>
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\"
          placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.placeholder.start_date"), "html", null, true);
        echo "\">
        -
        <input class=\"form-control mrm\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\"
          placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.placeholder.end_date"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <label class=\"ptm\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.screen_condition"), "html", null, true);
        echo "</label>
        <select class=\"form-control\" name=\"orderItemType\">
          ";
        // line 22
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("orderItemType"), $this->getAttribute(($context["request"] ?? null), "get", array(0 => "orderItemType"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.product_type"));
        echo "
        </select>

        <select class=\"form-control\" name=\"displayStatus\">
          ";
        // line 26
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("orderDisplayStatus"), $this->getAttribute(($context["request"] ?? null), "get", array(0 => "displayStatus"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.status"));
        echo "
        </select>

        <select class=\"form-control\" name=\"payment\">
          ";
        // line 30
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("paymentSelect"), $this->getAttribute(($context["request"] ?? null), "get", array(0 => "payment"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.payment_pattern"));
        echo "
        </select>
        <select class=\"form-control\" name=\"source\">
          ";
        // line 33
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("source"), $this->getAttribute(($context["request"] ?? null), "get", array(0 => "source"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.source"));
        echo "
        </select>
      </div>
      <div class=\"form-group\" style=\"display:none;\">
        <input class=\"form-control\" type=\"text\" name=\"paidTimeRange\" , placeholder=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.paid_time_range.input_placeholder"), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"mbm\">
      <div class=\"form-group\">
        <label class=\"ptm\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.keyword"), "html", null, true);
        echo "</label>
        <select class=\"form-control\" name=\"keywordType\">
          ";
        // line 44
        $context["options"] = array("sn" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.id"), "buyer" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.buyer"), "title_like" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.title"));
        // line 49
        echo "          ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(($context["options"] ?? null), $this->getAttribute(($context["request"] ?? null), "get", array(0 => "keywordType"), "method"));
        echo "
        </select>

        <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.placeholder.keyword"), "html", null, true);
        echo "\">
      </div>

      <button class=\"btn btn-primary\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>
      ";
        // line 56
        $this->loadTemplate("export/export-btn.html.twig", "admin/order/list.html.twig", 56)->display(array_merge($context, array("exportFileName" => "order", "targetFormId" => "user-search-form")));
        // line 60
        echo "    </div>
  </form>
  ";
        // line 62
        $this->loadTemplate("admin/order/order-table.html.twig", "admin/order/list.html.twig", 62)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/order/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 62,  133 => 60,  131 => 56,  127 => 55,  119 => 52,  112 => 49,  110 => 44,  105 => 42,  97 => 37,  90 => 33,  84 => 30,  77 => 26,  70 => 22,  65 => 20,  59 => 17,  55 => 16,  50 => 14,  46 => 13,  42 => 12,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/order/list.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/order/list.html.twig");
    }
}
