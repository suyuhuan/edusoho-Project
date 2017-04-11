<?php

/* ClassroomBundle:Classroom:keywords.html.twig */
class __TwigTemplate_d05f2e30a1d335714866a4e26aa66d9196323bed2f57e27f99a9619f7bbe5508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('keywords', $context, $blocks);
    }

    public function block_keywords($context, array $blocks = array())
    {
        // line 2
        if ((isset($context["category"]) ? $context["category"] : null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo " ";
            if ((isset($context["parentCategory"]) ? $context["parentCategory"] : null)) {
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentCategory"]) ? $context["parentCategory"] : null), "name", array()), "html", null, true);
                echo " ";
            }
            echo " ";
        }
        echo " 
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:keywords.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
