<?php

namespace App\Models;
use App\Models\QuizQuestion;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'quizTitle','user_id','id', 'code', 'desc'
    ];
    function question(){
		return $this->hasMany(QuizQuestion::class);
	}
    function user(){
		return $this->belongsTo(User::class);
	}
}
