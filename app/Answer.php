<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "answer";
    protected $fillable = [
        'answer', 'bgcolor', 'file',
    ];
    public function response(){
    	return $this->hasMany('App\Response');
    }
}
