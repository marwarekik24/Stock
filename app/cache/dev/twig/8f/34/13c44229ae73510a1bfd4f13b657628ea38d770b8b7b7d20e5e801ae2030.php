<?php

/* svplocationAdminBundle::layout.html.twig */
class __TwigTemplate_8f3413c44229ae73510a1bfd4f13b657628ea38d770b8b7b7d20e5e801ae2030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header_imports' => array($this, 'block_header_imports'),
            'header' => array($this, 'block_header'),
            'rightSidebar' => array($this, 'block_rightSidebar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'scripts' => array($this, 'block_scripts'),
            'scripts_imports' => array($this, 'block_scripts_imports'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $this->displayBlock('header_imports', $context, $blocks);
        // line 58
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 201
        echo "                    <!-- END HEADER -->
                    <!-- BEGIN HEADER & CONTENT DIVIDER -->
                    ";
        // line 203
        $this->displayBlock('rightSidebar', $context, $blocks);
        // line 391
        echo "                        <!-- END SIDEBAR -->
                        ";
        // line 392
        $this->displayBlock('content', $context, $blocks);
        // line 456
        echo "                        <!-- END CONTENT -->
                        <!-- BEGIN FOOTER -->
                        ";
        // line 458
        $this->displayBlock('footer', $context, $blocks);
        // line 467
        echo "                        ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 514
        echo "                        ";
        $this->displayBlock('scripts_imports', $context, $blocks);
        // line 517
        echo "                </body>
            </html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <head>
            <meta charset=\"utf-8\" />
            <title>SVPLocation | Admin</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
            <meta content=\"\" name=\"description\" />
            <meta content=\"\" name=\"author\" />
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>

            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\"/>

            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>

            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\"/>

            <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />

            <!-- END GLOBAL MANDATORY STYLES -->
            <!-- BEGIN THEME GLOBAL STYLES -->
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>

            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\"/>

            <!-- END THEME GLOBAL STYLES -->
            <!-- BEGIN THEME LAYOUT STYLES -->
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\"/>

            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\"/>

            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\"/>

            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\"/>

            <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\"/>

            <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\"/>

            <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"), "html", null, true);
        echo "\"/>

            <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css"), "html", null, true);
        echo "\"/>


            <!-- END PAGE LEVEL PLUGINS -->
            <!-- END THEME LAYOUT STYLES -->
            <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
        <!-- END HEAD -->
    ";
    }

    // line 56
    public function block_header_imports($context, array $blocks = array())
    {
        // line 57
        echo "    ";
    }

    // line 58
    public function block_header($context, array $blocks = array())
    {
        // line 59
        echo "        <body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
            <!-- BEGIN HEADER -->

            <div class=\"page-header navbar navbar-fixed-top\">
                <!-- BEGIN HEADER INNER -->
                <div class=\"page-header-inner \">
                    <!-- BEGIN LOGO -->
                    <div class=\"page-logo\">
                        <a href=\"index.html\">
                            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\" /> </a>
                        <div class=\"menu-toggler sidebar-toggler\">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class=\"top-menu\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <!--<li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-bell\"></i>
                                    <span class=\"badge badge-default\"> 7 </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>
                                            <span class=\"bold\">12 pending</span> notifications</h3>
                                        <a href=\"page_user_profile_1.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">just now</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-success\">
                                                            <i class=\"fa fa-plus\"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>-->
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <!-- <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"badge badge-default\"> 4 </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>You have
                                            <span class=\"bold\">7 New</span> Messages</h3>
                                        <a href=\"app_inbox.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout3/img/avatar2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Lisa Wong </span>
                                                        <span class=\"time\">Just Now </span>
                                                    </span>
                                                    <span class=\"message\"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>-->
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <!-- <li class=\"dropdown dropdown-extended dropdown-tasks\" id=\"header_task_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-calendar\"></i>
                                    <span class=\"badge badge-default\"> 3 </span>
                                </a>
                                <ul class=\"dropdown-menu extended tasks\">
                                    <li class=\"external\">
                                        <h3>You have
                                            <span class=\"bold\">12 pending</span> tasks</h3>
                                        <a href=\"app_todo.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">New release v1.2 </span>
                                                        <span class=\"percent\">30%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 40%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">40% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                </ul>
                            </li>-->
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-quick-sidebar-toggler\">


                    
                                ";
        // line 184
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 185
            echo "                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"dropdown-toggle\" class=\"clearfix\">
                                        Deconnexion <i class=\"icon-logout\"></i>
                                    </a>
                                 ";
        } else {
            // line 189
            echo "                                    <a class=\"dropdown-toggle\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion<i class=\"icon-logout\"></i></a>
                                 
                                 ";
        }
        // line 192
        echo "                                </li>
                                <!-- END QUICK SIDEBAR TOGGLER -->
                            </ul>
                        </div>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                    <!-- END HEADER INNER -->
                </div>
                ";
    }

    // line 203
    public function block_rightSidebar($context, array $blocks = array())
    {
        // line 204
        echo "                        <div class=\"clearfix\"> </div>
                        <!-- END HEADER & CONTENT DIVIDER -->
                        <!-- BEGIN CONTAINER -->
                        <div class=\"page-container\">
                            <!-- BEGIN SIDEBAR -->
                            <div class=\"page-sidebar-wrapper\">
                                <!-- BEGIN SIDEBAR -->
                                <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                                <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                                <div class=\"page-sidebar navbar-collapse collapse\">
                                    <!-- BEGIN SIDEBAR MENU -->
                                    <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
                                    <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
                                    <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
                                    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                                    <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
                                    <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                                    <ul class=\"page-sidebar-menu  page-header-fixed \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\" style=\"padding-top: 20px\">
                                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
                                        <li class=\"sidebar-toggler-wrapper hide\">
                                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                            <div class=\"sidebar-toggler\">
                                                <span></span>
                                            </div>
                                            <!-- END SIDEBAR TOGGLER BUTTON -->
                                        </li>
                                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below \"sidebar-search-wrapper\" LI element -->

                                        <li class=\"nav-item start \">
                                            <a href=\"";
        // line 233
        echo $this->env->getExtension('routing')->getPath("svplocation_admin");
        echo "\" class=\"nav-link nav-toggle\">
                                                <i class=\"icon-home\"></i>
                                                <span class=\"title\">Accueil</span>
                                            </a>

                                        </li>
                                        <li class=\"heading\">
                                            <h3 class=\"uppercase\">Rubriques</h3>
                                        </li>


                                        <li class=\"nav-item  \">
                                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                                <i class=\"fa fa-user-secret\"></i>
                                                <span class=\"title\">Gestion des personnels</span>
                                                <span class=\"arrow\"></span>
                                            </a>
                                            <ul class=\"sub-menu\">
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 252
        echo $this->env->getExtension('routing')->getPath("personnel");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Liste des personnels</span>
                                                    </a>
                                                </li>
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 257
        echo $this->env->getExtension('routing')->getPath("personnel_register");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Ajouter personnel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class=\"nav-item  \">
                                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                                <i class=\"fa fa-users\"></i>
                                                <span class=\"title\">Gestion des clients</span>
                                                <span class=\"arrow\"></span>
                                            </a>
                                            <ul class=\"sub-menu\">
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 273
        echo $this->env->getExtension('routing')->getPath("clients");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Liste des clients</span>
                                                    </a>
                                                </li>
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 278
        echo $this->env->getExtension('routing')->getPath("clients_register");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Ajouter un client</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class=\"nav-item  \">
                                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                                <i class=\"fa fa-clone\"></i>
                                                <span class=\"title\">Gestion des catégories</span>
                                                <span class=\"arrow\"></span>
                                            </a>
                                            <ul class=\"sub-menu\">
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 294
        echo $this->env->getExtension('routing')->getPath("categorie");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Liste des catégories</span>
                                                    </a>
                                                </li>
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 299
        echo $this->env->getExtension('routing')->getPath("categorie_new");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Ajouter une catégorie</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class=\"nav-item  \">
                                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                                <i class=\"icon-diamond\"></i>
                                                <span class=\"title\">Gestion des materiels</span>
                                                <span class=\"arrow\"></span>
                                            </a>
                                            <ul class=\"sub-menu\">
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 314
        echo $this->env->getExtension('routing')->getPath("materiel");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Liste des materiels</span>
                                                    </a>
                                                </li>
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 319
        echo $this->env->getExtension('routing')->getPath("materiel_new");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Ajouter un materiel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li> 
                                        
                                        <li class=\"nav-item  \">
                                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                                <i class=\"fa fa-truck\"></i>
                                                <span class=\"title\">Gestion des entrepôts</span>
                                                <span class=\"arrow\"></span>
                                            </a>
                                            <ul class=\"sub-menu\">
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 334
        echo $this->env->getExtension('routing')->getPath("entrepot");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Liste des entrepôts</span>
                                                    </a>
                                                </li>
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 339
        echo $this->env->getExtension('routing')->getPath("entrepot_create");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Ajouter un entrepôt</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>





                                        <li class=\"nav-item\">
                                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                                <i class=\"fa fa-pencil-square-o\"></i>
                                                <span class=\"title\">Gestion des locations</span>
                                                <span class=\"arrow\"></span>
                                            </a>
                                            <ul class=\"sub-menu\">
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 358
        echo $this->env->getExtension('routing')->getPath("commande");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Liste des locations</span>
                                                    </a>
                                                </li>
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 363
        echo $this->env->getExtension('routing')->getPath("commande_en_attente");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Locations en attente</span>
                                                    </a>
                                                </li>
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 368
        echo $this->env->getExtension('routing')->getPath("commande_confirmee");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Locations confirmées</span>
                                                    </a>
                                                </li>
                                                
                                                
                                                <li class=\"nav-item  \">
                                                    <a href=\"";
        // line 375
        echo $this->env->getExtension('routing')->getPath("location_materiel_0");
        echo "\" class=\"nav-link \">
                                                        <span class=\"title\">Affecter une location</span>
                                                        <i class=\"fa fa-star\"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>

                                    </ul>
                                    <!-- END SIDEBAR MENU -->
                                    <!-- END SIDEBAR MENU -->
                                </div>
                                <!-- END SIDEBAR -->
                            </div>
                        ";
    }

    // line 392
    public function block_content($context, array $blocks = array())
    {
        // line 393
        echo "                            <!-- BEGIN CONTENT -->
                            <div class=\"page-content-wrapper\">
                                <!-- BEGIN CONTENT BODY -->
                                <div class=\"page-content\">
                                    <!-- BEGIN PAGE HEADER-->

                                    <!-- BEGIN PAGE BAR -->
                                    <div class=\"page-bar\">
                                        <ul class=\"page-breadcrumb\">
                                            <li>
                                                <a href=\"index.html\">Home</a>
                                                <i class=\"fa fa-circle\"></i>
                                            </li>
                                            <li>
                                                <a href=\"#\">Blank Page</a>
                                                <i class=\"fa fa-circle\"></i>
                                            </li>
                                            <li>
                                                <span>Page Layouts</span>
                                            </li>
                                        </ul>
                                        <div class=\"page-toolbar\">
                                            <div class=\"btn-group pull-right\">
                                                <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\" data-toggle=\"dropdown\"> Actions
                                                    <i class=\"fa fa-angle-down\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">
                                                            <i class=\"icon-bell\"></i> Action</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">
                                                            <i class=\"icon-shield\"></i> Another action</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">
                                                            <i class=\"icon-user\"></i> Something else here</a>
                                                    </li>
                                                    <li class=\"divider\"> </li>
                                                    <li>
                                                        <a href=\"#\">
                                                            <i class=\"icon-bag\"></i> Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PAGE BAR -->
                                    <!-- BEGIN PAGE TITLE-->
                                    <h3 class=\"page-title\"> Blank Page Layout
                                        <small>blank page layout</small>
                                    </h3>
                                    <!-- END PAGE TITLE-->
                                    <!-- END PAGE HEADER-->
                                    <div class=\"note note-info\">
                                        <p> A black page template with a minimal dependency assets to use as a base for any custom page you create </p>
                                    </div>
                                </div>
                                <!-- END CONTENT BODY -->
                            </div>
                            <!-- END CONTENT -->
                        ";
    }

    // line 458
    public function block_footer($context, array $blocks = array())
    {
        // line 459
        echo "                            <div class=\"page-footer\">
                                <div class=\"page-footer-inner\"> 2016 &copy; SVPlocation
                               </div>
                                <div class=\"scroll-to-top\">
                                    <i class=\"icon-arrow-up\"></i>
                                </div>
                            </div>
                        ";
    }

    // line 467
    public function block_scripts($context, array $blocks = array())
    {
        // line 468
        echo "                            <!-- BEGIN CORE PLUGINS -->
                            <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>

                            <!-- END CORE PLUGINS -->
                            <!-- BEGIN THEME GLOBAL SCRIPTS -->
                            <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\"></script>

                            <!-- END THEME GLOBAL SCRIPTS -->


                            <!-- BEGIN THEME LAYOUT SCRIPTS -->
                            <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\"></script>

                            <script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\"></script>

                            <script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\"></script>

                            <!-- END THEME LAYOUT SCRIPTS -->

                            <!-- BEGIN PAGE LEVEL PLUGINS -->
                            <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>

                            <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

                            <script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>

                            <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>

                            <script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-markdown/lib/markdown.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"), "html", null, true);
        echo "\"></script>

                            <!-- END PAGE LEVEL PLUGINS -->
                            <!-- BEGIN PAGE LEVEL SCRIPTS -->
                            <script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/form-validation.min.js"), "html", null, true);
        echo "\"></script>


                        ";
    }

    // line 514
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 515
        echo "
                        ";
    }

    public function getTemplateName()
    {
        return "svplocationAdminBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  779 => 515,  776 => 514,  768 => 510,  761 => 506,  757 => 505,  753 => 504,  749 => 503,  745 => 502,  740 => 500,  735 => 498,  730 => 496,  725 => 494,  717 => 489,  712 => 487,  707 => 485,  698 => 479,  691 => 475,  687 => 474,  683 => 473,  679 => 472,  675 => 471,  671 => 470,  667 => 469,  664 => 468,  661 => 467,  650 => 459,  647 => 458,  581 => 393,  578 => 392,  558 => 375,  548 => 368,  540 => 363,  532 => 358,  510 => 339,  502 => 334,  484 => 319,  476 => 314,  458 => 299,  450 => 294,  431 => 278,  423 => 273,  404 => 257,  396 => 252,  374 => 233,  343 => 204,  340 => 203,  328 => 192,  321 => 189,  313 => 185,  311 => 184,  253 => 129,  189 => 68,  178 => 59,  175 => 58,  171 => 57,  168 => 56,  156 => 47,  151 => 45,  146 => 43,  141 => 41,  136 => 39,  130 => 36,  125 => 34,  120 => 32,  113 => 28,  108 => 26,  99 => 20,  94 => 18,  89 => 16,  84 => 14,  74 => 6,  71 => 5,  66 => 517,  63 => 514,  60 => 467,  58 => 458,  54 => 456,  52 => 392,  49 => 391,  47 => 203,  43 => 201,  40 => 58,  38 => 56,  35 => 55,  33 => 5,  27 => 1,);
    }
}
