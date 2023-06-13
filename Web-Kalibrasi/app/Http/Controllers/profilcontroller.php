<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilcontroller extends Controller
{
    public function profil(){
        return view('page.user');
    }
}
