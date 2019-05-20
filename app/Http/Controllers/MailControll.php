<?php

namespace App\Http\Controllers;

use App\Mail\SendgridMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SichiKawa\LaravelSendgridDriver\SendGrid;

class MailControll extends Controller{

    public function sendMail(){
        Mail::to('insominaics@gmail.com')->send(new SendgridMail());
        dd('Mail sent');
    }
}
