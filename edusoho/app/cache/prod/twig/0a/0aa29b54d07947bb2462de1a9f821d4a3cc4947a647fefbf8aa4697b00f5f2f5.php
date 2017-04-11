<?php

/* TopxiaWebBundle:Course:Part/normal-nav.html.twig */
class __TwigTemplate_1546f45003a88a7f8fe2035be11446f9ee6e8131f6e52e8cd94b73a35ba78d27 extends Twig_Template
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
        $context["tab"] = ((array_key_exists("tab", $context)) ? (_twig_default_filter((isset($context["tab"]) ? $context["tab"] : null), null)) : (null));
        // line 2
        $context["previewAs"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()));
        // line 3
        $context["courseRelatedData"] = _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("CourseRelatedData", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), array());
        // line 4
        $context["mobile"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isShowMobilePage();
        // line 5
        echo "
<div class=\"nav-btn-tab\">
  <ul class=\"nav nav-tabs ";
        // line 7
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            echo " es-mobile-nav ";
        }
        echo "\" role=\"tablist\">
    ";
        // line 8
        if ( !(isset($context["member"]) ? $context["member"] : null)) {
            // line 9
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程概览"), "html", null, true);
            echo "</a></li>
      <li role=\"presentation\" ";
            // line 10
            if (((isset($context["tab"]) ? $context["tab"] : null) == "lesson-list")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_lesson_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_lesson_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时列表"), "html", null, true);
            echo "
      ";
            // line 11
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->canTryLook($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()))) {
                // line 12
                echo "        <span class=\"badge badge-primary\">试看</span>
      ";
            }
            // line 14
            echo "      </a></li>
      <li role=\"presentation\" ";
            // line 15
            if (((isset($context["tab"]) ? $context["tab"] : null) == "review")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价"), "html", null, true);
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      ";
            // line 17
            if ( !(isset($context["mobile"]) ? $context["mobile"] : null)) {
                // line 18
                echo "        <li role=\"presentation\" ";
                if (((isset($context["tab"]) ? $context["tab"] : null) == "note")) {
                    echo "class=\"active\"";
                }
                echo "><a ";
                if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                    echo "\"";
                } else {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("笔记"), "html", null, true);
                if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array())) {
                    echo " <small class=\"text-muted\">( ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array()), "html", null, true);
                    echo " )</small>";
                }
                echo "</a></li>
      ";
            }
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "      <li role=\"presentation\" class=\"";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "overview")) {
                echo "active";
            }
            if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
                echo " navs ";
            }
            echo "\"><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时列表"), "html", null, true);
            echo "</a></li>
      ";
            // line 22
            if ( !(isset($context["mobile"]) ? $context["mobile"] : null)) {
                // line 23
                echo "        <li role=\"presentation\" ";
                if (((isset($context["tab"]) ? $context["tab"] : null) == "thread")) {
                    echo "class=\"active\"";
                }
                echo "><a ";
                if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                    echo "\"";
                } else {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("讨论区"), "html", null, true);
                if ($this->getAttribute((isset($context["courseRelatedData"]) ? $context["courseRelatedData"] : null), "threadNum", array())) {
                    echo " <small class=\"text-muted\">( ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseRelatedData"]) ? $context["courseRelatedData"] : null), "threadNum", array()), "html", null, true);
                    echo " )</small>";
                }
                echo "</a></li>
        <li role=\"presentation\" ";
                // line 24
                if (((isset($context["tab"]) ? $context["tab"] : null) == "material")) {
                    echo "class=\"active\"";
                }
                echo "><a ";
                if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                    echo "\"";
                } else {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资料区"), "html", null, true);
                echo "
      ";
                // line 25
                if ($this->getAttribute((isset($context["courseRelatedData"]) ? $context["courseRelatedData"] : null), "materialNum", array())) {
                    echo " <small class=\"text-muted\">( ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseRelatedData"]) ? $context["courseRelatedData"] : null), "materialNum", array()), "html", null, true);
                    echo " )</small>";
                }
                echo "</a></li>
        <li role=\"presentation\" ";
                // line 26
                if (((isset($context["tab"]) ? $context["tab"] : null) == "review")) {
                    echo "class=\"active\"";
                }
                echo "><a ";
                if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                    echo "\"";
                } else {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价"), "html", null, true);
                if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array())) {
                    echo " <small class=\"text-muted\">( ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
                    echo " )</small>";
                }
                echo "</a>
        </li>
        <li role=\"presentation\" ";
                // line 28
                if (((isset($context["tab"]) ? $context["tab"] : null) == "note")) {
                    echo "class=\"active\"";
                }
                echo "><a ";
                if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                    echo "\"";
                } else {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("笔记"), "html", null, true);
                if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array())) {
                    echo " <small class=\"text-muted\">( ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array()), "html", null, true);
                    echo " )</small>";
                }
                echo "</a>
        </li>
        <li role=\"presentation\" ";
                // line 30
                if (((isset($context["tab"]) ? $context["tab"] : null) == "info")) {
                    echo "class=\"active\"";
                }
                echo "><a ";
                if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                    echo "\"";
                } else {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("概览"), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 32
            echo "    ";
        }
        // line 33
        echo "  </ul>

  ";
        // line 35
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == 0) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()) == 0)) && ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array()), false)) : (false)) || ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher")))) {
            // line 36
            echo "  <div class=\"btnbar hidden-xs\">
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_add", array("targetType" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">
        <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
        ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公告"), "html", null, true);
            echo "
      </a>
  </div>
  ";
        }
        // line 43
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 43,  297 => 39,  292 => 37,  289 => 36,  287 => 35,  283 => 33,  280 => 32,  261 => 30,  237 => 28,  213 => 26,  205 => 25,  187 => 24,  163 => 23,  161 => 22,  139 => 21,  136 => 20,  111 => 18,  109 => 17,  85 => 15,  82 => 14,  78 => 12,  76 => 11,  58 => 10,  39 => 9,  37 => 8,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
