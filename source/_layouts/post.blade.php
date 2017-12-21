@extends('_layouts.master')

@section('body')

    <article class="post">
        <h1 class="post-title">{{ $page->title }}</h1>
        <section class="post-content">
            @yield('content')
        </section>
    </article>

@endsection
