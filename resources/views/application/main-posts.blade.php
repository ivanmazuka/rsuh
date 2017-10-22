<div class="post">

    @if($post->picture!=NULL)
        <div class="picture" style="background-image: url('img/{{ $post->picture }}')"></div>
    @endif

    <h3>
        <a class="post-title"  href="/news/post/{{ $post->id }}">{{ $post->title }}</a>
    </h3>
    <p>{{ $post->postTime() }}</p>
    <p>{{ $post->short() }}</p>

</div>