<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function fetchMessages($forumId)
    {
        $filePath = storage_path("app/forum/forum_{$forumId}.json");
        if (file_exists($filePath)) {
            return response()->json(json_decode(file_get_contents($filePath), true));
        }
        return response()->json([]);
    }

    public function sendMessage(Request $request)
    {
        $forumId = $request->input('forum_id');
        $messageContent = $request->input('message');
        $userId = Auth::id();

        $message = [
            'user_id' => $userId,
            'message' => $messageContent,
            'timestamp' => now()->toDateTimeString()
        ];

        $filePath = storage_path("app/forum/forum_{$forumId}.json");
        $messages = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];
        $messages[] = $message;

        file_put_contents($filePath, json_encode($messages));

        broadcast(new MessageSent($message, $forumId))->toOthers();

        return ['status' => 'Message Sent!'];
    }
}
