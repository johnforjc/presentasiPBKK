<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return '<h1>Hello!</h1>';
    }

    public function sayHalloAction()
    {
        echo 'Anda masuk ke sayHallo action';
        return '<h1>Hello!</h1>';
    }
}