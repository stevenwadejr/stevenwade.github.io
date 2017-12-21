<div class="avatar">
    @include('_partials.gravatar')
</div>

<div class="social">
    @foreach($page['social'] as $social)
        <a href="{{$social['link']}}" title="{{$social['title']}}" class="social-link">
            <?php $page['include_svg']($social['icon']); ?>
        </a>
    @endforeach
</div>
