<?php

// Aturan routing ditaruh di 1 file ini

use Phalcon\Mvc\Router;
include 'postgrouprouter.php';

$router = new Router();

// Contoh defining routing
$router->add(
    '/',                            // URL yang akan dihandler
    [
        'controller' => 'Index',    // Controller yang akan menghandle request URL diatas
        'action'     => 'sayHallo', // Action dalam controller yang bertugas untuk menghandle URL diatas
    ]
);

$router->add(
    '/user/changepassword',
    [
        'controller'    => 'User',
        'action'        => 'changePassword'
    ]
);

// Define route with parameter
$router->add(
    '/user/sayhello/{name}',
    [
        'controller'    => 'User',
        'action'        => 'sayHello'
    ]
);

// Define route with HTTP restriction
$router->addGet(
    '/user/{name}',
    [
        'controller'    => 'User',
        'action'        => 'getName'
    ]
);

// Another way to define route with HTTP restriction
$router->add(
    '/user/update/{id}',                // Short Syntax Routing
    'User::update'
)->via([
    'POST',
    'PUT'
]);

// Mounting group router
$router->mount(
    new PostRoutes()
);

return $router;