<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NamaEmailAnda;

class EmailController extends Controller
{
    //
    public function kirimEmail()
    {
        $email = new NamaEmailAnda();
        Mail::to('tujuan@email.com')->send($email);

        return 'Email telah dikirim!';
    }
}
