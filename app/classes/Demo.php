<?php
namespace App\classes;


class Demo
{
   public function countString($data){
       $givenWord=str_word_count($data['giving_string']);
       $givenString=strlen($data['giving_string']);
       $result = [
           'string_length' =>$givenString,
           'word_length' =>$givenWord
       ];
       return $result;
    }
}