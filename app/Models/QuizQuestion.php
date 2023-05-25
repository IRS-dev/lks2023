<?php

namespace App\Models;
use App\Models\Quiz;
use App\Models\QuestionValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'questionTitle','quiz_id','type','id'
    ];

    function quiz(){
		return $this->belongsTo(Quiz::class);
	}

    function questionvalue(){
		return $this->hasMany(QuestionValue::class);
	}

}
