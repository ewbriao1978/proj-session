<?php

namespace App\Controllers;
class Home extends BaseController
{
    public function index()
    {
        return view('input');
    }

    public function getAllData(){
        $data['text'] = $this->request->getVar('inputData');
        return view("anotherview",$data);

        
    }

    public function testSession(){
        $this->session->setFlashdata('my_messageOk','Flashmessage sent successfully');
        return redirect()->to(base_url('/'));

    }

}
