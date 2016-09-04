<?php

/* svplocationAdminBundle:Categorie:edit.html.twig */
class __TwigTemplate_32165a5d2f709449bc2387298e0d86f7cbd84ad18cad6126839be47d20cfc3b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("svplocationAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
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
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class=\"portlet light portlet-fit portlet-form bordered\">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-bubble font-green\"></i>
                                <span class=\"caption-subject font-green bold uppercase\">Modification de la catégorie</span>
                            </div>

                        </div>
                        <div class=\"portlet-body\">
                            <!-- BEGIN FORM-->
                            ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                            
                           <div>
                                <div class=\"form-body\">
                                    <div class=\"alert alert-danger display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                    <div class=\"alert alert-success display-hide\">
                                        <button class=\"close\" data-close=\"alert\"></button> Your form validation is successful! </div>
                                   






                                   <div class=\"row form-group  margin-top-20\">
                                        
                                        <label class=\"control-label col-md-3\">Reference
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                
                                                  ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "refCat", array()), 'form');
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    
                                   <div class=\"row form-group  margin-top-20\">
                                        
                                        <label class=\"control-label col-md-3\">Nom 
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                
                                                  ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'form');
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    
                                   <div class=\"row form-group  margin-top-20\">
                                        
                                        <label class=\"control-label col-md-3\">description 
                                            <span class=\"required\"> * </span>
                                        </label>
                                        <div class=\"col-md-4\">
                                            <div class=\"input-icon right\">
                                                <i class=\"fa\"></i>
                                                
                                                  ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'form');
        echo "
                                            </div>
                                        </div>
                                    </div>

                                    
                                        



                                <div class=\"form-actions\">
                                    <div class=\"row\">
                                        
                                        <div class=\"col-md-offset-3 col-md-9\">
                                          <input class=\"btn btn-primary\" type=\"submit\" value=\"Modifier\"/>
                                        </div>
                                    </div>
                                </div>

                          <div hidden>
                        \t ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                         </div>
                         ";
        // line 98
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

    // line 121
    public function block_body($context, array $blocks = array())
    {
        // line 122
        echo "<h1>Categorie edit</h1>

    ";
        // line 124
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("categorie");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 132
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "svplocationAdminBundle:Categorie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 132,  177 => 128,  170 => 124,  166 => 122,  163 => 121,  143 => 98,  138 => 96,  115 => 76,  97 => 61,  79 => 46,  52 => 22,  32 => 4,  29 => 3,);
    }
}
