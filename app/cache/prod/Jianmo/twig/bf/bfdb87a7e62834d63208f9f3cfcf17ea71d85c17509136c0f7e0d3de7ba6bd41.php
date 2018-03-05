<?php

/* admin/article-category/index.html.twig */
class __TwigTemplate_406de324c9c415ac1379b869858880f1bb50af1409749d2bbb020785c52e701f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/article-category/index.html.twig", 1);
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
        $context["menu"] = "admin_operation_article_category";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<ul class=\"list-table\" id=\"category-table\" style=\"margin-bottom: 0\">
    <li class=\"th\">
        <div class=\"row\">
            <div class=\"td col-md-3\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.category_title"), "html", null, true);
        echo "</div>
            <div class=\"td col-md-4\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.category_addr"), "html", null, true);
        echo "</div>
            <div class=\"td col-md-3\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.category_code"), "html", null, true);
        echo "</div>
            <div class=\"td col-md-2\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.operation_th"), "html", null, true);
        echo "</div>
        </div>
    </li>
    ";
        // line 16
        $this->loadTemplate("admin/article-category/tbody.html.twig", "admin/article-category/index.html.twig", 16)->display($context);
        // line 17
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "admin/article-category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  58 => 16,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/article-category/index.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/article-category/index.html.twig");
    }
}
