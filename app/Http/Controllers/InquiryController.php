<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InquirySendmail;
use Mail;

class InquiryController extends Controller
{
    //問い合わせフォームの表示
    public function index()
    {

        return view('inquiry.index');

    }

    // メール送信処理
    public function send(Request $request)
    {
        
        $contact = $request -> all();

        $mail = $request ->mail;

        $mymail = 'massage.salon.flow@gmail.com';
        
        Mail::to($mail)->send(new InquirySendmail($contact));
        Mail::to($mymail)->send(new InquirySendmail($contact));

        return view('inquiry.thanks');
    }

}
