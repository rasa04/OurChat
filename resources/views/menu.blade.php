@extends('layouts.app')
@section('content')
<table class="table w-50 mt-5">
  <h1>Chats</h1>
  <tbody>
    @foreach ($chats as $chat)
      <tr>
      <td><img src="data:image/jpeg;base64, <?php echo base64_encode($chat->chatPhoto) ?>" alt="Chat photo" width="100px" height="100px"></td>
      <td>{{ $chat->name }}</td>
      <td><a href="{{ route('chat', $chat->id) }}">Открыть</a></td>
      </tr>
    @endforeach
    
  </tbody>
</table>
@endsection