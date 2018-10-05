
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item<?php $breadcrumbs->isEmpty() ? ' active' : '' ?>">
            <a href="/">Home</a>
        </li>
        @foreach($breadcrumbs as $key => $url)
        @if (! $loop->last)
        <li class="breadcrumb-item">
            <a href="{{ url($url) }}">{{ title_case(str_replace('-', ' ', $key)) }}</a>
        @else
        <li class="breadcrumb-item active" aria-current="page">
            {{ title_case(str_replace('-', ' ', $key)) }}
        @endif
        </li>
    @endforeach
    </ol>
</nav>
