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


    //--------------------------------------------------------------------
    // New Query
    //--------------------------------------------------------------------
    public function new_query(){
        return view('new_query_frm');
    }

    public function new_query_submit(){
        echo 'aqui';
    }


    
}
