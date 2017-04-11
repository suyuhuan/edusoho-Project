<?php

/* TopxiaWebBundle:Course:reviews.html.twig */
class __TwigTemplate_7787808ffbf99e3db66d59dae2d993104226450e7a31be038bf5b4240d966daf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:Course:reviews.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $context["thread"] = ((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null));
        // line 7
        $context["tab"] = "review";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_course_main($context, array $blocks = array())
    {
        // line 10
        echo "
\t";
        // line 11
        $context["goto"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
        // line 12
        echo "\t";
        $context["canAccess"] = ((((isset($context["member"]) ? $context["member"] : null) && twig_in_filter("teacher", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) || twig_in_filter("ROLE_SUPER_ADMIN", (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array()), "")) : ("")))) || twig_in_filter("ROLE_ADMIN", (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array()), "")) : (""))));
        // line 13
        echo "\t
  ";
        // line 14
        $this->loadTemplate("TopxiaWebBundle:Review:Widget/list.html.twig", "TopxiaWebBundle:Course:reviews.html.twig", 14)->display($context);
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  54 => 14,  51 => 13,  48 => 12,  46 => 11,  43 => 10,  40 => 9,  34 => 5,  30 => 1,  28 => 7,  26 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
