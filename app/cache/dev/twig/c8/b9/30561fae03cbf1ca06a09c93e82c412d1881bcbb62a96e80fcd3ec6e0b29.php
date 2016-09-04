<?php

/* svplocationUserBundle:Registration:registerPersonnelFromAdmin.html.twig */
class __TwigTemplate_c8b930561fae03cbf1ca06a09c93e82c412d1881bcbb62a96e80fcd3ec6e0b29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("svplocationAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "svplocationAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <!-- BEGIN CONTENT -->
    <div class=\"page-content-wrapper\">
        <!-- BEGIN CONTENT BODY -->
        <div class=\"page-content\">
             <!-- BEGIN PAGE BAR -->
            <div class=\"page-bar\">
                <ul class=\"page-breadcrumb\">
                    <li>
                        <span>Ajouter un personnel</span>
                    </li>
                </ul>
            </div><br />
            <!-- END PAGE BAR -->
            <!-- END PAGE TITLE-->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class=\"portlet light portlet-fit portlet-form bordered\">
                        <div class=\"portlet-title\">
                          
                    <div class=\"caption font-red-sunglo\">
                        <i class=\"icon-settings font-red-sunglo\"></i>
                        <span class=\"caption-subject bold uppercase\"> Ajouter un personnel</span>
                    </div>

                        </div>
                        <div class=\"portlet-body\">
                            <!-- BEGIN FORM-->

                            <div>
                               <form action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("personnel_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
   
  

                                <div class=\"form-body\">
                                    <div class=\"alert alert-danger display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                    <div class=\"alert alert-success display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> Your form validation is successful! </div>



                                    <div class=\"row form-group\">
                                        <label class=\"control-label col-md-3\">Nom du personnel : 
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row form-group\">
                                        <label class=\"control-label col-md-3\">Adresse mail : 
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>


                                    <div style=\"display:none;\">
                                    <div class=\"row form-group\">
                                        <label class=\"control-label col-md-3\">Mot de passe : 
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("value" => "personnel"));
        echo "
                                            </div>
                                        </div>
                                    </div>


                                    <div class=\"row form-group\">
                                        <label class=\"control-label col-md-3\">Retaper le mot de passe : 
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("value" => "personnel"));
        echo "
                                            </div>
                                        </div>
                                    </div>  
                                    </div>

                                    <div class=\"row form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-md-offset-3 col-md-9\">
                                              <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END VALIDATION STATES-->
                    </div>
                </div>

            </div>
        </div>
        <!-- END CONTENT BODY -->

        <!-- END CONTENT -->  
    ";
    }

    public function getTemplateName()
    {
        return "svplocationUserBundle:Registration:registerPersonnelFromAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 108,  148 => 102,  136 => 93,  120 => 80,  103 => 66,  88 => 54,  64 => 35,  31 => 4,  28 => 3,);
    }
}
