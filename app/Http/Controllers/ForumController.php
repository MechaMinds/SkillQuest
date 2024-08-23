<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
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
        $userName = Auth::user()->name;

        $image = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . rand(100, 999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/forumImages'), $imageName);
            $image = $imageName;
        }

        $message = [
            'user_id' => $userId,
            'user_name' => $userName,
            'message' => $messageContent,
            'image' => $image,
            'timestamp' => now()->format('H:i')  // Format hanya jam dan menit
        ];

        // Save message to JSON file
        $filePath = storage_path("app/forum/forum_{$forumId}.json");
        $messages = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];
        $messages[] = $message;
        file_put_contents($filePath, json_encode($messages));

        // Broadcast the message using Pusher
        broadcast(new MessageSent($message, $forumId))->toOthers();

        return response()->json(['status' => 'Message Sent!']);
    }
}

