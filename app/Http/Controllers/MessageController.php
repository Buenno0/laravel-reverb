<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    

    public function send(Request $request) {

        // ==== status ====
        // 0 - enviada
        // 1 - nao enviada
        // 2 - recebida
        // 3 - lida
        $message = [
            'idSender' => null,
            'idRecipient' => $request->recipient,
            'message' => $request->message,
            'status' => "0",
        ];

        MessageEvent::dispatch($message);


    }

}
