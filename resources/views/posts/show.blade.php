@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <strong>{{$post->user->name}}</strong>
    <h1>
        {{$post->title}}
    </h1>

        @if(count($post->tags))
            <ul>
                @foreach($post->tags as $tag)
                    <li>
                        <a href="/posts/tags/{{$tag->name}}">
                            {{$tag->name}}
                        </a>
                    </li>
                    @endforeach
            </ul>
        @endif

    <p>
        {{$post->body}}
    </p>
<hr>
        <h3>
            <em>Comments</em>
        </h3>
        <div class="comments">
            <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <em>{{$comment->user->name}} :</em>&nbsp;
                    {{$comment->body}} &nbsp;
                    <strong>{{$comment->created_at->diffForHumans()}} </strong>
                </li>
                @endforeach
            </ul>
        </div>
        <hr>
        <div class="card">
            <div class="card-block">
                <form method="post" action="/posts/{{$post->id}}/comments">
                    {{csrf_field()}}
                    <div class="form-control">
                        <textarea name="body" placeholder="Your comment here ."  class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form>
                @include('layouts.error')
            </div>
        </div>

    </div>
    @endsection
