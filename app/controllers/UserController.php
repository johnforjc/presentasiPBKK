<?php

use Phalcon\Mvc\Controller;

class UserController extends Controller
{
    public function changePasswordAction()
    {
        echo 'Anda memasuki UserController dengan action changePasswordAction';

    }

    public function sayHelloAction()
    {
        $name = $this->dispatcher->getParam('name');                    // Mengambil parameter
        echo 'Hello, ' . $name . '<br>';
        echo 'Anda berada di UserController dengan Action sayHello';
    }

    public function getNameAction()
    {
        $name = $this->dispatcher->getParam('name'); 
        echo 'Nama anda adalah ' . $name;
    }
}