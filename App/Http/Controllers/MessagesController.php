<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Auth;

class MessagesController extends Controller
{
    public function messagesindex()
    {
        $user = Auth::user();
        $conversations = Message::where('from_user_id', $user->id)
                        ->orWhere('to_user_id', $user->id)
                        ->get();

        return view('messages.index', compact('conversations'));
    }

    public function show($userId)
    {
        $user = Auth::user();
        $messages = Message::where(function ($query) use ($userId, $user) {
            $query->where('from_user_id', $user->id)
                  ->where('to_user_id', $userId);
        })->orWhere(function ($query) use ($userId, $user) {
            $query->where('from_user_id', $userId)
                  ->where('to_user_id', $user->id);
        })->orderBy('created_at', 'asc')->get();

        return view('messages.show', compact('messages', 'userId'));
    }

    public function store(Request $request, $userId)
    {
        $validatedData = $request->validate([
            'message' => 'required'
        ]);

        $message = new Message();
        $message->from_user_id = Auth::user()->id;
        $message->to_user_id = $userId;
        $message->message = $validatedData['message'];
        $message->save();

        return redirect()->back();
    }
}
