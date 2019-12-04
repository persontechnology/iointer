
@if (count($chats) > 0)
<div class="list-group">
    @foreach ($chats as $chat)
    
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">
                @if ($chat->user)
                    {{ $chat->user->nombres }} {{ $chat->user->apellidos }}
                @else
                    <strong>{{ $chat->soporte->nombres }} {{ $chat->soporte->apellidos }}</strong>
                @endif
            </h5>
            <small class="text-muted">
                @if ($chat->created_at)
                    {{ $chat->created_at->diffForHumans() }}    
                @endif
                
            </small>
        </div>
        <p class="mb-1">
            {{ $chat->mensaje }}
        </p>
        </a>
          
    @endforeach
</div>

@else
<p>No existe chats</p>
@endif

