@extends('layouts.chat')
@section('content')
    <h1>{{ $chat->name }}</h1>
    <img src="{{ asset('/storage/' . $chat->chatPhoto) }}" alt="Chat photo" width="100px" height="100px">
    <form action="{{ route('chat.message.store') }}" method="POST">
        @csrf
        <input type="text" name="message" class="form-control w-25 mb-2 p-2" placeholder="Сообщение">
        <input type="number" name="chatId" value="{{ $chat->id }}" style="visibility: hidden; width: 0; height: 0">
        <input type="number" name="from_user" value="{{ Auth::id() }}" style="visibility: hidden; width: 0; height: 0">
        <button type="submit" class="btn btn-success w-25 mb-2 p-2">Отправить</button>
    </form>
    <table class="table w-50 mt-5">
        <h1>Участники группы:</h1>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td><img src="data:image/jpeg;base64, @php echo base64_encode($user->profilePhoto) @endphp" alt="USER" width="50px" height="50px"></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->user_name ? $user->user_name : '-----' }}</td>
                    <td>{{ $user->bio ? $user->bio : '-----' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table w-50 mt-5">
        <h1>Сообщения:</h1>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->from_user }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
