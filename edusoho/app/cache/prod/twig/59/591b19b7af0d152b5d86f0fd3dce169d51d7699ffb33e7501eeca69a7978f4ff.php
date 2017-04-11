<?php

/* TopxiaWebBundle:OpenCourse:explore.html.twig */
class __TwigTemplate_92f7597b2cd581edc1a4fbb9af8332bc776036450bae985aebd9f26a958243d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:OpenCourse:explore.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bodyClass"] = "bg-blank open-course-list";
        // line 4
        $context["mobile"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isShowMobilePage();
        // line 5
        $context["siteNav"] = "open/course/explore";
        // line 6
        $context["script_controller"] = "open-course/open-course-explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo " 公开课 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_top_content($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        公开课列表
      </div>
      <div class=\"more\">
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore");
        echo "\">
          ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看课程"), "html", null, true);
        echo "
        </a>
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore");
        echo "\">
          ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看班级"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
  </div>
  ";
        // line 25
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 26
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Course:search-mobile.html.twig", "TopxiaWebBundle:OpenCourse:explore.html.twig", 26)->display($context);
            // line 27
            echo "  ";
        }
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "  <div class=\"open-course-list open-course-list-section\">
     <div class=\"course-list\">
      <div class=\"row\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 34
            echo "          <div class=\"col-lg-4 col-md-4 col-xs-6\">
            ";
            // line 35
            $this->loadTemplate("TopxiaWebBundle:OpenCourse/Widget:open-course-grid.html.twig", "TopxiaWebBundle:OpenCourse:explore.html.twig", 35)->display($context);
            // line 36
            echo "          </div>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "      </div>
    </div>
   ";
        // line 85
        echo "    ";
        if ( !(isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 86
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
    ";
        }
        // line 88
        echo "  </div>
";
    }

    // line 91
    public function block_bottom($context, array $blocks = array())
    {
        // line 92
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Default:Mobile/footer-tool-bar.html.twig", "TopxiaWebBundle:OpenCourse:explore.html.twig", 92)->display(array_merge($context, array("mobile_tool_bar" => "course")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourse:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 92,  152 => 91,  147 => 88,  141 => 86,  138 => 85,  134 => 38,  119 => 36,  117 => 35,  114 => 34,  97 => 33,  92 => 30,  89 => 29,  84 => 27,  81 => 26,  79 => 25,  71 => 20,  67 => 19,  62 => 17,  58 => 16,  50 => 10,  47 => 9,  40 => 8,  36 => 1,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
