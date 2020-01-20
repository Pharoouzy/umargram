@extends('layouts.app')

@section('content')

<div class="container">
	<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-8 offset-2">
				<div class="row">
					<h1>Add New Post</h1>
					<hr>
				</div>
				<div class="form-group row">
		            <label for="caption" class="col-md-4 col-form-label">{{ __('Post Caption') }}</label>

		            <input id="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="caption" value="{{ old('caption') }}" autofocus autocomplete="caption">

	                @if ($errors->has('caption'))
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $errors->first('caption') }}</strong>
	                    </span>
	                @endif
		        </div>
				<div class="form-group row">
					<label for="image" class="col-md-4 col-form-label">{{ __('Post Image') }}</label>
					<input type="file" name="image" id="image" class="form-control-file">
					@if ($errors->has('image'))
						<strong class="text-danger">{{ $errors->first('image') }}</strong>
		            @endif
				</div>
				<div class="row pt-5">
					<button class="btn btn-primary">Add New Post</button>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection