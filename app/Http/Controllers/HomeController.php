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
        $chats = Chat::all()->where('belongs_to', $user_id);
        return view('menu', ['chats' => $chats]);
    }

    public function chat($id)
    {
        $chat = Chat::all()->where('id', $id)[1]->users;
        //$users = ChatUser::all()->where('chat_id', $id);
        return view('chat.index', compact('chat'));
    }
}
