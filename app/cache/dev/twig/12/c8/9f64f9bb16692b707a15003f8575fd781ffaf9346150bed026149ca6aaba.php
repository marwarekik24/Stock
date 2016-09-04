<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_12c89f64f9bb16692b707a15003f8575fd781ffaf9346150bed026149ca6aaba extends Twig_Template
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
        echo "

  

       <form class=\"register-form\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"post\">
                <h3 class=\"font-green\">Sign Up</h3>
                
                <p class=\"hint\"> Enter your account details below: </p>
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                <div class=\"form-actions\">
                    <button type=\"button\" id=\"register-back-btn\" class=\"btn green btn-outline\">Back</button>
                    
                    <input  type=\"submit\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"register-submit-btn\" class=\"btn btn-success uppercase pull-right\" >
                        Submit </input>
                </div>
         
           
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  32 => 9,  25 => 5,  19 => 1,);
    }
}
