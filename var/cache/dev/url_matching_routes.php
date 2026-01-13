<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/server' => [[['_route' => 'admin_server_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ServerCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServerCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/server/new' => [[['_route' => 'admin_server_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ServerCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServerCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/server/batch-delete' => [[['_route' => 'admin_server_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ServerCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServerCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/server/autocomplete' => [[['_route' => 'admin_server_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ServerCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServerCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/server/render-filters' => [[['_route' => 'admin_server_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ServerCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServerCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/skin' => [[['_route' => 'admin_skin_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SkinCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SkinCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/skin/new' => [[['_route' => 'admin_skin_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SkinCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SkinCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/skin/batch-delete' => [[['_route' => 'admin_skin_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SkinCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SkinCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/skin/autocomplete' => [[['_route' => 'admin_skin_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SkinCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SkinCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/skin/render-filters' => [[['_route' => 'admin_skin_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SkinCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SkinCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/community' => [[['_route' => 'app_community', '_controller' => 'App\\Controller\\CommunityController::index'], null, null, null, true, false, null]],
        '/community/profile/posts' => [[['_route' => 'app_my_posts', '_controller' => 'App\\Controller\\CommunityController::myPosts'], null, null, null, false, false, null]],
        '/auth/steam' => [[['_route' => 'auth_steam', '_controller' => 'App\\Controller\\InventoryController::login'], null, null, null, false, false, null]],
        '/auth/steam/check' => [[['_route' => 'auth_steam_check', '_controller' => 'App\\Controller\\InventoryController::check'], null, null, null, false, false, null]],
        '/auth/logout' => [[['_route' => 'auth_logout', '_controller' => 'App\\Controller\\InventoryController::logout'], null, null, null, false, false, null]],
        '/page' => [[['_route' => 'app_page', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\PageController::home'], null, null, null, false, false, null]],
        '/inventory' => [[['_route' => 'app_inventory', '_controller' => 'App\\Controller\\PageController::inventory'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/servers' => [[['_route' => 'app_servers', '_controller' => 'App\\Controller\\ServerController::index'], null, null, null, true, false, null]],
        '/servers/new' => [[['_route' => 'app_server_new', '_controller' => 'App\\Controller\\ServerController::new'], null, null, null, false, false, null]],
        '/workshop' => [[['_route' => 'app_workshop', '_controller' => 'App\\Controller\\WorkshopController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/s(?'
                    .'|erver/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:43)'
                            .'|delete(*:56)'
                        .')'
                        .'|(*:64)'
                    .')'
                    .'|kin/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:95)'
                            .'|delete(*:108)'
                        .')'
                        .'|(*:117)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:158)'
                    .'|wdt/([^/]++)(*:178)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:220)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:257)'
                                .'|router(*:271)'
                                .'|exception(?'
                                    .'|(*:291)'
                                    .'|\\.css(*:304)'
                                .')'
                            .')'
                            .'|(*:314)'
                        .')'
                    .')'
                .')'
                .'|/community/post/([^/]++)(?'
                    .'|(*:352)'
                    .'|/(?'
                        .'|like(*:368)'
                        .'|save(*:380)'
                    .')'
                .')'
                .'|/servers/(?'
                    .'|api/status/([^/]++)(*:421)'
                    .'|([^/]++)/(?'
                        .'|delete(*:447)'
                        .'|edit(*:459)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'admin_server_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ServerCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServerCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        56 => [[['_route' => 'admin_server_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ServerCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServerCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        64 => [[['_route' => 'admin_server_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ServerCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ServerCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        95 => [[['_route' => 'admin_skin_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SkinCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SkinCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        108 => [[['_route' => 'admin_skin_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SkinCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SkinCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        117 => [[['_route' => 'admin_skin_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SkinCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SkinCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        158 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        178 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        220 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        257 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        271 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        291 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        304 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        314 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        352 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\CommunityController::show'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'app_post_like', '_controller' => 'App\\Controller\\CommunityController::like'], ['id'], null, null, false, false, null]],
        380 => [[['_route' => 'app_post_save', '_controller' => 'App\\Controller\\CommunityController::save'], ['id'], null, null, false, false, null]],
        421 => [[['_route' => 'app_server_status', '_controller' => 'App\\Controller\\ServerController::serverStatus'], ['id'], ['GET' => 0], null, false, true, null]],
        447 => [[['_route' => 'app_server_delete', '_controller' => 'App\\Controller\\ServerController::delete'], ['id'], null, null, false, false, null]],
        459 => [
            [['_route' => 'app_server_edit', '_controller' => 'App\\Controller\\ServerController::edit'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
