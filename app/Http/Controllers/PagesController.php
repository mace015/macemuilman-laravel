<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function index(){

        return view('index');

    }

    public function over(){

        return view('over');

    }

    public function portfolio(){

        return view('portfolio');

    }

    public function contact(){

        return view('contact');

    }

}
