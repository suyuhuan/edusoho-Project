<?php

/* TopxiaWebBundle:Course:search-mobile.html.twig */
class __TwigTemplate_1c0f9fe578d2f203d145fa2e38e4801445ee283273e10e417f633ab6ff617c64 extends Twig_Template
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
        echo "<form class=\"mobile-search\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
  <div class=\"form-group\">
    <input class=\"form-control search-input\" name=\"q\" placeholder=\"请输入关键字搜索\">
    <button class=\"btn es-icon es-icon-search1\" type=\"submit\"></button>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:search-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
