<?php

/* TopxiaWebBundle:Default:message.html.twig */
class __TwigTemplate_b023b62fba6236507fab99e47ae666b3186052ebb60e76c80258a0e859a77c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Default:message.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["typeTitles"] = array("info" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提示信息"), "warning" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("警告信息"), "error" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("错误提示"));
        // line 5
        $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["typeTitles"]) ? $context["typeTitles"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"))) : ($this->getAttribute((isset($context["typeTitles"]) ? $context["typeTitles"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array")));
        // line 9
        $context["script_controller"] = "default/message";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_head_scripts($context, array $blocks = array())
    {
        echo ((array_key_exists("script", $context)) ? (_twig_default_filter((isset($context["script"]) ? $context["script"] : null), "")) : (""));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
<div id=\"page-message-container\" class=\"page-message-container\" data-goto=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["goto"]) ? $context["goto"] : null), "html", null, true);
        echo "\" data-duration=";
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : null), "html", null, true);
        echo ">
  <div class=\"page-message-panel\">
    <div class=\"page-message-heading\">
      <h2 class=\"page-message-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"page-message-body\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) ? $context["message"] : null), "")) : (""))), "html", null, true);
        echo "</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  65 => 16,  57 => 13,  54 => 12,  51 => 11,  45 => 8,  37 => 7,  33 => 1,  31 => 9,  29 => 5,  27 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
