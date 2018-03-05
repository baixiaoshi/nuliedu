<?php

/* admin/order/order-table.html.twig */
class __TwigTemplate_25ac31cd38096bd6218425dcadc1f2e3e328c019a6ec3037e3cda6fef021dd9b extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "admin/order/order-table.html.twig", 1);
        // line 2
        echo "<table class=\"table table-striped table-hover\" id=\"order-table\">
  <thead>
  <tr>
    <th width=\"30%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.product_name"), "html", null, true);
        echo "</th>
    <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.status"), "html", null, true);
        echo "</th>
    <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.product_price"), "html", null, true);
        echo " </th>
    <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.discount_amount"), "html", null, true);
        echo "</th>
    <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.price"), "html", null, true);
        echo "</th>
    <th width=\"10%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.buyers"), "html", null, true);
        echo "</th>
    <th>
      ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.payment_pattern"), "html", null, true);
        echo "
    </th>
    <th>
      ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.source"), "html", null, true);
        echo " 
      <span class=\"glyphicon glyphicon-question-sign color-gray text-sm\" data-toggle=\"tooltip\" data-placement=\"top\"  title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.tips"), "html", null, true);
        echo "\"></span>
    </th>
    <th width='60'>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.orders.operation"), "html", null, true);
        echo "</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 23
            echo "    ";
            $context["buyer"] = (($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["order"], "user_id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["order"], "user_id", array()), array(), "array"), null)) : (null));
            // line 24
            echo "    <tr id=\"order-table-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "\" style=\"word-break: break-all;word-wrap: break-word;\">
      <td>
        ";
            // line 26
            if (((($this->getAttribute($this->getAttribute($context["order"], "item", array(), "any", false, true), "target_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["order"], "item", array(), "any", false, true), "target_type", array()), "")) : ("")) == "course")) {
                // line 27
                echo "          <a  class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute($context["order"], "item", array()), "target_id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
        ";
            } elseif (((($this->getAttribute($this->getAttribute(            // line 28
$context["order"], "item", array(), "any", false, true), "target_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["order"], "item", array(), "any", false, true), "target_type", array()), "")) : ("")) == "vip")) {
                // line 29
                echo "          <a class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip", array("id" => $this->getAttribute($this->getAttribute($context["order"], "item", array()), "target_id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
        ";
            } elseif (((($this->getAttribute($this->getAttribute(            // line 30
$context["order"], "item", array(), "any", false, true), "target_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["order"], "item", array(), "any", false, true), "target_type", array()), "")) : ("")) == "classroom")) {
                // line 31
                echo "          <a class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($this->getAttribute($context["order"], "item", array()), "target_id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
        ";
            } else {
                // line 33
                echo "          <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong>
        ";
            }
            // line 35
            echo "        <br/>
        <span class=\"color-gray text-sm\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.orders.order_id", array("%sn%" => $this->getAttribute($context["order"], "sn", array()))), "html", null, true);
            echo "</span>
        <br/>
        <span class=\"color-gray text-sm\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.created_time"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "created_time", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
      </td>
      <td>";
            // line 40
            echo $this->env->getExtension('AppBundle\Twig\OrderExtension')->displayOrderStatus($this->getAttribute($context["order"], "status", array()), 1);
            echo "</td>
      <td><span class=\"color-warning\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\OrderExtension')->toCash($this->getAttribute($context["order"], "price_amount", array()), 0), "html", null, true);
            echo "</span></td>
      <td><span class=\"color-warning\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\OrderExtension')->toCash(($this->getAttribute($context["order"], "price_amount", array()) - $this->getAttribute($context["order"], "pay_amount", array())), 0), "html", null, true);
            echo "</span></td>
      <td><span class=\"color-warning\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\OrderExtension')->toCash($this->getAttribute($context["order"], "pay_amount", array()), 0), "html", null, true);
            echo "</span></td>
      ";
            // line 44
            if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_user_manage")) {
                // line 45
                echo "        <td>
          <a href=\"javascript:\" class=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_show", array("id" => $this->getAttribute(($context["buyer"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["buyer"] ?? null), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["buyer"] ?? null), "nickname", array()), "--")) : ("--")), "html", null, true);
                echo "</a>
        </td>
      ";
            } else {
                // line 49
                echo "        <td>
          <span><a target=\"_blank\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["buyer"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["buyer"] ?? null), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["buyer"] ?? null), "nickname", array()), "--")) : ("--")), "html", null, true);
                echo "</a></span>
        </td>
      ";
            }
            // line 53
            echo "      <td>";
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("payment", $this->getAttribute($context["order"], "payment", array()));
            echo "</td>
      <td>";
            // line 54
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("source", $this->getAttribute($context["order"], "source", array()));
            echo "</td>
      <td>
        <a href=\"javascript:\" class=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.detail"), "html", null, true);
            echo "</a>

        ";
            // line 58
            if ((($this->getAttribute($context["order"], "status", array()) == "created") || ($this->getAttribute($context["order"], "status", array()) == "paying"))) {
                // line 59
                echo "          <a href=\"javascript:\" class=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_adjust_price", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.adjust_price_btn"), "html", null, true);
                echo "</a>
        ";
            }
            // line 61
            echo "
      </td>
    </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "    <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "  </tbody>
</table>
<div class=\"paginator\">
  ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/order/order-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 70,  220 => 67,  211 => 65,  203 => 61,  195 => 59,  193 => 58,  186 => 56,  181 => 54,  176 => 53,  168 => 50,  165 => 49,  157 => 46,  154 => 45,  152 => 44,  148 => 43,  144 => 42,  140 => 41,  136 => 40,  129 => 38,  124 => 36,  121 => 35,  115 => 33,  107 => 31,  105 => 30,  98 => 29,  96 => 28,  89 => 27,  87 => 26,  81 => 24,  78 => 23,  73 => 22,  66 => 18,  61 => 16,  57 => 15,  51 => 12,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/order/order-table.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/order/order-table.html.twig");
    }
}
