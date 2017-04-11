<?php

/* TopxiaWebBundle:PasswordReset:index.html.twig */
class __TwigTemplate_5eff92f9aa5a916e26f86be2c791fd65eb15d1c5dd9bf0722a8d3fe4a622c65d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PasswordReset:index.html.twig", 1);
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
        // line 4
        $context["script_controller"] = "auth/password-reset";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重设密码"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重设密码"), "html", null, true);
        echo "</h2></div>

        <ul class=\"nav nav-tabs mbl js-find-password\">
          <li class=\"active js-find-by-email\">
            <a style=\"cursor: pointer;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱地址"), "html", null, true);
        echo "
            </a>
          </li>
          ";
        // line 17
        if ((_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_sms.sms_enabled"), "") == "1")) {
            // line 18
            echo "            <li class=\"js-find-by-mobile\">
              <a style=\"cursor: pointer;\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号码"), "html", null, true);
            echo "
              </a>
            </li>
          ";
        }
        // line 23
        echo "        </ul>

      ";
        // line 25
        if ((isset($context["error"]) ? $context["error"] : null)) {
            echo " <div id=\"alertxx\" class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</div> ";
        }
        // line 26
        echo "
      <form id=\"password-reset-form\" class=\"form-vertical\" method=\"post\">
        <div class=\"form-group\">
          ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱地址")) ? array() : array("label" => $_label_)));
        echo "
          <div class=\"controls\">
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <p class=\"help-block\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请输入你在%name%注册时填写的邮箱地址", array("%name%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name"))), "html", null, true);
        echo "</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"controls\">
            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在发送重设密码邮件"), "html", null, true);
        echo "...\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重设密码"), "html", null, true);
        echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>


      <form id=\"password-reset-by-mobile-form\" class=\"form-vertical\" action=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset_by_sms");
        echo "\" method=\"post\" style=\"display: none;\">
        ";
        // line 55
        echo "
        <div class=\"form-group\">
          <label class=\"control-label required\" for=\"mobile\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号码"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input type=\"text\" id=\"mobile\" name=\"mobile\" data-url=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset_check_mobile");
        echo "\" class=\"form-control\" data-role=\"mobile\">
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"control-label required\" for=\"sms_code\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("短信验证码"), "html", null, true);
        echo "</label>
          <div class=\"controls row\" >
            <div class = \"col-md-8\" >
              <input type=\"text\" class=\"form-control\" id=\"sms-code\" name=\"sms_code\" data-explain=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("输入短信验证码"), "html", null, true);
        echo "\" required=\"required\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_check", array("type" => "sms_forget_password"));
        echo "\">
            </div>

            <div class=\"col-md-4\">
              <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-sm js-sms-send disabled\" data-url=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_modal");
        echo "\" data-sms-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_send");
        echo "\">
                <span id=\"js-time-left\"></span>
                <span id=\"js-fetch-btn-text\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("获取短信验证码"), "html", null, true);
        echo "</span>
             </a>
            </div>

            <div class=\"col-md-12 help-block\"></div>
          </div>
        </div>



        <div class=\"form-group\">
          <div class=\"controls\">
            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交中..."), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重设密码"), "html", null, true);
        echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

    </div><!-- /panel -->

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PasswordReset:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 89,  185 => 85,  170 => 73,  163 => 71,  154 => 67,  148 => 64,  140 => 59,  135 => 57,  131 => 55,  127 => 48,  119 => 43,  110 => 39,  106 => 38,  97 => 32,  93 => 31,  88 => 29,  83 => 26,  77 => 25,  73 => 23,  66 => 19,  63 => 18,  61 => 17,  55 => 14,  48 => 10,  43 => 7,  40 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
