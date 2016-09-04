<?php

/* svplocationAdminBundle:Materiel:louer0.html.twig */
class __TwigTemplate_dcb09c4e9660e36fc938d87534476d076d2487bda957889329cc9d690a21f193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("svplocationAdminBundle::layout.html.twig");

        $this->blocks = array(
            'header_imports' => array($this, 'block_header_imports'),
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
        echo $this->env->getExtension('routing')->getPath("location_materiel_1", array("idClient" => "0"));
        echo "\";
            route = route.substr(0, route.length - 1);
            route = route + \$(\"#clients\").val();
            window.location.href = route;
            return route;
        }
        ;
    </script>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">

            <!-- BEGIN PAGE BAR -->
            <div class=\"page-bar\">
                <ul class=\"page-breadcrumb\">
                    <li>
                        Gestion des locations
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
                            <div class=\"caption-desc font-grey-cascade\">Pour affecter une location, veuillez suivre les étapes suivantes </div>
                            <br> </div>
                        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("location_materiel_0");
        echo "\"> 
                            <div class=\"col-md-3 bg-grey-steel mt-step-col active\">
                                <div class=\"mt-step-number\">1</div>
                                <div class=\"mt-step-title uppercase font-grey-cascade\">Client</div>
                                <div class=\"mt-step-content font-grey-cascade\">Séléctionner un client</div>
                            </div>
                        </a>
                        <div class=\"col-md-3 bg-grey-steel mt-step-col\">
                            <div class=\"mt-step-number\">2</div>
                            <div class=\"mt-step-title uppercase font-grey-cascade\">Entrepôt</div>
                            <div class=\"mt-step-content font-grey-cascade\">Séléctionner l'entrepôt</div>
                        </div>
                        <div class=\"col-md-3 bg-grey-steel mt-step-col\">
                            <div class=\"mt-step-number\">3</div>
                            <div class=\"mt-step-title uppercase font-grey-cascade\">Louer</div>
                            <div class=\"mt-step-content font-grey-cascade\">Choisir le materiel à louer</div>
                        </div>
                        <div class=\"col-md-3 bg-grey-steel mt-step-col \">
                            <div class=\"mt-step-number\">4</div>
                            <div class=\"mt-step-title uppercase font-grey-cascade\">Confirmer</div>
                            <div class=\"mt-step-content font-grey-cascade\">Confirmer la location</div>
                        </div>
                    </div>   
                </div>


                <br /><br />

                <div class=\"portlet light bordered\">
                    <div class=\"portlet-title\">
                        <div class=\"caption\">
                            <i class=\"fa fa-user font-green\"></i>
                            <span class=\"caption-subject font-green bold uppercase\">Sélectionner un bénéficiaire (client ou personnel)</span>
                        </div>

                    </div>
                    <div class=\"portlet-body\">
                        <form  onsubmit=\"next()\">
                            <div class=\"form-group\">
                                <select id=\"clients\" class=\"form-control select2 select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">

                                    <optgroup label=\"Liste des clients/personnels\">
                                        ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["currentClient"]) {
            // line 93
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["currentClient"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_convert_encoding(trim(twig_slice($this->env, $this->getAttribute($context["currentClient"], "username", array()), 0, 50)), "UTF-8", "HTML-ENTITIES"), "html", null, true);
            echo "</option>                                            
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentClient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
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

    // line 119
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 120
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/components-select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

";
    }

    public function getTemplateName()
    {
        return "svplocationAdminBundle:Materiel:louer0.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 125,  182 => 121,  179 => 120,  176 => 119,  151 => 95,  140 => 93,  136 => 92,  91 => 50,  64 => 25,  61 => 24,  48 => 14,  40 => 9,  36 => 8,  33 => 7,  30 => 6,);
    }
}
