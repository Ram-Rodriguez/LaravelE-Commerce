<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(){
        $email = "eme@email.com";
        $name = "Onsub Hehe";
        return view('profile')
        ->with("email", $email)
        ->with("name", $name);
    }
}
