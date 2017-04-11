<?php

/* TopxiaWebBundle:PasswordReset:sent.html.twig */
class __TwigTemplate_a7b6762dcf5b4c3d3b8e96d5189aeda27d0f4b2499d931c18d9084ab89f50dbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PasswordReset:sent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重设密码"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重设密码"), "html", null, true);
        echo "</h2></div>
      <p>
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请到"), "html", null, true);
        echo " <span class=\"text-success\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查阅来自%site.name%的邮件, 从邮件重设你的密码。", array("%site.name%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name"))), "html", null, true);
        echo "
      </p>
      <p>
        <a class=\"btn btn-primary\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["emailLoginUrl"]) ? $context["emailLoginUrl"] : null), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录邮箱查收邮件"), "html", null, true);
        echo "</a>
      </p>
    </div><!-- /panel -->
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PasswordReset:sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  50 => 11,  45 => 9,  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
