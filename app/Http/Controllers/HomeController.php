<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use App\Models\ChatUser;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        /* $chats = Chat::all()->where('belongs_to', $user_id); */
        $chats = User::find($user_id)->chats;
        return view('menu', ['chats' => $chats]);
    }

    public function chat(Chat $chat_id)
    {
        $users = Chat::find($chat_id->id)->users;
        return view('chat.index', ['chat' => $chat_id, 'users' => $users]); 
    }
}
