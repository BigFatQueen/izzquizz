<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quizz extends Model
{
	use SoftDeletes;
    protected $fillable=['title','total_mark'];

    public function questions(){
    return $this->hasMany('App\Question');
    }
}
