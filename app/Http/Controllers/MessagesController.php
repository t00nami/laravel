<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request,['name'=>'required|min:3','email'=>'required|email']);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->textarea;
        $message->save();

        return redirect('/')->with('success','Mensaje Enviado');
    }

    public function getMessages(Request $request)
    {
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
