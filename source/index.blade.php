@extends('_layouts.master')

@section('body')

<div class="posts">
    @foreach ($posts as $post)
        <article class="post">
            <h2 class="post-title">
                <a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
            </h2>
            <section class="post-excerpt">
                {!! $page->excerpt($post->getContent(), $post->getUrl()) !!}
            </section>
        </article>
    @endforeach
</div>

@endsection
