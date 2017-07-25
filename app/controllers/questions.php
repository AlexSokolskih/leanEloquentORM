<?php

/**
 * Created by PhpStorm.
 * User: sokolskih
 * Date: 24.07.2017
 * Time: 15:51
 */

namespace Controllers;
use Models\Question;

class Questions
{
    public static function create_question($question,$user_id){
        $question = Question::create(['question'=>$question,'user_id'=>$user_id]);
        return $question;
    }
}