@extends('layouts.chat')
@section('content')
    <table class="table w-50 mt-5">
        <h1>Участники группы:</h1>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td><img src="{{ asset('/storage/' . $user->profilePhoto) }}" alt="USER" width="50px" height="50px">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->user_name ? $user->user_name : '-----' }}</td>
                    <td>{{ $user->bio ? $user->bio : '-----' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <section style="background-color: #eee;">
        <div class="container py-5">
            <div id="focus" class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card" id="chat1" style="border-radius: 15px;">
                        <div class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0"
                            style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                            <p class="mb-0 fw-bold">{{ $chat->name }}</p>
                            <a href="" onclick="users()">
                                <img src="{{ asset('/storage/' . $chat->chatPhoto) }}" alt="Chat photo"
                                    style="border-radius: 50%" width="50px" height="50px">
                            </a>
                        </div>
                        <div class="card-body">
                            @foreach ($messages as $message)
                                @if ($message->from_user == $user->id)
                                    <div class="d-flex flex-row justify-content-start mb-4">
                                        {{ $message->from_user }}
                                        <div class="p-3 ms-3"
                                            style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                                            <p class="small mb-0">{{ $message->message }}</p>
                                        </div>
                                        <p class="small" style="font-size: 0.5em; float: right">
                                            {{ $message->created_at }}</p>
                                    </div>
                                @else
                                    <div class="d-flex flex-row justify-content-end mb-4">
                                        {{ $message->from_user }}
                                        <div class="p-3 ms-3" style="border-radius: 15px; background-color: #fbfbfb;">
                                            <p class="small mb-0">{{ $message->message }}</p>
                                        </div>
                                        <p class="small" style="font-size: 0.5em; float: right">
                                            {{ $message->created_at }}</p>
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
                </div>
            </div>
        </div>
    </section>
@endsection
