<?php

/* ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig */
class __TwigTemplate_158b57bbba50384fcc1ea35e15ac27d5ccbb5f09f0e2b015d4537879de92ed0f extends Twig_Template
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
        if ((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "date") && (twig_date_converter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryValue", array())) < twig_date_converter($this->env)))) {
            // line 2
            echo "  <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\">
  ";
            // line 3
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                // line 4
                echo "    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已超过有效期，无法购买"), "html", null, true);
                echo "
  ";
            } else {
                // line 6
                echo "    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已超过有效期，无法加入"), "html", null, true);
                echo "
  ";
            }
            // line 8
            echo "  </button>
";
        } else {
            // line 10
            echo "  ";
            $context["isAuditor"] = ((array_key_exists("isAuditor", $context)) ? (_twig_default_filter((isset($context["isAuditor"]) ? $context["isAuditor"] : null), false)) : (false));
            // line 11
            echo "  ";
            if (_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.buy_fill_userinfo"), false)) {
                // line 12
                echo "    ";
                if (((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "ok")) {
                    // line 13
                    echo "      <a  class=\"btn btn-primary btn-lg\"  href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                    echo "</a>
    ";
                } else {
                    // line 15
                    echo "      ";
                    if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                        // line 16
                        echo "        ";
                        if ( !(isset($context["isAuditor"]) ? $context["isAuditor"] : null)) {
                            // line 17
                            echo "          <a class=\"btn btn-link\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_become_auditor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("进去逛逛"), "html", null, true);
                            echo "</a>
        ";
                        }
                        // line 19
                        echo "        <a class=\"btn btn-primary btn-lg\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入购买"), "html", null, true);
                        echo "</a>
      ";
                    } else {
                        // line 21
                        echo "        <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该%name%无法在线购买，若需帮助请联系客服", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无法购买"), "html", null, true);
                        echo "</button>
      ";
                    }
                    // line 23
                    echo "    ";
                }
                // line 24
                echo "  ";
            } else {
                // line 25
                echo "    ";
                if ((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0) && (( !(isset($context["canFreeJoin"]) ? $context["canFreeJoin"] : null) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "vipLevelId", array()) == 0)) || twig_in_filter((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), array(0 => "not_member", 1 => "not_login", 2 => "member_expired", 3 => "level_low"))))) {
                    // line 26
                    echo "      ";
                    if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                        // line 27
                        echo "        ";
                        if ( !(isset($context["isAuditor"]) ? $context["isAuditor"] : null)) {
                            // line 28
                            echo "          <a class=\"btn btn-link\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_become_auditor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("进去逛逛"), "html", null, true);
                            echo "</a>
        ";
                        }
                        // line 30
                        echo "        <a class=\"btn btn-primary btn-lg\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入购买"), "html", null, true);
                        echo "</a>
      ";
                    } else {
                        // line 32
                        echo "        <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该%name%无法在线购买，若需帮助请联系客服", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), "班级"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无法购买"), "html", null, true);
                        echo "</button>
      ";
                    }
                    // line 34
                    echo "    ";
                } elseif (twig_in_filter((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), array(0 => "not_member", 1 => "member_expired"))) {
                    // line 35
                    echo "      <a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_buy");
                    echo "\"  class=\"btn btn-primary btn-lg\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                    echo "</a>

    ";
                } elseif ((                // line 37
(isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "level_low")) {
                    // line 38
                    echo "      <a  class=\"btn btn-primary btn-lg\"  href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_upgrade", array("level" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "id", array()))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                    echo "</a>

    ";
                } elseif ((                // line 40
(isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "ok")) {
                    // line 41
                    echo "      <a  class=\"btn btn-primary btn-lg\"  href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_vip_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%memberLevel%，免费学", array("%memberLevel%" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()))), "html", null, true);
                    echo "</a>

    ";
                } else {
                    // line 44
                    echo "      ";
                    if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                        // line 45
                        echo "        <a  class=\"btn btn-primary btn-lg\"  href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                        echo "\"
          ";
                        // line 46
                        if ((((isset($context["canFreeJoin"]) ? $context["canFreeJoin"] : null) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0))) {
                            // line 47
                            echo "          data-toggle=\"tooltip\"
          data-placement=\"top\"
          title=\"";
                            // line 49
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您之前已购买了本%name%的所有收费课程，可免费学习！", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
                            echo "\"
          ";
                        }
                        // line 51
                        echo "        >";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费加入"), "html", null, true);
                        echo "</a>
      ";
                    } else {
                        // line 53
                        echo "      <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该%name%无法在线购买，若需帮助请联系客服", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无法购买"), "html", null, true);
                        echo "</button>
      ";
                    }
                    // line 55
                    echo "    ";
                }
                // line 56
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 56,  193 => 55,  185 => 53,  179 => 51,  174 => 49,  170 => 47,  168 => 46,  163 => 45,  160 => 44,  151 => 41,  149 => 40,  141 => 38,  139 => 37,  131 => 35,  128 => 34,  120 => 32,  112 => 30,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  81 => 21,  73 => 19,  65 => 17,  62 => 16,  59 => 15,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  38 => 8,  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
