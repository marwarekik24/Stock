<?php

/* svplocationAdminBundle:Materiel:listLocation.html.twig */
class __TwigTemplate_b0ea24d3cf1b40aa36fd42785bb0baec0fbe6090620e377f83000e9066dd1793 extends Twig_Template
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
        echo "                  <!-- BEGIN CONTENT BODY -->
                  <div class=\"page-content-wrapper\">
                <div class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->
                    
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class=\"page-title\"> Admin Dashboard
                       
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                    
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                           <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
                  </div>
            ";
    }

    public function getTemplateName()
    {
        return "svplocationAdminBundle:Materiel:listLocation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
