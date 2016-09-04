<?php

/* svplocationAdminBundle:Materiel:new.html.twig */
class __TwigTemplate_53f11bc7c26398f6035578725f3896a31c79dff209c8ed1dc5d033d23ffcb7cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("svplocationAdminBundle::layout.html.twig");

        $this->blocks = array(
            'head_imports' => array($this, 'block_head_imports'),
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
    public function block_head_imports($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <!-- BEGIN CONTENT BODY -->
    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            <!-- BEGIN PAGE HEADER-->
            <div class=\"page-header\">
                <button style=\"margin-right: 15%;\"type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#QR-Code\">Saisie du code à barre via webcam</button>

            </div>
            <div class=\"container\">

                <div id=\"QR-Code\" class=\"container collapse\" style=\"padding-right: 10%; width:100%\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\" style=\"display: inline-block;width: 100%;\">
                            <h4 style=\"width:50%;float:left;\">Démarrer l'analyse en cliquant sur le bouton Play</h4>
                            <div style=\"width:50%;float:right;margin-top: 5px;margin-bottom: 5px;text-align: right;\">
                                <select id=\"cameraId\" class=\"form-control\" style=\"display: inline-block;width: auto;\"></select>
                                <button id=\"save\" data-toggle=\"tooltip\" title=\"Image shoot\" type=\"button\" class=\"btn btn-info btn-sm disabled\"><span class=\"glyphicon glyphicon-picture\"></span></button>
                                <button id=\"play\" data-toggle=\"tooltip\" title=\"Play\" type=\"button\" class=\"btn btn-success btn-sm\"><span class=\"glyphicon glyphicon-play\"></span></button>
                                <button id=\"stop\" data-toggle=\"tooltip\" title=\"Stop\" type=\"button\" class=\"btn btn-warning btn-sm\"><span class=\"glyphicon glyphicon-stop\"></span></button>
                                <button id=\"stopAll\" data-toggle=\"tooltip\" title=\"Stop streams\" type=\"button\" class=\"btn btn-danger btn-sm\"><span class=\"glyphicon glyphicon-stop\"></span></button>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"col-md-6\" style=\"text-align: center;\">
                                <div class=\"well\" style=\"position: relative;display: inline-block;\">
                                    <canvas id=\"qr-canvas\" width=\"320\" height=\"240\"></canvas>
                                    <div class=\"scanner-laser laser-rightBottom\" style=\"opacity: 0.5;\"></div>
                                    <div class=\"scanner-laser laser-rightTop\" style=\"opacity: 0.5;\"></div>
                                    <div class=\"scanner-laser laser-leftBottom\" style=\"opacity: 0.5;\"></div>
                                    <div class=\"scanner-laser laser-leftTop\" style=\"opacity: 0.5;\"></div>
                                </div>
                                <div class=\"well\" style=\"position: relative;\" >
                                    <label id=\"zoom-value\" width=\"100\">Zoom: 2</label>
                                    <input type=\"range\" id=\"zoom\" value=\"20\" min=\"10\" max=\"30\" onchange=\"Page.changeZoom();\"/>
                                    <label id=\"brightness-value\" width=\"100\">Brightness: 0</label>
                                    <input type=\"range\" id=\"brightness\" value=\"0\" min=\"0\" max=\"128\" onchange=\"Page.changeBrightness();\"/>
                                    <label id=\"contrast-value\" width=\"100\">Contrast: 0</label>
                                    <input type=\"range\" id=\"contrast\" value=\"0\" min=\"0\" max=\"64\" onchange=\"Page.changeContrast();\"/>
                                    <label id=\"threshold-value\" width=\"100\">Threshold: 0</label>
                                    <input type=\"range\" id=\"threshold\" value=\"0\" min=\"0\" max=\"512\" onchange=\"Page.changeThreshold();\"/>
                                    <label id=\"sharpness-value\" width=\"100\">Sharpness: off</label>
                                    <input type=\"checkbox\" id=\"sharpness\" onchange=\"Page.changeSharpness();\"/>
                                    <label id=\"grayscale-value\" width=\"100\">grayscale: off</label>
                                    <input type=\"checkbox\" id=\"grayscale\" onchange=\"Page.changeGrayscale();\"/>
                                </div>
                            </div>
                            <div class=\"col-md-6\" style=\"text-align: center;\">
                                <div id=\"result\" class=\"thumbnail\">
                                    <div class=\"well\" style=\"position: relative;display: inline-block;\">
                                        <img id=\"scanned-img\" src=\"\" width=\"320\" height=\"240\">
                                    </div>
                                    <div class=\"caption\">
                                        <h3>Scanned result</h3>
                                        <p id=\"scanned-QR\"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel-footer\">
                        </div>
                    </div>
                </div>

            </div>
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                    <div class=\"caption font-red-sunglo\">
                        <i class=\"icon-settings font-red-sunglo\"></i>
                        <span class=\"caption-subject bold uppercase\"> Ajouter un materiel </span>
                    </div>

                </div>
                <div class=\"portlet-body\">

                    <!-- BEGIN FORM-->


                    <div>
                        <form action=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("materiel_new");
        echo "\" method=\"post\" class=\"AddUserForm\">

                            <div class=\"form-body\">
                                <div class=\"alert alert-danger display-hide\">
                                    <button class=\"close\" data-close=\"alert\"></button> You have some form errors. Please check below. </div>
                                <div class=\"alert alert-success display-hide\">
                                    <button class=\"close\" data-close=\"alert\"></button> Your form validation is successful! </div>

                                <br/>
                                <div class=\"row\">
                                    <label class=\"control-label col-md-3\">Nom
                                        <span class=\"required\"> * </span>
                                    </label>
                                    <div class=\"col-md-4\">
                                        <div class=\"input-icon right\">

                                            <i class=\"fa\"></i>
                                            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                <br/>

                                    <label class=\"control-label col-md-3\">Entrepot
                                        <span class=\"required\"> * </span>
                                    </label>
                                    <div class=\"col-md-4\">
                                        <div class=\"input-icon right\">
                                            <i class=\"fa\"></i>
                                            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEntrepot", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                        </div>

                                    </div>
                                </div>

                                <div class=\"row\">

                                    <br/>
                                    <label class=\"control-label col-md-3\">Catégorie - Ref Globale
                                        <span class=\"required\"> * </span>
                                    </label>
                                    <div class=\"col-md-4\">
                                        <div class=\"input-icon right\">
                                            <i class=\"fa\"></i>
                                            ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCategorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                        </div>

                                    </div>
                                </div>

                                <br/>
                                <div class=\"row\">
                                    <label class=\"control-label col-md-3\">Reference Piece
                                        <span class=\"required\"> * </span>
                                    </label>
                                    <div class=\"col-md-4\">
                                        <div class=\"input-icon right\">
                                            <i class=\"fa\"></i>

                                            ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "refPiece", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class=\"row\">
                                    <label class=\"control-label col-md-3\">Code Barre
                                        <span class=\"required\"> * </span>
                                    </label>
                                    <div class=\"col-md-4\">
                                        <div class=\"input-icon right\">
                                            <i class=\"fa\"></i>
                                            ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeBarre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class=\"row\">
                                    <label class=\"control-label col-md-3\">Valeur
                                        <span class=\"required\"> * </span>
                                    </label>
                                    <div class=\"col-md-4\">
                                        <div class=\"input-icon right\">

                                            <i class=\"fa\"></i>
                                            ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class=\"row\">
                                    <label class=\"control-label col-md-3\">Description
                                        <span class=\"required\"> * </span>
                                    </label>
                                    <div class=\"col-md-4\">
                                        <div class=\"input-icon right\">

                                            <i class=\"fa\"></i>
                                            ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                        </div>
                                    </div>
                                </div>
                                    ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            </div>
                            <br/>
                            <div class=\"form-actions\">
                                <div class=\"row\">
                                    <div class=\"col-md-offset-3 col-md-9\">

                                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Valider\"/>



                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->

                    </div>

                </div>

            </div>
            <!-- END VALIDATION STATES-->
        </div>
        <!-- END CONTENT BODY -->
    </div>
";
    }

    // line 223
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 224
        echo "    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jsBarCode/qrcodelib.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jsBarCode/WebCodeCam.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jsBarCode/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "svplocationAdminBundle:Materiel:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 228,  294 => 227,  290 => 226,  286 => 224,  283 => 223,  252 => 195,  244 => 190,  227 => 176,  210 => 162,  195 => 150,  176 => 134,  157 => 118,  140 => 104,  120 => 87,  38 => 7,  35 => 6,  30 => 3,);
    }
}
