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
        $phone  = $this->request->getPost('number');
        $msg    = $this->request->getPost('msg');

        $server_ip = getenv('GSM_SERVER');
        $server_port = 80;

        $data  = [
            'number' => $phone,
            'msg' => $msg,
        ];
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if (!$socket) {
            die("Socket creation failed: " . socket_strerror(socket_last_error()));
        }
        $result = socket_connect($socket, $server_ip, $server_port);
        if (!$result) {
            die("Socket connection failed: " . socket_strerror(socket_last_error($socket)));
        }
        $jsonified = json_encode($data);
        socket_write($socket, $jsonified, strlen($jsonified));
        socket_close($socket);


        session()->setFlashdata('msg', 'Message Sent to ' . $phone);
        return redirect()->to(site_url('test'));
    }
    


    public function test()
    {
        echo view('test');
    }
}
