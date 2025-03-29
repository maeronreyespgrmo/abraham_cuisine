<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\FeedbackScore;
use Illuminate\Foundation\Validation\ValidatesRequests;

class FeedbackController extends Controller
{
    use ValidatesRequests;

       // Display a listing of reservations
   public function create()
   {
    return view('feedback.create');
   }

   public function show()
   {
    $feedback_scores_positive = FeedbackScore::where('sentimental','=','positive')->count();
    $feedback_scores_negative = FeedbackScore::where('sentimental','=','negative')->count();
    $feedback_scores_neutral = FeedbackScore::where('sentimental','=','neutral')->count();

    $feedback_scores = FeedbackScore::all();


    
    $score = array($feedback_scores_negative,$feedback_scores_positive,$feedback_scores_neutral);
      return view('feedback.show', compact('score','feedback_scores'));
   }

   public function store(Request $request)
   {
    
    $this->validate($request, [
        'q1' => 'required',
        'q2' => 'required',
        'q3' => 'required',
        'q4' => 'required',
        'q5' => 'required',
        'q6' => 'required',
        'q7' => 'required',
        'q8' => 'required',
        'q9' => 'required',
        'q10' => 'required',
    ]);

    $agree = $request->has('agree') ? 'Yes' : 'No';
    $sentiment = $this->analyzeSentiment($request->other_comments);

    $feedback = new Feedback();
    $feedback->q1 = $request->q1;
    $feedback->q2 = $request->q2;
    $feedback->q3 = $request->q3;
    $feedback->q4 = $request->q4;
    $feedback->q5 = $request->q5;
    $feedback->q6 = $request->q6;
    $feedback->q7 = $request->q7;
    $feedback->q8 = $request->q8;
    $feedback->q9 = $request->q9;
    $feedback->q10 = $request->q10;
    $feedback->agree = $agree;
    $feedback->save();

    $feedback_score = ($request->q1+$request->q2+$request->q3+$request->q4+$request->q5+$request->q6+$request->q7+$request->q8+$request->q9+$request->q10)/10; 
    $feedback_scores = new FeedbackScore();
    $feedback_scores->feedback_id = $feedback->id;
    $feedback_scores->score = $feedback_score;
    $feedback_scores->other_comments = $request->other_comments;
    $feedback_scores->sentimental = trim($sentiment);
    $feedback_scores->save();
    //dd(base_path('\public\scripts\sentimental.py'));

    return redirect()->back()->with('success', 'Feedback submitted successfully!');

   }

   private function analyzeSentiment($text)
    {
        $escapedText = escapeshellarg($text);
        $scriptPath = base_path('\public\scripts\sentimental.py');
        $pythonPath = 'python'; // Use 'python' instead of 'python3'
        $output = shell_exec("$pythonPath \"$scriptPath\" $escapedText 2>&1");
        return$output;
    }
}
