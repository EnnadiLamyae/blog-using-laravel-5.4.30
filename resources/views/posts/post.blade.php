<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{$post->id}}">
        {{$post->title}}
        </a>
    </h2>

    <strong>{{$post->user->name}}</strong> on
    {{$post->created_at->toFormattedDateString()}}

    <p>{{$post->body}}</p>
    <hr>


</div><!-- /.blog-post -->