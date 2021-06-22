<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_secret', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_utilisateurs', '_controller' => 'App\\Controller\\AdminController::usersList'], null, null, null, false, false, null]],
        '/admin/creat_categorie' => [[['_route' => 'admin_creat_categorie', '_controller' => 'App\\Controller\\AdminController::creatCategorie'], null, null, null, false, false, null]],
        '/admin/editlist_categorie' => [[['_route' => 'admin_editlist_categorie', '_controller' => 'App\\Controller\\AdminController::show'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\QuizController::home'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie_list', '_controller' => 'App\\Controller\\QuizController::list'], null, null, null, false, false, null]],
        '/result' => [[['_route' => 'result', '_controller' => 'App\\Controller\\QuizController::result'], null, null, null, false, false, null]],
        '/creat' => [[['_route' => 'creat_quiz', '_controller' => 'App\\Controller\\QuizController::creat'], null, null, null, false, false, null]],
        '/verif' => [[['_route' => 'quiz_verif', '_controller' => 'App\\Controller\\QuizController::verif'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/profilUpdate' => [[['_route' => 'profil_update', '_controller' => 'App\\Controller\\RegistrationController::profilUpdate'], null, null, null, false, false, null]],
        '/profilEmailUpdate' => [[['_route' => 'profil_email_update', '_controller' => 'App\\Controller\\RegistrationController::profilEmailUpdate'], null, null, null, false, false, null]],
        '/profilPasswordUpdate' => [[['_route' => 'profil_password_update', '_controller' => 'App\\Controller\\RegistrationController::profilPasswordUpdate'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\SecurityController::viewProfil'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|utilisateurs/modifier/([^/]++)(*:209)'
                    .'|e(?'
                        .'|rase_(?'
                            .'|user/([^/]++)(*:242)'
                            .'|categorie/([^/]++)(*:268)'
                        .')'
                        .'|mail_to_user/([^/]++)(*:298)'
                    .')'
                    .'|creat_categorie/([^/]++)(*:331)'
                .')'
                .'|/show_(?'
                    .'|categorie/([^/]++)(*:367)'
                    .'|quiz/([^/]++)(*:388)'
                .')'
                .'|/lauch_quiz/([^/]++)(*:417)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        209 => [[['_route' => 'admin_modifier_utilisateur', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        242 => [[['_route' => 'admin_erase_user', '_controller' => 'App\\Controller\\AdminController::eraseUser'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'admin_erase_categorie', '_controller' => 'App\\Controller\\AdminController::eraseCategorie'], ['id'], null, null, false, true, null]],
        298 => [[['_route' => 'admin_email_to_user', '_controller' => 'App\\Controller\\AdminController::EmailToUser'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'admin_edit_categorie', '_controller' => 'App\\Controller\\AdminController::editCategorie'], ['id'], null, null, false, true, null]],
        367 => [[['_route' => 'show_categorie', '_controller' => 'App\\Controller\\QuizController::show'], ['id'], null, null, false, true, null]],
        388 => [[['_route' => 'show_quiz', '_controller' => 'App\\Controller\\QuizController::show_quiz'], ['id'], null, null, false, true, null]],
        417 => [
            [['_route' => 'lauch_quiz', '_controller' => 'App\\Controller\\QuizController::lauch'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
