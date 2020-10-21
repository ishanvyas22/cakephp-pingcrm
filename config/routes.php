<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true,
    ]));

    /*
     * Apply a middleware to the current route scope.
     * Requires middleware to be registered through `Application::routes()` with `registerMiddleware()`
     */
    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Auth', 'action' => 'login']);
    $routes->connect('/logout', ['controller' => 'Auth', 'action' => 'logout']);

    $routes->connect('/dashboard', ['controller' => 'Dashboard', 'action' => 'index']);

    $routes->connect('/500',['controller' => 'Dashboard', 'action' => 'internalServerError']);

    $routes->fallbacks(DashedRoute::class);
});
