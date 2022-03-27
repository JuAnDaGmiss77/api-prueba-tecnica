<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailQuote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{


    public function sendEmail($datos)
    {
        Mail::to('jaguilar@processoft.com.co')
            ->cc(['jcastro@processoft.com.co', 'mahernandez@processoft.com.co'])
            ->send(new SendEmailQuote($datos));
    }
}
