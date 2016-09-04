<?php

/* svplocationAdminBundle:Categorie:index.html.twig */
class __TwigTemplate_f06b40905887751ff4639a532fda42b82d2739e9da2835fe6f64de0c7ed22709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("svplocationAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts_imports' => array($this, 'block_scripts_imports'),
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
        echo "    <!-- BEGIN CONTENT BODY -->
    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            
             <div class=\"page-bar\">
                <ul class=\"page-breadcrumb\">
                    <li>
                        <span>Liste des catégories</span>
                    </li>
                </ul>
            </div><br />
            
            
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class=\"portlet light bordered\">
                        <div class=\"portlet-title\">
                            <div class=\"caption font-dark\">
                                <i class=\"icon-settings font-dark\"></i>
                                <span class=\"caption-subject bold uppercase\"> Liste des catégories</span>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"table-toolbar\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"btn-group\">
                                            <button id=\"addbtn\" class=\"btn sbold green\"> Ajouter une catégorie
                                                <i class=\"fa fa-plus\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <table class=\"table table-striped table-bordered table-hover table-checkable order-column\" id=\"table_1\">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nom de la catégorie</th>
                                        <th>Description</th>
                                        <th>Reference catégorie</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 53
            echo "                                        <tr class=\"odd gradeX\">
                                           
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "refCat", array()), "html", null, true);
            echo "</td>
                                            
                                            
                                            <td>
                                                <div class=\"btn-group\">
                                                    <button class=\"btn btn-xs default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                                       
                                                        <li>
                                                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                               <i class=\"icon-docs\"></i> Modifier </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_delete_with_get", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                               <i class=\"icon-docs\"></i> Supprimer </a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
";
    }

    // line 94
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 95
        echo "    <script>
    \$('#addbtn').click(function () {

    var route = \"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("categorie_new");
        echo "\";
    window.location.href = route;
    });
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/table-datatables-managed.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
";
    }

    public function getTemplateName()
    {
        return "svplocationAdminBundle:Categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 108,  177 => 105,  173 => 104,  169 => 103,  161 => 98,  156 => 95,  153 => 94,  139 => 82,  123 => 73,  116 => 69,  102 => 58,  98 => 57,  94 => 56,  90 => 55,  86 => 53,  82 => 52,  32 => 4,  29 => 3,);
    }
}
