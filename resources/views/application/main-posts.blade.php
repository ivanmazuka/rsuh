<div class="post">

    @if($post->picture!=NULL)
        <div class="picture" style="background-image: url('img/{{ $post->picture }}')"></div>
    @endif
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->postTime() }}</p>
    <p>{{ $post->short() }}</p>
</div>