<?php

/* ClassroomBundle:Classroom:classroom-header.html.twig */
class __TwigTemplate_d0bb09e4a769e0bf5a834496624fd5855db6af0ab5315e015a066456f1cb5c3f extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 1);
        // line 2
        echo "
<section class=\"class-header before\">
  <div class=\"container\">
    ";
        // line 5
        if (((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()), "0")) : ("0")) == "1")) {
            // line 6
            echo "      <div class=\"alert alert-warning\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您的退款申请已提交，请等待管理员的处理。"), "html", null, true);
            echo "
        <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_cancel_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消退款，继续学习！"), "html", null, true);
            echo "</button>
      </div>
    ";
        }
        // line 11
        echo "
    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("首页"), "html", null, true);
        echo "</a></li>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</li>
    </ol>
    
    <div class=\"class-header-mian\">
      <div class=\"class-bg-layer\"></div>
      <div class=\"class-header-bg clearfix\">
        <div class=\"class-img\">
          <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "classroom.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
          </a>
          ";
        // line 27
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "closed")) {
            // line 28
            echo "            <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
            echo "</span>
          ";
        }
        // line 30
        echo "        </div>
        <div class=\"class-info\">
          <h2 class=\"title\">
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "
            <span class=\"es-qrcode top\" data-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_qrcode", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("扫二维码继续学习"), "html", null, true);
        echo "
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("二维码时效为半小时"), "html", null, true);
        echo "
              </span>
            </span>
          </h2>
          <div class=\"metas\">
            <div class=\"score\">
              ";
        // line 45
        echo $context["web_macro"]->getstar($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "rating", array()));
        echo "
              <span>(";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "ratingNum", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价"), "html", null, true);
        echo ")</span>
            </div>
            <div class=\"price fsxl\">
              ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格："), "html", null, true);
        echo " 
              <span>
                ";
        // line 51
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
            // line 52
            echo "                    ";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                // line 53
                echo "                   ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
                echo "
                    ";
            } else {
                // line 55
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                echo "
                    ";
            }
            // line 57
            echo "                ";
        } else {
            // line 58
            echo "                  ";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                // line 59
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
                echo "
                  ";
            } else {
                // line 61
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                echo "
                  ";
            }
            // line 63
            echo "                ";
        }
        // line 64
        echo "              </span>
            </div>
            <div class=\"fsxl hidden-sm mts mbl\">
              ";
        // line 67
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "date")) {
            // line 68
            echo "                <span class=\"mrm\">班级有效期：</span><span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryValue", array()), "Y-n-d"), "html", null, true);
            echo "</span>
              ";
        } elseif (($this->getAttribute(        // line 69
(isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "days")) {
            // line 70
            echo "                <span class=\"mrm\">班级有效天数：</span><span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryValue", array()), "html", null, true);
            echo "天</span>
              ";
        }
        // line 72
        echo "            </div>
          <ul class=\"class-data hidden-sm clearfix ";
        // line 73
        if ((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null)) {
            echo "active";
        }
        echo "\">
            <li>
              <p><i class=\"es-icon es-icon-person\"></i></p>
              <p>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array())), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <p><i class=\"es-icon es-icon-book\"></i></p>
              <p>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程"), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <span class=\"es-share top\">
                <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\"  aria-labelledby=\"dropdownMenu1\">
                  <p><i class=\"es-icon es-icon-share\"></i></p>
                  <p>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享"), "html", null, true);
        echo "</p>
                </a>
                ";
        // line 88
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 88)->display(array_merge($context, array("type" => "classroom")));
        // line 89
        echo "              </span>
            </li>
          ";
        // line 91
        if (((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null) && $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()))) {
            // line 92
            echo "            <li class=\"hidden-xs color-warning icon-vip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员%name%", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\" data-content=\"";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 92)->display(array_merge($context, array("courseVip" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null))));
            echo "\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员%name%", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员%name%", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\">
              <i class=\"es-icon es-icon-crown\"></i><br>
                ";
            // line 94
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 94)->display(array_merge($context, array("userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), "level" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null))));
            // line 95
            echo "            </li>
          ";
        }
        // line 97
        echo "          </ul>

          <div class=\"bottom-metas clearfix\">
            <div class=\"class-serve hidden-sm hidden-xs\">
              <div class=\"serve-frame\">
                ";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("承诺服务"), "html", null, true);
        echo "
              </div>
              ";
        // line 104
        $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 104)->display(array_merge($context, array("services" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "service", array()))));
        // line 105
        echo "            </div>

            ";
        // line 107
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) != "closed"))) {
            // line 108
            echo "              <div class=\"btn-buy\">
                ";
            // line 109
            $this->loadTemplate("ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 109)->display($context);
            // line 110
            echo "                
              </div>
            ";
        }
        // line 113
        echo "          </div>
        </div>

      ";
        // line 116
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Manage") && $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->hasPermission("admin_classroom_content_manage"))) {
            // line 117
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%管理", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 121
        echo "
      </div>
    </div>
  </div>
</section>            

";
        // line 127
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("ClassroomPlan")) {
            // line 128
            echo "  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomPlanBundle:ClassroomPlan:joinPlanBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
";
        }
        // line 129
        echo "    
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 129,  325 => 128,  323 => 127,  315 => 121,  305 => 117,  303 => 116,  298 => 113,  293 => 110,  291 => 109,  288 => 108,  286 => 107,  282 => 105,  280 => 104,  275 => 102,  268 => 97,  264 => 95,  262 => 94,  250 => 92,  248 => 91,  244 => 89,  242 => 88,  237 => 86,  226 => 80,  217 => 76,  209 => 73,  206 => 72,  200 => 70,  198 => 69,  193 => 68,  191 => 67,  186 => 64,  183 => 63,  177 => 61,  170 => 59,  167 => 58,  164 => 57,  158 => 55,  150 => 53,  147 => 52,  145 => 51,  140 => 49,  133 => 46,  129 => 45,  120 => 39,  116 => 38,  109 => 34,  105 => 33,  100 => 30,  94 => 28,  92 => 27,  83 => 25,  79 => 24,  68 => 17,  57 => 15,  53 => 14,  47 => 13,  43 => 11,  35 => 8,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
