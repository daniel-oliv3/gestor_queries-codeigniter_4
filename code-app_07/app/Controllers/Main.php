<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        //
        // return view('home');
        // return view('login_frm');
        return view('main');
    }


    //--------------------------------------------------------------------
    // Login
    //--------------------------------------------------------------------
    public function login(){
        return view('login_frm');
    }


    public function login_submit(){
        echo 'aqui';
    }

    public function logout(){
        echo 'aqui logout';
    }



    
}
