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
    <div id="profile">
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div id="image">
                <input type="file" name="profilePhoto" id="select_photo">
                <label for="select_photo">
                    <img src="{{ asset('/storage/' . $user->profilePhoto) }}">
                </label>
            </div>
            <div>
                <input name="name" class="fields" type="text" value="{{ $user->name }}">
                <input name="user_name" class="fields" type="text" value="{{ $user->user_name }}">
                <input name="bio" class="fields" type="text" value="{{ $user->bio }}">
                <div>
                    <div>
                        <p class="small text-muted mb-1">Группы</p>
                        <p class="mb-0">{{ $user->chats->count() }}</p>
                    </div>
                    <div class="px-3">
                        <p class="small text-muted mb-1">Followers</p>
                        <p class="mb-0">976</p>
                    </div>
                    <div>
                        <p class="small text-muted mb-1">Rating</p>
                        <p class="mb-0">8.5</p>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary flex-grow-1">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
