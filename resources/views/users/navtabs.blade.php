<div class="tabs tabs-lifted">
    {{-- ユーザー詳細 --}}
    <a href="{{ route('users.show', $user->id) }}" class="tab grow {{ Request::routeIs('users.show') ? 'tab-active' : '' }}">
        TimeLine
        <div class="badge badge-neutral ml-1">{{ $user->microposts_count }}</div>
    </a>
    {{-- フォロー一覧 --}}
    <a href="{{ route('users.followings', $user->id) }}" class="tab grow {{ Request::routeIs('users.followings') ? 'tab-active' : '' }}">
        Followings
        <div class="badge badge-neutral ml-1">{{ $user->followings_count }}</div>
    </a>
    {{-- フォロワー一覧 --}}
    <a href="{{ route('users.followers', $user->id) }}" class="tab grow {{ Request::routeIs('users.followers') ? 'tab-active' : '' }}">
        Followers
        <div class="badge badge-neutral ml-1">{{ $user->followers_count }}</div>
    </a>

    <a href="{{ route('users.favorites', $user->id) }}" class="tab grow {{ Request::routeIs('users.favorites') ? 'tab-active' : '' }}">
        Favorites
        <div class="badge badge-neutral ml-1">{{ $user->favorites_count }}</div>
    </a>
</div>