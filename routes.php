<?php

Route::get('chat/{chatId}', [\Crazy\PusherChat\Api\Chat::class, 'getChat']);
Route::get('chat/{chatId}/messages', [\Crazy\PusherChat\Api\Chat::class, 'getMessages']);
Route::post('chat/{chatId}/messages', [\Crazy\PusherChat\Api\Chat::class, 'createMessage']);
