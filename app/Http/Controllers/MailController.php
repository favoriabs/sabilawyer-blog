<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(Request $request){
      $senderName = $request->sender_name;
      $email = $request->email;
      $title = $request->title;
      $content = $request->message;

      \Mail::send('emails.contact', ['title' => $title, 'content' => $content], function ($message) use($email, $senderName)
      {

          $message->from($email, $senderName);

          $message->to('favoriabs@gmail.com');

      });

      return back()->with('success', 'Mail Sent successfully. Your mail will be repiled in 24hrs!!!');
    }
}
