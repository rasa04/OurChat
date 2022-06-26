<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Profile</title>
</head>
<body>
    <div id="profile_edit">
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div id="image">
                <input type="file" name="profilePhoto" id="select_photo">
                <label for="select_photo">
                    <img src="{{ asset('/storage/' . $user->profilePhoto) }}">
                </label>
            </div>
            <div id="data">
                <input name="name" class="fields" type="text" value="{{ $user->name }}">
                <input name="user_name" class="fields" type="text" value="{{ $user->user_name }}">
                <input name="bio" class="fields" type="text" value="{{ $user->bio }}">
                <div id="save">
                    <button type="submit" class="btn btn-primary flex-grow-1">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
