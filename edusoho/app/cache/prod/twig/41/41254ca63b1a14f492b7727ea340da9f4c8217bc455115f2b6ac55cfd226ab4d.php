<?php

/* TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig */
class __TwigTemplate_54270cdd2a665c661089693f9e15e4a27ffb7b61f74de3f4484f084c4ad10a5f extends Twig_Template
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
        $context["consult"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult");
        // line 2
        if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array()))) {
            // line 3
            echo "  <li class=\"popover-btn bar-weixin-btn\" data-container=\".bar-weixin-btn\" data-content-element=\"#bar-weixin-content\">
    <a><i class=\"es-icon es-icon-weixin\"></i></a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
