<?php

/* svplocationAdminBundle:Personnel:edit.html.twig */
class __TwigTemplate_6b3ae3d590e1e5d48e075ef25622dc781b8b80243afa8edcbfbf455f4b7f7303 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <!-- BEGIN CONTENT -->
    <div class=\"page-content-wrapper\">
        <!-- BEGIN CONTENT BODY -->
        <div class=\"page-content\">
            <!-- BEGIN PAGE HEADER-->

            <!-- BEGIN PAGE TITLE-->
            <h3 class=\"page-title\"> SVP | Location

            </h3>
            <!-- END PAGE TITLE-->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class=\"portlet light portlet-fit portlet-form bordered\">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-bubble font-green\"></i>
                                <span class=\"caption-subject font-green bold uppercase\">Modifier Personnel</span>
                            </div>

                        </div>
                        <div class=\"portlet-body\">
                            <!-- BEGIN FORM-->
                            ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                            
                           <div>
                                <div class=\"form-body\">
                                    <div class=\"alert alert-danger display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                    <div class=\"alert alert-success display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> Your form validation is successful! </div>
                                    <div class=\"form-group  margin-top-20\">
                                        
                                        <label class=\"control-label col-md-3\">Nom
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                
                                                 ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            </div>
                                        </div>
                                    </div>
                                            
                                            
                                            
                                            
                                      <div class=\"form-group  margin-top-20\">
                                        
                                        <label class=\"control-label col-md-3\">Prenom
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                
                                                 ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            </div>
                                        </div>
                                    </div>       
                                            
                                            
                                            
                                         <div class=\"form-group  margin-top-20\">
                                        
                                        <label class=\"control-label col-md-3\">Email
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                
                                                 ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            </div>
                                        </div>
                                    </div>    
                                            
                                            
                                     
                                             <div class=\"form-group  margin-top-20\">
                                        
                                        <label class=\"control-label col-md-3\">Telephone
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                
                                                 ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            </div>
                                        </div>
                                    </div>
                                            
                                        <div class=\"form-group  margin-top-20\">
                                        
                                        <label class=\"control-label col-md-3\">Fonction
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                
                                                 ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fonction", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            </div>
                                        </div>
                                    </div>  
                                            
                                            
                                       <div class=\"form-group  margin-top-20\">
                                        
                                        <label class=\"control-label col-md-3\">Matricule Fiscale
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                
                                                 ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "matricule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                                <div class=\"form-actions\">
                                    <div class=\"row\">
                                        <div class=\"col-md-offset-3 col-md-9\">
                                            ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                                            
                                        </div>
                                    </div>
                                </div>
                         ";
        // line 138
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        
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
        return "svplocationAdminBundle:Personnel:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 138,  182 => 133,  171 => 125,  153 => 110,  136 => 96,  117 => 80,  98 => 64,  78 => 47,  58 => 30,  31 => 5,  28 => 4,);
    }
}
