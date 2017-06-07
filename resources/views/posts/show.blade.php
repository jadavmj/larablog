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
				  @else
				    <p>Post does not exist</p>
				  @endif    
				</div>
            </div>
        </div>
    </div>
</div>
@endsection