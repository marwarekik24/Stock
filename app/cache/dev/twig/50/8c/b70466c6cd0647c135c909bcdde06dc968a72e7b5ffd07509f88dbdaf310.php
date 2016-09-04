<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_508cb70466c6cd0647c135c909bcdde06dc968a72e7b5ffd07509f88dbdaf310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
       
        <meta charset=\"utf-8\" />
        <title> SVP |  Login </title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        
     
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\"/>
       
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
         <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\"/>
         <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\"/>
       
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
         <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
         <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\"/>
       
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/css/login.min.css"), "html", null, true);
        echo "\"/>
       
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->
   
    <body class=\"login\">
       

        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 44
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 45
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo " <div class=\"logo\">
     <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("svplocation_admin");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/img/logo-big.png"), "html", null, true);
        echo "\"/> </a>
</div>


";
        // line 55
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 144
        echo "
         </div>
        <div class=\"copyright\"> 2016 © SVP Location </div>
        <!--[if lt IE 9]>
<script src=\"../assets/global/plugins/respond.min.js\"></script>
<script src=\"../assets/global/plugins/excanvas.min.js\"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
       <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\"/>
       <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"/>
       
       <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\"/>
       
       <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\"/>
       
       <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"/>
       
       <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\"/>
       
       <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"/>
       
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
         <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\"/>
      
         <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\"/>
      
         <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
      
       
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\"></script>
      
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
         <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/login.min.js"), "html", null, true);
        echo "\"></script>
      
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
</html>









";
    }

    // line 55
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 56
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 57
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 59
        echo "
 <div class=\"content\">
            <!-- BEGIN LOGIN FORM -->
            
            <form class=\"login-form\" action=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                 <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <h3 class=\"form-title font-green\">Login</h3>
                <div class=\"alert alert-danger display-hide\">
                    <button class=\"close\" data-close=\"alert\"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class=\"form-group\">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                 
    <label for=\"username\" class=\"control-label visible-ie8 visible-ie9\">
        ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                   
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\"
                           id=\"username\" name=\"_username\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" 
                           /> </div>
                <div class=\"form-group\">
                     <label for=\"password\" class=\"control-label visible-ie8 visible-ie9\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\"
                           id=\"password\" name=\"_password\" required=\"required\"/> </div>
                <div class=\"form-actions\">
                    <input type=\"submit\" class=\"btn green uppercase\"  id=\"_submit\" name=\"_submit\" 
                            value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"></input><br /><br />
                    <label class=\"rememberme check mt-checkbox mt-checkbox-outline\"
                         for=\"remember_me\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>Remember
                        <span></span>
                    </label>
                    <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">Forgot Password?</a><br /><br />
                </div>
               
                 <div class=\"create-account\">
                    <p>
                        <a href=\"\" id=\"register-btn\" class=\"uppercase\">Create an account</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            
            <form class=\"forget-form\" action=\"index.html\" method=\"post\">
                <h3 class=\"font-green\">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class=\"form-group\">
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\" /> </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"back-btn\" class=\"btn green btn-outline\">Back</button>
                    <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <form class=\"register-form\" action=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"post\">
                <h3 class=\"font-green\">Sign Up</h3>
                
                <p class=\"hint\"> Enter your account details below: </p>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Username</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"username\" /> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" id=\"register_password\" placeholder=\"Password\" name=\"password\" /> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Re-type Your Password</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Re-type Your Password\" name=\"rpassword\" /> </div>
                <div class=\"form-group margin-top-20 margin-bottom-20\">
                   
                    <div id=\"register_tnc_error\"> </div>
                </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"register-back-btn\" class=\"btn green btn-outline\">Back</button>
                    
                    <input type=\"submit\" id=\"register-submit-btn\" class=\"btn btn-success uppercase pull-right\"
                            value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                        Submit </input>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
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
        return array (  344 => 137,  320 => 116,  289 => 88,  284 => 86,  275 => 80,  269 => 77,  263 => 74,  250 => 64,  246 => 63,  240 => 59,  234 => 57,  232 => 56,  229 => 55,  208 => 180,  201 => 176,  193 => 171,  188 => 169,  183 => 167,  176 => 163,  171 => 161,  166 => 159,  161 => 157,  156 => 155,  151 => 153,  147 => 152,  137 => 144,  135 => 55,  126 => 51,  123 => 50,  117 => 49,  108 => 46,  103 => 45,  98 => 44,  94 => 43,  80 => 32,  73 => 28,  69 => 27,  62 => 23,  58 => 22,  51 => 18,  47 => 17,  43 => 16,  39 => 15,  35 => 14,  20 => 1,);
    }
}
