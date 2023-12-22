<?php

class StudentModel extends CI_Model {
    public function student_data(){
        return $student_name = "anass";
    }

    public function showStudent($student){
        if($student == '1'){
            echo "User 1";
        }else{
            echo "other users";
        }
    }

    public function pass(){
        return $student = "anass is here";
    }
}