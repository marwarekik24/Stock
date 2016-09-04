<?php

/* svplocationAdminBundle:Entrepot:index.html.twig */
class __TwigTemplate_4f08b88c255cd637ab9936e8285b01753f9cb46c15c59c20ff36f816bcd96fdc extends Twig_Template
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
                        <span>Liste des entrepôts</span>
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
                                <span class=\"caption-subject bold uppercase\"> Liste des entrepôts</span>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"table-toolbar\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"btn-group\">
                                            <button id=\"addbtn\" class=\"btn sbold green\"> Ajouter un entrepôt
                                                <i class=\"fa fa-plus\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <table class=\"table table-striped table-bordered table-hover table-checkable order-column\" id=\"table_1\">
                                <thead>
                                    <tr>
                                      <!--  <th>
                                            <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                                <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#sample_1 .checkboxes\" />
                                                <span></span>
                                            </label>
                                        </th>-->

                                        <th>Id entrepôt</th>
                                        <th>Adresse de l'entrepôt</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 58
            echo "                                        <tr class=\"odd gradeX\">
                                           
                                            <td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commande_show", array("id" => $this->getAttribute($context["entity"], "idEntrepot", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEntrepot", array()), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                                            
                                            
                                            <td>
                                                <div class=\"btn-group\">
                                                    <button class=\"btn btn-xs default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                                       
                                                        <li>
                                                            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entrepot_edit", array("id" => $this->getAttribute($context["entity"], "idEntrepot", array()))), "html", null, true);
            echo "\">
                                                               <i class=\"icon-docs\"></i> Modifier </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entrepot_delete", array("id" => $this->getAttribute($context["entity"], "idEntrepot", array()))), "html", null, true);
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
        // line 85
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

    // line 97
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 98
        echo "    <script>
    \$('#addbtn').click(function () {

    var route = \"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("entrepot_create");
        echo "\";
    window.location.href = route;
    });
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/table-datatables-managed.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
";
    }

    public function getTemplateName()
    {
        return "svplocationAdminBundle:Entrepot:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 111,  176 => 108,  172 => 107,  168 => 106,  160 => 101,  155 => 98,  152 => 97,  138 => 85,  122 => 76,  115 => 72,  101 => 61,  95 => 60,  91 => 58,  87 => 57,  32 => 4,  29 => 3,);
    }
}
