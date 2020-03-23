<?php

use Phalcon\Mvc\Router\Group as RouterGroup;

class PostRoutes extends RouterGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(
            [
                'module'    => 'post',
                'namespace' => 'Post\Controllers',
            ]
        );

        // All the routes start with /blog
        $this->setPrefix('/post');

        // Add a route to the group
        $this->add(
            '/save',
            [
                'action' => 'save',
            ]
        );

        // Add another route to the group
        $this->add(
            '/edit/{id}',
            [
                'action' => 'edit',
            ]
        );

        // This route maps to a controller different than the default
        $this->add(
            '/',
            [
                'controller' => 'post',
                'action'     => 'index',
            ]
        );
    }
}