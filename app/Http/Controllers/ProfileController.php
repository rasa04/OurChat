<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();
        return view('profile', compact('user'));
    }

    public function update(UpdateRequest $request)
    {
        $data = $request->validated();
        if(isset($request->profilePhoto)) $data['profilePhoto'] = $request->profilePhoto = $request->file('profilePhoto')->store('profilePhoto', 'public');
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();
        $user->update($data);
        return redirect()->route('home');
    }
}
