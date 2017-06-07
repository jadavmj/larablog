@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		    @if(Session::has('msg'))
		        <div class="alert alert-success">
		            <a class="close" data-dismiss="alert">×</a>
		            {!!Session::get('msg')!!}
		        </div>
		    @endif
            <div class="panel panel-default">
                <div class="panel-heading">Create New Post</div>
            	<div class="panel-body">
				    <form class="form-horizontal" role="form" method="POST" action="/store">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Body</label>

                            <div class="col-md-6">
                                <textarea id="body" rows="5" class="form-control" name="body" value="{{ old('body') }}" required></textarea> 

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
                            <label for="active" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <select id="active" class="form-control" name="active" required>
                                  <option value="1">Active</option>
                                  <option value="0">Inactive</option>
                                </select>
                                @if ($errors->has('active'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('active') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Post
                                </button>
                                <a class="btn btn-primary" href="/home">Cancel</a>
                            </div>
                        </div>
                    </form>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection