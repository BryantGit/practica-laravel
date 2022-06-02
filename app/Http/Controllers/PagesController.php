<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return redirect("curso-semestral");
    }

    public function semestral(){
        return view("pages.thinkers");
    }
    public function anual(){
        return view("pages.anual");
    }
    public function semi(){
        return view("pages.semi");
    }
    public function semestralData(){

    }
}
