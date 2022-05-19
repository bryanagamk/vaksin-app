<nav aria-label="breadcrumb" class="d-none d-lg-block">
    @unless($breadcrumbs->isEmpty())
        <ol class="breadcrumb breadcrumb-style2 mg-b-10">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                    </li>
                @else
                    <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                @endif
            @endforeach
        </ol>
    @endunless
</nav>
