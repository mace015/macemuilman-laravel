<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Carbon\Carbon;

class PagesController extends Controller
{

    public function index(){

        return view('index');

    }

    public function over(){

        $leeftijd = Carbon::parse('03-07-1995')->age;

        return view('over', compact('leeftijd'));

    }

    public function portfolio(){

        return view('portfolio');

    }

    public function contact(){

        return view('contact');

    }

}
