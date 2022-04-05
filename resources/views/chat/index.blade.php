@extends('layouts.chat')
@section('content')
    <h1>Участники группы</h1>
    @foreach ($chat as $user)
        <table class="table">
            <tbody>
            <tr>
                <td><img src="data:image/jpeg;base64, <?php echo base64_encode($user->profilePhoto) ?>" alt="Profile photo" width="100px" height="100px"></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->user_name }}</td>
                <td>{{ $user->bio }}</td>
            </tr>
            </tbody>
        </table>
    @endforeach
@endsection