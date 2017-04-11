<?php

/* TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig */
class __TwigTemplate_a76f15763e178ca085d0970a57d174499f40c97c0b66fd910b2502e772b07b6a extends Twig_Template
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
        $context["mobile"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isShowMobilePage();
        // line 2
        if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), true)) : (true)) == false) && ((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) != "ok"))) {
            // line 3
            echo "  ";
            if ((isset($context["courseVip"]) ? $context["courseVip"] : null)) {
                // line 4
                echo "    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员免费学"), "html", null, true);
                echo "<br/><br/>
  ";
            } else {
                // line 6
                echo "    ";
                if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
                    echo " 
      <span class=\"wap-buyer\">";
                    // line 7
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该课程为<br>限制课程");
                    echo "</span>
    ";
                } else {
                    // line 9
                    echo "      ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该课程为限制课程"), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请联系客服"), "html", null, true);
                    echo "
    ";
                }
                // line 11
                echo "  ";
            }
        } elseif (($this->getAttribute(        // line 12
(isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()) < twig_date_format_filter($this->env, "now", "U")))) {
            // line 13
            echo "  ";
            if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
                // line 14
                echo "     <span class=\"wap-buyer\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("超过购买<br>截止日期");
                echo "</span>
   ";
            } else {
                // line 15
                echo " 
     ";
                // line 16
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("超过购买截止日期<br>不允许加入和购买");
                echo "
   ";
            }
        } elseif (($this->getAttribute(        // line 18
(isset($context["course"]) ? $context["course"] : null), "status", array()) != "published")) {
            // line 19
            echo "  ";
            if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
                // line 20
                echo "    <span class=\"wap-buyer\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程还未<br>发布");
                echo "</span>
  ";
            } else {
                // line 21
                echo " 
    ";
                // line 22
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程还未发布<br>不允许加入和购买");
                echo "
  ";
            }
        } elseif ((($this->getAttribute(        // line 24
(isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()) > 0) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array())))) {
            // line 25
            echo "  ";
            if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
                // line 26
                echo "   <span class=\"wap-buyer\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("超过最大<br>学员人数");
                echo "</span>
  ";
            } else {
                // line 28
                echo "    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("超过最大学员人数<br>不允许加入和购买");
                echo "
  ";
            }
        } else {
            // line 31
            echo "  <a class=\"btn btn-primary btn-lg\"
    ";
            // line 32
            if (((_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.buy_fill_userinfo"), false) || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array()) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) != "approved"))) || $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("user_partner.avatar_alert"))) {
                // line 33
                echo "      href=\"#modal\"
      data-toggle=\"modal\"
      data-url=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                echo "\"
    ";
            } elseif ((            // line 36
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "ok")) {
                // line 37
                echo "      id=\"vip-join-course\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_become_use_member", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"
    ";
            } else {
                // line 39
                echo "      href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                echo "\"
    ";
            }
            // line 41
            echo "  >
    ";
            // line 42
            if (((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "ok")) {
                // line 43
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入学习"), "html", null, true);
                echo "
    ";
            } else {
                // line 45
                echo "      ";
                if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                    // line 46
                    echo "        ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买课程"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入学习"), "html", null, true);
                    }
                    echo "</a>
      ";
                } else {
                    // line 48
                    echo "        ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买课程"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入学习"), "html", null, true);
                    }
                    echo "</a>
      ";
                }
                // line 50
                echo "    ";
            }
            // line 51
            echo "  </a>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 51,  170 => 50,  160 => 48,  150 => 46,  147 => 45,  141 => 43,  139 => 42,  136 => 41,  130 => 39,  124 => 37,  122 => 36,  118 => 35,  114 => 33,  112 => 32,  109 => 31,  102 => 28,  96 => 26,  93 => 25,  91 => 24,  86 => 22,  83 => 21,  77 => 20,  74 => 19,  72 => 18,  67 => 16,  64 => 15,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  42 => 9,  37 => 7,  32 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
