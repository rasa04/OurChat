@extends('layouts.chat')
@section('content')
    <h1>{{ $chat->name }}</h1>
    <img src="data:image/jpeg;base64, <?php echo base64_encode($chat->chatPhoto) ?>" alt="Chat photo" width="100px" height="100px">
    <table class="table w-50 mt-5">
        <h1>Участники группы:</h1>
        <tbody>
          @foreach ($users as $user)
            <tr>
            <td><img src="data:image/jpeg;base64, <?php echo base64_encode($user->profilePhoto) ?>" alt="USER" width="50px" height="50px"></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->user_name ? $user->user_name : '-----'}}</td>
            <td>{{ $user->bio ? $user->bio : '-----'}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
@endsection