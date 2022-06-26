@extends('layouts.main')
@section('content')
    <div id="groups">
        <div class="title"><p>Создать группу</p></div>
        <form action="{{ route('chat.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" id="name" placeholder="Имя чата">
            <input type="text" name="description" id="" placeholder="Описание">
            <label id="file_label" for="file"> Картинка </label>
            <button type="submit" id="btn_create">Создать</button>
            <input type="hidden" name="belongs_to" value="{{ Auth::id() }}">
            <input type="file" name="chatPhoto" id="file">
        </form>
        <div class="title"><p>Группы</p></div>
        <div id="groups_list">
            @foreach ($chats as $chat)
                <a href="{{ route('chat.show', $chat->id) }}">
                    <div class="group">
                        @if (isset($chat->chatPhoto))
                            <img src="{{ asset('/storage/' . $chat->chatPhoto) }}">
                        @else
                            <img src="https://thumbs.dreamstime.com/b/linear-group-icon-customer-service-outline-collection-thin-line-vector-isolated-white-background-138644548.jpg">    
                        @endif
                        <p id="name">{{ $chat->name }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    @endsection
