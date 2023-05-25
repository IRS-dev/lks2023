<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\QuizAnswer;
use App\Models\Quiz;
use App\Http\Requests\StoreQuizAnswerRequest;
use App\Http\Requests\UpdateQuizAnswerRequest;

class QuizAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(Auth::user()->role == "admin"){
            return view('admin.result.index',[
                'quizlist'=> Quiz::all()
            ]);
        }else{
            return view('admin.result.index',[
                'quizlist' => Quiz::where('user_id',auth()->user()->id)->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuizAnswerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function result($code )
    {
        return view('admin.result.show',[
            'quiz' => Quiz::where('code',$code)->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuizAnswer $quizAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuizAnswerRequest $request, QuizAnswer $quizAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuizAnswer $quizAnswer)
    {
        //
    }
}
