<?php

/* TopxiaWebBundle:Course:Part/normal-header-layout.html.twig */
class __TwigTemplate_1fb014b5d1f00cfdc5931419be43b7903e4bd7730665caf3d784eddcd3025f26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
            'after_content' => array($this, 'block_after_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["mobile"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isShowMobilePage();
        // line 2
        echo "
<section class=\"course-detail-header ";
        // line 3
        echo twig_escape_filter($this->env, ((array_key_exists("layoutClass", $context)) ? (_twig_default_filter((isset($context["layoutClass"]) ? $context["layoutClass"] : null), "")) : ("")), "html", null, true);
        echo "\">
  <div class=\"container\">

    ";
        // line 6
        $this->displayBlock('before_content', $context, $blocks);
        // line 7
        echo "
    <div class=\"es-section clearfix ";
        // line 8
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            echo " es-mobile-section ";
        }
        echo "\">
      ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "
      ";
        // line 11
        if ((((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->hasPermission("admin_course_content_manage"))) {
            // line 12
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程管理"), "html", null, true);
            echo "\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 16
        echo "      
      ";
        // line 17
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), false)) : (false))) {
            // line 18
            echo "        ";
            if (((( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array()), false)) : (false)) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "student")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "joinedType", array()) == "course")) &&  !$this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()))) {
                // line 19
                echo "          ";
                if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "orderId", array())) {
                    // line 20
                    echo "            <a href=\"#modal\" class=\"btn btn-default setting hidden-xs hidden-sm\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                    echo "\">
              <i class=\"es-icon es-icon-exit\"></i>
            </a>
          ";
                } else {
                    // line 24
                    echo "            <a id=\"exit-course-learning\" class=\"course-exit-btn btn btn-default setting hidden-xs hidden-sm\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"  data-goto=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) != "student")) {
                        echo " disabled ";
                    }
                    echo ">
              <i class=\"es-icon es-icon-exit\"></i>
            </a>
          ";
                }
                // line 28
                echo "        ";
            } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "joinedType", array(), "array") == "groupSell")) {
                // line 29
                echo "          <a class=\"btn btn-default setting hidden-xs hidden-sm\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("组合购买课程不能退出"), "html", null, true);
                echo "\">
            <i class=\"hz-icon icon-exit\"></i>
          </a>
        ";
            }
            // line 33
            echo "      ";
        }
        // line 34
        echo "    </div>
  </div>
</section>

";
        // line 38
        $this->displayBlock('after_content', $context, $blocks);
        // line 39
        echo "

";
    }

    // line 6
    public function block_before_content($context, array $blocks = array())
    {
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
    }

    // line 38
    public function block_after_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 38,  127 => 9,  122 => 6,  116 => 39,  114 => 38,  108 => 34,  105 => 33,  97 => 29,  94 => 28,  80 => 24,  72 => 20,  69 => 19,  66 => 18,  64 => 17,  61 => 16,  51 => 12,  49 => 11,  46 => 10,  44 => 9,  38 => 8,  35 => 7,  33 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
