<?php

/* svplocationAdminBundle:Commande:edit.html.twig */
class __TwigTemplate_ec8c09930a6a46a90f2f18363b6d4936f62ed9b207c4d51d0732a10685ac50a1 extends Twig_Template
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
                        Gestion des locations
                        <i class=\"fa fa-circle\"></i>
                    </li>
                    <li>
                        <span>Liste des locations</span>
                        <i class=\"fa fa-circle\"></i>
                    </li>
                    <li>
                        <span>Modifier une location</span>
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
                        <span class=\"caption-subject bold uppercase\"> Modifier la location </span>
                    </div>

                        </div>
                        <div class=\"portlet-body\">
                            <!-- BEGIN FORM-->

                            <div>
                                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                                <div class=\"form-body\">
                                    <div class=\"alert alert-danger display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                    <div class=\"alert alert-success display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> Your form validation is successful! </div>



                                   
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Beneficiaire
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\" style=\"margin-top:5px;\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idbeneficiaire", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Projet
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "projet", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                            
                                            
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Type de commande
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeCmd", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>      
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Date de reservation
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateReservation", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>   
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Date du retour
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateRetour", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Description
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Statut
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\" style=\"margin-top:5px;\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "statut", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-md-offset-3 col-md-9\">
                                                ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                                ";
        // line 144
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
        return "svplocationAdminBundle:Commande:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 144,  199 => 143,  189 => 136,  178 => 128,  164 => 117,  150 => 106,  136 => 95,  122 => 84,  106 => 71,  92 => 60,  72 => 43,  31 => 4,  28 => 3,);
    }
}
