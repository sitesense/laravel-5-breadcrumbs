
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @if ($breadcrumbs->isEmpty())
        <li class="breadcrumb-item active" aria-current="page">
            Home
        @else
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        @endif
        </li>
        @foreach($breadcrumbs as $key => $url)

        {{-- Removes '-' from link text and makes it Title case --}}
        @php $key = title_case(str_replace('-', ' ', $key)) @endphp

        @if ($loop->last)
        <li class="breadcrumb-item active" aria-current="page">
            {{ $key }}
        @else
        <li class="breadcrumb-item">
            <a href="{{ url($url) }}">{{ $key }}</a>
        @endif
        </li>
        @endforeach
    </ol>
</nav>
