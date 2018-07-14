<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $messages = Message::paginate(10); //por defecto son 15

        //dd($messages);

    	return view('welcome', [
            'messages' => $messages,
            //'messages' => [],
    	]);
    }
}
