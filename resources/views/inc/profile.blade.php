<div id="show_profile">
    <div id="image">
        <a href="{{ route('profile.show') }}">
            <img src="{{ asset('/storage/' . $user->profilePhoto) }}" alt="Фото профиля">
        </a>
    </div>
    <div id="name">
        <p>{{ $user->name }}</p>
    </div>
    <div class="indicators">
        <p>Группы: {{ $user->chats->count() }}</p>
        <p>Подписчики: 976</p>
        <p>Рейтинг: 8.5</p>
    </div>
    <div id="bio">
        <p id="bio"> {{ $user->bio }} </p>
    </div>
</div>