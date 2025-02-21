<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/galerie' => [[['_route' => 'galerie', '_controller' => 'App\\Controller\\GalerieController::galerie'], null, null, null, false, false, null]],
        '/galerie/ajouter' => [[['_route' => 'galerie_ajouter', '_controller' => 'App\\Controller\\GalerieController::ajouterPhoto'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\SecurityController::adminUsers'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/galerie/supprimer/([^/]++)(*:69)'
                .'|/admin/user/(?'
                    .'|delete/([^/]++)(*:106)'
                    .'|unlock/([^/]++)(*:129)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [[['_route' => 'galerie_supprimer', '_controller' => 'App\\Controller\\GalerieController::supprimerPhoto'], ['id'], null, null, false, true, null]],
        106 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\SecurityController::deleteUser'], ['id'], null, null, false, true, null]],
        129 => [
            [['_route' => 'admin_user_unlock', '_controller' => 'App\\Controller\\SecurityController::unlockUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
