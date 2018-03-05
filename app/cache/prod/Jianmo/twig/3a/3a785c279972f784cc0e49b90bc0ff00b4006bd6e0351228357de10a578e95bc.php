<?php

/* admin/navigation/index.html.twig */
class __TwigTemplate_577499f153a05143fe6313f362fe1c771978fa30ccf8125e88474822c81789f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/navigation/index.html.twig", 1);
        $this->blocks = array(
            'page_buttons' => array($this, 'block_page_buttons'),
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
        $context["script_controller"] = "navigation/index";
        // line 5
        $context["menu"] = (("admin_" . ($context["type"] ?? null)) . "_navigation");
        // line 6
        $context["types"] = array("top" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.top"), "foot" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.foot"), "friendlyLink" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.friendlyLink"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_page_buttons($context, array $blocks = array())
    {
        echo " 
    <button class=\"btn btn-success btn-sm pull-right\" id=\"add-navigation-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_create", array("type" => ($context["type"] ?? null))), "html", null, true);
        echo "\">
        ";
        // line 10
        if (($this->getAttribute(($context["types"] ?? null), ($context["type"] ?? null), array(), "array") == $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.friendlyLink"))) {
            // line 11
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.add_type_btn", array("%types[type]%" => $this->getAttribute(($context["types"] ?? null), ($context["type"] ?? null), array(), "array"))), "html", null, true);
            echo "
        ";
        } else {
            // line 13
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.add_type_nav_btn", array("%types[type]%" => $this->getAttribute(($context["types"] ?? null), ($context["type"] ?? null), array(), "array"))), "html", null, true);
            echo "
        ";
        }
        // line 15
        echo "    </button>
";
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        // line 19
        echo "
";
        // line 20
        if ((($context["type"] ?? null) == "foot")) {
            // line 21
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block", array("category" => "theme"));
            // line 22
            echo "<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.foot.tips", array("%url%" => ($context["url"] ?? null)));
            echo "</div>
";
        } elseif ((        // line 23
($context["type"] ?? null) == "friendlyLink")) {
            // line 24
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_theme");
            // line 25
            echo "<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.friendlyLink.tips", array("%url%" => ($context["url"] ?? null)));
            echo "
</div>
";
        }
        // line 28
        echo "
<table id=\"navigation-table\" class=\"table table-striped table-hover navigation-table sortable-list\">
  <thead>
    <tr>
      <th width=\"50%\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.name"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.new_windows"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.status"), "html", null, true);
        echo "</th>  
      <th width=\"30%\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.operation"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
    
  ";
        // line 39
        $this->loadTemplate("admin/navigation/tbody.html.twig", "admin/navigation/index.html.twig", 39)->display($context);
        // line 40
        echo "</table>
    
<div class=\"alert alert-info\">
  ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.tips");
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/navigation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 43,  117 => 40,  115 => 39,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  90 => 28,  83 => 25,  81 => 24,  79 => 23,  74 => 22,  72 => 21,  70 => 20,  67 => 19,  64 => 18,  59 => 15,  53 => 13,  47 => 11,  45 => 10,  41 => 9,  36 => 8,  32 => 1,  30 => 6,  28 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/navigation/index.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/navigation/index.html.twig");
    }
}
