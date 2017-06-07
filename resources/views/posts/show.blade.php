@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            	<div class="panel-body">
				  @if($post)
				    <h1>{{ $post->title }}</h1>				    
				    <p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By {{ $post->author->name }}</p>
				    <article>
				      {!! $post->body !!}
				    </article>
                    @if (Auth::user() && Auth::user()->is_admin())
					    <a class="btn" style="float: right" href="/edit/{{$post->id}}">Edit Post</a>
				    @endif
				  @else
				    <p>Post does not exist</p>
				  @endif    
				</div>
            </div>
            <a class="btn btn-primary" href="/home">Go back to posts</a>
        </div>
    </div>
</div>
@endsection