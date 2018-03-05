<?php

/* default/index.html.twig */
class __TwigTemplate_0ccd3e9b64b51b6bee960da790a60d5cc57264a7511d0251633638dc1a3ce9f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["bodyClass"] = "homepage";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echo-js.js", 1 => "libs/jquery-cycle2.js", 2 => "defaulttheme/js/default/index.js"));
        // line 6
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
  <div class=\"es-row-wrap container-gap\">

    <div class=\"homepage-feature homepage-feature-slides mbl\">
      <div class=\"cycle-pager\"></div>
      ";
        // line 14
        echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("default:home_top_banner");
        echo "
    </div>

    <div class=\"row row-9-3\">

      <div class=\"col-md-9\">

        ";
        // line 21
        $context["openCourses"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OpenCourses", array("count" => 5, "orderBy" => "recommendedSeq"));
        // line 22
        echo "        ";
        if (($context["openCourses"] ?? null)) {
            // line 23
            echo "          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <h2>公开课</h2>
              <a class=\"pull-right\" href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_explore");
            echo "\">更多&gt;</a>
            </div>
            <div class=\"es-box-body\">
              ";
            // line 29
            echo $this->getAttribute($this, "open_course_lists", array(0 => ($context["openCourses"] ?? null)), "method");
            echo "
            </div>
          </div>
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        $context["classrooms"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendClassrooms", array("count" => 6));
        // line 35
        echo "        ";
        if (($context["classrooms"] ?? null)) {
            // line 36
            echo "          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <h2>";
            // line 38
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</h2>
              <a class=\"pull-right\" href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore");
            echo "\">更多&gt;</a>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"home-class-list clearfix\">
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["classrooms"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 44
                echo "                  ";
                $context["teachers"] = (($this->getAttribute($context["classroom"], "users", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["classroom"], "users", array()), null)) : (null));
                // line 45
                echo "                  ";
                if (($this->getAttribute($context["loop"], "index", array()) <= 5)) {
                    // line 46
                    echo "                    <li class=\"class-item\">
                      <a class=\"class-picture-link\" href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">
                        ";
                    // line 48
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute($context["classroom"], "title", array()), "lazyload_class.png");
                    echo "
                      </a>
                      <div class=\"class-body\">
                        <h3 class=\"class-title\">
                          <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                    echo "</a>
                        </h3>
                        <div class=\"class-metas\">
                          ";
                    // line 55
                    if (($context["teachers"] ?? null)) {
                        // line 56
                        echo "                            <span class=\"class-teacher\">
                      <i class=\"es-icon es-icon-people\"></i>
                              ";
                        // line 58
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? null));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                            // line 59
                            echo "                                ";
                            if (($this->getAttribute($context["loop"], "index", array()) <= 5)) {
                                // line 60
                                echo "                                  ";
                                // line 61
                                echo "                                  <a class=\"teacher-nickname mrl\"
                                    href=\"";
                                // line 62
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "nickname", array()), "html", null, true);
                                echo "</a>
                                ";
                            }
                            // line 64
                            echo "                              ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 65
                        echo "                    </span>
                          ";
                    }
                    // line 67
                    echo "                          <span class=\"class-student hidden-md\"><i
                              class=\"es-icon es-icon-people\"></i>";
                    // line 68
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
                    echo "</span>
                          <span class=\"class-price\">

                        ";
                    // line 71
                    if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                        // line 72
                        echo "                          ";
                        if (($this->getAttribute($context["classroom"], "price", array()) > 0)) {
                            // line 73
                            echo "                            ";
                            echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name", "虚拟币"), "html", null, true);
                            echo "
                          ";
                        } else {
                            // line 75
                            echo "                            免费
                          ";
                        }
                        // line 77
                        echo "                        ";
                    } else {
                        // line 78
                        echo "                          ";
                        if (($this->getAttribute($context["classroom"], "price", array()) > 0)) {
                            // line 79
                            echo "                            ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "price", array()), "html", null, true);
                            echo "元
                          ";
                        } else {
                            // line 81
                            echo "                            免费
                          ";
                        }
                        // line 83
                        echo "                        ";
                    }
                    // line 84
                    echo "
                      </span>
                        </div>
                        <div class=\"course-num\">共";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "courseNum", array()), "html", null, true);
                    echo "课程</div>
                      </div>
                    </li>
                  ";
                }
                // line 91
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 96
        echo "
        ";
        // line 97
        $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestCourseSets", array("count" => 5));
        // line 98
        echo "        ";
        if (($context["courseSets"] ?? null)) {
            // line 99
            echo "          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <h2>课程</h2>
              <a class=\"pull-right\" href=\"";
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
            echo "\">更多&gt;</a>
            </div>
            <div class=\"es-box-body\">
              ";
            // line 105
            echo $this->getAttribute($this, "course_set_list", array(0 => ($context["courseSets"] ?? null)), "method");
            echo "
            </div>
          </div>
        ";
        }
        // line 109
        echo "
        ";
        // line 110
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.live_course_enabled")) {
            // line 111
            echo "          ";
            $context["recentLiveCourseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecentLiveCourseSets", array("count" => 5));
            // line 112
            echo "
          ";
            // line 113
            if (($context["recentLiveCourseSets"] ?? null)) {
                // line 114
                echo "            <div class=\"es-box\">

              <div class=\"es-box-heading\">
                <h2>";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新直播"), "html", null, true);
                echo "</h2>
                ";
                // line 118
                if ((twig_length_filter($this->env, ($context["recentLiveCourseSets"] ?? null)) >= 1)) {
                    // line 119
                    echo "                  <a class=\"pull-right\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_course_set_explore");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
                    echo "&gt;</a>
                ";
                }
                // line 121
                echo "              </div>

              <div class=\"es-box-body\">
                ";
                // line 124
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/LiveCourseSet:courseSetsBlock", array("courseSets" => ($context["recentLiveCourseSets"] ?? null), "view" => "list")));
                echo "
              </div>
            </div>
          ";
            }
            // line 128
            echo "
        ";
        }
        // line 130
        echo "
        ";
        // line 132
        echo "        ";
        $context["articles"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestArticles", array("count" => 4));
        // line 133
        echo "        ";
        if (($context["articles"] ?? null)) {
            // line 134
            echo "          <div class=\"es-box news\">
            <div class=\"es-box-heading\">
              <h2>";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新%article_name%", array("%article_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("article.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资讯")))), "html", null, true);
            echo "</h2>
              <a class=\"pull-right\" href=\"";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
            echo "&gt;</a>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"row\">
                ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 142
                echo "                  ";
                if ($context["article"]) {
                    // line 143
                    echo "                    <li class=\"col-md-6\">
                      <em>";
                    // line 144
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "publishedTime", array()), "m-d H:i"), "html", null, true);
                    echo " </em>
                      <a href=\"";
                    // line 145
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "\">
                        <span>[";
                    // line 146
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["article"], "category", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["article"], "category", array(), "any", false, true), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未分类"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未分类"))), "html", null, true);
                    echo "]</span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo " </a>
                    </li>
                  ";
                }
                // line 149
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 154
        echo "
        ";
        // line 156
        echo "        ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("vip.enabled"))) {
            // line 157
            echo "          ";
            $context["levels"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("VipLevels", array("count" => 100));
            // line 158
            echo "          ";
            if (($context["levels"] ?? null)) {
                // line 159
                echo "            <div class=\"es-box vip\">
              <div class=\"es-box-heading\">
                <h2>";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员专区"), "html", null, true);
                echo "</h2>
                <a class=\"pull-right\" href=\"";
                // line 162
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
                echo "&gt;</a>
              </div>
              <div class=\"es-box-body\">
                <ul class=\"vip-lists\">
                  ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["levels"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    // line 167
                    echo "                    <li class=\"vip-item\">
                      <div class=\"row\">
                        <div class=\"vip-img col-sm-3 \">
                          <a href=\"";
                    // line 170
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_course_explore", array("levelId" => $this->getAttribute($context["level"], "id", array()))), "html", null, true);
                    echo "\">
                            <img class=\"img-responsive\"
                              src=\"";
                    // line 172
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["level"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["level"], "icon", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/vip.png"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/vip.png"))), "html", null, true);
                    echo "\"
                              alt=\"";
                    // line 173
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                    echo "\">
                          </a>
                        </div>
                        </a>
                        <div class=\"vip-intro col-sm-6\">
                          <h3>";
                    // line 178
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                    echo "</h3>
                          <p>";
                    // line 179
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["level"], "description", array()), 40);
                    echo "</p>
                        </div>
                        <div class=\"vip-price col-sm-3\">
                          ";
                    // line 182
                    if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                        // line 183
                        echo "                            <h4> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetPrice(($this->getAttribute($context["level"], "monthPrice", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate"))), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
                        echo "</h4>
                          ";
                    } else {
                        // line 185
                        echo "                            <h4>¥&nbsp;";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "monthPrice", array()), "html", null, true);
                        echo "</h4>
                          ";
                    }
                    // line 187
                    echo "                          <h4><a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_buy");
                    echo "\" class=\"btn btn-success\">立即购买</a></h4>
                        </div>
                      </div>
                    </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 192
                echo "                </ul>
              </div>
            </div>
          ";
            }
            // line 196
            echo "        ";
        }
        // line 197
        echo "
        ";
        // line 199
        echo "        ";
        if ((($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("group"), "group_show", array()), 1)) : (1))) {
            // line 200
            echo "          ";
            $context["groups"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("HotGroup", array("count" => 15));
            // line 201
            echo "          ";
            if (($context["groups"] ?? null)) {
                // line 202
                echo "            <div class=\"es-box hot-group\">
              <div class=\"es-box-heading\"><h2>";
                // line 203
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热小组"), "html", null, true);
                echo "</h2><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_search_group");
                echo "\"
                  class=\"pull-right\">";
                // line 204
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
                echo "&gt;</a></div>
              <div class=\"es-box-body\">
                <ul class=\"list-unstyled\">
                  ";
                // line 207
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 208
                    echo "                    ";
                    if (($this->getAttribute($context["group"], "status", array()) == "open")) {
                        // line 209
                        echo "                      <li class=\"col-md-4\">
                        <div class=\"panel\">
                          <div class=\"media\">
                            <a href=\"";
                        // line 212
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                        echo "\"
                              class=\"pull-left\">
                              ";
                        // line 214
                        if ($this->getAttribute($context["group"], "logo", array())) {
                            // line 215
                            echo "                                <img class=\"avatar-square-sm\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["group"], "logo", array())), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                            echo "\">
                              ";
                        } else {
                            // line 217
                            echo "                                <img class=\"avatar-square-sm\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                            echo "\"
                                  alt=\"";
                            // line 218
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                            echo "\">
                              ";
                        }
                        // line 220
                        echo "                            </a>
                            <div class=\"media-body\">
                              <p><a href=\"";
                        // line 222
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                        echo "\"
                                  title=\"";
                        // line 223
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["group"], "title", array()), 10);
                        echo "</a></p>
                              <div class=\"text-muted text-normal\">
                                ";
                        // line 225
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%groupMemberNum%个成员", array("%groupMemberNum%" => $this->getAttribute($context["group"], "memberNum", array()))), "html", null, true);
                        echo "&nbsp;
                                ";
                        // line 226
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%groupThreadNum%个话题", array("%groupThreadNum%" => $this->getAttribute($context["group"], "threadNum", array()))), "html", null, true);
                        echo "
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    ";
                    }
                    // line 233
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 234
                echo "                </ul>
              </div>
            </div>
          ";
            }
            // line 238
            echo "        ";
        }
        // line 239
        echo "      </div>

      <div class=\"col-md-3\">
        ";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:default:promotedTeacherBlock"));
        echo "

        ";
        // line 245
        echo "        ";
        $context["learns"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestStatuses", array("mode" => "simple", "count" => 5, "private" => 0));
        // line 246
        echo "        ";
        if (($context["learns"] ?? null)) {
            // line 247
            echo "          <div class=\"es-box status-side\">
            <div class=\"es-box-heading\">
              <h2>";
            // line 249
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("动态"), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"media-list\">
                ";
            // line 253
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["learns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["learn"]) {
                // line 254
                echo "
                  <li class=\"media\">
                    ";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "user_avatar", array(0 => $this->getAttribute($context["learn"], "user", array()), 1 => "pull-left", 2 => "media-objec", 3 => true), "method"), "html", null, true);
                echo "

                    <div class=\"media-body\">
                      ";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "user_link", array(0 => $this->getAttribute($context["learn"], "user", array())), "method"), "html", null, true);
                echo "
                      ";
                // line 260
                echo $this->getAttribute($context["learn"], "message", array());
                echo "
                    </div>
                  </li>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 269
        echo "
        ";
        // line 270
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:latestReviewsBlock", array("number" => 5)));
        echo "

        ";
        // line 273
        echo "        ";
        if ((($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("group"), "group_show", array()), 1)) : (1))) {
            // line 274
            echo "          ";
            $context["hotThreads"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("HotThreads", array("count" => 11));
            // line 275
            echo "          ";
            if (($context["hotThreads"] ?? null)) {
                // line 276
                echo "            <div class=\"es-box hot-threads\">
              <div class=\"es-box-heading\"><h2>";
                // line 277
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热话题"), "html", null, true);
                echo "</h2></div>
              <div class=\"es-box-body\">
                <ul class=\"text-list\">
                  ";
                // line 280
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["hotThreads"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                    // line 281
                    echo "                    ";
                    if ($context["thread"]) {
                        // line 282
                        echo "                      <li
                        style=\"border-bottom:none;background:url('";
                        // line 283
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/triangle.png"), "html", null, true);
                        echo "') no-repeat 0 3px;padding-left:8px;padding-top:0px;margin-bottom:8px;\">
                        <a
                          href=\"";
                        // line 285
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_thread_show", array("id" => $this->getAttribute($context["thread"], "groupId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["thread"], "title", array()), 15);
                        echo "</a>
                      </li>
                    ";
                    }
                    // line 288
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 289
                echo "                </ul>
              </div>
            </div>
          ";
            }
            // line 293
            echo "        ";
        }
        // line 294
        echo "
      </div>

    </div>

  </div>
";
    }

    // line 302
    public function getcourse_set_list($__courseSets__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "courseSets" => $__courseSets__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 303
            echo "  ";
            $context["web_macro"] = $this->loadTemplate("macro.html.twig", "default/index.html.twig", 303);
            // line 304
            echo "  ";
            $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter(($context["mode"] ?? null), "default")) : ("default"));
            // line 305
            echo "  <ul class=\"course-wide-list clearfix\">
    ";
            // line 306
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
                // line 307
                echo "      ";
                $context["course"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PublishedCourseByCourseSet", array("courseSetId" => $this->getAttribute($context["courseSet"], "id", array())));
                // line 308
                echo "      ";
                if (($context["course"] ?? null)) {
                    // line 309
                    echo "        <li class=\"course-item clearfix\">
        <a class=\"course-picture-link\" href=\"";
                    // line 310
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
                    echo "\">
          ";
                    // line 311
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath((($this->getAttribute($this->getAttribute($context["courseSet"], "cover", array(), "any", false, true), "large", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["courseSet"], "cover", array(), "any", false, true), "large", array()), "")) : ("")), "course.png"), "course-picture", "");
                    echo "
          ";
                    // line 312
                    if (($this->getAttribute($context["courseSet"], "serializeMode", array()) == "serialize")) {
                        // line 313
                        echo "            <span class=\"label label-success \">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更新中"), "html", null, true);
                        echo "</span>
          ";
                    } elseif (($this->getAttribute(                    // line 314
$context["courseSet"], "serializeMode", array()) == "finished")) {
                        // line 315
                        echo "            <span class=\"label label-warning \">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已完结"), "html", null, true);
                        echo "</span>
          ";
                    }
                    // line 317
                    echo "          ";
                    if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                        // line 318
                        echo "            ";
                        $context["task"] = (($this->getAttribute($context["courseSet"], "task", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "task", array(), "array"), null)) : (null));
                        // line 319
                        echo "            ";
                        if (((($context["task"] ?? null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute(($context["task"] ?? null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute(($context["task"] ?? null), "endTime", array())))) {
                            // line 320
                            echo "              <span class=\"label label-warning series-mode-label\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在直播中"), "html", null, true);
                            echo "</span>
            ";
                        } else {
                            // line 322
                            echo "              <span class=\"label label-success series-mode-label\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播"), "html", null, true);
                            echo "</span>
            ";
                        }
                        // line 324
                        echo "          ";
                    }
                    // line 325
                    echo "        </a>

        <div class=\"course-body\">

          <h4 class=\"course-title\"><a href=\"";
                    // line 329
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
                    echo "</a>

          </h4>
          <div class=\"course-price-info\">
            ";
                    // line 333
                    $this->loadTemplate("course/widgets/course-set-price.html.twig", "default/index.html.twig", 333)->display($context);
                    // line 334
                    echo "          </div>
          ";
                    // line 335
                    if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                        // line 336
                        echo "            ";
                        $context["task"] = (($this->getAttribute($context["courseSet"], "task", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "task", array()), null)) : (null));
                        // line 337
                        echo "            <div class=\"live-course-lesson mbs\">
              ";
                        // line 338
                        if (($context["task"] ?? null)) {
                            // line 339
                            echo "                <span class=\"text-success fsm mrm\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? null), "startTime", array()), "n月j日 H:i"), "html", null, true);
                            echo " ~ ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? null), "endTime", array()), "H:i"), "html", null, true);
                            echo "</span>
                <span class=\"text-muted fsm mrm\">第";
                            // line 340
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "number", array()), "html", null, true);
                            echo "任务</span>
              ";
                        }
                        // line 342
                        echo "            </div>
          ";
                    } else {
                        // line 344
                        echo "            <div class=\"course-about ellipsis\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "subtitle", array()), "html", null, true);
                        echo "</div>
          ";
                    }
                    // line 346
                    echo "
          <div class=\"course-footer clearfix\">

            ";
                    // line 349
                    $context["teacher"] = _twig_default_filter(twig_first($this->env, $this->getAttribute($context["courseSet"], "teachers", array())), null);
                    // line 350
                    echo "            ";
                    if (($context["teacher"] ?? null)) {
                        // line 351
                        echo "              <div class=\"teacher\">";
                        echo $context["web_macro"]->getuser_avatar(($context["teacher"] ?? null), "pull-left", "teacher-avatar");
                        echo "
                <a class=\"teacher-nickname ellipsis\" href=\"";
                        // line 352
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["teacher"] ?? null), "id", array()))), "html", null, true);
                        echo "\">
                  ";
                        // line 353
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? null), "nickname", array()), "html", null, true);
                        echo "
                </a>
                <span class=\"teacher-title ellipsis\">";
                        // line 355
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? null), "title", array()), "html", null, true);
                        echo "</span>
              </div>
            ";
                    }
                    // line 358
                    echo "            <div class=\"course-metas\">
              <span class=\"stars-";
                    // line 359
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["courseSet"], "rating", array())), "html", null, true);
                    echo "\">&nbsp;</span>
              ";
                    // line 360
                    if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                        // line 361
                        echo "                <span class=\"divider\"></span>
                <span class=\"text-muted mrm mls\">
                  <strong>";
                        // line 363
                        echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "studentNum", array()), "html", null, true);
                        echo "</strong>
                  ";
                        // line 364
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.user_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
                        echo "
                </span>
              ";
                    }
                    // line 367
                    echo "            </div>
          </div>
        </div>
      </li>
      ";
                }
                // line 372
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            echo "  </ul>
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

    // line 376
    public function getopen_course_lists($__openCourses__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "openCourses" => $__openCourses__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 377
            echo "  ";
            $context["web_macro"] = $this->loadTemplate("macro.html.twig", "default/index.html.twig", 377);
            // line 378
            echo "  <ul class=\"course-wide-list clearfix\">
    ";
            // line 379
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["openCourses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 380
                echo "      <li class=\"course-item clearfix\">
        <a class=\"course-picture-link\" href=\"";
                // line 381
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">
          ";
                // line 382
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "course-picture", "");
                echo "

          ";
                // line 384
                if (($this->getAttribute($context["course"], "type", array()) == "liveOpen")) {
                    // line 385
                    echo "            ";
                    $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                    // line 386
                    echo "            ";
                    if (((($context["lesson"] ?? null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute(($context["lesson"] ?? null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute(($context["lesson"] ?? null), "endTime", array())))) {
                        // line 387
                        echo "              <span class=\"label label-warning series-mode-label\">正在直播中</span>
            ";
                    } else {
                        // line 389
                        echo "              <span class=\"label label-success series-mode-label\">直播</span>
            ";
                    }
                    // line 391
                    echo "          ";
                }
                // line 392
                echo "        </a>

        <div class=\"course-body\">

          <h4 class=\"course-title\">
            <a href=\"";
                // line 397
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a>
          </h4>

          <div class=\"course-price-info\"></div>

          ";
                // line 402
                if (($this->getAttribute($context["course"], "type", array()) == "liveOpen")) {
                    // line 403
                    echo "            ";
                    $context["lessons"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OpenCourseLessons", array("courseId" => $this->getAttribute($context["course"], "id", array()), "count" => 1));
                    // line 404
                    echo "
            <div class=\"live-course-lesson mbs\">
              ";
                    // line 406
                    if (($context["lessons"] ?? null)) {
                        // line 407
                        echo "                <span
                  class=\"text-success fsm mrm\">";
                        // line 408
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["lessons"] ?? null), 0, array(), "array"), "startTime", array()), "n月j日 H:i"), "html", null, true);
                        echo " ~ ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["lessons"] ?? null), 0, array(), "array"), "endTime", array()), "H:i"), "html", null, true);
                        echo "</span>
              ";
                    }
                    // line 410
                    echo "            </div>

          ";
                } else {
                    // line 413
                    echo "            <div class=\"course-about ellipsis\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                    echo "</div>
          ";
                }
                // line 415
                echo "
          <div class=\"course-footer clearfix\">

            ";
                // line 418
                $context["teacher"] = _twig_default_filter(twig_first($this->env, $this->getAttribute($context["course"], "teachers", array())), null);
                // line 419
                echo "            ";
                if (($context["teacher"] ?? null)) {
                    // line 420
                    echo "              <div class=\"teacher\">
                ";
                    // line 421
                    echo $context["web_macro"]->getuser_avatar(($context["teacher"] ?? null), "pull-left", "teacher-avatar");
                    echo "
                <a class=\"teacher-nickname ellipsis\"
                  href=\"";
                    // line 423
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["teacher"] ?? null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? null), "nickname", array()), "html", null, true);
                    echo "</a>
                <span class=\"teacher-title ellipsis\">";
                    // line 424
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? null), "title", array()), "html", null, true);
                    echo "</span>
              </div>
            ";
                }
                // line 427
                echo "            <div class=\"course-metas\">
              <span class=\"text-muted mrm\"><i class=\"es-icon es-icon-removeredeye\"></i>";
                // line 428
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "hitNum", array()), "html", null, true);
                echo "</span>
              <span class=\"text-muted mrm\"><i class=\"es-icon es-icon-thumbup\"></i>";
                // line 429
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "likeNum", array()), "html", null, true);
                echo "</span>
              <span class=\"text-muted mrm\"><i class=\"es-icon es-icon-textsms\"></i>";
                // line 430
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "postNum", array()), "html", null, true);
                echo "</span>
            </div>
          </div>
        </div>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 436
            echo "  </ul>
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
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1162 => 436,  1150 => 430,  1146 => 429,  1142 => 428,  1139 => 427,  1133 => 424,  1127 => 423,  1122 => 421,  1119 => 420,  1116 => 419,  1114 => 418,  1109 => 415,  1103 => 413,  1098 => 410,  1091 => 408,  1088 => 407,  1086 => 406,  1082 => 404,  1079 => 403,  1077 => 402,  1067 => 397,  1060 => 392,  1057 => 391,  1053 => 389,  1049 => 387,  1046 => 386,  1043 => 385,  1041 => 384,  1036 => 382,  1032 => 381,  1029 => 380,  1025 => 379,  1022 => 378,  1019 => 377,  1007 => 376,  991 => 373,  977 => 372,  970 => 367,  964 => 364,  960 => 363,  956 => 361,  954 => 360,  950 => 359,  947 => 358,  941 => 355,  936 => 353,  932 => 352,  927 => 351,  924 => 350,  922 => 349,  917 => 346,  911 => 344,  907 => 342,  902 => 340,  895 => 339,  893 => 338,  890 => 337,  887 => 336,  885 => 335,  882 => 334,  880 => 333,  871 => 329,  865 => 325,  862 => 324,  856 => 322,  850 => 320,  847 => 319,  844 => 318,  841 => 317,  835 => 315,  833 => 314,  828 => 313,  826 => 312,  822 => 311,  818 => 310,  815 => 309,  812 => 308,  809 => 307,  792 => 306,  789 => 305,  786 => 304,  783 => 303,  771 => 302,  761 => 294,  758 => 293,  752 => 289,  746 => 288,  738 => 285,  733 => 283,  730 => 282,  727 => 281,  723 => 280,  717 => 277,  714 => 276,  711 => 275,  708 => 274,  705 => 273,  700 => 270,  697 => 269,  691 => 265,  680 => 260,  676 => 259,  670 => 256,  666 => 254,  662 => 253,  650 => 249,  646 => 247,  643 => 246,  640 => 245,  635 => 242,  630 => 239,  627 => 238,  621 => 234,  615 => 233,  605 => 226,  601 => 225,  594 => 223,  590 => 222,  586 => 220,  581 => 218,  576 => 217,  568 => 215,  566 => 214,  559 => 212,  554 => 209,  551 => 208,  547 => 207,  541 => 204,  535 => 203,  532 => 202,  529 => 201,  526 => 200,  523 => 199,  520 => 197,  517 => 196,  511 => 192,  499 => 187,  493 => 185,  486 => 183,  484 => 182,  478 => 179,  474 => 178,  466 => 173,  462 => 172,  457 => 170,  452 => 167,  448 => 166,  439 => 162,  435 => 161,  431 => 159,  428 => 158,  425 => 157,  422 => 156,  419 => 154,  413 => 150,  407 => 149,  399 => 146,  393 => 145,  389 => 144,  386 => 143,  383 => 142,  379 => 141,  370 => 137,  366 => 136,  362 => 134,  359 => 133,  356 => 132,  353 => 130,  349 => 128,  342 => 124,  337 => 121,  329 => 119,  327 => 118,  323 => 117,  318 => 114,  316 => 113,  313 => 112,  310 => 111,  308 => 110,  305 => 109,  298 => 105,  292 => 102,  287 => 99,  284 => 98,  282 => 97,  279 => 96,  273 => 92,  259 => 91,  252 => 87,  247 => 84,  244 => 83,  240 => 81,  234 => 79,  231 => 78,  228 => 77,  224 => 75,  216 => 73,  213 => 72,  211 => 71,  205 => 68,  202 => 67,  198 => 65,  184 => 64,  177 => 62,  174 => 61,  172 => 60,  169 => 59,  152 => 58,  148 => 56,  146 => 55,  138 => 52,  131 => 48,  127 => 47,  124 => 46,  121 => 45,  118 => 44,  101 => 43,  94 => 39,  90 => 38,  86 => 36,  83 => 35,  81 => 34,  78 => 33,  71 => 29,  65 => 26,  60 => 23,  57 => 22,  55 => 21,  45 => 14,  38 => 9,  35 => 8,  31 => 1,  29 => 6,  27 => 4,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/vagrant_data/nuliedu/web/themes/default/views/default/index.html.twig");
    }
}
