<?php

/* svplocationClientBundle:Materiel:louer1.html.twig */
class __TwigTemplate_1ea46a1f268b1f9944b6129787551fd2af7c2245256f0bdd73b39a8e113c8de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("svplocationClientBundle::layout.html.twig");

        $this->blocks = array(
            'header_imports' => array($this, 'block_header_imports'),
            'content' => array($this, 'block_content'),
            'scripts_imports' => array($this, 'block_scripts_imports'),
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
    public function block_header_imports($context, array $blocks = array())
    {
        // line 7
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL PLUGINS -->
    <script>

        function next() {
            var route = \"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("demande_location_materiel_2", array("idEntrep" => "0"));
        echo "\";
            route = route.substr(0, route.length - 1);
            route = route + \$(\"#entrepots\").val();
            window.location.href = route;
            return route;
        };
    </script>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">

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
            <div class=\"portlet-body\">
                <div class=\"mt-element-step\">
                    <br>
                    <br>
             <div class=\"row step-background-thin\">
                            <div class=\"mt-step-desc\">
                                <div class=\"font-dark bold uppercase\">Location materiel</div>
                                <div class=\"caption-desc font-grey-cascade\">Pour demander une location, veuillez suivre les étapes suivantes </div>
                                <br> </div>
                            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("demande_location_materiel");
        echo "\"> 
                                <div class=\"col-md-4 bg-grey-steel mt-step-col active\">
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
                            <div class=\"col-md-4 bg-grey-steel mt-step-col \">
                                <div class=\"mt-step-number\">3</div>
                                <div class=\"mt-step-title uppercase font-grey-cascade\">Confirmer</div>
                                <div class=\"mt-step-content font-grey-cascade\">Confirmer la demande</div>
                            </div>
                        </div>   </div>


                <br /><br />

                <div class=\"portlet light bordered\">
                    <div class=\"portlet-title\">
                        <div class=\"caption\">
                            <i class=\"fa fa-truck font-green\"></i>
                            <span class=\"caption-subject font-green bold uppercase\">Séléctionner un entrepôt</span>
                        </div>

                    </div>
                    <div class=\"portlet-body\">
                        <form  onsubmit=\"next()\">
                            <div class=\"form-group\">
                                <select id=\"entrepots\" class=\"form-control select2 select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">

                                    <optgroup label=\"Liste des Entrepôts\">
                                        ";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entrepots"]) ? $context["entrepots"] : $this->getContext($context, "entrepots")));
        foreach ($context['_seq'] as $context["_key"] => $context["currentEntrepot"]) {
            // line 86
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["currentEntrepot"], "idEntrepot", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_convert_encoding(trim(twig_slice($this->env, $this->getAttribute($context["currentEntrepot"], "adresse", array()), 0, 50)), "UTF-8", "HTML-ENTITIES"), "html", null, true);
            echo "</option>                                            
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentEntrepot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                    </optgroup>
                                </select>  

                            </div>

                            <div class=\"form-actions\">
                                <div class=\"row\">
                                    <div class=\"col-md-2 col-md-offset-5\">
                                        <button onclick=\"next();\" type=\"button\" class=\"btn blue btn-lg\">Suivant</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>
";
    }

    // line 112
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 113
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/components-select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

";
    }

    public function getTemplateName()
    {
        return "svplocationClientBundle:Materiel:louer1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 118,  175 => 114,  172 => 113,  169 => 112,  144 => 88,  133 => 86,  129 => 85,  90 => 49,  63 => 24,  60 => 23,  48 => 14,  40 => 9,  36 => 8,  33 => 7,  30 => 6,);
    }
}
