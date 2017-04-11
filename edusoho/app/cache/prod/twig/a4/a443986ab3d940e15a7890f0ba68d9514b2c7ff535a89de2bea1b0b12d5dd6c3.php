<?php

/* TopxiaWebBundle:Course:lesson-list.html.twig */
class __TwigTemplate_0895efd23985c965cc94e1789d953e0e512234947aa1ad2ceaf6524ed65f3788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:Course:lesson-list.html.twig", 1);
        $this->blocks = array(
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tab"] = "lesson-list";
        // line 5
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("course/show");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_course_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"course-detail-content\">

    <div class=\"es-piece\">
      <div class=\"piece-body\">
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:CourseLesson:list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "member" => (isset($context["member"]) ? $context["member"] : null), "previewUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))))));
        echo "
        
      </div>
    </div>
    
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:lesson-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
