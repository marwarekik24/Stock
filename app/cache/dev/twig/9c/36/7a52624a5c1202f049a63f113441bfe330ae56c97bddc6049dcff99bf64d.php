<?php

/* svplocationClientBundle:Materiel:louer2.html.twig */
class __TwigTemplate_9c367a52624a5c1202f049a63f113441bfe330ae56c97bddc6049dcff99bf64d extends Twig_Template
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
            \$('#export-btn').click();
            \$('#export2').val(\$('#export').text());
            \$('#submit').click();
            return true;
        }
        ;

        \$('#rent_btn').click(function () {
            \$nb = \$('#quantity').val();
            if ((Number.isInteger(parseInt(\$nb))) && (\$nb > 0)) {
                \$('#table').show();
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

    // line 50
    public function block_head($context, array $blocks = array())
    {
        // line 51
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
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-multi-select/css/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- END THEME LAYOUT STYLES -->


        <link rel=\"stylesheet\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gridSelectDelete/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->
</head>
";
    }

    // line 97
    public function block_content($context, array $blocks = array())
    {
        // line 98
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
        // line 128
        echo $this->env->getExtension('routing')->getPath("demande_location_materiel");
        echo "\"> 
                                <div class=\"col-md-4 bg-grey-steel mt-step-col\">
                                    <div class=\"mt-step-number\">1</div>
                                    <div class=\"mt-step-title uppercase font-grey-cascade\">Entrepôt</div>
                                    <div class=\"mt-step-content font-grey-cascade\">Séléctionner l'entrepôt</div>
                                </div>
                            </a>
                            <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demande_location_materiel_2", array("idEntrep" => (isset($context["idEntrep"]) ? $context["idEntrep"] : $this->getContext($context, "idEntrep")))), "html", null, true);
        echo "\">
                                <div class=\"col-md-4 bg-grey-steel mt-step-col active\">
                                    <div class=\"mt-step-number\">2</div>
                                    <div class=\"mt-step-title uppercase font-grey-cascade\">Louer</div>
                                    <div class=\"mt-step-content font-grey-cascade\">Choisir le materiel à louer</div>
                                </div>
                            </a>
                            <div class=\"col-md-4 bg-grey-steel mt-step-col \">
                                <div class=\"mt-step-number\">3</div>
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
                            ";
        // line 163
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("location_materiel_2", array("idEntrep" => $this->getAttribute((isset($context["entrep"]) ? $context["entrep"] : $this->getContext($context, "entrep")), "idEntrepot", array()))), "id" => "myForm", "method" => "POST", "onsubmit" => "return next();"));
        echo "

                            <div class=\"form-body\">
                                <div class=\"form-group\">
                                    <div class=\"control-label col-md-3\">
                                        <label for=\"single\" class=\"control-label\">Louer un matériel depuis l'entrepôt ";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrep"]) ? $context["entrep"] : $this->getContext($context, "entrep")), "adresse", array()), "html", null, true);
        echo "</label>

                                    </div>
                                    <div class=\" control-label col-md-3\"> 
                                        <select id=\"entrepots\" class=\"form-control select2 select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">


                                            <optgroup label=\"Liste des matériels disponibles\">
                                                ";
        // line 176
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiels"]) ? $context["materiels"] : $this->getContext($context, "materiels")));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 177
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
        // line 179
        echo "                                            </optgroup>
                                        </select>  

                                    </div>
                                    <div class=\"control-label col-md-3\"> 
                                        <input id=\"quantity\" type=\"number\" min=\"1\" step=\"1\" class=\"form-control\" placeholder=\"Quantité\"> 
                                    </div>
                                    <div class=\" control-label col-md-1\"> 
                                        <button id=\"rent_btn\" type=\"button\" class=\"btn green-meadow\">Louer</button>
                                    </div>
                                    <br/>
                                    <br/>
                                </div>
                                <div class=\"form-group\"> 
                                    <br />
                                    <div hidden id=\"table\" class=\"table-editable\">
                                        <table class=\"table\">
                                            <div hidden>
                                                <button  hidden id=\"add_btn\" type=\"button\" class=\"btn green-meadow table-add \">add</button>
                                            </div>
                                            <tr>
                                                <th >Ref globale</th>
                                                <th>Quantité</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <!-- This is our clonable table line -->
                                            <tr class=\"hide\">
                                                <td id=\"nom_mat\">Untitled</td>
                                                <td id=\"quantity_mat\">undefined</td>
                                                <td>
                                                    <span class=\"table-remove table-remove fa fa-remove fa-2x  font-red\"></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <button hidden type=\"button\" id=\"export-btn\" >Export Data</button>  
                                    <button hidden type=\"submit\" id=\"submit\" ></button>  
                                    <div hidden><p  id=\"export\"></p>
                                        ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "json", array()), 'widget', array("id" => "export2"));
        echo "</div>
                                </div>        

                            </div>
                            <div class=\"form-actions\">
                                <div class=\"row\">
                                    <div class=\"col-md-2 col-md-offset-5\">
                                        <button onclick=\"next();\" type=\"button\" class=\"btn blue btn-lg\">Suivant</button>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            ";
        // line 230
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
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

    // line 244
    public function block_scripts($context, array $blocks = array())
    {
        // line 245
        echo "
    <!-- BEGIN CORE PLUGINS -->
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/components-multi-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END THEME LAYOUT SCRIPTS -->


    <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gridSelectDelete/js/index.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
                                            \$(\".select2-selection__placeholder\").html(\"test\");
                                            \$(\".select2-selection__placeholder\").select2({
                                                placeholder: \"test\",
                                                allowClear: true
                                            });
    </script>
";
    }

    public function getTemplateName()
    {
        return "svplocationClientBundle:Materiel:louer2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 273,  441 => 269,  437 => 268,  433 => 267,  427 => 264,  421 => 261,  415 => 258,  411 => 257,  407 => 256,  401 => 253,  397 => 252,  393 => 251,  389 => 250,  385 => 249,  381 => 248,  377 => 247,  373 => 245,  370 => 244,  354 => 230,  350 => 229,  336 => 218,  295 => 179,  284 => 177,  280 => 176,  269 => 168,  261 => 163,  230 => 135,  220 => 128,  188 => 98,  185 => 97,  176 => 91,  166 => 84,  162 => 83,  155 => 79,  151 => 78,  147 => 77,  141 => 74,  137 => 73,  131 => 70,  127 => 69,  123 => 68,  119 => 67,  113 => 64,  109 => 63,  105 => 62,  101 => 61,  89 => 51,  86 => 50,  44 => 11,  37 => 7,  34 => 6,  31 => 5,);
    }
}
