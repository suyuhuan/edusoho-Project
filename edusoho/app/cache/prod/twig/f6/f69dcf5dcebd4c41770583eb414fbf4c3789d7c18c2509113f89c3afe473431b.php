<?php

/* TopxiaWebBundle:Category:explore-nav.html.twig */
class __TwigTemplate_5cb848549d4f83cf87652a63054463357ec759c3a92b7aa474d70edb5e3b156b extends Twig_Template
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
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("category/nav");
        // line 2
        echo "
";
        // line 3
        $context["tagMarks"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("TagMarks", array("tags" => (isset($context["tags"]) ? $context["tags"] : null)));
        // line 4
        $context["categoryMarks"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("CategoryMarks", array("selectedCategory" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "selectedSubCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "selectedthirdLevelCategory" => (isset($context["selectedthirdLevelCategory"]) ? $context["selectedthirdLevelCategory"] : null)));
        // line 5
        $context["selectedTagGroups"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("SelectedTagGroups", array("tags" => (isset($context["tags"]) ? $context["tags"] : null)));
        // line 6
        echo "

<div class=\"tabs-wrapper\">
  <div class=\"tabs-mark-group plm ptm\">
    <div class=\"title\">所有分类：</div>

    <ul class=\"content list-unstyled list-inline\">
      <li class=\"classify\">
        ";
        // line 14
        if ((($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 0, array(), "array"), "")) : (""))) {
            // line 15
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 0, array(), "array", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 0, array(), "array", false, true), "name", array()), "")) : ("")), "html", null, true);
            echo "<i class=\"es-icon es-icon-chevronright\"></i></a>
        ";
        }
        // line 17
        echo "      </li>

      <li class=\"classify\">
        ";
        // line 20
        if ((($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 1, array(), "array"), "")) : (""))) {
            // line 21
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 1, array(), "array", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 1, array(), "array", false, true), "name", array()), "")) : ("")), "html", null, true);
            echo "<i class=\"es-icon es-icon-chevronright\"></i></a>
        ";
        }
        // line 23
        echo "      </li>

      <li class=\"classify\">
        ";
        // line 26
        if ((($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 2, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 2, array(), "array"), "")) : (""))) {
            // line 27
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 2, array(), "array", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["categoryMarks"]) ? $context["categoryMarks"] : null), 2, array(), "array", false, true), "name", array()), "")) : ("")), "html", null, true);
            echo "<i class=\"es-icon es-icon-chevronright\"></i></a>
        ";
        }
        // line 29
        echo "      </li>

      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("tagMarks", $context)) ? (_twig_default_filter((isset($context["tagMarks"]) ? $context["tagMarks"] : null), "")) : ("")));
        foreach ($context['_seq'] as $context["_key"] => $context["tagMark"]) {
            // line 32
            echo "        <li class=\"tabs-mark\">
          <a class=\"btn btn-link\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "selectedthirdLevelCategory" => (isset($context["selectedthirdLevelCategory"]) ? $context["selectedthirdLevelCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null), "selectedTag" => array("group" => $this->getAttribute($context["tagMark"], "groupId", array()), "tag" => $this->getAttribute($context["tagMark"], "tagId", array()))), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tagMark"], "tagName", array()), "html", null, true);
            echo "<i class=\"glyphicon glyphicon-remove\"></i></a>
        </li>     
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagMark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </ul>

  </div>

  <div class=\"tabs-group\">
    <div class=\"title\">分类:</div>
      <ul class=\"content clearfix\">
        <li class=\"";
        // line 43
        if ( !(isset($context["selectedCategory"]) ? $context["selectedCategory"] : null)) {
            echo "active";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
        echo "\">全部</a></li>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 45
            echo "          <li class=\"";
            if (($this->getAttribute($context["category"], "code", array()) == (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null))) {
                echo "active";
            }
            echo "\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => $this->getAttribute($context["category"], "code", array()), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "      </ul>
  </div>

  ";
        // line 50
        if (((array_key_exists("subCategories", $context)) ? (_twig_default_filter((isset($context["subCategories"]) ? $context["subCategories"] : null), null)) : (null))) {
            // line 51
            echo "    <div class=\"tabs-group\" >
     <div class=\"title\"></div>
      <ul class=\"content clearfix\">
        <li class=\"";
            // line 54
            if ( !(isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null)) {
                echo "active";
            }
            echo "\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">全部</a></li>   
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subCategories"]) ? $context["subCategories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                // line 56
                echo "          <li class=\"";
                if (($this->getAttribute($context["subCategory"], "code", array()) == (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null))) {
                    echo "active";
                }
                echo "\"><a class=\"nav-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => $this->getAttribute($context["subCategory"], "code", array()), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subCategory"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "      </ul>
    </div>
  ";
        }
        // line 61
        echo "

  ";
        // line 63
        if (((array_key_exists("thirdLevelCategories", $context)) ? (_twig_default_filter((isset($context["thirdLevelCategories"]) ? $context["thirdLevelCategories"] : null), null)) : (null))) {
            // line 64
            echo "    <div class=\"tabs-group\" >
     <div class=\"title\"></div>
      <ul class=\"content clearfix\">
        <li class=\"";
            // line 67
            if ( !(isset($context["selectedthirdLevelCategory"]) ? $context["selectedthirdLevelCategory"] : null)) {
                echo "active";
            }
            echo "\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">全部</a></li>   
        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["thirdLevelCategories"]) ? $context["thirdLevelCategories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 69
                echo "          <li class=\"";
                if (($this->getAttribute($context["category"], "code", array()) == (isset($context["selectedthirdLevelCategory"]) ? $context["selectedthirdLevelCategory"] : null))) {
                    echo "active";
                }
                echo "\"><a class=\"nav-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "selectedthirdLevelCategory" => $this->getAttribute($context["category"], "code", array()), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null)), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "      </ul>
    </div>
  ";
        }
        // line 74
        echo "
  ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tagGroups"]) ? $context["tagGroups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tagGroup"]) {
            // line 76
            echo "    ";
            if (twig_in_filter((isset($context["group"]) ? $context["group"] : null), $this->getAttribute($context["tagGroup"], "scope", array()))) {
                // line 77
                echo "      ";
                if (!twig_in_filter($this->getAttribute($context["tagGroup"], "id", array()), (isset($context["selectedTagGroups"]) ? $context["selectedTagGroups"] : null))) {
                    // line 78
                    echo "        <div class=\"tabs-group\">
          <div class=\"title\">";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tagGroup"], "name", array()), "html", null, true);
                    echo ":</div>
          <ul class=\"content clearfix\">
            ";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tagGroup"], "subs", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 82
                        echo "              <li class=\"";
                        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->tag_equal((isset($context["tags"]) ? $context["tags"] : null), $this->getAttribute($context["sub"], "id", array()), $this->getAttribute($context["tagGroup"], "id", array()))) {
                            echo "active";
                        }
                        echo "\" ><a class=\"nav-link tag\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["selectedCategory"]) ? $context["selectedCategory"] : null), "subCategory" => (isset($context["selectedSubCategory"]) ? $context["selectedSubCategory"] : null), "selectedthirdLevelCategory" => (isset($context["selectedthirdLevelCategory"]) ? $context["selectedthirdLevelCategory"] : null), "tag" => array("tags" => (isset($context["tags"]) ? $context["tags"] : null), "selectedTag" => array("group" => $this->getAttribute($context["tagGroup"], "id", array()), "tag" => $this->getAttribute($context["sub"], "id", array()))), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "name", array()), "html", null, true);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 84
                    echo "          </ul>
        </div>
      ";
                }
                // line 87
                echo "    ";
            }
            // line 88
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Category:explore-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 89,  273 => 88,  270 => 87,  265 => 84,  250 => 82,  246 => 81,  241 => 79,  238 => 78,  235 => 77,  232 => 76,  228 => 75,  225 => 74,  220 => 71,  205 => 69,  201 => 68,  193 => 67,  188 => 64,  186 => 63,  182 => 61,  177 => 58,  162 => 56,  158 => 55,  150 => 54,  145 => 51,  143 => 50,  138 => 47,  123 => 45,  119 => 44,  111 => 43,  102 => 36,  91 => 33,  88 => 32,  84 => 31,  80 => 29,  72 => 27,  70 => 26,  65 => 23,  57 => 21,  55 => 20,  50 => 17,  42 => 15,  40 => 14,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
