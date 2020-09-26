<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quizz;
use App\Question;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function quizz(){
        $quizzs=Quizz::with('questions')->get();

        
        return view('quizz.index',compact('quizzs'));
    }

    public function quizzstart($id){
        $questions=Question::where('quizz_id',$id)->get();
        $quizz=Quizz::find($id);
        return view('question.questionpage1',compact('questions','quizz'));

       
    }

   
}
