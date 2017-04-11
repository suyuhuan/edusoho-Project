<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig */
class __TwigTemplate_8cfeb619b8572e979fd1600545244fa5f9f0da6525d1abfaa87cae32a310b990 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $asm89CacheStrategy11 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key11 = $asm89CacheStrategy11->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/sidebar/statuses"), 600        );
        $asm89CacheBody11 = $asm89CacheStrategy11->fetchBlock($asm89Key11);
        if ($asm89CacheBody11 === false) {
            ob_start();
                // line 4
                echo "
";
                // line 5
                $context["learns"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("LatestStatuses", array("count" => 5, "mode" => "simple", "objectType" => "course", "objectId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
                // line 6
                echo "
";
                // line 7
                $this->loadTemplate("TopxiaWebBundle:Status:status-block.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", 7)->display($context);
                // line 8
                echo "
";
            
            $asm89CacheBody11 = ob_get_clean();
            $asm89CacheStrategy11->saveBlock($asm89Key11, $asm89CacheBody11);
        }
        echo $asm89CacheBody11;
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  38 => 7,  35 => 6,  33 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
