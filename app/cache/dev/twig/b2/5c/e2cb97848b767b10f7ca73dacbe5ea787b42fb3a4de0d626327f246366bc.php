<?php

/* svplocationUserBundle:user:indexPersonnel.html.twig */
class __TwigTemplate_b25ce2cb97848b767b10f7ca73dacbe5ea787b42fb3a4de0d626327f246366bc extends Twig_Template
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
                        <span>Liste des personnels</span>
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
                                <span class=\"caption-subject bold uppercase\"> Liste des personnels</span>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"table-toolbar\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"btn-group\">
                                            <button id=\"addbtn\" class=\"btn sbold green\"> Ajouter un personnel
                                                <i class=\"fa fa-plus\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <table class=\"table table-striped table-bordered table-hover table-checkable order-column\" id=\"table_1\">
                                <thead>
                                    <tr>
                                        <th>Id du personnel</th>
                                        <th>Nom d'utilisateur</th>
                                        <th>Adresse Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 52
            echo "                                        <tr class=\"odd gradeX\">
                                           
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                                            
                                            
                                            <td>
                                                <div class=\"btn-group\">
                                                    <button class=\"btn btn-xs default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                                       
                                                       <!-- <li>
                                                            <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personnel_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                               <i class=\"icon-docs\"></i> Modifier </a>
                                                        </li>-->
                                                        <li>
                                                            <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personnel_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                               <i class=\"icon-docs\"></i> Supprimer </a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </td>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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

    // line 91
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 92
        echo "    <script>
    \$('#addbtn').click(function () {

    var route = \"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("personnel_register");
        echo "\";
    window.location.href = route;
    });
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/table-datatables-managed.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
";
    }

    public function getTemplateName()
    {
        return "svplocationUserBundle:user:indexPersonnel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 105,  171 => 102,  167 => 101,  163 => 100,  155 => 95,  150 => 92,  147 => 91,  133 => 79,  118 => 71,  111 => 67,  97 => 56,  93 => 55,  89 => 54,  85 => 52,  81 => 51,  32 => 4,  29 => 3,);
    }
}
