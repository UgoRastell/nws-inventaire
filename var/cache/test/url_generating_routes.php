<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_materiel_index' => [[], ['_controller' => 'App\\Controller\\MaterielController::index'], [], [['text', '/materiel/']], [], [], []],
    'app_materiel_new' => [[], ['_controller' => 'App\\Controller\\MaterielController::new'], [], [['text', '/materiel/new']], [], [], []],
    'app_materiel_show' => [['id'], ['_controller' => 'App\\Controller\\MaterielController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materiel']], [], [], []],
    'app_materiel_edit' => [['id'], ['_controller' => 'App\\Controller\\MaterielController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/materiel']], [], [], []],
    'app_materiel_delete' => [['id'], ['_controller' => 'App\\Controller\\MaterielController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materiel']], [], [], []],
    'app_pret_index' => [[], ['_controller' => 'App\\Controller\\PretController::index'], [], [['text', '/pret/']], [], [], []],
    'app_pret_new' => [[], ['_controller' => 'App\\Controller\\PretController::new'], [], [['text', '/pret/new']], [], [], []],
    'app_pret_show' => [['id'], ['_controller' => 'App\\Controller\\PretController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pret']], [], [], []],
    'app_pret_edit' => [['id'], ['_controller' => 'App\\Controller\\PretController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/pret']], [], [], []],
    'app_pret_rendu' => [['id'], ['_controller' => 'App\\Controller\\PretController::rendrePret'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pret/pret/rendu']], [], [], []],
    'app_pret_rappele' => [['id'], ['_controller' => 'App\\Controller\\PretController::rappelePret'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pret/pret/rappele']], [], [], []],
    'app_pret_delete' => [['id'], ['_controller' => 'App\\Controller\\PretController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pret']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], [], []],
];
