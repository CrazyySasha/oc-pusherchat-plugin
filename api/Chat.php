<?php

namespace Crazy\PusherChat\Controllers;

use Event;
use Illuminate\Routing\Controller;

/**
 * Chat Backend Controller
 */
class Chat extends Controller
{
    public function getChat($chatId = null)
    {
        return \Crazy\PusherChat\Models\Chat::find($chatId);
    }

    public function getMessages($chatId)
    {
        return \Crazy\PusherChat\Models\Message::where('chat_id', $chatId)->get();
    }

    public function createMessage($chatId)
    {
        $data = \Input::only('message',);
        $rules = ['message' => 'required'];

        $validation = \Validator::make($data, $rules);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors], 400);
        }

        $model = new \Crazy\PusherChat\Models\Message();

        $model->message = $data['message'];
        $model->save();

        \Event::fire('crazy.pusherchat.message.sent', [$chatId, $data['message']]);

        return response()->json($model);
    }
}
