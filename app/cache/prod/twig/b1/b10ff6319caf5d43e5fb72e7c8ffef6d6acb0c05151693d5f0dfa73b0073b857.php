<?php

/* macro.html.twig */
class __TwigTemplate_09b071b2a42a0bb6e0503cf500eb212566ae205958284fbd246fca5ed00f56de extends Twig_Template
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
        // line 77
        echo "
";
        // line 100
        echo "
";
        // line 121
        echo "
";
        // line 143
        echo "
";
        // line 166
        echo "
";
        // line 170
        echo "
";
    }

    // line 2
    public function getuser_avatar($__user__ = null, $__class__ = null, $__imgClass__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "imgClass" => $__imgClass__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            if (($context["user"] ?? null)) {
                // line 4
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo " ";
                if (($context["card"] ?? null)) {
                    echo "js-user-card";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\" data-card-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
                echo "\">
      ";
                // line 5
                if ((($context["imgClass"] ?? null) == "avatar-md")) {
                    // line 6
                    echo "        ";
                    $context["avatarType"] = "medium";
                    // line 7
                    echo "      ";
                } elseif ((($context["imgClass"] ?? null) == "avatar-lg")) {
                    // line 8
                    echo "        ";
                    $context["avatarType"] = "large";
                    // line 9
                    echo "      ";
                } else {
                    // line 10
                    echo "        ";
                    $context["avatarType"] = "small";
                    // line 11
                    echo "      ";
                }
                // line 12
                echo "    <img class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter(($context["imgClass"] ?? null), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath(($context["user"] ?? null), ($context["avatarType"] ?? null)), "html", null, true);
                echo "\">

  </a>
  ";
            } else {
                // line 16
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" href=\"javascript:;\">
      <img class=\"";
                // line 17
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter(($context["imgClass"] ?? null), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath("", "small"), "html", null, true);
                echo "\">
    </a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getuser_avatar_link($__user__ = null, $__size__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            $context["size"] = ((array_key_exists("size", $context)) ? (_twig_default_filter(($context["size"] ?? null), "small")) : ("small"));
            // line 25
            echo "  ";
            if (($context["user"] ?? null)) {
                // line 26
                echo "    <a
      class=\"avatar-link-";
                // line 27
                echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
                echo " ";
                if (twig_in_filter("card", ($context["options"] ?? null))) {
                    echo "js-user-card";
                }
                echo "\"
      ";
                // line 28
                if (twig_in_filter("_blank", ($context["options"] ?? null))) {
                    // line 29
                    echo "        target=\"_blank\"
      ";
                }
                // line 31
                echo "      href=\"";
                if (twig_in_filter("null_link", ($context["options"] ?? null))) {
                    echo "javascript:;";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                }
                echo "\"
      data-card-url=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\"
      data-user-id=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
                echo "\">
      ";
                // line 34
                echo $this->getAttribute($this, "user_avater_img", array(0 => ($context["user"] ?? null), 1 => ($context["size"] ?? null)), "method");
                echo "
    </a>
  ";
            } else {
                // line 37
                echo "    <a class=\"avatar-link-";
                echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
                echo "\" href=\"javascript:;\">
      ";
                // line 38
                echo $this->getAttribute($this, "user_avater_img", array(0 => ($context["user"] ?? null), 1 => ($context["size"] ?? null)), "method");
                echo "
    </a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getuser_avater_img($__user__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 44
            echo "<img class=\"avatar-";
            echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo "\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath(($context["user"] ?? null), ($context["size"] ?? null)), "html", null, true);
            echo "\">";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function getuser_link($__user__ = null, $__class__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 59
            if (($context["user"] ?? null)) {
                // line 60
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nickname", array()), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 62
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" href=\"javascript:;\"><del>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.not_exist"), "html", null, true);
                echo "</del></a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getflash_messages($__isUseNew__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "isUseNew" => $__isUseNew__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 67
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 68
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 69
                    echo "      ";
                    if (($context["isUseNew"] ?? null)) {
                        // line 70
                        echo "        <div class=\"alert cd-alert cd-alert-";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]);
                        echo "</div>
      ";
                    } else {
                        // line 72
                        echo "        <div class=\"alert alert-";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]);
                        echo "</div>
      ";
                    }
                    // line 74
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 78
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 79
            echo "  ";
            ob_start();
            // line 80
            echo "
      ";
            // line 81
            $context["kilobyte"] = 1024;
            // line 82
            echo "      ";
            $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
            // line 83
            echo "      ";
            $context["gigabyte"] = (($context["megabyte"] ?? null) * 1024);
            // line 84
            echo "      ";
            $context["terabyte"] = (($context["gigabyte"] ?? null) * 1024);
            // line 85
            echo "
      ";
            // line 86
            if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                // line 87
                echo "          ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " B"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 88
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                // line 89
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 90
($context["bytes"] ?? null) < ($context["gigabyte"] ?? null))) {
                // line 91
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 92
($context["bytes"] ?? null) < ($context["terabyte"] ?? null))) {
                // line 93
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["gigabyte"] ?? null)), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 95
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["terabyte"] ?? null)), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 97
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 101
    public function getpaginator($__paginator__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 102
            echo "  ";
            if ((((array_key_exists("paginator", $context)) ? (_twig_default_filter(($context["paginator"] ?? null))) : ("")) && ($this->getAttribute(($context["paginator"] ?? null), "lastPage", array()) > 1))) {
                // line 103
                echo "    <nav class=\" ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 105
                if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? null), "firstPage", array()))) {
                    // line 106
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "firstPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li><a  href=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        ";
                }
                // line 109
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? null), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 110
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? null), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "
        ";
                // line 113
                if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? null), "lastPage", array()))) {
                    // line 114
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li><a  href=\"";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        ";
                }
                // line 117
                echo "      </ul>
    </nav>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 122
    public function getstar($__score__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "score" => $__score__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 123
            echo "  ";
            $context["floorScore"] = twig_round(($context["score"] ?? null), 0, "floor");
            // line 124
            echo "  ";
            $context["emptyNum"] = (5 - ($context["floorScore"] ?? null));
            // line 125
            echo "
  ";
            // line 126
            if ((($context["floorScore"] ?? null) > 0)) {
                // line 127
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["floorScore"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 128
                    echo "      <i class=\"es-icon es-icon-star color-warning\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "  ";
            }
            // line 131
            echo "
  ";
            // line 132
            if (((($context["score"] ?? null) - ($context["floorScore"] ?? null)) >= 0.5)) {
                // line 133
                echo "    ";
                $context["emptyNum"] = (($context["emptyNum"] ?? null) - 1);
                // line 134
                echo "    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  ";
            }
            // line 136
            echo "
  ";
            // line 137
            if ((($context["emptyNum"] ?? null) > 0)) {
                // line 138
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["emptyNum"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 139
                    echo "      <i class=\"es-icon es-icon-staroutline\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 144
    public function getajax_paginator($__paginator__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 145
            echo "  <input class=\"js-page\" type=\"hidden\" name=\"page\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()), 1)) : (1)), "html", null, true);
            echo "\">

  ";
            // line 147
            if (($this->getAttribute(($context["paginator"] ?? null), "lastPage", array()) > 1)) {
                // line 148
                echo "    <nav class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 150
                if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? null), "firstPage", array()))) {
                    // line 151
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "firstPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "firstPage", array()), "html", null, true);
                    echo "\"><a href=\"javascript:;\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li data-url=\"";
                    // line 152
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "previousPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "previousPage", array()), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        ";
                }
                // line 154
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? null), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 155
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? null), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo " data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "\"><a href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "
        ";
                // line 158
                if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? null), "lastPage", array()))) {
                    // line 159
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "nextPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "nextPage", array()), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li data-url=\"";
                    // line 160
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "getLastPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getLastPage", array()), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        ";
                }
                // line 162
                echo "      </ul>
    </nav>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 167
    public function getlink($__name__ = null, $__url__ = null, $__title__ = "", $__target__ = "_blnak", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "url" => $__url__,
            "title" => $__title__,
            "target" => $__target__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 168
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" title= \"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</strong></a>
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

    // line 171
    public function gettable_filter($__header__ = null, $__choices__ = null, $__key__ = null, $__dataTarget__ = null, $__selectedChoice__ = null, $__default__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "header" => $__header__,
            "choices" => $__choices__,
            "key" => $__key__,
            "dataTarget" => $__dataTarget__,
            "selectedChoice" => $__selectedChoice__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 172
            echo "  <div class=\"dropdown\">
    ";
            // line 173
            echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
            echo "
    <a href=\"javascript:;\" class=\"";
            // line 174
            if ((($context["selectedChoice"] ?? null) == "")) {
                echo "cd-link-gray-light";
            } else {
                echo "cd-link-primary";
            }
            echo "\" data-toggle=\"dropdown\">
      <i class=\"cd-icon cd-icon-filter cd-text-xs\"></i>
    </a>
    <ul class=\"dropdown-menu cd-dropdown-menu cd-dropdown-menu-filter\">
      ";
            // line 178
            if (($context["default"] ?? null)) {
                // line 179
                echo "        <li class=\"";
                if ((($context["selectedChoice"] ?? null) == "")) {
                    echo "active";
                }
                echo "\"><a href=\"javascript:;\" data-toggle=\"table-filter\" data-target=\"";
                echo twig_escape_filter($this->env, ($context["dataTarget"] ?? null), "html", null, true);
                echo "\" data-filter=\"\">";
                echo twig_escape_filter($this->env, ($context["default"] ?? null), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 181
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
            foreach ($context['_seq'] as $context["choiceKey"] => $context["choice"]) {
                // line 182
                echo "        <li class=\"";
                if ((($context["selectedChoice"] ?? null) == $context["choiceKey"])) {
                    echo "active";
                }
                echo "\"><a href=\"javascript:;\" data-toggle=\"table-filter\" data-target=\"";
                echo twig_escape_filter($this->env, ($context["dataTarget"] ?? null), "html", null, true);
                echo "\" data-filter=\"";
                echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                echo "=";
                echo twig_escape_filter($this->env, $context["choiceKey"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['choiceKey'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "    </ul>
  </div>
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
        return "macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  823 => 184,  804 => 182,  799 => 181,  787 => 179,  785 => 178,  774 => 174,  770 => 173,  767 => 172,  750 => 171,  726 => 168,  711 => 167,  693 => 162,  686 => 160,  679 => 159,  677 => 158,  674 => 157,  657 => 155,  652 => 154,  645 => 152,  638 => 151,  636 => 150,  630 => 148,  628 => 147,  622 => 145,  609 => 144,  593 => 141,  586 => 139,  581 => 138,  579 => 137,  576 => 136,  572 => 134,  569 => 133,  567 => 132,  564 => 131,  561 => 130,  554 => 128,  549 => 127,  547 => 126,  544 => 125,  541 => 124,  538 => 123,  526 => 122,  508 => 117,  503 => 115,  498 => 114,  496 => 113,  493 => 112,  478 => 110,  473 => 109,  468 => 107,  463 => 106,  461 => 105,  455 => 103,  452 => 102,  439 => 101,  422 => 97,  416 => 95,  410 => 93,  408 => 92,  403 => 91,  401 => 90,  396 => 89,  394 => 88,  389 => 87,  387 => 86,  384 => 85,  381 => 84,  378 => 83,  375 => 82,  373 => 81,  370 => 80,  367 => 79,  355 => 78,  336 => 75,  330 => 74,  322 => 72,  314 => 70,  311 => 69,  306 => 68,  301 => 67,  289 => 66,  268 => 62,  258 => 60,  256 => 59,  242 => 58,  223 => 44,  210 => 43,  191 => 38,  186 => 37,  180 => 34,  176 => 33,  172 => 32,  163 => 31,  159 => 29,  157 => 28,  149 => 27,  146 => 26,  143 => 25,  141 => 24,  127 => 23,  106 => 17,  101 => 16,  91 => 12,  88 => 11,  85 => 10,  82 => 9,  79 => 8,  76 => 7,  73 => 6,  71 => 5,  56 => 4,  54 => 3,  39 => 2,  34 => 170,  31 => 166,  28 => 143,  25 => 121,  22 => 100,  19 => 77,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "macro.html.twig", "/vagrant_data/nuliedu/app/Resources/views/macro.html.twig");
    }
}
