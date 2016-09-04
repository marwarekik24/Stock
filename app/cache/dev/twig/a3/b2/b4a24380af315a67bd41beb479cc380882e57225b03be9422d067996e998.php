<?php

/* svplocationAdminBundle:admin:index.html.twig */
class __TwigTemplate_a3b2b4a24380af315a67bd41beb479cc380882e57225b03be9422d067996e998 extends Twig_Template
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
        echo "
    <!-- BEGIN CONTENT -->
    <div class=\"page-content-wrapper\">
        <!-- BEGIN CONTENT BODY -->
        <div  class=\"page-content\">


            <!-- BEGIN PAGE BAR -->
            <div class=\"page-bar\">
                <ul class=\"page-breadcrumb\">
                    <li>
                        <a href=\"index.html\">Accueil</a>
                        <i class=\"fa fa-circle\"></i>
                    </li>

                </ul>
            </div>
            <!-- END PAGE BAR -->
            <div   class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-green-sharp\">
                                    <span data-counter=\"counterup\" data-value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["total_entrepots"]) ? $context["total_entrepots"] : $this->getContext($context, "total_entrepots")), "html", null, true);
        echo "\"></span>
                                    <small class=\"font-green-sharp\"></small>
                                </h3>
                                <small>Entrepôts</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-pie-chart\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-red-haze\">
                                    <span data-counter=\"counterup\" data-value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["total_locations"]) ? $context["total_locations"] : $this->getContext($context, "total_locations")), "html", null, true);
        echo "\"></span>
                                </h3>
                                <small>Locations</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-like\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-blue-sharp\">
                                    <span data-counter=\"counterup\" data-value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["total_materiels"]) ? $context["total_materiels"] : $this->getContext($context, "total_materiels")), "html", null, true);
        echo "\"></span>
                                </h3>
                                <small>Materiels</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-basket\"></i>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-purple-soft\">
                                    <span data-counter=\"counterup\" data-value=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["total_membres"]) ? $context["total_membres"] : $this->getContext($context, "total_membres")), "html", null, true);
        echo "\"></span>
                                </h3>
                                <small>Clients/Personnels</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-user\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div  class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    <div class=\"portlet light portlet-fit bordered\">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-microphone font-dark hide\"></i>
                                <span class=\"caption-subject bold font-dark uppercase\">Liste des rubriques</span>
                                <span class=\"caption-helper\"></span>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-yellow-casablanca\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\"fa fa-user-secret\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Gestions des personnels</div>
                                            <span class=\"mt-head-date\"></span>
                                            <div class=\"mt-head-button\">
                                                <button id=\"personnel_list\" type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Voir la liste</button>
                                                <button id=\"personnel_add\"style=\"margin-top:10px;\" type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-2\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-red-haze\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\"fa fa-users\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Gestions des clients</div>
                                            <span class=\"mt-head-date\"></span>
                                            <div class=\"mt-head-button\">
                                                <button id=\"client_list\"type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Voir la liste</button>
                                                <button id=\"client_add\" style=\"margin-top:10px;\" type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-2\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-blue-dark\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\"fa fa-clone\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Gestion des catégories </div>
                                            <span class=\"mt-head-date\">  </span>
                                            <div class=\"mt-head-button\">
                                                <button id=\"categorie_list\" type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Voir la liste</button>

                                                <button id=\"categorie_add\" style=\"margin-top:10px;\" type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Ajouter</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class=\"col-md-2\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-blue-hoki\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\"icon-diamond\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Gestions des matériels </div>
                                            <span class=\"mt-head-date\"> </span>
                                            <div class=\"mt-head-button\">
                                                <button   id=\"materiel_list\"  type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Voir la liste</button>
                                                <button  id=\"materiel_add\"  style=\"margin-top:10px;\" type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Ajouter</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"col-md-2\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-green-seagreen\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\"fa fa-truck\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Gestion des entrepôts </div>
                                            <span class=\"mt-head-date\"> </span>
                                            <div class=\"mt-head-button\">
                                                <button id=\"entrepot_list\" type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Voir la liste</button>
                                                <button id=\"entrepot_add\" style=\"margin-top:10px;\" type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-2\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-green-haze\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\"fa fa-pencil-square-o\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Gestion des locations </div>
                                            <span class=\"mt-head-date\"> </span>
                                            <div class=\"mt-head-button\">
                                                <button id=\"location_list\" type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Voir la liste</button>
                                                <button id=\"location_add\" style=\"margin-top:10px;\" type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Affecter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
";
    }

    // line 209
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 210
        echo "    
    <script>
      \$('#client_list').click(function () {

    var route = \"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("clients");
        echo "\";
    window.location.href = route;
    });
    
      \$('#client_add').click(function () {

    var route = \"";
        // line 220
        echo $this->env->getExtension('routing')->getPath("clients_register");
        echo "\";
    window.location.href = route;
    });
    
      \$('#personnel_list').click(function () {

    var route = \"";
        // line 226
        echo $this->env->getExtension('routing')->getPath("personnel");
        echo "\";
    window.location.href = route;
    });
    
      \$('#personnel_add').click(function () {

    var route = \"";
        // line 232
        echo $this->env->getExtension('routing')->getPath("personnel_register");
        echo "\";
    window.location.href = route;
    });
    
      \$('#categorie_list').click(function () {

    var route = \"";
        // line 238
        echo $this->env->getExtension('routing')->getPath("categorie");
        echo "\";
    window.location.href = route;
    });
    
      \$('#categorie_add').click(function () {

    var route = \"";
        // line 244
        echo $this->env->getExtension('routing')->getPath("categorie_new");
        echo "\";
    window.location.href = route;
    });
    
      \$('#materiel_list').click(function () {

    var route = \"";
        // line 250
        echo $this->env->getExtension('routing')->getPath("materiel");
        echo "\";
    window.location.href = route;
    });
    
      \$('#materiel_add').click(function () {

    var route = \"";
        // line 256
        echo $this->env->getExtension('routing')->getPath("materiel_new");
        echo "\";
    window.location.href = route;
    });
      \$('#entrepot_list').click(function () {

    var route = \"";
        // line 261
        echo $this->env->getExtension('routing')->getPath("entrepot");
        echo "\";
    window.location.href = route;
    });
    
      \$('#entrepot_add').click(function () {

    var route = \"";
        // line 267
        echo $this->env->getExtension('routing')->getPath("entrepot_create");
        echo "\";
    window.location.href = route;
    });
    
       \$('#location_list').click(function () {

    var route = \"";
        // line 273
        echo $this->env->getExtension('routing')->getPath("commande");
        echo "\";
    window.location.href = route;
    });
    
      \$('#location_add').click(function () {

    var route = \"";
        // line 279
        echo $this->env->getExtension('routing')->getPath("location_materiel_0");
        echo "\";
    window.location.href = route;
    });
    </script>
    
    <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

";
    }

    public function getTemplateName()
    {
        return "svplocationAdminBundle:admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 285,  363 => 284,  355 => 279,  346 => 273,  337 => 267,  328 => 261,  320 => 256,  311 => 250,  302 => 244,  293 => 238,  284 => 232,  275 => 226,  266 => 220,  257 => 214,  251 => 210,  248 => 209,  114 => 75,  95 => 59,  77 => 44,  58 => 28,  32 => 4,  29 => 3,);
    }
}
