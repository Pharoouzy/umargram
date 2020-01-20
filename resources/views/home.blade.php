@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ asset('img/75984607FJ.jpg') }}" class="rounded-circle img-responsive" width="180">
        </div>
        <div class="col-9 pt-5">
        	<div class="d-flex justify-content-between align-items-baseline">
        		<h1>{{ $user->username }}</h1>
                <a href="#">Add New Posts</a>
        	</div>
        	<div class="d-flex">
        		<div class="pr-5"><strong>23</strong> posts</div>
	        	<div class="pr-5"><strong>23k</strong> followers</div>
	        	<div class="pr-5"><strong>235</strong> following</div>
        	</div>
        	<div class="pt-4 font-weight-bold">
        		{{ $user->profile->title }}
        	</div>
        	<div class="f">
        		{{ $user->profile->description }}
        	</div>
        	<div class="m"><a href="#">{{ $user->profile->url ?? "" }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
    	<div class="col-4">
    		<img src="{{ asset('img/1.jpg') }}" class="w-100">
    	</div>
    	<div class="col-4">
    		<img src="{{ asset('img/2.jpg') }}" class="w-100">
    	</div>
    	<div class="col-4">
    		<img src="{{ asset('img/3.jpg') }}" class="w-100">
    	</div>
    </div>
</div>
@endsection
