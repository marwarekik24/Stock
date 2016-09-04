<?php

/* svplocationAdminBundle:Clients:index.html.twig */
class __TwigTemplate_a0404bf16c6fc9be45d2d70c3bcdc15831e3114fd19b6ecbea47ebf8b9238e46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("svplocationAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        echo "                  <!-- BEGIN CONTENT BODY -->
                  <div class=\"page-content-wrapper\">
                <div class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->
                    
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class=\"page-title\"> Admin Dashboard
                       
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                    
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class=\"portlet box green\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"fa fa-cogs\"></i>
                                        
                                        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("clients_create");
        echo "\">Ajouter Client</a>
                                    </div>
                                    <div class=\"tools\">
                                        <a href=\"javascript:;\" class=\"collapse\"> </a>
                                        <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                        <a href=\"javascript:;\" class=\"reload\"> </a>
                                        <a href=\"javascript:;\" class=\"remove\"> </a>
                                    </div>
                                </div>
                                <div class=\"portlet-body flip-scroll\">
                                    <table class=\"table table-bordered table-striped table-condensed flip-content\">
                                        <thead class=\"flip-content\">
                                            <tr>
                                                <th> Nom </th>
                                                <th> Prenom </th>
                                                <th class=\"numeric\"> Nom Societe </th>
                                                <th class=\"numeric\"> Matricule fiscale </th>
                                                <th class=\"numeric\"> Nom Projet </th>
                                                <th class=\"numeric\"> Telephone </th>
                                                <th class=\"numeric\"> Email </th>
                                                <th class=\"numeric\"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
   ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 49
            echo "            <tr>
              
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomsociete", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "matriculefiscale", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomprojet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                   
                    <li>
                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clients_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </li>
                      <li>
                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clients_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
                      </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
                  </div>
            ";
    }

    public function getTemplateName()
    {
        return "svplocationAdminBundle:Clients:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 70,  126 => 65,  120 => 62,  112 => 57,  108 => 56,  104 => 55,  100 => 54,  96 => 53,  92 => 52,  88 => 51,  84 => 49,  80 => 48,  53 => 24,  31 => 4,  28 => 3,);
    }
}
