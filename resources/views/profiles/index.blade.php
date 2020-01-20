@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle img-responsive w-100">
        </div>
        <div class="col-9 pt-5">
        	<div class="d-flex justify-content-between align-items-baseline">
        		<div class="d-flex align-items-center pb-3">
                    <div class="h4"><a href="{{ url('/profile/'.$user->id) }}">{{ $user->username }}</a></div>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="{{ url('/p/create') }}">Add New Posts</a>
                @endcan
        	</div>
            @can('update', $user->profile)
                <a href="{{ url('/profile/'.$user->id.'/edit') }}">Edit Profile</a>
            @endcan
        	<div class="d-flex">
        		<div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
	        	<div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
	        	<div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
        	</div>
        	<div class="pt-4 font-weight-bold">
        		{{ $user->profile->title }}
        	</div>
        	<div class="">
        		{{ $user->profile->description }}
        	</div>
        	<div class=""><a href="#">{{ $user->profile->url ?? "" }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="{{ url('/p/'.$post->id) }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
