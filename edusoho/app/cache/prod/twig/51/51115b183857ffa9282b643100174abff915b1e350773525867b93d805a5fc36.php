<?php

/* TopxiaWebBundle:Register:index.html.twig */
class __TwigTemplate_d6b44eb07bf80dcd8a4d88a7fe5d4eef330bcf064835f077a02f0d9ce055f7c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Register:index.html.twig", 1);
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
        $context["bodyClass"] = "register";
        // line 5
        $context["script_controller"] = "auth/register";
        // line 7
        $context["parameter"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"es-section login-section\">
  <div class=\"logon-tab clearfix\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录帐号"), "html", null, true);
        echo "</a>
    <a class=\"active\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册帐号"), "html", null, true);
        echo "</a>
  </div>
  <div class=\"login-main\">
    ";
        // line 16
        if ((isset($context["isRegisterEnabled"]) ? $context["isRegisterEnabled"] : null)) {
            // line 17
            echo "      <form id=\"register-form\" method=\"post\" action=\"\">
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

        ";
            // line 20
            if (((isset($context["inviteCode"]) ? $context["inviteCode"] : null) != null)) {
                // line 21
                echo "          <div class=\"alert alert-info alert-sm\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您正在通过<span class=\"color-gray mhs\">%inviteUser%</span>的邀请注册。", array("%inviteUser%" => $this->getAttribute((isset($context["inviteUser"]) ? $context["inviteUser"] : null), "nickname", array())));
                echo "</div>
        ";
            }
            // line 23
            echo "
        ";
            // line 24
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") == "email")) {
                // line 25
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_email\">";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱地址"), "html", null, true);
                echo "</label>
            <div class=\"controls\">
              <input type=\"email\" id=\"register_email\" name=\"email\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 28
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你常用的邮箱作为登录帐号"), "html", null, true);
                echo "\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            } elseif (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") == "mobile")) {
                // line 33
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_mobile\">";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号码"), "html", null, true);
                echo "</label>
            <div class=\"controls\">
              <input type=\"number\" id=\"register_mobile\" name=\"verifiedMobile\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 36
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你常用的手机号码作为登录帐号"), "html", null, true);
                echo "\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            } else {
                // line 41
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_emailOrmobile\">";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机/邮箱"), "html", null, true);
                echo "</label>
            <div class=\"controls\">
              <input type=\"text\" id=\"register_emailOrMobile\" name=\"emailOrMobile\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 44
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_or_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你常用的邮箱或手机号码作为登录帐号"), "html", null, true);
                echo "\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            }
            // line 49
            echo "
        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"register_nickname\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
            echo "</label>
          <div class=\"controls\">
            <input type=\"text\" id=\"register_nickname\" name=\"nickname\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_nickname_check");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中、英文均可，最长18个英文或9个汉字"), "html", null, true);
            echo "\">
            <p class=\"help-block\"></p>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"register_password\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
            echo "</label>
          <div class=\"controls\">
            <input type=\"password\" id=\"register_password\" name=\"password\" required=\"required\" class=\"form-control input-lg\" placeholder=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("5-20位英文、数字、符号，区分大小写"), "html", null, true);
            echo "\">
            <p class=\"help-block\"></p>
          </div>
        </div>
        ";
            // line 64
            if (((_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.captcha_enabled"), 0) == 1) && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") != "mobile"))) {
                // line 65
                echo "          <div class=\"form-group mbl js-captcha\">
            <label class=\"control-label required\" for=\"captcha_code\">";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("验证码"), "html", null, true);
                echo "</label>
            <div class=\"controls row\">
              <div class = \"col-xs-7\">
                <input type=\"text\" class=\"form-control input-lg\" id=\"captcha_code\" name=\"captcha_code\" maxlength=\"5\" placeholder=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("验证码"), "html", null, true);
                echo "\" required=\"required\"  data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_check");
                echo "\" >
                <p class=\"help-block\"></p>
              </div>
              <div class=\"col-xs-5\">
                <img src=\"";
                // line 73
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_num");
                echo "\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_num");
                echo "\" id=\"getcode_num\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("看不清，点击换一张"), "html", null, true);
                echo "\" style=\"cursor:pointer;height:40px;width:100%\">
              </div>
              
            </div>
          </div>
        ";
            }
            // line 79
            echo "        ";
            if ((($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") == "email_or_mobile") || ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") == "mobile"))) {
                // line 80
                echo "          <div class=\"form-group mbl ";
                if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") != "mobile")) {
                    echo "hidden";
                }
                echo " email_mobile_msg\">
            <label class=\"control-label required\" for=\"sms_code\">";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("短信验证码"), "html", null, true);
                echo "</label>
            <div class=\"controls row\" >
              <div class = \"col-xs-7\" >
                <input type=\"number\" class=\"form-control input-lg\" id=\"sms_code\" name=\"sms_code\" placeholder=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你的短信验证码"), "html", null, true);
                echo "\" required=\"required\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_check", array("type" => "sms_registration"));
                echo "\">
                <p class=\"help-block\"> </p>
              </div>
              <div class=\"col-xs-5\">
                <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-lg js-sms-send disabled\" data-url=\"";
                // line 88
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_modal");
                echo "\" data-sms-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_send");
                echo "\">
                  <span id=\"js-time-left\"></span>
                  <span id=\"js-fetch-btn-text\">";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("获取短信验证码"), "html", null, true);
                echo "</span>
               </a>
              </div>
            </div>
          </div>
        ";
            }
            // line 96
            echo "        ";
            if (((_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("invite.invite_code_setting"), 0) == 1) && ((isset($context["inviteCode"]) ? $context["inviteCode"] : null) == null))) {
                // line 97
                echo "        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"invite_code\">";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邀请码"), "html", null, true);
                echo "<span class=\"text-success\">（";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选填"), "html", null, true);
                echo "）</span></label>
          <div class=\"controls\">
            <input type=\"text\" name=\"invite_code\" required=\"required\" class=\"form-control input-lg invitecode\" data-url=\"";
                // line 100
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("invitecode_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如果您有邀请码，请填写您的邀请码"), "html", null, true);
                echo "\">
          </div>
        </div>
        ";
            }
            // line 104
            echo "
        ";
            // line 105
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.user_terms") == "opened")) {
                // line 106
                echo "          <div class=\"form-group mbl\">
            <div class=\"controls\">
              <label>
                <input type=\"checkbox\" id=\"user_terms\" checked=\"checked\"> ";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我已阅读并同意"), "html", null, true);
                echo "<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_terms");
                echo "\" target=\"_blank\">《";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("服务协议"), "html", null, true);
                echo "》</a>
              </label>
            </div>
          </div>
        ";
            }
            // line 114
            echo "
        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <button type=\"submit\" id=\"register-btn\" data-submiting-text=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交"), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"captcha_enabled\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.captcha_enabled"), "html", null, true);
            echo "\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        ";
            // line 123
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "inviteCode", 1 => ""), "method")) {
                // line 124
                echo "        <input type=\"hidden\" id=\"invite_code\" name=\"invite_code\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "inviteCode", 1 => ""), "method"), "html", null, true);
                echo "\">
        ";
            }
            // line 126
            echo "
      </form>

      ";
            // line 129
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.enabled")) {
                // line 130
                echo "        <div class=\"social-login\">
          <span>
            ";
                // line 132
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : null), "inviteCode" => ((array_key_exists("inviteCode", $context)) ? (_twig_default_filter((isset($context["inviteCode"]) ? $context["inviteCode"] : null), "")) : ("")))));
                echo "
          </span>
          <div class=\"line\"></div>
        </div>
      ";
            }
            // line 137
            echo "    ";
        } else {
            // line 138
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统暂时关闭注册，请联系管理员"), "html", null, true);
            echo "</div>
    ";
        }
        // line 140
        echo "  </div>
</div>
  ";
        // line 142
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.weixinmob_enabled") == "1")) {
            // line 143
            echo "    ";
            $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("auth/isWeiXin");
            // line 144
            echo "  ";
        }
    }

    // line 147
    public function block_bottom($context, array $blocks = array())
    {
        // line 148
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Default:Mobile/footer-tool-bar.html.twig", "TopxiaWebBundle:Register:index.html.twig", 148)->display(array_merge($context, array("mobile_tool_bar" => "register")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Register:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 148,  363 => 147,  358 => 144,  355 => 143,  353 => 142,  349 => 140,  343 => 138,  340 => 137,  332 => 132,  328 => 130,  326 => 129,  321 => 126,  315 => 124,  313 => 123,  309 => 122,  305 => 121,  296 => 117,  291 => 114,  279 => 109,  274 => 106,  272 => 105,  269 => 104,  260 => 100,  253 => 98,  250 => 97,  247 => 96,  238 => 90,  231 => 88,  222 => 84,  216 => 81,  209 => 80,  206 => 79,  193 => 73,  184 => 69,  178 => 66,  175 => 65,  173 => 64,  166 => 60,  161 => 58,  151 => 53,  146 => 51,  142 => 49,  132 => 44,  127 => 42,  124 => 41,  114 => 36,  109 => 34,  106 => 33,  96 => 28,  91 => 26,  88 => 25,  86 => 24,  83 => 23,  77 => 21,  75 => 20,  70 => 18,  67 => 17,  65 => 16,  59 => 13,  53 => 12,  48 => 9,  45 => 8,  37 => 3,  33 => 1,  31 => 7,  29 => 5,  27 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
