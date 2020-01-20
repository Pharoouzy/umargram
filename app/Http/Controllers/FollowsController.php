<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller {
    
	function __construct() {
		$this->middleware('auth');
	}

    public function store(User $user) {

    	// grab auth user and then basically attach or detach d relationship
    	// toggle() toggles btw connected or not connected
    	return auth()->user()->following()->toggle($user->profile);
    }
}
