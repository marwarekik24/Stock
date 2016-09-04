<?php

/* svplocationAdminBundle:Commande:index.html.twig */
class __TwigTemplate_c0de4d62a12c6e8f45936ffb8a1fcaf94ad74ebcb610120e76ac88c209258944 extends Twig_Template
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
                        Gestion des locations
                        <i class=\"fa fa-circle\"></i>
                    </li>
                    <li>
                        <span>Liste des locations</span>
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
                                <span class=\"caption-subject bold uppercase\"> Liste des locations</span>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"table-toolbar\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"btn-group\">
                                            <button id=\"add_location\" class=\"btn sbold green\"> Ajouter une location
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

                                        <th>Id cmd</th>
                                        <th>Nom du beneficiaire</th>
                                        <th>Projet</th>
                                        <th>Typecmd</th>
                                        <th>Datereservation</th>
                                        <th>Dateretour</th>
                                        <th>Description</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 68
            echo "                                        <tr class=\"odd gradeX\">
                                           <!-- <td>
                                                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                                    <input type=\"checkbox\" class=\"checkboxes\" value=\"1\" />
                                                    <span></span>
                                                </label>
                                            </td>-->
                                            <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commande_show", array("id" => $this->getAttribute($context["entity"], "idCmd", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idCmd", array()), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idBeneficiaire", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 77
            echo twig_escape_filter($this->env, trim(twig_slice($this->env, $this->getAttribute($context["entity"], "projet", array()), 0, 10)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 78
            echo twig_escape_filter($this->env, trim(twig_slice($this->env, $this->getAttribute($context["entity"], "typeCmd", array()), 0, 10)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 79
            if ($this->getAttribute($context["entity"], "dateReservation", array())) {
                echo twig_escape_filter($this->env, trim(twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateReservation", array()), "Y-m-d H:i:s"), 0, 10)), "html", null, true);
            }
            echo "</td>
                                            <td>";
            // line 80
            if ($this->getAttribute($context["entity"], "dateRetour", array())) {
                echo twig_escape_filter($this->env, trim(twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateRetour", array()), "Y-m-d H:i:s"), 0, 10)), "html", null, true);
            }
            echo "</td>
                                            <td>";
            // line 81
            echo twig_escape_filter($this->env, trim(twig_slice($this->env, $this->getAttribute($context["entity"], "description", array()), 0, 10)), "html", null, true);
            echo "</td>
                                            <td>
                                                <span 
                                                    ";
            // line 84
            if (($this->getAttribute($context["entity"], "statut", array()) == "confirmé")) {
                echo " class=\"label label-sm label-success\"
                                                    ";
            } elseif (($this->getAttribute($context["entity"], "statut", array()) == "en attente")) {
                // line 85
                echo " class=\"label label-sm label-warning\"
                                                    ";
            } elseif (($this->getAttribute($context["entity"], "statut", array()) == "bloqué")) {
                // line 86
                echo " class=\"label label-sm label-danger\"
                                                    ";
            }
            // line 87
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "statut", array()), "html", null, true);
            echo " </span>
                                            </td>
                                            <td>
                                                <div class=\"btn-group\">
                                                    <button class=\"btn btn-xs default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                                        <li>
                                                            <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commande_show", array("id" => $this->getAttribute($context["entity"], "idCmd", array()))), "html", null, true);
            echo "\">
                                                               <i class=\"icon-docs\"></i> Afficher </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commande_edit", array("id" => $this->getAttribute($context["entity"], "idCmd", array()))), "html", null, true);
            echo "\">
                                                               <i class=\"icon-docs\"></i> Modifier </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commande_delete_with_get", array("id" => $this->getAttribute($context["entity"], "idCmd", array()))), "html", null, true);
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
        // line 113
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

    // line 125
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 126
        echo "    <script>
    \$('#add_location').click(function () {

    var route = \"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("location_materiel_0");
        echo "\";
    window.location.href = route;
    });
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/table-datatables-managed.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
";
    }

    public function getTemplateName()
    {
        return "svplocationAdminBundle:Commande:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 139,  240 => 136,  236 => 135,  232 => 134,  224 => 129,  219 => 126,  216 => 125,  202 => 113,  186 => 104,  179 => 100,  172 => 96,  159 => 87,  155 => 86,  151 => 85,  146 => 84,  140 => 81,  134 => 80,  128 => 79,  124 => 78,  120 => 77,  116 => 76,  110 => 75,  101 => 68,  97 => 67,  32 => 4,  29 => 3,);
    }
}
