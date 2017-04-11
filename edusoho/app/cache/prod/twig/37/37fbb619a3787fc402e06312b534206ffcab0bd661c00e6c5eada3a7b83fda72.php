<?php

/* TopxiaWebBundle:Announcement:announcement-block.html.twig */
class __TwigTemplate_c8635ddcca038b7e66db08902b8f13e5c678ea22244ca7bc2e9b3759f04c2773 extends Twig_Template
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
        $asm89CacheStrategy1 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey(((("announcements-block/targetType/" . (isset($context["targetType"]) ? $context["targetType"] : null)) . "/targetId/") . (isset($context["targetId"]) ? $context["targetId"] : null)), 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 2
                echo "  ";
                $context["announcements"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Announcements", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "count" => 10));
                // line 3
                echo "  ";
                if ((isset($context["announcements"]) ? $context["announcements"] : null)) {
                    // line 4
                    echo "    <div class=\"alert alert-warning announcements aside-notice\" role=\"alert\">
      <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
        ";
                    // line 7
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                        // line 8
                        echo "          <div class=\"swiper-slide\">
            <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                        // line 9
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_show", array("id" => $this->getAttribute($context["announcement"], "id", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
                        echo "\" >
            <i class=\"es-icon es-icon-infooutline\"></i>
            ";
                        // line 11
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->subTextFilter($this->getAttribute($context["announcement"], "content", array()), 40), "<span class=\"text-warning\">(请点击查看)</span>"));
                        echo "</a>
          </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "        </div>
      </div>
    </div>

    ";
                    // line 18
                    $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("announcement/announcement-swiper-slide");
                    // line 19
                    echo "
  ";
                }
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 22
        echo "





";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  65 => 19,  63 => 18,  57 => 14,  48 => 11,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  25 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
