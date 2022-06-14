<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailJob;
class SendMailController extends Controller
{
   public function mail_now()
   {
    $details = [

        'footer' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp',
        'email'=>'emmaiscoming111@gmail.com',
        'file'=> public_path('\storage\test.pdf'),

    ];

    dispatch(new SendEmailJob($details));

  //  Mail::to('emmaiscoming111@gmail.com')->send(new SendMail($details));

   

    dd("Email is Sent.");
   }
}
