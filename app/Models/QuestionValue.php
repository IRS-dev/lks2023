<?php

namespace App\Models;
use App\Models\QuizQuestion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionValue extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_id','value','id'
    ];
    protected $primaryKey = 'id';

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $int = 'string';
    function quizquestion(){
		return $this->belongsTo(QuizQuestion::class);
	}
}
