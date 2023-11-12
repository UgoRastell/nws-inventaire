<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/materiel' => [[['_route' => 'app_materiel_index', '_controller' => 'App\\Controller\\MaterielController::index'], null, ['GET' => 0], null, true, false, null]],
        '/materiel/new' => [[['_route' => 'app_materiel_new', '_controller' => 'App\\Controller\\MaterielController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pret' => [[['_route' => 'app_pret_index', '_controller' => 'App\\Controller\\PretController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pret/new' => [[['_route' => 'app_pret_new', '_controller' => 'App\\Controller\\PretController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/materiel/([^/]++)(?'
                    .'|(*:28)'
                    .'|/edit(*:40)'
                    .'|(*:47)'
                .')'
                .'|/pret/(?'
                    .'|([^/]++)(?'
                        .'|(*:75)'
                        .'|/edit(*:87)'
                    .')'
                    .'|pret/r(?'
                        .'|endu/([^/]++)(*:117)'
                        .'|appele/([^/]++)(*:140)'
                    .')'
                    .'|([^/]++)(*:157)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_materiel_show', '_controller' => 'App\\Controller\\MaterielController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_materiel_edit', '_controller' => 'App\\Controller\\MaterielController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_materiel_delete', '_controller' => 'App\\Controller\\MaterielController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        75 => [[['_route' => 'app_pret_show', '_controller' => 'App\\Controller\\PretController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        87 => [[['_route' => 'app_pret_edit', '_controller' => 'App\\Controller\\PretController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        117 => [[['_route' => 'app_pret_rendu', '_controller' => 'App\\Controller\\PretController::rendrePret'], ['id'], null, null, false, true, null]],
        140 => [[['_route' => 'app_pret_rappele', '_controller' => 'App\\Controller\\PretController::rappelePret'], ['id'], null, null, false, true, null]],
        157 => [
            [['_route' => 'app_pret_delete', '_controller' => 'App\\Controller\\PretController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
