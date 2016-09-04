<?php

/* svplocationClientBundle:Materiel:louer3.html.twig */
class __TwigTemplate_be7a144ceee22dd1e99b0c7612f0d9ded1be5a33cf87c228e2ca17734951c610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("svplocationClientBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'scripts_imports' => array($this, 'block_scripts_imports'),
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

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
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
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-multi-select/css/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->


        <!-- END PAGE LEVEL PLUGINS -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->
</head>
";
    }

    // line 45
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 46
        echo "    <script>

        \$(document).ready(function () {
            buildHtmlTable('#jsonTable');
        });

        var myList = \$('#jsonStr').html();

// Builds the HTML Table out of myList.
        function buildHtmlTable(selector) {
            var columns = addAllColumnHeaders(myList, selector);

            for (var i = 0; i < myList.length; i++) {
                var row\$ = \$('<tr/>');
                for (var colIndex = 0; colIndex < columns.length; colIndex++) {
                    var cellValue = myList[i][columns[colIndex]];

                    if (cellValue == null) {
                        cellValue = \"\";
                    }

                    row\$.append(\$('<td/>').html(cellValue));
                }
                \$(selector).append(row\$);
            }
        }

// Adds a header row to the table and returns the set of columns.
// Need to do union of keys from all records as some records may not contain
// all records
        function addAllColumnHeaders(myList, selector)
        {
            var columnSet = [];
            var headerTr\$ = \$('<tr/>');
            for (var i = 0; i < myList.length; i++) {
                var rowHash = myList[i];
                for (var key in rowHash) {
                    if (\$.inArray(key, columnSet) == -1) {
                        columnSet.push(key);
                        headerTr\$.append(\$('<th/>').html(key));
                    }
                }
            }
        }

    </script>
";
    }

    // line 93
    public function block_content($context, array $blocks = array())
    {
        // line 94
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
        // line 124
        echo $this->env->getExtension('routing')->getPath("demande_location_materiel");
        echo "\"> 
                                <div class=\"col-md-4 bg-grey-steel mt-step-col\">
                                    <div class=\"mt-step-number\">1</div>
                                    <div class=\"mt-step-title uppercase font-grey-cascade\">Entrepôt</div>
                                    <div class=\"mt-step-content font-grey-cascade\">Séléctionner l'entrepôt</div>
                                </div>
                            </a>
                            <div class=\"col-md-4 bg-grey-steel mt-step-col\">
                                <div class=\"mt-step-number\">2</div>
                                <div class=\"mt-step-title uppercase font-grey-cascade\">Louer</div>
                                <div class=\"mt-step-content font-grey-cascade\">Choisir le materiel à louer</div>
                            </div>
                            <div class=\"col-md-4 bg-grey-steel mt-step-col active\">
                                <div class=\"mt-step-number\">3</div>
                                <div class=\"mt-step-title uppercase font-grey-cascade\">Confirmer</div>
                                <div class=\"mt-step-content font-grey-cascade\">Confirmer la demande</div>
                            </div>
                        </div></div>


                    <br /><br />
                    <div class=\"portlet light form-fit bordered\">

                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"fa fa-cogs font-green\"></i>
                                <span class=\"caption-subject font-green bold uppercase\">Veuillez confirmer votre demande de location</span>
                            </div>

                        </div>
                        <div class=\"portlet-body form\">
                            <!-- BEGIN FORM-->
                            <form action=\"\" class=\"form-horizontal form-row-seperated\">
                                <div class=\"form-body\">
                                    <div class=\"form-group\">
                                        <div class=\"col-md-9\">
                                            //TOCOMPLETE
                                            <br />
                                            Informations reçues par la méthode poste sous format json  (TEST)
                                            <br />
                                            <div id=\"jsonStr\">
                                                ";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["json"]) ? $context["json"] : $this->getContext($context, "json")), "html", null, true);
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table id=\"jsonTable\" border=\"1\">
                                </table>
                                <div class=\"form-actions\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2 col-md-offset-5\">
                                            <button onclick=\"next()
                                                            ;\" type=\"button\" class=\"btn blue btn-lg\">Demander la location</button>
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

    // line 195
    public function block_scripts($context, array $blocks = array())
    {
        // line 196
        echo "
    <!-- BEGIN CORE PLUGINS -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/components-multi-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END THEME LAYOUT SCRIPTS -->

";
    }

    public function getTemplateName()
    {
        return "svplocationClientBundle:Materiel:louer3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 220,  345 => 219,  341 => 218,  335 => 215,  329 => 212,  323 => 209,  319 => 208,  315 => 207,  309 => 204,  305 => 203,  301 => 202,  297 => 201,  293 => 200,  289 => 199,  285 => 198,  281 => 196,  278 => 195,  246 => 165,  202 => 124,  170 => 94,  167 => 93,  117 => 46,  114 => 45,  100 => 35,  96 => 34,  92 => 33,  86 => 30,  82 => 29,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  34 => 7,  31 => 6,);
    }
}
