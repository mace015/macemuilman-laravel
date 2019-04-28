<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Carbon\Carbon;

class PagesController extends Controller
{
    public function index()
    {
        $age = Carbon::parse('03-07-1995')->age;
        $experience = Carbon::parse('01-01-2014')->age;

        return view('index', [
            'age'        => $age,
            'experience' => $experience,
        ]);
    }
}
