<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'quizTitle','user_id','id', 'code'
    ];
    function quizquestion(){
		return $this->hasMany('App\Models\QuizQuestion','question_id');
	}
}
