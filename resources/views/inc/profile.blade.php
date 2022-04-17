<div id="show_profile">
    <a href="{{ route('profile.show') }}">
        <img src="{{ asset('/storage/' . $user->profilePhoto) }}" alt="Фото профиля">
    </a>
    <p id="name">{{ $user->name }}</p>
    <p style="color: #2b2a2a;">{{ $user->bio }}</p>
    <div>
        <div>
            <p>Группы</p>
            <p>{{ $user->chats->count() }}</p>
        </div>
        <div class="px-3">
            <p>Followers</p>
            <p>976</p>
        </div>
        <div>
            <p>Rating</p>
            <p>8.5</p>
        </div>
    </div>
    <div class="d-flex pt-1">
        <button type="button">Chat</button>
        <button type="button">Follow</button>
    </div>
</div>