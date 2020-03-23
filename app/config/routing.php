<?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->add(
    '/',
    [
        'controller' => 'Index',
        'action'     => 'sayHallo',
    ]
);

return $router;