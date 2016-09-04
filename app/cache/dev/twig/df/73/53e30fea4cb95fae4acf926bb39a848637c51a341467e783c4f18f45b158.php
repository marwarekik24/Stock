<?php

/* svplocationAdminBundle:Categorie:new.html.twig */
class __TwigTemplate_df7353e30fea4cb95fae4acf926bb39a848637c51a341467e783c4f18f45b158 extends Twig_Template
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
                        Gestion des catégories
                        <i class=\"fa fa-circle\"></i>
                    </li>
                    <li>
                        <span>Ajouter une catégorie</span>
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
                        <span class=\"caption-subject bold uppercase\"> Ajouter une catégorie </span>
                    </div>

                        </div>
                        <div class=\"portlet-body\">
                            <!-- BEGIN FORM-->

                            <div>
                                ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                                <div class=\"form-body\">
                                    <div class=\"alert alert-danger display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                    <div class=\"alert alert-success display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> Your form validation is successful! </div>



                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Nom de la catégorie
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Référence
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "refCat", array()), 'widget');
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
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-md-offset-3 col-md-9\">
                                                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 93
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        return "svplocationAdminBundle:Categorie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 93,  128 => 87,  117 => 79,  102 => 67,  87 => 55,  68 => 39,  31 => 4,  28 => 3,);
    }
}
