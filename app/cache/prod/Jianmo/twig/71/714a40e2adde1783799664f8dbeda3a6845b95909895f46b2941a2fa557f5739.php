<?php

/* default/index.html.twig */
class __TwigTemplate_5eb21860db38b93c3c4e4d426d4b3fdefe5aa50f15ac98de7a1220d9b4a055aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/base-index.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/base-index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echo-js.js", 1 => "app/js/index/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("jianmo/home/top/banner", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 6
                echo "    ";
                echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("jianmo:home_top_banner");
                echo "
    ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 9
            echo "        ";
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 10
            echo "        ";
            if ((((($this->getAttribute($context["config"], "sortName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "sortName", array()), "")) : ("")) == "recommended") && (($context["code"] ?? null) == "category-course"))) {
                // line 11
                echo "            ";
                $context["code"] = "recommend-course";
                // line 12
                echo "        ";
            }
            // line 13
            echo "
        ";
            // line 14
            $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
            // line 15
            echo "        ";
            if ((($context["code"] ?? null) == "friend-link")) {
                // line 16
                echo "            ";
                $this->loadTemplate((("default/" . ($context["code"] ?? null)) . ".html.twig"), "default/index.html.twig", 16)->display(array_merge($context, array("friendlyLinks" => ($context["friendlyLinks"] ?? null))));
                // line 17
                echo "        ";
            } elseif ((($context["code"] ?? null) != "footer-link")) {
                // line 18
                echo "            ";
                if ((($context["code"] ?? null) != "course-grid-with-condition-index")) {
                    // line 19
                    echo "                ";
                    $asm89CacheStrategy2 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
                    $asm89Key2 = $asm89CacheStrategy2->generateKey(("jianmo/default/" . ($context["code"] ?? null)), 600                    );
                    $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
                    if ($asm89CacheBody2 === false) {
                        ob_start();
                            // line 20
                            echo "                ";
                            $this->loadTemplate((("default/" . ($context["code"] ?? null)) . ".html.twig"), "default/index.html.twig", 20)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? null))));
                            // line 21
                            echo "                ";
                        
                        $asm89CacheBody2 = ob_get_clean();
                        $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
                    }
                    echo $asm89CacheBody2;
                    // line 22
                    echo "            ";
                } else {
                    // line 23
                    echo "                ";
                    $this->loadTemplate((("default/" . ($context["code"] ?? null)) . ".html.twig"), "default/index.html.twig", 23)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? null))));
                    // line 24
                    echo "            ";
                }
                // line 25
                echo "        ";
            }
            // line 26
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 26,  124 => 25,  121 => 24,  118 => 23,  115 => 22,  108 => 21,  105 => 20,  98 => 19,  95 => 18,  92 => 17,  89 => 16,  86 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  69 => 9,  51 => 8,  41 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/vagrant_data/nuliedu/app/Resources/views/default/index.html.twig");
    }
}
