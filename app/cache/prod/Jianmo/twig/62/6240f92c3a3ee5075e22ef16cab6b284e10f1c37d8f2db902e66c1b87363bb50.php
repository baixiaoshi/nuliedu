<?php

/* admin/article-category/tbody.html.twig */
class __TwigTemplate_88e4b442b20789b9f8cd84800136a63dcb366ddfd935c351f59ae3867e266de4 extends Twig_Template
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
        echo "
<li id=\"category-table-body\" data-sort-url=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_category_sort");
        echo "\">
    ";
        // line 3
        if ( !twig_test_empty(($context["categories"] ?? null))) {
            // line 4
            echo "        ";
            echo $this->getAttribute($this, "showCategoryTree", array(0 => ($context["categories"] ?? null), 1 => false), "method");
            echo "
    ";
        } else {
            // line 6
            echo "        <div class=\"row empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "</li>

";
        // line 10
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("category/tbody");
        // line 11
        echo "

";
    }

    // line 13
    public function getshowCategoryTree($__categories__ = null, $__isCollapseChildren__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "categories" => $__categories__,
            "isCollapseChildren" => $__isCollapseChildren__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            echo "    <ul class=\"list-table sortable-list\" data-group-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["categories"] ?? null), 0, array(), "array"), "parentId", array(), "array"), "html", null, true);
            echo "\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "            ";
                $context["isParent"] =  !twig_test_empty((($this->getAttribute($context["category"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["category"], "children", array()), null)) : (null)));
                // line 17
                echo "            ";
                $context["isRoot"] = ($this->getAttribute($context["category"], "depth", array()) == 1);
                // line 18
                echo "            <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"tr\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" data-parent-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "parentId", array()), "html", null, true);
                echo "\" style=\"display: ";
                echo ((( !($context["isRoot"] ?? null) && ($context["isCollapseChildren"] ?? null))) ? ("none") : ("block"));
                echo "\">
                <div class=\"row";
                // line 19
                echo (((($context["isParent"] ?? null) && ($context["isCollapseChildren"] ?? null))) ? (" row-collapse") : (" row-expand"));
                echo "\">
                    <div class=\"td col-md-3 name sort-handle\" style=\"padding-left: ";
                // line 20
                echo twig_escape_filter($this->env, (24 * ($this->getAttribute($context["category"], "depth", array()) - 1)), "html", null, true);
                echo "px; overflow: hidden\">
                        ";
                // line 21
                if (($context["isParent"] ?? null)) {
                    // line 22
                    echo "                            <i class=\"list-table-tree-icon glyphicon glyphicon-chevron-";
                    echo ((($context["isCollapseChildren"] ?? null)) ? ("right") : ("down"));
                    echo "\"></i>
                        ";
                } else {
                    // line 24
                    echo "                            <i class=\"list-table-tree-icon\"></i>
                        ";
                }
                // line 26
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"td col-md-4 url\"><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["category"], "code", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["category"], "code", array()))), "html", null, true);
                echo "</a></div>
                    <div class=\"td col-md-3 code\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "code", array()), "html", null, true);
                echo "</div>
                    <div class=\"td col-md-2 operation\">
                        <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-edit\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.edit_btn"), "html", null, true);
                echo "</a>
                        ";
                // line 32
                if (($this->getAttribute($context["category"], "depth", array()) < 5)) {
                    // line 33
                    echo "                        <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_category_create", array("parentId" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                    echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.add_child_category_btn"), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 35
                echo "                    </div>
                </div>
                ";
                // line 37
                if (($context["isParent"] ?? null)) {
                    // line 38
                    echo "                    ";
                    echo $this->getAttribute($this, "showCategoryTree", array(0 => $this->getAttribute($context["category"], "children", array()), 1 => ($context["isCollapseChildren"] ?? null)), "method");
                    echo "
                ";
                }
                // line 40
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin/article-category/tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 42,  158 => 40,  152 => 38,  150 => 37,  146 => 35,  138 => 33,  136 => 32,  130 => 31,  125 => 29,  119 => 28,  113 => 26,  109 => 24,  103 => 22,  101 => 21,  97 => 20,  93 => 19,  80 => 18,  77 => 17,  74 => 16,  70 => 15,  65 => 14,  52 => 13,  46 => 11,  44 => 10,  40 => 8,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/article-category/tbody.html.twig", "/vagrant_data/nuliedu/app/Resources/views/admin/article-category/tbody.html.twig");
    }
}
