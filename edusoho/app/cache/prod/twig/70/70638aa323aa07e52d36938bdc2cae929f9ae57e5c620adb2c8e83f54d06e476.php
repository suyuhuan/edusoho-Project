<?php

/* TopxiaWebBundle:Course:normal-layout.html.twig */
class __TwigTemplate_46b41d992f70bce19fbbe421cc9c059ac3fe916d5696107cf8b38bfd3cee5d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'course_main' => array($this, 'block_course_main'),
            'dashboard_relatedCoursesBlock' => array($this, 'block_dashboard_relatedCoursesBlock'),
            'course_sidebar' => array($this, 'block_course_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["mobile"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isShowMobilePage();
        // line 13
        $context["bodyClass"] = "course-dashboard-page";
        // line 14
        $context["script_arguments"] = array("course_uri" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_keywords($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        $context["tags"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Tags", array("tagIds" => ((array_key_exists("tags", $context)) ? (_twig_default_filter((isset($context["tags"]) ? $context["tags"] : null), "")) : (""))));
        // line 8
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            $this->displayParentBlock("keywords", $context, $blocks);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 11
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter(_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getPurifyAndTrimHtml($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())), ""), 100);
    }

    // line 16
    public function block_top_content($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        $asm89CacheStrategy1 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey((((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/user/") . (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "userId", array()), 0)) : (0))) . "/header"), 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 18
                echo "    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Part/Course:header", array("course" => (isset($context["course"]) ? $context["course"] : null), "member" => (isset($context["member"]) ? $context["member"] : null))));
                echo "
  ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
  ";
        // line 24
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("GroupSell") &&  !(isset($context["member"]) ? $context["member"] : null))) {
            // line 25
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("GroupSellBundle:GroupSell:showGroup", array("type" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
            echo "
  ";
        }
        // line 27
        echo "  <div class=\"course-detail row\">
    <div class=\"col-lg-9 col-md-8  course-detail-main\">

      ";
        // line 30
        $this->loadTemplate("TopxiaWebBundle:Announcement:announcement-block.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 30)->display(array_merge($context, array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")));
        // line 31
        echo "
      <section class=\"es-section\">

        ";
        // line 34
        $asm89CacheStrategy2 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key2 = $asm89CacheStrategy2->generateKey((((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/user/") . (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0))) . "/normal-nav"), 600        );
        $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
        if ($asm89CacheBody2 === false) {
            ob_start();
                // line 35
                echo "          ";
                $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-nav.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 35)->display($context);
                // line 36
                echo "        ";
            
            $asm89CacheBody2 = ob_get_clean();
            $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
        }
        echo $asm89CacheBody2;
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('course_main', $context, $blocks);
        // line 39
        echo "      </section>
      ";
        // line 40
        $this->displayBlock('dashboard_relatedCoursesBlock', $context, $blocks);
        // line 45
        echo "    </div>

    <div class=\"col-lg-3 col-md-4  course-sidebar\">
      ";
        // line 48
        $this->displayBlock('course_sidebar', $context, $blocks);
        // line 74
        echo "    </div>
  </div>

  ";
        // line 77
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("HowzhiPopAd")) {
            // line 78
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("HowzhiPopAdBundle:HowzhiPop:index"));
            echo "
  ";
        }
        // line 80
        echo "
  ";
        // line 81
        $this->loadTemplate("TopxiaWebBundle:Common:weixin-share.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 81)->display(array_merge($context, array("title" => $this->getAttribute(        // line 82
(isset($context["course"]) ? $context["course"] : null), "title", array()), "desc" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 83
(isset($context["course"]) ? $context["course"] : null), "about", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 84
(isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFurl($this->getAttribute(        // line 85
(isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"))));
        // line 87
        echo "
  ";
        // line 88
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 89
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Course:Mobile/course-bottom.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 89)->display($context);
            // line 90
            echo "  ";
        }
        // line 91
        echo "
  ";
        // line 92
        $this->loadTemplate("TopxiaWebBundle:Common:consult-supplier.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 92)->display($context);
        // line 93
        echo "
";
    }

    // line 38
    public function block_course_main($context, array $blocks = array())
    {
    }

    // line 40
    public function block_dashboard_relatedCoursesBlock($context, array $blocks = array())
    {
        // line 41
        echo "        ";
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.relatedCourses") == 1)) {
            // line 42
            echo "          ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Course:relatedCoursesBlock", array("course" => (isset($context["course"]) ? $context["course"] : null))));
            echo "
        ";
        }
        // line 44
        echo "      ";
    }

    // line 48
    public function block_course_sidebar($context, array $blocks = array())
    {
        // line 49
        echo "        ";
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), null)) : (null))) {
            // line 50
            echo "          ";
            $asm89CacheStrategy3 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key3 = $asm89CacheStrategy3->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/sidebar/belongClassrooms/for/member"), 600            );
            $asm89CacheBody3 = $asm89CacheStrategy3->fetchBlock($asm89Key3);
            if ($asm89CacheBody3 === false) {
                ob_start();
                    // line 51
                    echo "            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Part/Course:belongClassrooms", array("course" => (isset($context["course"]) ? $context["course"] : null))));
                    echo "
          ";
                
                $asm89CacheBody3 = ob_get_clean();
                $asm89CacheStrategy3->saveBlock($asm89Key3, $asm89CacheBody3);
            }
            echo $asm89CacheBody3;
            // line 53
            echo "        ";
        }
        // line 54
        echo "
        ";
        // line 55
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == 0)) {
            // line 56
            echo "          ";
            $asm89CacheStrategy4 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key4 = $asm89CacheStrategy4->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/not/classroom/course/sidebar/recommendClassrooms"), 600            );
            $asm89CacheBody4 = $asm89CacheStrategy4->fetchBlock($asm89Key4);
            if ($asm89CacheBody4 === false) {
                ob_start();
                    // line 57
                    echo "            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Part/Course:recommendClassrooms", array("course" => (isset($context["course"]) ? $context["course"] : null))));
                    echo "
          ";
                
                $asm89CacheBody4 = ob_get_clean();
                $asm89CacheStrategy4->saveBlock($asm89Key4, $asm89CacheBody4);
            }
            echo $asm89CacheBody4;
            // line 59
            echo "        ";
        }
        // line 60
        echo "
        ";
        // line 61
        $asm89CacheStrategy5 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key5 = $asm89CacheStrategy5->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/sidebar/teachers"), 600        );
        $asm89CacheBody5 = $asm89CacheStrategy5->fetchBlock($asm89Key5);
        if ($asm89CacheBody5 === false) {
            ob_start();
                // line 62
                echo "          ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Part/Course:teachers", array("course" => (isset($context["course"]) ? $context["course"] : null))));
                echo "
        ";
            
            $asm89CacheBody5 = ob_get_clean();
            $asm89CacheStrategy5->saveBlock($asm89Key5, $asm89CacheBody5);
        }
        echo $asm89CacheBody5;
        // line 64
        echo "
        ";
        // line 65
        $asm89CacheStrategy6 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key6 = $asm89CacheStrategy6->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/sidebar/students"), 600        );
        $asm89CacheBody6 = $asm89CacheStrategy6->fetchBlock($asm89Key6);
        if ($asm89CacheBody6 === false) {
            ob_start();
                // line 66
                echo "          ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Part/Course:students", array("course" => (isset($context["course"]) ? $context["course"] : null))));
                echo "
        ";
            
            $asm89CacheBody6 = ob_get_clean();
            $asm89CacheStrategy6->saveBlock($asm89Key6, $asm89CacheBody6);
        }
        echo $asm89CacheBody6;
        // line 68
        echo "        
        ";
        // line 69
        $asm89CacheStrategy7 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key7 = $asm89CacheStrategy7->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/sidebar/statuses"), 600        );
        $asm89CacheBody7 = $asm89CacheStrategy7->fetchBlock($asm89Key7);
        if ($asm89CacheBody7 === false) {
            ob_start();
                // line 70
                echo "          ";
                $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 70)->display($context);
                // line 71
                echo "        ";
            
            $asm89CacheBody7 = ob_get_clean();
            $asm89CacheStrategy7->saveBlock($asm89Key7, $asm89CacheBody7);
        }
        echo $asm89CacheBody7;
        // line 72
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 72,  349 => 71,  346 => 70,  340 => 69,  337 => 68,  327 => 66,  321 => 65,  318 => 64,  308 => 62,  302 => 61,  299 => 60,  296 => 59,  286 => 57,  279 => 56,  277 => 55,  274 => 54,  271 => 53,  261 => 51,  254 => 50,  251 => 49,  248 => 48,  244 => 44,  238 => 42,  235 => 41,  232 => 40,  227 => 38,  222 => 93,  220 => 92,  217 => 91,  214 => 90,  211 => 89,  209 => 88,  206 => 87,  204 => 85,  203 => 84,  202 => 83,  201 => 82,  200 => 81,  197 => 80,  191 => 78,  189 => 77,  184 => 74,  182 => 48,  177 => 45,  175 => 40,  172 => 39,  170 => 38,  167 => 37,  160 => 36,  157 => 35,  151 => 34,  146 => 31,  144 => 30,  139 => 27,  133 => 25,  131 => 24,  128 => 23,  125 => 22,  113 => 18,  106 => 17,  103 => 16,  97 => 11,  56 => 8,  53 => 7,  50 => 6,  42 => 4,  38 => 1,  36 => 14,  34 => 13,  32 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
