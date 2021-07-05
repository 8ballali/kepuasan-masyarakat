<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table = "response";
    protected $fillable = [
        'answer_id',
    ];

    public function answer(){
    	return $this->belongsTo('App\Answer');
    }

}
