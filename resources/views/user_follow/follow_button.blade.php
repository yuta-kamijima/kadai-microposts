@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
        {{-- アンフォローボタン --}}
        <form method="POST" action="{{ route('user.unfollow', $user->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-error btn-block normal-case"
                onclick="return confirm('id = {{ $user->id }} のフォローを外します．よろしいですか？')">Unfollow</button>
        </form>
    @else
        {{-- フォローボタン --}}
        <form method="POST" action="{{ route('user.follow', $user->id) }}">
            @csrf
            <button type="submit" class="btn btn-primary btn-block normal-case">Follow</button>
        </form>
    @endif
@endif