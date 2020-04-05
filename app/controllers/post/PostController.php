<?php

use Phalcon\Mvc\Controller;

class PostController extends Controller
{
    public function indexAction()
    {
        return '<h1>Hello Post Controller index action!</h1>';
    }

    public function saveAction()
    {
        echo 'Anda masuk ke save action';
        // return '<h1>Hello!</h1>';
    }
}