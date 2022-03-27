<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailQuote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{


    public function sendEmail($datos)
    {
        Mail::to('jililix728@f1xm.com')
            ->cc(['steve17gta@gmail.com', 'ewittinge_i738d@tigpe.com'])
            ->send(new SendEmailQuote($datos));
    }
}
