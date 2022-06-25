@extends('layouts.main')
@section('content')
    <table class="table w-50 mt-5 col" >
        <h1>Создать группу</h1>
        <form action="{{ route('chat.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" class="" placeholder="Имя чата">
            <input type="text" name="description" class="" placeholder="Описание">
            <input type="file" name="chatPhoto" class="">
            <input type="number" name="belongs_to" value="{{ Auth::id() }}"
                style="visibility: hidden; width: 0; height: 0">
            <button type="submit" class="btn btn-success w-25 mb-2 p-2">Создать</button>
        </form>
        <h1>Группы</h1>
        <tbody>
            @foreach ($chats as $chat)
                <tr>
                    <td><img src="{{ asset('/storage/' . $chat->chatPhoto) }}" alt="Chat photo" width="100px"
                            height="100px">
                    </td>
                    <td>{{ $chat->name }}</td>
                    <td><a href="{{ route('chat.show', $chat->id) }}">Открыть</a></td>
                </tr>
            @endforeach
        </tbody>
    @endsection
