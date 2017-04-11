<?php

/* ClassroomBundle:Classroom:content-layout.html.twig */
class __TwigTemplate_7a40be195a28e02635c6b6626dc8cbf35e4506ecffd41bb7bbfa706d47c69fac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'side' => array($this, 'block_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "ClassroomBundle:Classroom:layout.html.twig")) : ("ClassroomBundle:Classroom:layout.html.twig")), "ClassroomBundle:Classroom:content-layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_keywords($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomBundle:Classroom:keywords", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("GroupSell") &&  !(isset($context["member"]) ? $context["member"] : null))) {
            // line 11
            echo "  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("GroupSellBundle:GroupSell:showGroup", array("type" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
";
        }
        // line 13
        echo "<div class=\"class-detail row\" id=\"detail-content\">
  <div class=\"col-lg-9 col-md-8 class-detail-main\">

    ";
        // line 16
        $this->loadTemplate("TopxiaWebBundle:Announcement:announcement-block.html.twig", "ClassroomBundle:Classroom:content-layout.html.twig", 16)->display(array_merge($context, array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")));
        // line 17
        echo "
    <section class=\"es-section\">
      ";
        // line 19
        if (array_key_exists("nav", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomBundle:Classroom:dashboard", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null), "nav" => (isset($context["nav"]) ? $context["nav"] : null), "member" => (isset($context["member"]) ? $context["member"] : null))));
            echo "
      ";
        }
        // line 22
        echo "      <div class=\"class-detail-content\">
        ";
        // line 23
        $this->displayBlock('main', $context, $blocks);
        // line 25
        echo "      </div>
    </section>
  </div>

  <aside class=\"col-lg-3 col-md-4 class-sidebar\">
    ";
        // line 30
        $this->displayBlock('side', $context, $blocks);
        // line 46
        echo "  </aside>

  ";
        // line 48
        if ( !((array_key_exists("canLook", $context)) ? (_twig_default_filter((isset($context["canLook"]) ? $context["canLook"] : null), false)) : (false))) {
            // line 49
            echo "    <input type=\"hidden\" name=\"access-intercept-check\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_canview", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
    ";
            // line 50
            $this->loadTemplate("ClassroomBundle:ClassroomThread:access-intercept-modal.html.twig", "ClassroomBundle:Classroom:content-layout.html.twig", 50)->display($context);
            // line 51
            echo "  ";
        }
        // line 52
        echo "</div>

  ";
        // line 54
        $this->loadTemplate("TopxiaWebBundle:Common:weixin-share.html.twig", "ClassroomBundle:Classroom:content-layout.html.twig", 54)->display(array_merge($context, array("title" => $this->getAttribute(        // line 55
(isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "desc" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 56
(isset($context["classroom"]) ? $context["classroom"] : null), "about", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 57
(isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFurl($this->getAttribute(        // line 58
(isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "course.png"))));
        // line 60
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Common:consult-supplier.html.twig", "ClassroomBundle:Classroom:content-layout.html.twig", 60)->display($context);
    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
        // line 24
        echo "        ";
    }

    // line 30
    public function block_side($context, array $blocks = array())
    {
        // line 31
        echo "      ";
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("ClassroomPlan")) {
            // line 32
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomPlanBundle:ClassroomPlan:todayUserTaskBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
      ";
        }
        // line 34
        echo "
      ";
        // line 35
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true)) {
            // line 36
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomBundle:Classroom:signPage", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
      ";
        }
        // line 38
        echo "      
      ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomBundle:Classroom:teachersBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "

      ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomBundle:Classroom:latestMembersBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "

      ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomBundle:Classroom:classroomStatusBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "
      
    ";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  163 => 41,  158 => 39,  155 => 38,  149 => 36,  147 => 35,  144 => 34,  138 => 32,  135 => 31,  132 => 30,  128 => 24,  125 => 23,  120 => 60,  118 => 58,  117 => 57,  116 => 56,  115 => 55,  114 => 54,  110 => 52,  107 => 51,  105 => 50,  100 => 49,  98 => 48,  94 => 46,  92 => 30,  85 => 25,  83 => 23,  80 => 22,  74 => 20,  72 => 19,  68 => 17,  66 => 16,  61 => 13,  55 => 11,  53 => 10,  50 => 9,  47 => 8,  41 => 6,  34 => 3,  31 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
