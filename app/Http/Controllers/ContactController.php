<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactRequest;

use Input, Mail, Redirect, Session;

class ContactController extends Controller
{
    public function send(ContactRequest $request){

        $naam = Input::get('naam');
        $email = Input::get('email');
        $onderwerp = Input::get('onderwerp');
        $bericht = Input::get('bericht');

        Mail::send('emails.contact', array('naam' => $naam, 'email' => $email, 'onderwerp' => $onderwerp, 'bericht' => $bericht), function($message)
        {
            $message->to('mace@macemuilman.nl', 'Mace Muilman')->subject('Contact forumulier macemuilman.nl');
        });

        Session::flash('success', 'Het contact bericht is verstuurd!');

        return Redirect::to('/contact');

    }
}
