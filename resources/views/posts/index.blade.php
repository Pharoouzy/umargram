@extends('layouts.app')


@section('content')
	<div class="container">
		@if (!empty($posts))
			@foreach($posts as $post)
				<div class="card">
					<div class="row">
						<div class="col-6 offset-3 card-body">
							<a href="{{ route('profile.show', $post->user->id) }}">
								<img src="/storage/{{ $post->image }}" class="w-100">
							</a>
						</div>
					</div>
					<div class="row pt-2 pb-4">
						<div class="col-6 offset-3">
							<div class="">
								<p>
									<span class="font-weight-bold pr-1">
										<a href="{{ route('profile.show', $post->user->id) }}">
											<span class="text-dark">{{ $post->user->username }}</span>
										</a>
									</span>
									{{ $post->caption }}
								</p>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		@else
		<div class="container">
			<h2 class="text-danger text-center">No followers click <a class="btn btn-primary" href="{{ url('people') }}">here</a> to see people to follow</h2>
		</div>
		@endif
		<div class="row">
			<div class="col-12 d-flex justify-content-center">
				{{ $posts->links() }}
			</div>
		</div>
	</div>
@endsection