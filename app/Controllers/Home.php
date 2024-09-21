<?php

namespace App\Controllers;

class Home extends BaseController
{
    

    public function __construct() {
        $this->data['registerpath'] = "/register";
    }

    public function index(): string
    {
        return view('home', $this->data);
    }

    public function register(): string
    {
        return view('register');
    }
}
