<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/user')) {
            // client_homepage
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'client_homepage');
                }

                return array (  '_controller' => 'svplocation\\ClientBundle\\Controller\\DefaultController::indexAction',  '_route' => 'client_homepage',);
            }

            if (0 === strpos($pathinfo, '/user/locationMateriel')) {
                // demande_location_materiel
                if ($pathinfo === '/user/locationMateriel/entrepot') {
                    return array (  '_controller' => 'svplocation\\ClientBundle\\Controller\\MaterielController::locationMaterielStep1Action',  '_route' => 'demande_location_materiel',);
                }

                // demande_location_materiel_2
                if (0 === strpos($pathinfo, '/user/locationMateriel/louer-et-Confirmer') && preg_match('#^/user/locationMateriel/louer\\-et\\-Confirmer/(?P<idEntrep>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_location_materiel_2')), array (  '_controller' => 'svplocation\\ClientBundle\\Controller\\MaterielController::locationMaterielStep2Action',));
                }

                // demande_location_materiel_3
                if (0 === strpos($pathinfo, '/user/locationMateriel/step3') && preg_match('#^/user/locationMateriel/step3/(?P<idEntrep>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_location_materiel_3')), array (  '_controller' => 'svplocation\\ClientBundle\\Controller\\MaterielController::locationMaterielStep3Action',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/commande')) {
                    // commande
                    if (rtrim($pathinfo, '/') === '/admin/commande') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'commande');
                        }

                        return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CommandeController::indexAction',  '_route' => 'commande',);
                    }

                    // commande_show
                    if (preg_match('#^/admin/commande/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_show')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CommandeController::showAction',));
                    }

                    // commande_new
                    if ($pathinfo === '/admin/commande/new') {
                        return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CommandeController::newAction',  '_route' => 'commande_new',);
                    }

                    // commande_create
                    if ($pathinfo === '/admin/commande/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_commande_create;
                        }

                        return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CommandeController::createAction',  '_route' => 'commande_create',);
                    }
                    not_commande_create:

                    // commande_edit
                    if (preg_match('#^/admin/commande/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_edit')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CommandeController::editAction',));
                    }

                    // commande_update
                    if (preg_match('#^/admin/commande/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_commande_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_update')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CommandeController::updateAction',));
                    }
                    not_commande_update:

                    // commande_delete
                    if (preg_match('#^/admin/commande/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_commande_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_delete')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CommandeController::deleteAction',));
                    }
                    not_commande_delete:

                }

                if (0 === strpos($pathinfo, '/admin/categorie')) {
                    // categorie
                    if (rtrim($pathinfo, '/') === '/admin/categorie') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'categorie');
                        }

                        return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie',);
                    }

                    // categorie_show
                    if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CategorieController::showAction',));
                    }

                    // categorie_new
                    if ($pathinfo === '/admin/categorie/new') {
                        return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
                    }

                    // categorie_create
                    if ($pathinfo === '/admin/categorie/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_categorie_create;
                        }

                        return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CategorieController::createAction',  '_route' => 'categorie_create',);
                    }
                    not_categorie_create:

                    // categorie_edit
                    if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CategorieController::editAction',));
                    }

                    // categorie_update
                    if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_categorie_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_update')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CategorieController::updateAction',));
                    }
                    not_categorie_update:

                    // categorie_delete
                    if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_categorie_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\CategorieController::deleteAction',));
                    }
                    not_categorie_delete:

                }

            }

            // svplocation_admin
            if ($pathinfo === '/admin/index') {
                return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\IndexController::indexAction',  '_route' => 'svplocation_admin',);
            }

            // entrepot
            if ($pathinfo === '/admin/entrepot') {
                return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\EntrepotController::indexAction',  '_route' => 'entrepot',);
            }

            // personnel
            if ($pathinfo === '/admin/personnel') {
                return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\PersonnelController::indexAction',  '_route' => 'personnel',);
            }

            if (0 === strpos($pathinfo, '/admin/materiel')) {
                // materiel
                if ($pathinfo === '/admin/materiel') {
                    return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\MaterielController::indexAction',  '_route' => 'materiel',);
                }

                // materiel_create
                if ($pathinfo === '/admin/materiel/create') {
                    return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\MaterielController::createAction',  '_route' => 'materiel_create',);
                }

                // materiel_new
                if ($pathinfo === '/admin/materiel/new') {
                    return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\MaterielController::newAction',  '_route' => 'materiel_new',);
                }

                // materiel_edit
                if (0 === strpos($pathinfo, '/admin/materiel/edit') && preg_match('#^/admin/materiel/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materiel_edit')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\MaterielController::editAction',));
                }

                // materiel_update
                if (0 === strpos($pathinfo, '/admin/materiel/update') && preg_match('#^/admin/materiel/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materiel_update')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\MaterielController::updateAction',));
                }

                // materiel_delete
                if (0 === strpos($pathinfo, '/admin/materiel/delete') && preg_match('#^/admin/materiel/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materiel_delete')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\MaterielController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                // clients
                if ($pathinfo === '/admin/clients') {
                    return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\ClientsController::indexAction',  '_route' => 'clients',);
                }

                // clients_create
                if ($pathinfo === '/admin/create') {
                    return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\ClientsController::createAction',  '_route' => 'clients_create',);
                }

                if (0 === strpos($pathinfo, '/admin/client')) {
                    // clients_new
                    if ($pathinfo === '/admin/client/new') {
                        return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\ClientsController::newAction',  '_route' => 'clients_new',);
                    }

                    // clients_edit
                    if (0 === strpos($pathinfo, '/admin/client/edit') && preg_match('#^/admin/client/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'clients_edit')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\ClientsController::editAction',));
                    }

                    // clients_update
                    if (0 === strpos($pathinfo, '/admin/client/update') && preg_match('#^/admin/client/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'clients_update')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\ClientsController::updateAction',));
                    }

                    // clients_delete
                    if (0 === strpos($pathinfo, '/admin/client/delete') && preg_match('#^/admin/client/delete(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'clients_delete')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\ClientsController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/entrepot')) {
                // entrepot_create
                if ($pathinfo === '/admin/entrepot/create') {
                    return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\EntrepotController::createAction',  '_route' => 'entrepot_create',);
                }

                // entrepot_new
                if ($pathinfo === '/admin/entrepot/new') {
                    return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\EntrepotController::newAction',  '_route' => 'entrepot_new',);
                }

                // entrepot_edit
                if (0 === strpos($pathinfo, '/admin/entrepot/edit') && preg_match('#^/admin/entrepot/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'entrepot_edit')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\EntrepotController::editAction',));
                }

                // entrepot_update
                if (0 === strpos($pathinfo, '/admin/entrepot/update') && preg_match('#^/admin/entrepot/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'entrepot_update')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\EntrepotController::updateAction',));
                }

                // entrepot_delete
                if (0 === strpos($pathinfo, '/admin/entrepot/delete') && preg_match('#^/admin/entrepot/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'entrepot_delete')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\EntrepotController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/personnel')) {
                // personnel_create
                if ($pathinfo === '/admin/personnel/create') {
                    return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\PersonnelController::createAction',  '_route' => 'personnel_create',);
                }

                // personnel_new
                if ($pathinfo === '/admin/personnel/new') {
                    return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\PersonnelController::newAction',  '_route' => 'personnel_new',);
                }

                // personnel_edit
                if (0 === strpos($pathinfo, '/admin/personnel/edit') && preg_match('#^/admin/personnel/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personnel_edit')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\PersonnelController::editAction',));
                }

                // personnel_update
                if (0 === strpos($pathinfo, '/admin/personnel/update') && preg_match('#^/admin/personnel/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personnel_update')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\PersonnelController::updateAction',));
                }

                // personnel_delete
                if (0 === strpos($pathinfo, '/admin/personnel/delete') && preg_match('#^/admin/personnel/delete(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personnel_delete')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\PersonnelController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/l')) {
                // list_location
                if ($pathinfo === '/admin/listLocations') {
                    return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\MaterielController::listLocationAction',  '_route' => 'list_location',);
                }

                if (0 === strpos($pathinfo, '/admin/locationMateriel')) {
                    if (0 === strpos($pathinfo, '/admin/locationMateriel/select_')) {
                        // location_materiel_0
                        if ($pathinfo === '/admin/locationMateriel/select_client') {
                            return array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\MaterielController::locationMaterielStep0Action',  '_route' => 'location_materiel_0',);
                        }

                        // location_materiel_1
                        if (0 === strpos($pathinfo, '/admin/locationMateriel/select_entrepot') && preg_match('#^/admin/locationMateriel/select_entrepot/(?P<idClient>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_materiel_1')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\MaterielController::locationMaterielStep1Action',));
                        }

                    }

                    // location_materiel_2
                    if (0 === strpos($pathinfo, '/admin/locationMateriel/louer-et-Confirmer') && preg_match('#^/admin/locationMateriel/louer\\-et\\-Confirmer/(?P<idClient>[^/]++)/(?P<idEntrep>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_materiel_2')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\MaterielController::locationMaterielStep2Action',));
                    }

                    // location_materiel_3
                    if (0 === strpos($pathinfo, '/admin/locationMateriel/step3') && preg_match('#^/admin/locationMateriel/step3/(?P<idClient>[^/]++)/(?P<idEntrep>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_materiel_3')), array (  '_controller' => 'svplocation\\AdminBundle\\Controller\\MaterielController::locationMaterielStep3Action',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'svplocation\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'svplocation\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'svplocation\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
