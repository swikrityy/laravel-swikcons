<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function display(){
        return view('contact.index');
    }
    public function blogs(){
        return view ('blog.index');
    }
}
