<?php

/* svplocationClientBundle::layout.html.twig */
class __TwigTemplate_a9133f3713a0263aa624f16a00949ec58f3a5b4f31d642bca6227d5788f30b1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header_imports' => array($this, 'block_header_imports'),
            'body' => array($this, 'block_body'),
            'rightSidebar' => array($this, 'block_rightSidebar'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
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
        // line 48
        echo "
    ";
        // line 49
        $this->displayBlock('header_imports', $context, $blocks);
        // line 51
        echo "
    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 457
        echo "            ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 504
        echo "            ";
        $this->displayBlock('scripts_imports', $context, $blocks);
        // line 506
        echo "            <!-- END PAGE LEVEL SCRIPTS -->
    </body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <head>
            <meta charset=\"utf-8\" />
            <title>SvpLocation | Client</title>
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
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\"/>

            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css"), "html", null, true);
        echo "\"/>

            <!-- END PAGE LEVEL PLUGINS -->
            <!-- END THEME LAYOUT STYLES -->
            <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
        <!-- END HEAD -->
    ";
    }

    // line 49
    public function block_header_imports($context, array $blocks = array())
    {
        // line 50
        echo "    ";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "        <body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
            <!-- BEGIN HEADER -->

            <div class=\"page-header navbar navbar-fixed-top\">
                <!-- BEGIN HEADER INNER -->
                <div class=\"page-header-inner \">
                    <!-- BEGIN LOGO -->
                    <div class=\"page-logo\">
                        <a href=\"index.html\">
                            <img src=\"";
        // line 62
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
                            <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
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
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
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
        // line 123
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
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-tasks\" id=\"header_task_bar\">
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
                            </li>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-user\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <img alt=\"\" class=\"img-circle\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/img/avatar3_small.jpg"), "html", null, true);
        echo "\" />
                                    <span class=\"username username-hide-on-mobile\"> Alex </span>
                                    <i class=\"fa fa-angle-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-default\">
                                    <li>
                                        <a href=\"page_user_profile_1.html\">
                                            <i class=\"icon-user\"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href=\"app_calendar.html\">
                                            <i class=\"icon-calendar\"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href=\"app_inbox.html\">
                                            <i class=\"icon-envelope-open\"></i> My Inbox
                                            <span class=\"badge badge-danger\"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"app_todo.html\">
                                            <i class=\"icon-rocket\"></i> My Tasks
                                            <span class=\"badge badge-success\"> 7 </span>
                                        </a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>

                                        <div>
                                            ";
        // line 205
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 206
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                                <a href=\"";
            // line 207
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                                    ";
            // line 208
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                                </a>
                                            ";
        } else {
            // line 211
            echo "                                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                            ";
        }
        // line 213
        echo "                                        </div>
                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\">
                                    <i class=\"icon-logout\"></i>
                                </a>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        ";
        // line 237
        $this->displayBlock('rightSidebar', $context, $blocks);
        // line 299
        echo "            <!-- END SIDEBAR -->
            ";
        // line 300
        $this->displayBlock('content', $context, $blocks);
        // line 364
        echo "            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            ";
        // line 366
        $this->displayBlock('sidebar', $context, $blocks);
        // line 441
        echo "            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            ";
        // line 444
        $this->displayBlock('footer', $context, $blocks);
        // line 454
        echo "            <!-- END FOOTER -->

            ";
    }

    // line 237
    public function block_rightSidebar($context, array $blocks = array())
    {
        // line 238
        echo "            <div class=\"clearfix\"> </div>
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
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-home\"></i>
                                    <span class=\"title\">Dashboard</span>
                                    <span class=\"arrow\"></span>
                                </a>
                            </li>
                            <li class=\"heading\">
                                <h3 class=\"uppercase\">Features</h3>
                            </li>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-diamond\"></i>
                                    <span class=\"title\">Location Materiel</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"";
        // line 285
        echo $this->env->getExtension('routing')->getPath("demande_location_materiel");
        echo "\" class=\"nav-link \">
                                            <span class=\"title\">Location materiel</span>
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

    // line 300
    public function block_content($context, array $blocks = array())
    {
        // line 301
        echo "                <!-- BEGIN CONTENT -->
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

    // line 366
    public function block_sidebar($context, array $blocks = array())
    {
        // line 367
        echo "                <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\">
                    <i class=\"icon-login\"></i>
                </a>
                <div class=\"page-quick-sidebar-wrapper\" data-close-on-body-click=\"false\">
                    <div class=\"page-quick-sidebar\">
                        <ul class=\"nav nav-tabs\">

                            <li>
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_2\" data-toggle=\"tab\"> Alerts
                                    <span class=\"badge badge-success\">7</span>
                                </a>
                            </li>

                        </ul>

                        <div class=\"tab-content\">
                            <div class=\"tab-pane active page-quick-sidebar-chat\" id=\"quick_sidebar_tab_1\">
                                <div class=\"page-quick-sidebar-chat-users\" data-rail-color=\"#ddd\" data-wrapper-class=\"page-quick-sidebar-list\">

                                </div>
                                <div class=\"page-quick-sidebar-item\">
                                    <div class=\"page-quick-sidebar-chat-user\">
                                        <div class=\"page-quick-sidebar-nav\">
                                            <a href=\"javascript:;\" class=\"page-quick-sidebar-back-to-list\">
                                                <i class=\"icon-arrow-left\"></i>Back</a>
                                        </div>
                                        <div class=\"page-quick-sidebar-chat-user-messages\">
                                            <div class=\"post out\">
                                                <img class=\"avatar\" alt=\"\" src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                    <span class=\"datetime\">20:15</span>
                                                    <span class=\"body\"> When could you send me the report ? </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane page-quick-sidebar-alerts\" id=\"quick_sidebar_tab_2\">
                                <div class=\"page-quick-sidebar-alerts-list\">
                                    <h3 class=\"list-heading\">General</h3>
                                    <ul class=\"feeds list-items\">
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-check\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 4 pending tasks.
                                                            <span class=\"label label-sm label-warning \"> Take action
                                                                <i class=\"fa fa-share\"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END QUICK SIDEBAR -->
                ";
    }

    // line 444
    public function block_footer($context, array $blocks = array())
    {
        // line 445
        echo "                <div class=\"page-footer\">
                    <div class=\"page-footer-inner\"> 2014 &copy; Metronic by keenthemes.
                        <a href=\"http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\" title=\"Purchase Metronic just for 27\$ and get lifetime updates for free\" target=\"_blank\">Purchase Metronic!</a>
                    </div>
                    <div class=\"scroll-to-top\">
                        <i class=\"icon-arrow-up\"></i>
                    </div>
                </div>
            ";
    }

    // line 457
    public function block_scripts($context, array $blocks = array())
    {
        // line 458
        echo "                <!-- BEGIN CORE PLUGINS -->
                <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>

                <!-- END CORE PLUGINS -->
                <!-- BEGIN THEME GLOBAL SCRIPTS -->
                <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\"></script>

                <!-- END THEME GLOBAL SCRIPTS -->


                <!-- BEGIN THEME LAYOUT SCRIPTS -->
                <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\"></script>

                <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\"></script>

                <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\"></script>

                <!-- END THEME LAYOUT SCRIPTS -->

                <!-- BEGIN PAGE LEVEL PLUGINS -->
                <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>

                <script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

                <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>

                <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>

                <script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-markdown/lib/markdown.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"), "html", null, true);
        echo "\"></script>

                <!-- END PAGE LEVEL PLUGINS -->
                <!-- BEGIN PAGE LEVEL SCRIPTS -->
                <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/pages/scripts/form-validation.min.js"), "html", null, true);
        echo "\"></script>


            ";
    }

    // line 504
    public function block_scripts_imports($context, array $blocks = array())
    {
        // line 505
        echo "            ";
    }

    public function getTemplateName()
    {
        return "svplocationClientBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  753 => 505,  750 => 504,  742 => 500,  735 => 496,  731 => 495,  727 => 494,  723 => 493,  719 => 492,  714 => 490,  709 => 488,  704 => 486,  699 => 484,  691 => 479,  686 => 477,  681 => 475,  672 => 469,  665 => 465,  661 => 464,  657 => 463,  653 => 462,  649 => 461,  645 => 460,  641 => 459,  638 => 458,  635 => 457,  623 => 445,  620 => 444,  570 => 395,  540 => 367,  537 => 366,  471 => 301,  468 => 300,  450 => 285,  401 => 238,  398 => 237,  392 => 454,  390 => 444,  385 => 441,  383 => 366,  379 => 364,  377 => 300,  374 => 299,  372 => 237,  346 => 213,  338 => 211,  332 => 208,  328 => 207,  323 => 206,  321 => 205,  289 => 176,  233 => 123,  169 => 62,  158 => 53,  155 => 52,  151 => 50,  148 => 49,  137 => 41,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  115 => 34,  111 => 33,  107 => 32,  100 => 28,  95 => 26,  86 => 20,  81 => 18,  76 => 16,  71 => 14,  61 => 6,  58 => 5,  52 => 506,  49 => 504,  46 => 457,  44 => 52,  41 => 51,  39 => 49,  36 => 48,  34 => 5,  28 => 1,);
    }
}
