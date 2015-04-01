<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ef16e03a013be27fbf84d44b05292f0fbc0f73573a22669dc077a969e4124c87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">

                    ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "                    <div style=\"\" id=\"login-alert\" class=\"alert alert-danger alert-error col-sm-10\">
                            ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </div>
                    ";
        }
        // line 17
        echo "
                    <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                        <div class=\"form-group\">
                            <label for=\"username\" class=\"col-lg-3 col-sm-3 control-label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                            <div class=\"col-lg-9 col-sm-9 input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
                            </div>
                        </div>


                        <div class=\"form-group control-group\">
                            <label for=\"password\" class=\"col-lg-3 col-sm-3 control-label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                            <div class=\"col-lg-9 col-sm-9 input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-9\">
                                <div class=\"checkbox control-group\">
                                    <label for=\"remember_me\">
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                        ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group control-group\">
                            <div class=\"controls col-sm-offset-3 col-sm-9\">
                                <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-9\">
                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div>
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">
                        <h2 class=\"panel-title\">Register</h2>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"/app_dev.php/register/\" method=\"POST\" class=\"fos_user_registration_register form-horizontal\">
                            <div id=\"fos_user_registration_form\"><div class=\"form-group\"><label class=\"col-sm-2 control-label required\" for=\"fos_user_registration_form_username\">Username:</label><div class=\"col-sm-10\"><input type=\"text\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" maxlength=\"255\" pattern=\".{2,}\" class=\"form-control\"/></div></div><div class=\"form-group\"><label class=\"col-sm-2 control-label required\" for=\"fos_user_registration_form_email\">Email:</label><div class=\"col-sm-10\"><input type=\"email\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\" class=\"form-control\"/></div></div><div class=\"form-group\"><label class=\"col-sm-2 control-label required\" for=\"fos_user_registration_form_plainPassword_first\">Password:</label><div class=\"col-sm-10\"><input type=\"password\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" class=\"form-control\"/></div></div><div class=\"form-group\"><label class=\"col-sm-2 control-label required\" for=\"fos_user_registration_form_plainPassword_second\">Verification:</label><div class=\"col-sm-10\"><input type=\"password\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" class=\"form-control\"/></div></div>            <input type=\"hidden\" id=\"fos_user_registration_form__token\" name=\"fos_user_registration_form[_token]\" class=\"form-control\" value=\"Cy3Oj3OYoTGKqA8VCq25m2F6Pojkt1MMNLIWL6htZoc\"/></div>
                            <div class=\"form-actions\">
                                <input type=\"submit\" value=\"Register\" class=\"btn btn-success pull-right\"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}

    </style>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 59,  119 => 53,  108 => 45,  92 => 32,  83 => 26,  76 => 22,  70 => 19,  66 => 18,  63 => 17,  57 => 14,  54 => 13,  52 => 12,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
