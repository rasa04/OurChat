@extends('layouts.chat')
@section('content')

<div style="background-color: #eee;">
    <div class="group_info" onclick="show_users()">
        <img src="{{ asset('/storage/' . $chat->chatPhoto) }}" style="border-radius: 50%" width="50px" height="50px">
        <p class="">{{ $chat->name }}</p>
    </div>
    <div>
        <p>Участники группы:<p>
        <div>
            @foreach ($users as $user)
                <tr>
                    <td><img src="{{ asset('/storage/' . $user->profilePhoto) }}" width="50px" height="50px">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->user_name ? $user->user_name : '-----' }}</td>
                    <td>{{ $user->bio ? $user->bio : '-----' }}</td>
                </tr>
            @endforeach
        </div>
    </div>
    <div class="card-body">
        @foreach ($messages as $message)
            @if ($message->from_user == Auth::id())
                <div class="">
                    @foreach ($users as $user)
                        @if ($user->id == $message->from_user)
                            {{ $user->name }}
                        @endif   
                    @endforeach
                    <div class="" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                        <p class="small mb-0">{{ $message->message }}</p>
                    </div>
                    <p class="small" style="font-size: 0.5em; float: right">
                        {{ $message->created_at }}</p>
                </div>
            @else
                <div class="">
                    @foreach ($users as $user)
                        @if ($user->id == $message->from_user)
                            {{ $user->name }}
                        @endif   
                    @endforeach
                    <div class="" style="border-radius: 15px; background-color: #bd9090;">
                        <p class="">{{ $message->message }}</p>
                    </div>
                    <p class="" style="font-size: 0.5em; float: right"> {{ $message->created_at }}</p>
                </div>
            @endif
        @endforeach
        <form class="form-outline" action="{{ route('chat.message.store') }}" method="POST">
            @csrf
            <input class="form-control" type="text" name="message" class="form-control w-25 mb-2 p-2"
                placeholder="Сообщение">
            <input type="number" name="chatId" value="{{ $chat->id }}"
                style="visibility: hidden; width: 0; height: 0">
            <input type="number" name="from_user" value="{{ Auth::id() }}"
                style="visibility: hidden; width: 0; height: 0">
            <button type="submit" class="btn btn-success mt-2 p-2">Отправить</button>
        </form>
    </div>
</div>
@endsection
