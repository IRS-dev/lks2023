<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Models\QuizQuestion;
use Illuminate\Support\Str;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard',[
            'quizlist' => Quiz::where('user_id',auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuizRequest $request)
    {
        
        // dd($request);
        function code() { 

            $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
            srand((double)microtime()*1000000); 
            $i = 0; 
            $pass = '' ; 
        
            while ($i <= 7) { 
                $num = rand() % 33; 
                $tmp = substr($chars, $num, 1); 
                $pass = $pass . $tmp; 
                $i++; 
            } 
        
            return $pass; 
        
        } 

        $shorts = $request->short;
        if (is_array($shorts)) {
            $shorts = array_chunk($shorts,1);
        }


        $longs = $request->long;
        if(is_array($longs)){
            $longs = array_chunk($longs,1);
        }

        $singles = $request->single;
        if(is_array($singles)){
            $singles = array_chunk($singles,1);
        }
        $singlechoices = $request->singleChoice;
        if(is_array($singlechoices)){
            $singlechoices = array_chunk($singlechoices,2);
        }

        $multiples =$request->multiple;
        if(is_array($multiples)){
            $multiples = array_chunk($multiples,1);
        }
        $multiplechoices = $request->multipleChoice;
        if(is_array($multiplechoices)){
            $multiplechoices = array_chunk($multiplechoices,4);
        }
        // dd($shorts,$longs,$singles,$singlechoices,$multiples,$multiplechoices);

        $validatedQuiz = $request->validate([
            'titleQuiz' => 'required','max:255'
        ]);

        $uuidQuiz = Str::uuid()->toString();
        $quiz = new Quiz;
        $quiz->quizTitle = $validatedQuiz['titleQuiz'];
        $quiz->user_id = auth()->user()->id;
        $quiz->code = code();
        $quiz->id = $uuidQuiz;
        $quiz->save();

        if(!is_null($shorts)){
            foreach ($shorts as $short ) {
                $uuidQuestion = Str::uuid()->toString();
                $question = new QuizQuestion;
                $question->type = 'short';
                $question->questionTitle = $short[0];
                $question->quiz_id = $uuidQuiz;
                $question->id = $uuidQuestion;
                $question->save();
            }
        
        }
        if(!is_null($longs)){
            foreach ($longs as $long ) {
                $uuidQuestion = Str::uuid()->toString();
                $question = new QuizQuestion;
                $question->type = 'long';
                $question->questionTitle = $long[0];
                $question->quiz_id = $uuidQuiz;
                $question->id = $uuidQuestion;
                $question->save();
            }
        
        }

        redirect('/dashboard')->with(['success'=>'Quiz has been added']);



    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Quiz::destroy($id);
        return redirect()->back()->with(['success'=>'Quiz hass been deleted']);
    }
}
