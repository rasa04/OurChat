<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\ChatUser;
use App\Models\Correspondens;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

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
        $chats = User::find($user_id)->chats;

/*         $correspondens = Correspondens::where('firstId', $user_id)->first();
        if (isset($correspondens)) $correspondens = Correspondens::where('secondId', $user_id)->first()->users; */

        $correspondens = Correspondens::all()->where('uId', $user_id);
        return view('menu', ['chats' => $chats, 'correspondens' => $correspondens]);
    }

    public function chat(Chat $chat_id)
    {
        $users = Chat::find($chat_id->id)->users;
        $messages = ChatMessage::where('chatId', $chat_id->id)->orderBy('created_at', 'desc')->get();
        return view('chat.index', ['chat' => $chat_id, 'users' => $users, 'messages' => $messages]); 
    }
}
