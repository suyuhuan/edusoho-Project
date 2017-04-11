<?php

/* TopxiaWebBundle:Course:explore.html.twig */
class __TwigTemplate_2c5d95ddf1ce17a39760f91dce881941e02d1616eda2ba9d0b76f6d01596d0a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
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
        // line 4
        $context["bodyClass"] = "course-list-page";
        // line 5
        $context["siteNav"] = "course/explore";
        // line 6
        $context["script_controller"] = "course/explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_keywords($context, array $blocks = array())
    {
        if ((isset($context["categoryArray"]) ? $context["categoryArray"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "html", null, true);
            if ((isset($context["categoryParent"]) ? $context["categoryParent"] : null)) {
                echo ",";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array()), "")) : ("")), "html", null, true);
            }
        } else {
            echo "全部";
        }
    }

    // line 9
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter((isset($context["categoryArrayDescription"]) ? $context["categoryArrayDescription"] : null), "")) : ("")), 100);
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"))), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name"), "html", null, true);
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned")) {
            echo " - Powered By EduSoho";
        }
        // line 11
        echo "    ";
    }

    // line 13
    public function block_top_content($context, array $blocks = array())
    {
        // line 14
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程列表"), "html", null, true);
        echo "
      </div>

      ";
        // line 21
        $context["classrooms"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Classrooms", array("count" => 1));
        // line 22
        echo "      <div class=\"more\">
        ";
        // line 23
        if (((array_key_exists("classrooms", $context)) ? (_twig_default_filter((isset($context["classrooms"]) ? $context["classrooms"] : null), null)) : (null))) {
            // line 24
            echo "          <a class=\"btn btn-primary btn-lg\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore");
            echo "\">
            ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看%name%", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 28
        echo "        <a class=\"btn btn-primary btn-lg\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_explore");
        echo "\">
          ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看公开课"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
  </div>
  ";
        // line 34
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 35
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Course:search-mobile.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 35)->display($context);
            // line 36
            echo "  ";
        }
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "  ";
        $context["type"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type", array()), "all")) : ("all"));
        // line 41
        echo "  ";
        $context["price"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array()), "all")) : ("all"));
        // line 42
        echo "  ";
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest"));
        // line 43
        echo "  ";
        $context["currentLevelId"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array()), "all")) : ("all"));
        // line 44
        echo "

  ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Category:treeNav", array("tags" => (isset($context["tags"]) ? $context["tags"] : null), "path" => (isset($context["path"]) ? $context["path"] : null), "category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null), "group" => "course")));
        echo "

  <div class=\"es-filter\">
    <ul class=\"nav nav-sort clearfix\">
      <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "latest")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "latest")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新"), "html", null, true);
        echo "</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "studentNum")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "studentNum")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热"), "html", null, true);
        echo "</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "recommendedSeq")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐"), "html", null, true);
        echo "</a></li>
    </ul>
    <div class=\"filter hidden-xs\">
      ";
        // line 53
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("vip")) {
            // line 54
            echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"es-icon es-icon-crown text-warning\"></i>
            ";
            // line 56
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员课程"), "html", null, true);
            }
            // line 57
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          </button>
          <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\"class=\"";
            // line 60
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => "all"), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"), "html", null, true);
            echo "</a></li>
          ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 62
                echo "            <li role=\"presentation\"class=\"";
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo "active ";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => $this->getAttribute($context["level"], "id", array())), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "          </ul>
        </div>
      ";
        }
        // line 67
        echo "      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" ";
        // line 68
        if (((isset($context["type"]) ? $context["type"] : null) == "live")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"live\" value=\"
        ";
        // line 69
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            // line 70
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => "live", "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        } else {
            // line 72
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => "all", "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        }
        // line 73
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播课程"), "html", null, true);
        echo "
      </label>
      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" ";
        // line 76
        if (((isset($context["price"]) ? $context["price"] : null) == "free")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"free\" value=\"
        ";
        // line 77
        if (((isset($context["price"]) ? $context["price"] : null) == "all")) {
            // line 78
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => "free", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        } else {
            // line 80
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore", array("category" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category", array(), "array"), "subCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subCategory", array(), "array"), "selectedthirdLevelCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "thirdLevelCategory", array(), "array"), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => "all", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        }
        // line 82
        echo "        \"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费课程"), "html", null, true);
        echo "
      </label>
    </div>
  </div>
  <div class=\"course-list\">
    <div class=\"row\">
      ";
        // line 88
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 89
            echo "        ";
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
                // line 90
                echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
                // line 91
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 91)->display($context);
                // line 92
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
            // line 94
            echo "      ";
        } else {
            // line 95
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该分类下无课程"), "html", null, true);
            echo "</div>
      ";
        }
        // line 97
        echo "    </div>
  </div>
  ";
        // line 99
        if ( !(isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 100
            echo "    <nav class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "</nav>
  ";
        }
    }

    // line 104
    public function block_bottom($context, array $blocks = array())
    {
        // line 105
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Default:Mobile/footer-tool-bar.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 105)->display(array_merge($context, array("mobile_tool_bar" => "course")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 105,  372 => 104,  364 => 100,  362 => 99,  358 => 97,  352 => 95,  349 => 94,  334 => 92,  332 => 91,  329 => 90,  311 => 89,  309 => 88,  299 => 82,  293 => 80,  287 => 78,  285 => 77,  279 => 76,  272 => 73,  266 => 72,  260 => 70,  258 => 69,  252 => 68,  249 => 67,  244 => 64,  229 => 62,  225 => 61,  215 => 60,  211 => 58,  199 => 57,  195 => 56,  191 => 54,  189 => 53,  161 => 50,  154 => 46,  150 => 44,  147 => 43,  144 => 42,  141 => 41,  138 => 40,  135 => 39,  130 => 36,  127 => 35,  125 => 34,  117 => 29,  112 => 28,  106 => 25,  101 => 24,  99 => 23,  96 => 22,  94 => 21,  88 => 18,  82 => 14,  79 => 13,  75 => 11,  62 => 10,  56 => 9,  42 => 8,  38 => 1,  36 => 6,  34 => 5,  32 => 4,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
