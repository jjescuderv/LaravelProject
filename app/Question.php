<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

//Andrew Pérez

class Question extends Model
{
    //attributes id, question, created_at, updated_at
    protected $fillable = ['question'];

    public static function validate(Request $request)
    {
        $request->validate([
            "question" => "required",
            "answers" => "required"
        ]);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getQuestion()
    {
        return $this->attributes['question'];
    }

    public function setQuestion($question)
    {
        $this->attributes['question'] = $question;
    }

    public function answers(){
        return $this->hasMany(Answer::class);
    }


}
