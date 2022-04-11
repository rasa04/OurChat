<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Profile</title>
</head>

<body>
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <section class="vh-100" style="background-color: #d7e3e9;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-md-9 col-lg-7 col-xl-5">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-4">
                                <div class="d-flex text-black">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('/storage/' . $user->profilePhoto) }}"
                                            alt="Generic placeholder image" class="img-fluid"
                                            style="width: 180px; border-radius: 10px;">
                                        <input type="file" name="profilePhoto"
                                            class="form-control form-control-sm w-25 mb-2 p-2">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <input name="name" class="" type="text" value="{{ $user->name }}">
                                        <input name="user_name" class="text-muted" type="text" value="{{ $user->user_name }}">
                                        <input name="bio" class="" type="text" value="{{ $user->bio }}">
                                        <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                            style="background-color: #efefef;">
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
                                        <div class="d-flex pt-1">
                                            <button type="submit" class="btn btn-primary flex-grow-1">Сохранить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>
