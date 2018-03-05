<?php

/* default/latest-reviews-block.html.twig */
class __TwigTemplate_4028f7ce7605fe3dd141e59c225922e4e9fbe2a8ad146f0307dacb9e9afd98d6 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "default/latest-reviews-block.html.twig", 1);
        // line 2
        if (($context["reviews"] ?? null)) {
            // line 3
            echo "\t<div class=\"es-box\">
\t\t<div class=\"es-box-heading\">
\t\t\t<h2>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.student_evaluate"), "html", null, true);
            echo "</h2>
\t\t</div>
\t<ul class=\"media-list latest-review-list\">
\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 9
                echo "\t\t  ";
                $context["author"] = (($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), null)) : (null));
                // line 10
                echo "\t\t  ";
                $context["course"] = (($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["review"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["review"], "courseId", array()), array(), "array"), null)) : (null));
                // line 11
                echo "      ";
                $context["courseSet"] = (($this->getAttribute(($context["courseSets"] ?? null), $this->getAttribute($context["review"], "courseSetId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSets"] ?? null), $this->getAttribute($context["review"], "courseSetId", array()), array(), "array"), null)) : (null));
                // line 12
                echo "\t\t  ";
                if ((($context["author"] ?? null) && ($context["course"] ?? null))) {
                    // line 13
                    echo "\t\t\t  <li class=\"media\">

\t\t\t  \t";
                    // line 15
                    echo $context["web_macro"]->getuser_avatar(($context["author"] ?? null), "author-picture-link", "author-picture");
                    echo "
\t\t\t  \t";
                    // line 16
                    echo $context["web_macro"]->getuser_link(($context["author"] ?? null), "author-nickname");
                    echo "

\t\t\t  \t<span class=\"color-gray\">";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.reviewer_comment_course"), "html", null, true);
                    echo "</span> <br>
\t\t\t  \t<div class=\"review-content\">";
                    // line 19
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 50);
                    echo "</div>

\t\t\t\t  <div class=\"review-footer\">
\t\t\t\t\t  <a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
                    echo "\" class=\"course-title\"> 《 ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
                    echo " 》</a>
\t\t\t\t\t  <span class=\"divider\"></span>
\t\t\t\t\t  <span class=\"stars-";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "rating", array()), "html", null, true);
                    echo "\">&nbsp;</span>
\t\t\t\t  </div>
\t\t\t  </li>
\t\t  ";
                }
                // line 28
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t</ul>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/latest-reviews-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  86 => 28,  79 => 24,  72 => 22,  66 => 19,  62 => 18,  57 => 16,  53 => 15,  49 => 13,  46 => 12,  43 => 11,  40 => 10,  37 => 9,  33 => 8,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/latest-reviews-block.html.twig", "/vagrant_data/nuliedu/app/Resources/views/default/latest-reviews-block.html.twig");
    }
}
