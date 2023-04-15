@foreach ($conversations as $conversation)
    @if ($conversation->from_user_id == Auth::user()->id)
        <a href="{{ route('messages.show', ['userId' => $conversation->to_user_id]) }}">{{ $conversation->toUser->name }}</a>
    @else
        <a href="{{ route('messages.show', ['userId' => $conversation->from_user_id]) }}">{{ $conversation->fromUser->name }}</a>
    @endif
@endforeach