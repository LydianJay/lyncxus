<?php

namespace App\Controllers;

class Home extends BaseController
{
    

    public function __construct() {
    }

    public function index(): string
    {
        return view('home');
    }


    public function send() 
    {
        $number = $this->request->getPost('number');
        $msg    = $this->request->getPost('msg');
    }
    
}
