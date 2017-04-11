<?php

/* TopxiaWebBundle:Article:list.html.twig */
class __TwigTemplate_60a6f1beaf859d35b5b8fe8b8aee553b813a9cfd4e47005db164b7efc856248f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Article:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["bodyClass"] = "artcile-cat-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoTitle", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoTitle", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoKeyword", array()), "html", null, true);
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoDesc", array()), "html", null, true);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
  ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Article:categoryNav", array("categoryCode" => (isset($context["categoryCode"]) ? $context["categoryCode"] : null))));
        echo "

  <div class=\"article-list-body row\">
    <div class=\"col-md-8 article-list-main\">
      ";
        // line 18
        $this->loadTemplate("TopxiaWebBundle:Article/Part:list-main.html.twig", "TopxiaWebBundle:Article:list.html.twig", 18)->display($context);
        // line 19
        echo "    </div>
    
    <aside class=\"col-md-4 article-sidebar\">
      ";
        // line 22
        $this->loadTemplate("TopxiaWebBundle:Article/Widget:sidebar.html.twig", "TopxiaWebBundle:Article:list.html.twig", 22)->display($context);
        // line 23
        echo "    </aside>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  78 => 22,  73 => 19,  71 => 18,  64 => 14,  61 => 13,  58 => 12,  52 => 7,  46 => 5,  34 => 3,  30 => 1,  28 => 10,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
