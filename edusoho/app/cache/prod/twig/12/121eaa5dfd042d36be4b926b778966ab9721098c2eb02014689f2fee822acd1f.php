<?php

/* TopxiaWebBundle:Course:Part/normal-header.html.twig */
class __TwigTemplate_c6bcd43911d1fc28be5ecb25115ff0966b6e25bb347eae114ded0eb7664361d6 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 1);
        // line 2
        $context["header_macro"] = $this;
        // line 3
        echo "
";
        // line 4
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("course/common");
        // line 5
        echo "
";
        // line 6
        if ((isset($context["member"]) ? $context["member"] : null)) {
            // line 7
            echo "  ";
            $asm89CacheStrategy8 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key8 = $asm89CacheStrategy8->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "normal/header/for/member"), 600            );
            $asm89CacheBody8 = $asm89CacheStrategy8->fetchBlock($asm89Key8);
            if ($asm89CacheBody8 === false) {
                ob_start();
                    // line 8
                    echo "    ";
                    $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 8)->display($context);
                    // line 9
                    echo "  ";
                
                $asm89CacheBody8 = ob_get_clean();
                $asm89CacheStrategy8->saveBlock($asm89Key8, $asm89CacheBody8);
            }
            echo $asm89CacheBody8;
        } elseif ((($this->getAttribute(        // line 10
(isset($context["course"]) ? $context["course"] : null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()), false)) : (false))) {
            // line 11
            echo "  ";
            $asm89CacheStrategy9 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key9 = $asm89CacheStrategy9->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/classroom/course/normal/header/for/guest"), 600            );
            $asm89CacheBody9 = $asm89CacheStrategy9->fetchBlock($asm89Key9);
            if ($asm89CacheBody9 === false) {
                ob_start();
                    // line 12
                    echo "    ";
                    $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 12)->display(array_merge($context, array("source" => "classroom")));
                    // line 13
                    echo "  ";
                
                $asm89CacheBody9 = ob_get_clean();
                $asm89CacheStrategy9->saveBlock($asm89Key9, $asm89CacheBody9);
            }
            echo $asm89CacheBody9;
        } else {
            // line 15
            echo "  ";
            $asm89CacheStrategy10 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key10 = $asm89CacheStrategy10->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/not/classroom/course/normal/header/for/guest"), 600            );
            $asm89CacheBody10 = $asm89CacheStrategy10->fetchBlock($asm89Key10);
            if ($asm89CacheBody10 === false) {
                ob_start();
                    // line 16
                    echo "    ";
                    $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 16)->display($context);
                    // line 17
                    echo "  ";
                
                $asm89CacheBody10 = ob_get_clean();
                $asm89CacheStrategy10->saveBlock($asm89Key10, $asm89CacheBody10);
            }
            echo $asm89CacheBody10;
        }
        // line 19
        echo "
";
        // line 41
        echo "
";
        // line 171
        echo "
";
        // line 188
        echo " 

";
        // line 190
        $context["favoriteReward"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("favorite_reward");
        // line 191
        echo "
";
        // line 220
        echo "
";
        // line 232
        echo "
";
    }

    // line 20
    public function getpicture($__course__ = null, $__previewLesson__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "previewLesson" => $__previewLesson__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "  <div class=\"course-img\">
    ";
            // line 22
            if ((isset($context["previewLesson"]) ? $context["previewLesson"] : null)) {
                // line 23
                echo "      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["previewLesson"]) ? $context["previewLesson"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"course-img-cover\">
        <i class=\"es-icon es-icon-playcircleoutline\"></i>
      </a>
    ";
            }
            // line 27
            echo "
    <img class=\"img-responsive\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "\">
    <div class=\"tags\">
      ";
            // line 30
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "serialize")) {
                // line 31
                echo "        <span class=\"tag-serialing\"></span>
      ";
            } elseif (($this->getAttribute(            // line 32
(isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "finished")) {
                // line 33
                echo "        <span class=\"tag-finished\"></span>
      ";
            }
            // line 35
            echo "      ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
                // line 36
                echo "        <span class=\"tag-live\"></span>
      ";
            }
            // line 38
            echo "    </div>
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

    // line 42
    public function getinfo($__course__ = null, $__member__ = null, $__userVipStatus__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "member" => $__member__,
            "userVipStatus" => $__userVipStatus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "  ";
            $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 43);
            // line 44
            echo "  <div class=\"course-info\">
    <h2 class=\"title\">
      ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "
      <span class=\"es-qrcode top\" data-url=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_qrcode", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
        <i class=\"es-icon es-icon-qrcode\"></i>
        <span class=\"qrcode-popover\">
          <img src=\"\" alt=\"\">
          ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("扫二维码继续学习"), "html", null, true);
            echo "
          ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("二维码时效为半小时"), "html", null, true);
            echo "
        </span>
      </span>
    </h2>
    <div class=\"subtitle\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array()), "html", null, true);
            echo "</div>
    <div class=\"metas\">
      <div class=\"score\">
        ";
            // line 59
            echo $context["web_macro"]->getstar($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "rating", array()));
            echo "
        <span>(";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(" 评论"), "html", null, true);
            echo ")</span>
      </div>

      ";
            // line 63
            if (((isset($context["member"]) ? $context["member"] : null) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()) > 0))) {
                // line 64
                echo "        ";
                if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()) > twig_date_format_filter($this->env, "now", "U"))) {
                    // line 65
                    echo "          <p class=\"expiry-date hidden-sm\">
            <span class=\"mrm\">";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("有效期至"), "html", null, true);
                    echo "</span>
            <span>";
                    // line 67
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()), "Y-m-d H:i"), "html", null, true);
                    echo "</span>
          </p>
        ";
                } else {
                    // line 70
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == 0)) {
                        // line 71
                        echo "             <div class=\"alert alert-danger alert-dismissable\">
                ";
                        // line 72
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您购买的课程已到期，无法学习课时、提问等。如有疑问请联系老师，或点击"), "html", null, true);
                        echo "
                  <a href=\"";
                        // line 73
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_member_deadline_reach", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                        echo "\">
                  ";
                        // line 74
                        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                            // line 75
                            echo "                  ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重新购买"), "html", null, true);
                            echo "
                  ";
                        } else {
                            // line 77
                            echo "                  ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重新加入"), "html", null, true);
                            echo "
                  ";
                        }
                        // line 79
                        echo "                  </a>。
              </div>
            ";
                    } else {
                        // line 82
                        echo "              ";
                        $context["classroom"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("GetClassroomByCourseId", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
                        // line 83
                        echo "                ";
                        if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
                            // line 84
                            echo "                  ";
                            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "days")) {
                                // line 85
                                echo "                    <div class=\"alert alert-warning\">你的班级已过有效期，无法继续学习，请<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_member_deadline_reach", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                                echo "\">
                      ";
                                // line 86
                                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                                    // line 87
                                    echo "                        ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重新购买"), "html", null, true);
                                    echo "
                      ";
                                } else {
                                    // line 89
                                    echo "                        ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重新加入"), "html", null, true);
                                    echo "
                      ";
                                }
                                // line 91
                                echo "                    </a></div>
                  ";
                            } elseif (($this->getAttribute(                            // line 92
(isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "date")) {
                                // line 93
                                echo "                    <div class=\"alert alert-warning\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你的班级已过有效期，无法继续学习"), "html", null, true);
                                echo "</a></div>
                  ";
                            }
                            // line 95
                            echo "                ";
                        }
                        // line 96
                        echo "            ";
                    }
                    // line 97
                    echo "        ";
                }
                // line 98
                echo "      ";
            }
            // line 99
            echo "

      ";
            // line 101
            if ( !(isset($context["member"]) ? $context["member"] : null)) {
                // line 102
                echo "        ";
                if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array())) {
                    // line 103
                    echo "          <p class=\"expiry-date hidden-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买截止日期: "), "html", null, true);
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()), "Y-m-d H:i"), "html", null, true);
                    echo "</p>
        ";
                }
                // line 105
                echo "
        ";
                // line 106
                if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array())) {
                    // line 107
                    echo "          <p class=\"expiry-date hidden-sm\">
            ";
                    // line 108
                    if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), null)) : (null)) == "date")) {
                        // line 109
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习有效期至: "), "html", null, true);
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array()), "Y-m-d H:i"), "html", null, true);
                        echo "
            ";
                    } else {
                        // line 111
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习有效期: "), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("天"), "html", null, true);
                        echo "
            ";
                    }
                    // line 113
                    echo "          </p>
        ";
                }
                // line 115
                echo "        <p class=\"discount-price\">
          <label>";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格"), "html", null, true);
                echo "</label>
          ";
                // line 117
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 117)->display(array_merge($context, array("shows" => array(0 => "price", 1 => "discount"))));
                // line 118
                echo "        </p>
        ";
                // line 119
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountId", array()) > 0)) {
                    // line 120
                    echo "          <p class=\"old-price hidden-sm\">
            <label>";
                    // line 121
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("原价"), "html", null, true);
                    echo "</label>
            ";
                    // line 122
                    $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 122)->display(array_merge($context, array("shows" => array(0 => "originPrice"))));
                    // line 123
                    echo "          </p>
          ";
                    // line 124
                    if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), null)) : (null))) {
                        // line 125
                        echo "            <p class=\"activity\">
              <label>";
                        // line 126
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("活动"), "html", null, true);
                        echo "</label>
              <span class=\"name\">";
                        // line 127
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), "name", array()), "html", null, true);
                        echo "</span>
              <span>
                <i class=\"es-icon es-icon-accesstime\"></i>
                <span id=\"discount-endtime-countdown\" class=\"text-muted\" data-remaintime=\"";
                        // line 130
                        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), "endTime", array()) - twig_date_format_filter($this->env, "now", "U")), "html", null, true);
                        echo "\"
                ></span>
              </span>
            </p>
          ";
                    }
                    // line 135
                    echo "        ";
                }
                // line 136
                echo "
      ";
            }
            // line 138
            echo "
    </div>

    ";
            // line 141
            if ((((( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array()), false)) : (false)) && (isset($context["member"]) ? $context["member"] : null)) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "student")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "levelId", array()) > 0)) && ((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) != "ok"))) {
                // line 142
                echo "      <div class=\"alert alert-danger\">
        ";
                // line 143
                if (((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "not_member")) {
                    // line 144
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您已经不是会员，不能学习此课程！"), "html", null, true);
                    echo "
          ";
                    // line 145
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        // line 146
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请重新"), "html", null, true);
                        echo "<a class=\"btn-link\" href=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip");
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开通会员"), "html", null, true);
                        echo "</a>
          ";
                    } else {
                        // line 148
                        echo "            ";
                        if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "joinedType", array()) == "course")) {
                            // line 149
                            echo "              <a class=\"btn-link js-exit-course\" data-url=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                            echo "\" data-go=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("返回课程首页"), "html", null, true);
                            echo "</a>
            ";
                        } elseif (($this->getAttribute(                        // line 150
(isset($context["member"]) ? $context["member"] : null), "joinedType", array()) == "classroom")) {
                            // line 151
                            echo "              <a class=\"btn-link js-exit-course\" data-url=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_exit", array("id" => $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "classroomId", array()))), "html", null, true);
                            echo "\" data-go=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "classroomId", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, ("退出" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name", "班级"))), "html", null, true);
                            echo "</a>
            ";
                        }
                        // line 153
                        echo "          ";
                    }
                    echo "！
        ";
                } elseif ((                // line 154
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "member_expired")) {
                    // line 155
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您的会员已过期，不能学习此课程，请先"), "html", null, true);
                    echo "<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_renew");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("续费"), "html", null, true);
                    echo "</a>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。"), "html", null, true);
                    echo "
        ";
                } elseif ((                // line 156
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "level_low")) {
                    // line 157
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员等级不够，不能学习此课程。请先"), "html", null, true);
                    echo "<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_upgrade");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("升级会员"), "html", null, true);
                    echo "</a>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 159
                    echo "          ";
                    if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "joinedType", array()) == "course")) {
                        // line 160
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("此课程已不支持会员免费学，请退出课程后重新购买。"), "html", null, true);
                        echo "
          ";
                    } elseif (($this->getAttribute(                    // line 161
(isset($context["member"]) ? $context["member"] : null), "joinedType", array()) == "classroom")) {
                        // line 162
                        echo "            ";
                        echo twig_escape_filter($this->env, (("此" . $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name", "班级")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程已不支持会员免费学，")), "html", null, true);
                        echo "<a class=\"btn-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_exit", array("id" => $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "classroomId", array()))), "html", null, true);
                        echo "\" data-go=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "classroomId", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ("退出" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name", "班级"))), "html", null, true);
                        echo "</a>
          ";
                    }
                    // line 164
                    echo "
        ";
                }
                // line 166
                echo "      </div>
    ";
            }
            // line 168
            echo "
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

    // line 172
    public function getstudent_num($__course__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 173
            echo "  <div class=\"student-num hidden-xs\">
    ";
            // line 174
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 175
                echo "      <i class=\"es-icon es-icon-people\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%studentNum%人", array("%studentNum%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()))), "html", null, true);
                echo "
      ";
                // line 176
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()) > 0)) {
                    // line 177
                    echo "        ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))) {
                        // line 178
                        echo "          <small class=\"hidden-sm text-sm\">(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名额已满"), "html", null, true);
                        echo ")</small>
        ";
                    } else {
                        // line 180
                        echo "          <small class=\"hidden-sm text-sm\">(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%maxStudentNum%名额", array("%maxStudentNum%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))), "html", null, true);
                        echo ")</small>
        ";
                    }
                    // line 182
                    echo "      ";
                }
                // line 183
                echo "    ";
            } else {
                // line 184
                echo "      <i class=\"es-icon es-icon-accesstime\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%lessonNum%课时", array("%lessonNum%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lessonNum", array()))), "html", null, true);
                echo "
    ";
            }
            // line 186
            echo "  </div>
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

    // line 192
    public function getfavorite_btn($__course__ = null, $__hasFavorited__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "hasFavorited" => $__hasFavorited__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 193
            echo "  ";
            $context["favoriteReward"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("favorite_reward");
            // line 194
            echo "  <li id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_unfavorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <a href=\"javascript:;\" class=\"color-primary\">
      ";
            // line 196
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("FavoriteReward") && (($this->getAttribute((isset($context["favoriteReward"]) ? $context["favoriteReward"] : null), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["favoriteReward"]) ? $context["favoriteReward"] : null), "enabled", array()), 0)) : (0)))) {
                // line 197
                echo "        ";
                $this->loadTemplate("FavoriteRewardBundle:Widget:unfavorite.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 197)->display($context);
                // line 198
                echo "      ";
            } else {
                // line 199
                echo "        <p><i class=\"es-icon es-icon-bookmark\"></i></p>
      ";
            }
            // line 201
            echo "      <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已收藏"), "html", null, true);
            echo "</p>
    </a>
  </li>

";
            // line 205
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("FavoriteReward") && (($this->getAttribute((isset($context["favoriteReward"]) ? $context["favoriteReward"] : null), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["favoriteReward"]) ? $context["favoriteReward"] : null), "enabled", array()), 0)) : (0)))) {
                // line 206
                echo "  <a href=\"#modal\" class=\"reward-modal hidden\" data-toggle=\"modal\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favorite_reward");
                echo "\" ><span class=\"\"></span></a>
";
            }
            // line 208
            echo "
<li id=\"favorite-btn\" data-url=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_favorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">
  <a href=\"javascript:;\">
    ";
            // line 211
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("FavoriteReward") && (($this->getAttribute((isset($context["favoriteReward"]) ? $context["favoriteReward"] : null), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["favoriteReward"]) ? $context["favoriteReward"] : null), "enabled", array()), 0)) : (0)))) {
                // line 212
                echo "      ";
                $this->loadTemplate("FavoriteRewardBundle:Widget:favorite.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 212)->display($context);
                // line 213
                echo "    ";
            } else {
                // line 214
                echo "      <p><i class=\"es-icon es-icon-bookmarkoutline\"></i></p>
      <p>";
                // line 215
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收藏"), "html", null, true);
                echo "</p>
    ";
            }
            // line 217
            echo "  </a>
</li>
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

    // line 221
    public function getshare_btn($__course__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 222
            echo "  <li>
    <span class=\"es-share top\">
      <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\">
        <p><i class=\"es-icon es-icon-share\"></i></p>
        <p>";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享"), "html", null, true);
            echo "</p>
      </a>
      ";
            // line 228
            $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 228)->display(array_merge($context, array("type" => "course")));
            // line 229
            echo "    </span>
  </li>
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

    // line 233
    public function getvip_btn($__userVipStatus__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "userVipStatus" => $__userVipStatus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 234
            echo "  ";
            if ((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null)) {
                // line 235
                echo "    <li class=\"color-warning icon-vip\">
      <p><i class=\"es-icon es-icon-crown\"></i></p>
      <p>";
                // line 237
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员"), "html", null, true);
                echo "</p>
    </li>
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

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  808 => 237,  804 => 235,  801 => 234,  789 => 233,  772 => 229,  770 => 228,  765 => 226,  759 => 222,  747 => 221,  730 => 217,  725 => 215,  722 => 214,  719 => 213,  716 => 212,  714 => 211,  705 => 209,  702 => 208,  696 => 206,  694 => 205,  686 => 201,  682 => 199,  679 => 198,  676 => 197,  674 => 196,  664 => 194,  661 => 193,  648 => 192,  632 => 186,  626 => 184,  623 => 183,  620 => 182,  614 => 180,  608 => 178,  605 => 177,  603 => 176,  598 => 175,  596 => 174,  593 => 173,  581 => 172,  564 => 168,  560 => 166,  556 => 164,  544 => 162,  542 => 161,  537 => 160,  534 => 159,  522 => 157,  520 => 156,  509 => 155,  507 => 154,  502 => 153,  492 => 151,  490 => 150,  481 => 149,  478 => 148,  468 => 146,  466 => 145,  461 => 144,  459 => 143,  456 => 142,  454 => 141,  449 => 138,  445 => 136,  442 => 135,  434 => 130,  428 => 127,  424 => 126,  421 => 125,  419 => 124,  416 => 123,  414 => 122,  410 => 121,  407 => 120,  405 => 119,  402 => 118,  400 => 117,  396 => 116,  393 => 115,  389 => 113,  380 => 111,  373 => 109,  371 => 108,  368 => 107,  366 => 106,  363 => 105,  356 => 103,  353 => 102,  351 => 101,  347 => 99,  344 => 98,  341 => 97,  338 => 96,  335 => 95,  329 => 93,  327 => 92,  324 => 91,  318 => 89,  312 => 87,  310 => 86,  305 => 85,  302 => 84,  299 => 83,  296 => 82,  291 => 79,  285 => 77,  279 => 75,  277 => 74,  273 => 73,  269 => 72,  266 => 71,  263 => 70,  257 => 67,  253 => 66,  250 => 65,  247 => 64,  245 => 63,  238 => 60,  234 => 59,  228 => 56,  221 => 52,  217 => 51,  210 => 47,  206 => 46,  202 => 44,  199 => 43,  185 => 42,  168 => 38,  164 => 36,  161 => 35,  157 => 33,  155 => 32,  152 => 31,  150 => 30,  143 => 28,  140 => 27,  132 => 23,  130 => 22,  127 => 21,  114 => 20,  109 => 232,  106 => 220,  103 => 191,  101 => 190,  97 => 188,  94 => 171,  91 => 41,  88 => 19,  80 => 17,  77 => 16,  70 => 15,  62 => 13,  59 => 12,  52 => 11,  50 => 10,  43 => 9,  40 => 8,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
