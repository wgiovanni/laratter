<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Message $message)
    {
    	//$message = Message::find($id);

    	return view('messages.show', [
    		'message' => $message,
    	]);
    }

    public function create(CreateMessageRequest $request)
    {
    	//dd($request->all());
        /*$this->validate($request, [
            'message' => ['required','max:160']
        ], [ //array para los errores
            'message.required' => 'Por favor escribe tu mensaje.',
            'message.max' => 'El mensaje no puede superar los 160 caracteres.'
        ]);*/

        $user = $request->user();
        $image = $request->file('image');

        $message = Message::create([
            'user_id' => $user->id,
            'content' => $request->input('message'),
            'image' => $image->store('messages', 'public')
        ]);
        //dd($message);
        return redirect('/messages/'.$message->id);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $messages = Message::where('content', 'LIKE', "%$query%")->get();

        return view('messages.index', [
            'messages' => $messages,
        ]);
    }
}
