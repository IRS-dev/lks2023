<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionValue extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_id','value','id'
    ];
}
