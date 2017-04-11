<?php

/* TopxiaWebBundle:Article/Part:detail-boy.html.twig */
class __TwigTemplate_4dce71ea6e19b875cdc3cb25d45be98fec01fc540608394dc4b630c0497d60ec extends Twig_Template
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
        echo "<div class=\"article-text\">
  ";
        // line 2
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array());
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-boy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
