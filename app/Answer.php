<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

//Andrew Pérez

class Answer extends Model
{
    //attributes id, answer, question_id, created_at, updated_at
    protected $fillable = ['answer', 'question_id'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getAnswer()
    {
        return $this->attributes['answer'];
    }

    public function setAnswer($ans)
    {
        $this->attributes['answer'] = $ans;
    }

    public function getQuestionId()
    {
        return $this->attributes['question_id'];
    }

    public function setQuestionId($pId)
    {
        $this->attributes['question_id'] = $pId;
    }

    public function question(){
        return $this->belongsTo(Question::class);
    }
    
}
