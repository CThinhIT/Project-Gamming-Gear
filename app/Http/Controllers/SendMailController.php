<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Session;

class SendMailController extends Controller
{
    function index()
    {
        return view('sendMail.email_order');
    }
   
}
