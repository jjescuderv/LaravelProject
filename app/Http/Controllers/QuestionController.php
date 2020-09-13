<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Question;

//Andrew Pérez

class QuestionController extends Controller
{
    public function details()
    {

        $data = []; //to be sent to the view
        $data["title"] = "Questions";
        $data["question"] = Question::with("answers")->get();
        return view('question.details')->with("data",$data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create Question";
        $data["question"] = Question::with("answers")->get();

        return view('question.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        
        Question::validate($request);
        Question::create($request->only(["Question","Answer"]));
        return back()->with('success','Item created successfully!');

        //return view('question.save');
        //dd($request->all());
        //here goes the code to call the model and save it to the database
    }

    public function delete($id)
    {
        Question::where('id', $id)->delete();
        return redirect()->route('question.details');
    }

}
