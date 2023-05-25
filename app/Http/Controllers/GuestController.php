<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Quiz;
use Illuminate\Support\Str;
use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\QuizQuestion;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($code)
    {
        $quiz = Quiz::where('code',$code)->first();
        $question = $quiz->question()->get();
        // foreach ($question as $choice) {
        //     $questionvalues = QuizQuestion::where('quiz_id',$choice->quiz_id)->get();
        //     $values = $questionvalues->questionvalue()->get();
        //     dump($values);
        // }
        // die();
        
        return view('quiz',[
          'quiz' => $quiz,
          'questions' => $question,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuestRequest $request ,$code )
    {

            
        function sessionguest() { 

            $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
            srand((double)microtime()*1000000); 
            $i = 0; 
            $pass = '' ; 
        
            while ($i <= 11) { 
                $num = rand() % 33; 
                $tmp = substr($chars, $num, 1); 
                $pass = $pass . $tmp; 
                $i++; 
            } 
        
            return $pass; 
        
        } 

        $uuidGuest = Str::uuid()->toString();
        $guest = new Guest;
        $guest->session = sessionguest();
        $guest->id =$uuidGuest;
        dd($guest);
        $guest->save();  



    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuestRequest $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        //
    }
}
