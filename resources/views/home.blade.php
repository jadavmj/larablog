@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @if(count($errors->all()))
                <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert">×</a>
                    {!!$errors->first()!!}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Latest Posts</h1>
                </div>

                <div class="panel-body">
                    <div class="col-md-12">
                      @if ( !$posts->count() )
                        <p>Sorry, no posts are available.</p>
                      @else
                        @foreach ($posts as $post)
                              <h1><a href="/show/{{$post->id}}">{{$post->title}}</a></h1>
                              <p>{!! str_limit($post->body, $limit = 200, $end = '....... <a href='.url("/show/".$post->id).'>Read More</a>') !!}</p>
                              <div>
                                <span class="badge">
                                  {{$post->created_at->format('M d,Y \a\t h:i a')}} by 
                                  {{ $post->author->name }}</a>
                                </span>
                              </div>
                              <hr>
                        @endforeach
                      @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
