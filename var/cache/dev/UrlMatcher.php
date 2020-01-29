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
        '/admin/category/create' => [[['_route' => 'category_create', '_controller' => 'App\\Controller\\AdminCategoryController::createCategory'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'all_category_view', '_controller' => 'App\\Controller\\AdminCategoryController::showAllCategory'], null, null, null, true, false, null]],
        '/admin' => [[['_route' => 'main_view', '_controller' => 'App\\Controller\\AdminNewsController::showAdmin'], null, null, null, true, false, null]],
        '/admin/news/create' => [[['_route' => 'news_create', '_controller' => 'App\\Controller\\AdminNewsController::createNews'], null, null, null, false, false, null]],
        '/admin/news' => [[['_route' => 'all_news_view', '_controller' => 'App\\Controller\\AdminNewsController::showAllNews'], null, null, null, true, false, null]],
        '/mailer' => [[['_route' => 'mailer', '_controller' => 'App\\Controller\\MailerController::index'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PublicController::index'], null, null, null, false, false, null]],
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
                    .'|category/(?'
                        .'|delete/([^/]++)(*:206)'
                        .'|update/([^/]++)(*:229)'
                        .'|([^/]++)(*:245)'
                    .')'
                    .'|news/(?'
                        .'|([^/]++)/c(?'
                            .'|ategory/create(*:289)'
                            .'|omments/(?'
                                .'|create(*:314)'
                                .'|delete(*:328)'
                            .')'
                        .')'
                        .'|delete/([^/]++)(*:353)'
                        .'|update/([^/]++)(*:376)'
                        .'|([^/]++)(*:392)'
                    .')'
                .')'
                .'|/([^/]++)(*:411)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\AdminCategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'update_category', '_controller' => 'App\\Controller\\AdminCategoryController::updateCategory'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'category_view', '_controller' => 'App\\Controller\\AdminCategoryController::viewCategory'], ['id'], null, null, false, true, null]],
        289 => [[['_route' => 'category_to_news', '_controller' => 'App\\Controller\\AdminCategoryController::addCategory'], ['id'], null, null, false, false, null]],
        314 => [[['_route' => 'comments_create', '_controller' => 'App\\Controller\\AdminCommentsController::createComments'], ['id'], null, null, false, false, null]],
        328 => [[['_route' => 'comments_delete', '_controller' => 'App\\Controller\\AdminCommentsController::deleteComments'], ['id'], null, null, false, false, null]],
        353 => [[['_route' => 'delete_news', '_controller' => 'App\\Controller\\AdminNewsController::deleteNews'], ['id'], null, null, false, true, null]],
        376 => [[['_route' => 'update_news', '_controller' => 'App\\Controller\\AdminNewsController::updateNews'], ['id'], null, null, false, true, null]],
        392 => [[['_route' => 'news_view', '_controller' => 'App\\Controller\\AdminNewsController::viewNews'], ['id'], null, null, false, true, null]],
        411 => [
            [['_route' => 'category', '_controller' => 'App\\Controller\\PublicController::categoryView'], ['category'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
