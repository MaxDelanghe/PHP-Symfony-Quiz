<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_secret' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], []],
    'admin_utilisateurs' => [[], ['_controller' => 'App\\Controller\\AdminController::usersList'], [], [['text', '/admin/utilisateurs']], [], []],
    'admin_modifier_utilisateur' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/utilisateurs/modifier']], [], []],
    'admin_erase_user' => [['id'], ['_controller' => 'App\\Controller\\AdminController::eraseUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/erase_user']], [], []],
    'admin_email_to_user' => [['id'], ['_controller' => 'App\\Controller\\AdminController::EmailToUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/email_to_user']], [], []],
    'admin_creat_categorie' => [[], ['_controller' => 'App\\Controller\\AdminController::creatCategorie'], [], [['text', '/admin/creat_categorie']], [], []],
    'admin_edit_categorie' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editCategorie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/creat_categorie']], [], []],
    'admin_editlist_categorie' => [[], ['_controller' => 'App\\Controller\\AdminController::show'], [], [['text', '/admin/editlist_categorie']], [], []],
    'admin_erase_categorie' => [['id'], ['_controller' => 'App\\Controller\\AdminController::eraseCategorie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/erase_categorie']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\QuizController::home'], [], [['text', '/']], [], []],
    'categorie_list' => [[], ['_controller' => 'App\\Controller\\QuizController::list'], [], [['text', '/categorie']], [], []],
    'show_categorie' => [['id'], ['_controller' => 'App\\Controller\\QuizController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/show_categorie']], [], []],
    'show_quiz' => [['id'], ['_controller' => 'App\\Controller\\QuizController::show_quiz'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/show_quiz']], [], []],
    'lauch_quiz' => [['id'], ['_controller' => 'App\\Controller\\QuizController::lauch'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/lauch_quiz']], [], []],
    'result' => [[], ['_controller' => 'App\\Controller\\QuizController::result'], [], [['text', '/result']], [], []],
    'creat_quiz' => [[], ['_controller' => 'App\\Controller\\QuizController::creat'], [], [['text', '/creat']], [], []],
    'quiz_verif' => [[], ['_controller' => 'App\\Controller\\QuizController::verif'], [], [['text', '/verif']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'profil_update' => [[], ['_controller' => 'App\\Controller\\RegistrationController::profilUpdate'], [], [['text', '/profilUpdate']], [], []],
    'profil_email_update' => [[], ['_controller' => 'App\\Controller\\RegistrationController::profilEmailUpdate'], [], [['text', '/profilEmailUpdate']], [], []],
    'profil_password_update' => [[], ['_controller' => 'App\\Controller\\RegistrationController::profilPasswordUpdate'], [], [['text', '/profilPasswordUpdate']], [], []],
    'security_registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\SecurityController::viewProfil'], [], [['text', '/profil']], [], []],
];
