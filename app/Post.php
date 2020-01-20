<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    
    // fill all columns
	protected $guarded = [];

	// protected $fillable = [
 //        'caption', 'image',
 //    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
