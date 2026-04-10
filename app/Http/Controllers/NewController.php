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
    public function home(){
        return view ('home.index');
    }

     public function StudyAbroad(){
        return view ('Studyabroad.index');
    }

    public function dashboard(){
        return view ('admin.dashboard');
    }

}
