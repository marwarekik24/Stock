<?php

/* svplocationClientBundle:Materiel:louer2_oldVersion.html.twig */
class __TwigTemplate_7e6c05428e552ee7328d2d264da953ab96944dbf206afc3556a330065eaf70de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("svplocationClientBundle::layout.html.twig");

        $this->blocks = array(
            'scripts_imports' => array($this, 'block_scripts_imports'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "svplocationClientBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 6
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/components-select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
        function next() {
            var route = \"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("location_materiel_3", array("idEntrep" => "0"));
        echo "\";
            route = route.substr(0, route.length - 1);
            route = route + ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrep"]) ? $context["entrep"] : $this->getContext($context, "entrep")), "idEntrepot", array()), "html", null, true);
        echo ";
            window.location.href = route;
            return route;
        }
        ;
        \$('#rent_btn').click(function () {

            \$nb = \$('#quantity').val();
            if (Number.isInteger(parseInt(\$nb))) {
                \$('#nom_mat').text(\$(\"#select2-entrepots-container\").html());
                \$('#quantity_mat').text(\$('#quantity').val());
                \$('#add_btn').click();
            } else {
                alert(\"Quantité invalide!\");
            }

        });

        \$i = 0;
        \$('#my_multi_select1').multiSelect({
            afterSelect: function (values) {

                alert(\"Select value: \" + values);
            },
            afterDeselect: function (values) {
                alert(\"Deselect value: \" + values);
            },
            selectableFooter: \"<h6> <div class='custom-header'>Matériel(s) disponible(s)</div></h6> \",
            selectionFooter: \"<h6> <div class='custom-header'>Matériel(s) choisi(s)</div></h6> \"

        });
    </script>
";
    }

    // line 52
    public function block_head($context, array $blocks = array())
    {
        // line 53
        echo "    <head>
        <meta charset=\"utf-8\" />
        <title>SvpLocation | Client</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-multi-select/css/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- END THEME LAYOUT STYLES -->


        <link rel=\"stylesheet\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gridSelectDelete/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->
</head>
";
    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        // line 100
        echo "    <!-- BEGIN CONTENT -->
    <div class=\"page-content-wrapper\">
        <!-- BEGIN CONTENT BODY -->
        <div class=\"page-content\">
            <!-- BEGIN PAGE HEADER-->

            <!-- BEGIN PAGE BAR -->
            <div class=\"page-bar\">
                <ul class=\"page-breadcrumb\">
                    <li>
                        Gestion materiel
                        <i class=\"fa fa-circle\"></i>
                    </li>
                    <li>
                        <span>Location</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <div class=\"row\">
                <div class=\"col-md-12\">

                    <div class=\"mt-element-step\">
                        <br>
                        <br>
                        <div class=\"row step-background-thin\">
                            <div class=\"mt-step-desc\">
                                <div class=\"font-dark bold uppercase\">Location materiel</div>
                                <div class=\"caption-desc font-grey-cascade\">Pour demander une location, veuillez suivre les étapes suivantes </div>
                                <br> </div>
                            <a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("location_materiel");
        echo "\"> 
                                <div class=\"col-md-3 bg-grey-steel mt-step-col\">
                                    <div class=\"mt-step-number\">1</div>
                                    <div class=\"mt-step-title uppercase font-grey-cascade\">Entrepôt</div>
                                    <div class=\"mt-step-content font-grey-cascade\">Séléctionner l'entrepôt</div>
                                </div>
                            </a>
                            <div class=\"col-md-3 bg-grey-steel mt-step-col active\">
                                <div class=\"mt-step-number\">2</div>
                                <div class=\"mt-step-title uppercase font-grey-cascade\">Materiel</div>
                                <div class=\"mt-step-content font-grey-cascade\">Choisir le materiel</div>
                            </div>
                            <div class=\"col-md-3 bg-grey-steel mt-step-col \">
                                <div class=\"mt-step-number\">3</div>
                                <div class=\"mt-step-title uppercase font-grey-cascade\">Louer</div>
                                <div class=\"mt-step-content font-grey-cascade\">Demander une location</div>
                            </div>
                            <div class=\"col-md-3 bg-grey-steel mt-step-col \">
                                <div class=\"mt-step-number\">4</div>
                                <div class=\"mt-step-title uppercase font-grey-cascade\">Confirmer</div>
                                <div class=\"mt-step-content font-grey-cascade\">Confirmer la demande</div>
                            </div>
                        </div>
                    </div>


                    <br /><br />
                    <div class=\"portlet light form-fit bordered\">

                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"fa fa-cogs font-green\"></i>
                                <span class=\"caption-subject font-green bold uppercase\">Veuillez séléctionner les matériels à louer</span>
                            </div>

                        </div>
                        <div class=\"portlet-body form\">
                            <!-- BEGIN FORM-->
                            <form action=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("location_materiel_3", array("idEntrep" => (isset($context["idEntrep"]) ? $context["idEntrep"] : $this->getContext($context, "idEntrep")))), "html", null, true);
        echo "\" class=\"form-horizontal form-row-seperated\">

                                <div class=\"form-body\">
                                    <div class=\"form-group\">
                                        <div class=\"control-label col-md-3\">
                                            <label for=\"single\" class=\"control-label\">Louer un matériel depuis l'entrepôt ";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrep"]) ? $context["entrep"] : $this->getContext($context, "entrep")), "adresse", array()), "html", null, true);
        echo "</label>

                                        </div>
                                        <div class=\" control-label col-md-3\"> 
                                            <select id=\"entrepots\" class=\"form-control select2 select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">


                                                <optgroup label=\"Liste des matériels disponibles\">
                                                    <option>Mat1</option>
                                                    ";
        // line 182
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiels"]) ? $context["materiels"] : $this->getContext($context, "materiels")));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 183
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "refGlobale", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, trim(twig_slice($this->env, $this->getAttribute($context["materiel"], "refGlobale", array()), 0, 50)), "html", null, true);
            echo "</option>                                            
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                                                </optgroup>
                                            </select>  

                                        </div>
                                        <div class=\"control-label col-md-3\"> 
                                            <input id=\"quantity\" type=\"number\" min=\"1\" step=\"1\" class=\"form-control\" placeholder=\"Quantité\"> 

                                        </div>
                                        <div class=\" control-label col-md-1\"> 

                                            <button id=\"rent_btn\" type=\"button\" class=\"btn green-meadow\">Louer</button>

                                        </div>
                                    </div>









                                    <div class=\"form-group\">                   
                                        <div id=\"table\" class=\"table-editable\">
                                            <table class=\"table\">
                                                <div hidden>
                                                    <button  hidden id=\"add_btn\" type=\"button\" class=\"btn green-meadow table-add \">add</button>
                                                </div>
                                                <tr>
                                                    <th >Nom du matériel</th>
                                                    <th>Quantité</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td contenteditable=\"true\">Stir Fry</td>
                                                    <td contenteditable=\"true\">stir-fry</td>
                                                    <td>
                                                        <span class=\"table-remove glyphicon glyphicon-remove\"></span>
                                                    </td>
                                                </tr>
                                                <!-- This is our clonable table line -->
                                                <tr class=\"hide\">
                                                    <td id=\"nom_mat\" contenteditable=\"true\">Untitled</td>
                                                    <td id=\"quantity_mat\" contenteditable=\"true\">undefined</td>
                                                    <td>
                                                        <span class=\"table-remove glyphicon glyphicon-remove\"></span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <button id=\"export-btn\" >Export Data</button>
                                        <p id=\"export\"></p>          


                                    </div>                   












                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3\">Liste des matériels dans l'entrepôt ";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrep"]) ? $context["entrep"] : $this->getContext($context, "entrep")), "adresse", array()), "html", null, true);
        echo "</label>
                                        <div class=\"col-md-9\">
                                            <select multiple=\"multiple\" class=\"multi-select\" id=\"my_multi_select1\" name=\"my_multi_select1[]\">
                                                <option>Mat1</option>
                                                <option>Mat1</option>
                                                ";
        // line 261
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiels"]) ? $context["materiels"] : $this->getContext($context, "materiels")));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 262
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "refGlobale", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, trim(twig_slice($this->env, $this->getAttribute($context["materiel"], "refGlobale", array()), 0, 50)), "html", null, true);
            echo "</option>                                            
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-actions\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2 col-md-offset-5\">
                                            <button onclick=\"next();\" type=\"button\" class=\"btn blue btn-lg\">Suivant</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>

";
    }

    // line 290
    public function block_scripts($context, array $blocks = array())
    {
        // line 291
        echo "
    <!-- BEGIN CORE PLUGINS -->
    <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/components-multi-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END THEME LAYOUT SCRIPTS -->


    <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gridSelectDelete/js/index.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

";
    }

    public function getTemplateName()
    {
        return "svplocationClientBundle:Materiel:louer2_oldVersion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 319,  498 => 315,  494 => 314,  490 => 313,  484 => 310,  478 => 307,  472 => 304,  468 => 303,  464 => 302,  458 => 299,  454 => 298,  450 => 297,  446 => 296,  442 => 295,  438 => 294,  434 => 293,  430 => 291,  427 => 290,  400 => 264,  389 => 262,  385 => 261,  377 => 256,  304 => 185,  293 => 183,  289 => 182,  277 => 173,  269 => 168,  228 => 130,  196 => 100,  193 => 99,  184 => 93,  174 => 86,  170 => 85,  163 => 81,  159 => 80,  155 => 79,  149 => 76,  145 => 75,  139 => 72,  135 => 71,  131 => 70,  127 => 69,  121 => 66,  117 => 65,  113 => 64,  109 => 63,  97 => 53,  94 => 52,  57 => 18,  52 => 16,  44 => 11,  37 => 7,  34 => 6,  31 => 5,);
    }
}
