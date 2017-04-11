<?php

/* TopxiaWebBundle:Article:index.html.twig */
class __TwigTemplate_97ac89133ca1025e5b9dd090877dc2cf595eaf587fdba2087655e756c4851460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Article:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["bodyClass"] = "artcile-list-page";
        // line 6
        $context["script_controller"] = "article/list.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%article_name%频道", array("%article_name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("article.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资讯")))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
  <div class=\"es-tabs article-list-header\">
    <div class=\"tab-header\">
      ";
        // line 12
        $this->loadTemplate("TopxiaWebBundle:Article/Part:list-header-nav.html.twig", "TopxiaWebBundle:Article:index.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
  </div>

  <!-- 资讯头部 -->
  ";
        // line 17
        $this->loadTemplate("TopxiaWebBundle:Article/Part:list-header.html.twig", "TopxiaWebBundle:Article:index.html.twig", 17)->display($context);
        // line 18
        echo "
  <div class=\"article-list-body row\">
    <!-- list主内容-->
    <div class=\"col-md-8 article-list-main\">
      ";
        // line 22
        $this->loadTemplate("TopxiaWebBundle:Article/Part:list-main.html.twig", "TopxiaWebBundle:Article:index.html.twig", 22)->display(array_merge($context, array("articles" => (isset($context["latestArticles"]) ? $context["latestArticles"] : null))));
        // line 23
        echo "    </div>

    <aside class=\"col-md-4 article-sidebar\">
      ";
        // line 26
        $this->loadTemplate("TopxiaWebBundle:Article/Widget:sidebar.html.twig", "TopxiaWebBundle:Article:index.html.twig", 26)->display($context);
        // line 27
        echo "    </aside>
  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  73 => 26,  68 => 23,  66 => 22,  60 => 18,  58 => 17,  52 => 13,  50 => 12,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
