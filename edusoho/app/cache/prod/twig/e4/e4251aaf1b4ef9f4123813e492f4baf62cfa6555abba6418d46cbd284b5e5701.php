<?php

/* TopxiaWebBundle:Common:consult-supplier.html.twig */
class __TwigTemplate_52a7bee4a2909be2100873e3590c3a2ecc82a4907d51c14169b501ba3852e2d0 extends Twig_Template
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
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult.enabled", 0)) {
            // line 2
            echo "  ";
            $context["consult"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult");
            // line 3
            echo "  ";
            if ( !twig_test_empty((($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "supplier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "supplier", array()))) : ("")))) {
                // line 4
                echo "    ";
                echo $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "supplier", array());
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Common:consult-supplier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
