<?php

use Phalcon\Mvc\Router\Group as RouterGroup;

class PostRoutes extends RouterGroup
{
    public function initialize()
    {

        $this->setPaths(
            [
                // 'namespace' => 'post',
                'controller' => 'post'
            ]
        );

        $this->setPrefix('/post');

        $this->add(
            '/save',
            [
                // 'controller' => 'post',
                'action' => 'save',
            ]
        );

        $this->add(
            '/edit/{id}',
            [
                // 'controller' => 'post',
                'action' => 'edit',
            ]
        );

        $this->add(
            '/post',
            [
                'action'     => 'index',
            ]
        );
    }
}