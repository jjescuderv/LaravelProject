<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

//Andrew Pérez

class Question extends Model
{
    //attributes id, question, created_at, updated_at
    protected $fillable = ['Question'];

    public static function validate(Request $request)
    {
        $request->validate([
            //"Date" => "required",
            "Question" => "required",
            "Answer" => "required"
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
        return $this->attributes['Question'];
    }

    public function setQuestion($question)
    {
        $this->attributes['Question'] = $question;
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }


}
