<?php

/* TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig */
class __TwigTemplate_485f8c579c3c5a987ecd757081614c58b6f3f66cc65318bbb8ad433215dd394c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-layout.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 1);
        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 2);
        // line 4
        $context["layoutClass"] = "before";
        // line 5
        $context["mobile"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isShowMobilePage();
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_before_content($context, array $blocks = array())
    {
        // line 8
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("首页"), "html", null, true);
        echo "</a></li>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</li>
  </ol>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
  ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "picture", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["previewLesson"]) ? $context["previewLesson"] : null)), "method"), "html", null, true);
        echo "
  ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "info", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["member"]) ? $context["member"] : null), 2 => (isset($context["userVipStatus"]) ? $context["userVipStatus"] : null)), "method"), "html", null, true);
        echo "
  <div class=\"course-operation clearfix\">
    ";
        // line 22
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 23
            echo "      <span class=\"text-sm es-mobile-teacher\">
      ";
            // line 24
            $context["teacherId"] = (($this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array(), "any", false, true), 0, array(), "array"), 0)) : (0));
            // line 25
            echo "      ";
            if ((isset($context["teacherId"]) ? $context["teacherId"] : null)) {
                // line 26
                echo "        ";
                $context["teacher"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("User", array("userId" => (isset($context["teacherId"]) ? $context["teacherId"] : null)));
                // line 27
                echo "      ";
            }
            // line 28
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "暂无老师")) : ("暂无老师")), "html", null, true);
            echo "
      </span>
    ";
        }
        // line 31
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "student_num", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "
    <ul class=\"course-data clearfix ";
        // line 32
        if (((isset($context["courseVip"]) ? $context["courseVip"] : null) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == "0"))) {
            echo "active";
        }
        echo "\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "favorite_btn", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)), "method"), "html", null, true);
        echo "
      ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "share_btn", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "
      ";
        // line 35
        if (((isset($context["courseVip"]) ? $context["courseVip"] : null) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == "0"))) {
            // line 36
            echo "      ";
            if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
                // line 37
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "vip_btn", array(0 => (isset($context["userVipStatus"]) ? $context["userVipStatus"] : null)), "method"), "html", null, true);
                echo "
      ";
            } else {
                // line 39
                echo "          <li class=\"hidden-xs color-warning icon-vip\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员课程"), "html", null, true);
                echo "\" data-content=\"";
                $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 39)->display($context);
                echo "\">
            <i class=\"es-icon es-icon-crown\"></i><br>
            ";
                // line 41
                $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 41)->display(array_merge($context, array("userVipStatus" => (isset($context["userVipStatus"]) ? $context["userVipStatus"] : null), "level" => (isset($context["courseVip"]) ? $context["courseVip"] : null))));
                // line 42
                echo "          </li>
      ";
            }
            // line 44
            echo "      ";
        }
        // line 45
        echo "    </ul>
    <div class=\"buy\">
      ";
        // line 47
        if ((((array_key_exists("source", $context)) ? (_twig_default_filter((isset($context["source"]) ? $context["source"] : null), "")) : ("")) == "classroom")) {
            // line 48
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Part/Course:classroomInfo", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
            echo "
      ";
        } else {
            // line 50
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 50)->display($context);
            // line 51
            echo "      ";
        }
        // line 52
        echo "    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 52,  171 => 51,  168 => 50,  162 => 48,  160 => 47,  156 => 45,  153 => 44,  149 => 42,  147 => 41,  139 => 39,  133 => 37,  130 => 36,  128 => 35,  124 => 34,  120 => 33,  114 => 32,  109 => 31,  102 => 28,  99 => 27,  96 => 26,  93 => 25,  91 => 24,  88 => 23,  86 => 22,  81 => 20,  77 => 19,  74 => 18,  71 => 17,  63 => 13,  52 => 11,  48 => 10,  42 => 9,  39 => 8,  36 => 7,  32 => 1,  30 => 5,  28 => 4,  26 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
