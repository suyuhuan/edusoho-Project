<?php

/* TopxiaWebBundle:Login:index.html.twig */
class __TwigTemplate_f15b1b4c4a5d4ad0f60fa4fb738bab92419281f1d357fb7cc1e5310562e6d125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Login:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        // line 4
        $context["bodyClass"] = "login";
        // line 5
        $context["script_controller"] = "auth/login";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 8
            echo " <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" class=\"hidden\" ><span class=\"receive-modal\"></span></a>
";
        }
        // line 10
        echo "<div class=\"es-section login-section\">
  <div class=\"logon-tab clearfix\">
    <a class=\"active\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录帐号"), "html", null, true);
        echo "</a>
    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册帐号"), "html", null, true);
        echo "</a>
  </div>
  <div class=\"login-main\">
    <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">

      ";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 19
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array())), "html", null, true);
            echo "</div>
      ";
        }
        // line 21
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("帐号"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required placeholder='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱/手机/用户名"), "html", null, true);
        echo "' />
          <div class=\"help-block\"></div>
        </div>
      </div>
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_password\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
        echo "'/>
        </div>
      </div>

      <div class=\"form-group mbl\">
        <div class=\"controls\">
          <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("记住密码"), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"form-group mbl\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
        echo "</button>
      </div>

      <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["_target_path"]) ? $context["_target_path"] : null), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>

    <div class=\"mbl\">
      <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("找回密码"), "html", null, true);
        echo "</a>
      <span class=\"text-muted mhs\">|</span>
      <span class=\"text-muted\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有注册帐号？"), "html", null, true);
        echo "</span>
      <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("立即注册"), "html", null, true);
        echo "</a>
    </div>

    ";
        // line 56
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.enabled")) {
            // line 57
            echo "      <div class=\"social-login\">
        <span>
          ";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : null))));
            echo "
        </span>
        <div class=\"line\"></div>
      </div>
    ";
        }
        // line 64
        echo "  </div>
</div>

";
    }

    // line 69
    public function block_bottom($context, array $blocks = array())
    {
        // line 70
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Default:Mobile/footer-tool-bar.html.twig", "TopxiaWebBundle:Login:index.html.twig", 70)->display(array_merge($context, array("mobile_tool_bar" => "login")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 70,  182 => 69,  175 => 64,  167 => 59,  163 => 57,  161 => 56,  153 => 53,  149 => 52,  142 => 50,  135 => 46,  131 => 45,  125 => 42,  118 => 38,  109 => 32,  104 => 30,  94 => 25,  89 => 23,  83 => 21,  77 => 19,  75 => 18,  70 => 16,  62 => 13,  58 => 12,  54 => 10,  48 => 8,  46 => 7,  43 => 6,  35 => 3,  31 => 1,  29 => 5,  27 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
