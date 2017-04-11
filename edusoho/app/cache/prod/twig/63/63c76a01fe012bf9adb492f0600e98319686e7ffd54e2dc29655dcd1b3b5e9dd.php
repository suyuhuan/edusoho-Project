<?php

/* TopxiaWebBundle:Search:index.html.twig */
class __TwigTemplate_e562bf09c9f3738683600df5cc47db8924721b8a0c118175692cf7e4bf38dd07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Search:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["bodyClass"] = "bg-blank";
        // line 5
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("search/search");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索："), "html", null, true);
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["keywords"]) ? $context["keywords"] : null), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_top_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"course-banner es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</span>";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()) == "zh_CN")) {
            echo "SEARCH";
        }
        // line 12
        echo "      </div>
    </div>
  </div>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
  <div class=\"course-filter search-filter\" id=\"course-filter\">
    <div class=\"result-declare\">
  ";
        // line 21
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 22
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共找到<span>%count%</span>门<span>“%keywords%”</span>相关课程", array("%count%" => (isset($context["count"]) ? $context["count"] : null), "%keywords%" => (isset($context["keywords"]) ? $context["keywords"] : null)));
            echo "
  ";
        } else {
            // line 24
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共找到<span>%count%</span>门课程", array("%count%" => (isset($context["count"]) ? $context["count"] : null)));
            echo "
    ";
        }
        // line 26
        echo "    </div>
    <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
      <li role=\"presentation\" class=\"";
        // line 28
        if ( !(isset($context["filter"]) ? $context["filter"] : null)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        echo "</a></li>
      ";
        // line 29
        if ((isset($context["isShowVipSearch"]) ? $context["isShowVipSearch"] : null)) {
            // line 30
            echo "        ";
            if ((isset($context["currentUserVipLevel"]) ? $context["currentUserVipLevel"] : null)) {
                // line 31
                echo "          <li role=\"presentation\" class=\"";
                if (((isset($context["filter"]) ? $context["filter"] : null) == "vip")) {
                    echo "active";
                }
                echo "\">
            <a href=\"";
                // line 32
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "vip"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员课程"), "html", null, true);
                echo "</a>
          </li>
        ";
            }
            // line 35
            echo "      ";
        }
        // line 36
        echo "      <li role=\"presentation\" class=\"";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "free")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "free"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费课程"), "html", null, true);
        echo "</a>
      </li>
      <li role=\"presentation\" class=\"";
        // line 39
        if (((isset($context["filter"]) ? $context["filter"] : null) == "live")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "live"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播课程"), "html", null, true);
        echo "</a>
      </li>
    </ul>
    <div class=\"btn-group visible-xs\">
      <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 44
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("searchCourseType", ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) ? $context["filter"] : null), "all")) : ("all")));
        echo "
      <span class=\"caret\"></span></button>

      <ul class=\"dropdown-menu\" role=\"menu\">
        <li role=\"presentation\" class=\"";
        // line 48
        if ( !(isset($context["filter"]) ? $context["filter"] : null)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        echo "</a></li>
        ";
        // line 49
        if ((isset($context["isShowVipSearch"]) ? $context["isShowVipSearch"] : null)) {
            // line 50
            echo "            ";
            if ((isset($context["currentUserVipLevel"]) ? $context["currentUserVipLevel"] : null)) {
                // line 51
                echo "              <li role=\"presentation\" class=\"";
                if (((isset($context["filter"]) ? $context["filter"] : null) == "vip")) {
                    echo "active";
                }
                echo "\">
                <a href=\"";
                // line 52
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "vip"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员课程"), "html", null, true);
                echo "</a>
              </li>
          ";
            }
            // line 55
            echo "        ";
        }
        // line 56
        echo "        <li role=\"presentation\" class=\"";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "free")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "free"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费课程"), "html", null, true);
        echo "</a>
        </li>
        <li role=\"presentation\" class=\"";
        // line 59
        if (((isset($context["filter"]) ? $context["filter"] : null) == "live")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search", array("filter" => "live"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播课程"), "html", null, true);
        echo "</a>
        </li>
      </ul>
    </div>

  </div>

  <!-- 课程列表 -->
  <div class=\"course-list\">
    ";
        // line 69
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 70
            echo "      <div class=\"row\">
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 72
                echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
                // line 73
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Search:index.html.twig", 73)->display(array_merge($context, array("course" => $context["course"])));
                // line 74
                echo "          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "      </div>
    ";
        } else {
            // line 78
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("没有搜到相关课程，请换个关键词试试！"), "html", null, true);
            echo "</div>
    ";
        }
        // line 80
        echo "  </div>

  <nav class=\"text-center\">
    ";
        // line 83
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 84
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
    ";
        }
        // line 86
        echo "  </nav>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 86,  290 => 84,  288 => 83,  283 => 80,  277 => 78,  273 => 76,  258 => 74,  256 => 73,  253 => 72,  236 => 71,  233 => 70,  231 => 69,  217 => 60,  211 => 59,  204 => 57,  197 => 56,  194 => 55,  186 => 52,  179 => 51,  176 => 50,  174 => 49,  164 => 48,  157 => 44,  148 => 40,  142 => 39,  135 => 37,  128 => 36,  125 => 35,  117 => 32,  110 => 31,  107 => 30,  105 => 29,  95 => 28,  91 => 26,  85 => 24,  79 => 22,  77 => 21,  72 => 18,  69 => 17,  62 => 12,  56 => 11,  51 => 8,  48 => 7,  35 => 3,  31 => 1,  29 => 5,  27 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
