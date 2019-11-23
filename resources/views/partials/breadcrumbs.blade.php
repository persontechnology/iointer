@if (count($breadcrumbs))

    <div class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li class=""><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }} <i class="far fa-hand-point-right mr-1"></i> </a></li>
            @else
                <li class=""> {{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </div>

@endif